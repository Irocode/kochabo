<?php namespace App\Controllers\Admin;

use BaseController;
use Redirect;
use View;
use Input;
use Validator;
use Response;
use Str;
use Notification;
use Sefa\Repositories\Test\TestRepository as Test;
use Sefa\Exceptions\Validation\ValidationException;

class TestController extends BaseController

                {
                protected $test;
                public function __construct(test $test)

                                {
                                View::share('active', 'modules');
                                $this->test = $test;
                                }
                /**
                 * Display a listing of the resource.
                 *
                 * @return Response
                 */
                public function index()

                                {
                                $test = $this->test->paginate(null, true);
                                return View::make('backend.test.index', compact('test'));
                                }
                /**
                 * Show the form for creating a test resource.
                 *
                 * @return Response
                 */
                public function create()

                                {
                                return View::make('backend.test.create');
                                }
                /**
                 * Store a footerly created resource in storage.
                 *
                 * @return Response
                 */
                public function store()

                                {
                                try
                                                {
                                                $this->test->create(Input::all());
                                                Notification::success('test wurde hinzugefügt');
                                                return Redirect::route('admin.test.index');
                                                }
                                catch(ValidationException $e)
                                                {
                                                return Redirect::back()->withInput()->withErrors($e->getErrors());
                                                }
                                }
                /**
                 * Display the specified resource.
                 *
                 * @param  int $id
                 * @return Response
                 */
                public function show($id)

                                {
                                $test = $this->test->find($id);
                                return View::make('backend.test.show', compact('test'));
                                }
                /**
                 * Show the form for editing the specified resource.
                 *
                 * @param  int $id
                 * @return Response
                 */
                public function edit($id)

                                {
                                $test = $this->test->find($id);
                                return View::make('backend.test.edit', compact('test'));
                                }
                /**
                 * Update the specified resource in storage.
                 *
                 * @param  int $id
                 * @return Response
                 */
                public function update($id)

                                {
                                try
                                                {
                                                $this->test->update($id, Input::all());
                                                Notification::success('test wurde geupdatet');
                                                return Redirect::route('admin.test.index');
                                                }
                                catch(ValidationException $e)
                                                {
                                                return Redirect::back()->withInput()->withErrors($e->getErrors());
                                                }
                                }
                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int $id
                 * @return Response
                 */
                public function destroy($id)

                                {
                                $this->test->destroy($id);
                                Notification::success('test wurde gelöscht');
                                return Redirect::action('App\Controllers\Admin\FooterController@index');
                                }
                public function confirmDestroy($id)

                                {
                                $test = $this->test->find($id);
                                return View::make('backend.test.confirm-destroy', compact('test'));
                                }
                public function togglePublish($id)

                                {
                                return $this->test->togglePublish($id);
                                }
                }


