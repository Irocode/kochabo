<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/







Route::get('/admin/products/upload', function () {

    return View::make('backend.products.upload');
});

// upload file
Route::post('/admin/products/upload', function () {

    $file = Input::file('file');

    if($file) {

        $destinationPath = public_path() . '/filemanager/userfiles/products/';
        $filename = $file->getClientOriginalName();

        $upload_success = Input::file('file')->move($destinationPath, $filename);
        
        if ($upload_success) {

            // resizing an uploaded file
            Image::make($destinationPath . $filename)->resize(100, 100)->save($destinationPath . "100x100_" . $filename);

            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }
    }
});

// delete image
Route::post('delete-image', function () {

    $destinationPath = public_path() . '/filemanager/userfiles/products/';
    File::delete($destinationPath . Input::get('file'));
    File::delete($destinationPath . "100x100_" . Input::get('file'));

     return Response::json('success', 200);
});

