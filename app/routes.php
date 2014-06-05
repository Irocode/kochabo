<?php




/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

//Group Frontend
Route::group((Config::get('sfcms')['cache']) ? array('before' => 'cache.fetch', 'after' => 'cache.put') : array(), function () {

//Home
Route::get('/', ['as' => 'dashboard', 'uses' => 'HomeController@index']);

//frontend dashboard
Route::get('/start', array('as' => 'frontend._layout.dashboard', function()
{
return View::make('frontend._layout.dashboard');
}));

// newsletter
Route::resource('newslettereintrag', 'NewslettereintragController');
Route::get('newslettereintrag', array('as' => 'dashboard.newslettereintrag.show', 'uses' => 'NewslettereintragController@index'));  
// article
Route::get('/article', array('as' => 'dashboard.article', 'uses' => 'ArticleController@index'));
Route::get('/article/{id}/{slug?}', array('as' => 'dashboard.article.show', 'uses' => 'ArticleController@show'));   
// news
Route::get('/news', array('as' => 'dashboard.news', 'uses' => 'NewsController@index'));
Route::get('/news/{id}/{slug?}', array('as' => 'dashboard.news.show', 'uses' => 'NewsController@show'));
//angebotes
Route::get('/offer', array('as' => 'dashboard.offer', 'uses' => 'OfferController@index'));
Route::get('/offer/{id}/{slug?}', array('as' => 'dashboard.offer.show', 'uses' => 'OfferController@show'));
//wiefunktioniertes
Route::get('/sofunktioniertes', array('as' => 'dashboard.sofunktioniertes', 'uses' => 'SofunktioniertesController@index'));
Route::get('/sofunktioniertes/{id}/{slug?}', array('as' => 'dashboard.sofunktioniertes.show', 'uses' => 'SofunktioniertesController@show'));
//kochabobox
Route::get('/kochabobox', array('as' => 'dashboard.kochabobox', 'uses' => 'KochaboboxController@index'));
Route::get('/kochabobox/{id}/{slug?}', array('as' => 'dashboard.kochabobox.show', 'uses' => 'KochaboboxController@show'));
//aktuellerezepte
Route::get('/aktuellerezepte', array('as' => 'dashboard.aktuellerezepte', 'uses' => 'AktuellerezepteController@index'));
Route::get('/aktuellerezepte/{id}/{slug?}', array('as' => 'dashboard.aktuellerezepte.show', 'uses' => 'AktuellerezepteController@show'));
//obstbox
Route::get('/obstbox', array('as' => 'dashboard.obstbox', 'uses' => 'ObstboxController@index'));
Route::get('/obstbox/{id}/{slug?}', array('as' => 'dashboard.obstbox.show', 'uses' => 'ObstboxController@show'));
//beispielbox
Route::get('/beispielbox', array('as' => 'dashboard.beispielbox', 'uses' => 'BeispielboxController@index'));
Route::get('/beispielbox/{id}/{slug?}', array('as' => 'dashboard.beispielbox.show', 'uses' => 'BeispielboxController@show'));
//gutschein
Route::get('/gutschein', array('as' => 'dashboard.gutschein', 'uses' => 'GutscheinController@index'));
Route::get('/gutschein/{id}/{slug?}', array('as' => 'dashboard.gutschein.show', 'uses' => 'GutscheinController@show'));
//article footer
Route::get('/articlefooter', array('as' => 'dashboard.article', 'uses' => 'ArticleController@indexfooter')); 
Route::get('/footer', array('as' => 'dashboard.footer', 'uses' => 'FooterController@index'));
Route::get('/footer/{id}/{slug?}', array('as' => 'dashboard.footer.show', 'uses' => 'FooterController@show'));
// tags
Route::get('/tag/{tag}', array('as' => 'dashboard.tag', 'uses' => 'TagController@index'));
// categories
Route::get('/category/{category}', array('as' => 'dashboard.category', 'uses' => 'CategoryController@index'));
// page
Route::get('/page', array('as' => 'dashboard.page', 'uses' => 'PageController@index'));
Route::get('/page/{id}', array('as' => 'dashboard.page.show', 'uses' => 'PageController@show'));
// photo gallery
Route::get('/photo_gallery/{id}', array('as' => 'dashboard.photo_gallery.show', 'uses' => 'PhotoGalleryController@show'));
// contact
Route::get('/contact', array('as' => 'dashboard.contact', 'uses' => 'FormPostController@getContact'));
// rss
Route::get('/rss', array('as' => 'rss', 'uses' => 'RssController@index'));
// search
Route::get('/search', ['as'=>'admin.search', 'uses'=>'SearchController@index']);
});
// contact
Route::post('/contact', array('as' => 'dashboard.contact.post', 'uses' => 'FormPostController@postContact'), array('before' => 'csrf'));
// Mein Konto
Route::get('meinkonto', function()
{
return View::make('frontend.meinkonto.index');
});
// Newsletter
Route::resource('newsletter', 'NewsletterController');
// Versand
Route::get('/versand',function() {
return View::make('frontend.newsletter.versand');
});
// aktivierung
Route::resource('aktivierung', 'NewslettereintragController@update');
Route::get('/aktivierung/{email}/email', 'NewslettereintragController@update')->where('email', '$email');

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

// group backend
Route::group(array('prefix' => 'admin', 'namespace' => 'App\Controllers\Admin', 'before' => 'auth.admin'), function () {

// admin dashboard
Route::get('/', array('as' => 'admin.dashboard', function () {
return View::make('backend/_layout/dashboard')->with('active', 'home');
}));
//articles
Route::resource('article', 'ArticleController');
Route::get('article/{id}/delete', array('as' => 'admin.article.delete', 'uses' => 'ArticleController@confirmDestroy'))
->where('id', '\d+');
// news
Route::resource('news', 'NewsController');
Route::get('news/{id}/delete', array('as' => 'admin.news.delete', 'uses' => 'NewsController@confirmDestroy'))
->where('id', '[0-9]+');
// angebote
Route::resource('offer', 'OfferController');
Route::get('offer/{id}/delete', array('as' => 'admin.offer.delete', 'uses' => 'OfferController@confirmDestroy'))
->where('id', '[0-9]+');
// footer
Route::resource('footer', 'FooterController');
Route::get('footer/{id}/delete', array('as' => 'admin.footer.delete', 'uses' => 'FooterController@confirmDestroy'))
->where('id', '[0-9]+');
// category
Route::resource('category', 'CategoryController');
Route::get('category/{id}/delete', array('as' => 'admin.category.delete', 'uses' => 'CategoryController@confirmDestroy'))
->where('id', '[0-9]+');
// page
Route::resource('page', 'PageController');
Route::get('page/{id}/delete', array('as' => 'admin.page.delete', 'uses' => 'PageController@confirmDestroy'))
->where('id', '[0-9]+');
// photo gallery
Route::resource('photo_gallery', 'PhotoGalleryController');
Route::get('photo_gallery/{id}/delete', array('as' => 'admin.photo_gallery.delete', 'uses' => 'PhotoGalleryController@confirmDestroy'))
->where('id', '[0-9]+');



// file upload photo gallery
Route::post('/photo-gallery/upload/{id}', array('as' => 'admin.photo.gallery.upload.image', 'uses' => 'PhotoGalleryController@upload'))
->where('id', '[0-9]+');
Route::post('/photo-gallery-delete-image', array('as' => 'admin.photo.gallery.delete.image', 'uses' => 'PhotoGalleryController@deleteImage'));
// ajax - blog
Route::post('article/{id}/toggle-publish', array('as' => 'admin.article.toggle-publish', 'uses' => 'ArticleController@togglePublish'))
->where('id', '[0-9]+');
// ajax - news
Route::post('news/{id}/toggle-publish', array('as' => 'admin.news.toggle-publish', 'uses' => 'NewsController@togglePublish'))
->where('id', '[0-9]+');
// ajax - angebotes
Route::post('offer/{id}/toggle-publish', array('as' => 'admin.offer.toggle-publish', 'uses' => 'OfferController@togglePublish'))
->where('id', '[0-9]+');
// ajax - footer
Route::post('footer/{id}/toggle-publish', array('as' => 'admin.footer.toggle-publish', 'uses' => 'FooterController@togglePublish'))
->where('id', '[0-9]+');
// ajax - photo gallery
Route::post('photo_gallery/{id}/toggle-publish', array('as' => 'admin.photo_gallery.toggle-publish', 'uses' => 'PhotoGalleryController@togglePublish'))
->where('id', '[0-9]+');
Route::post('photo_gallery/{id}/toggle-menu', array('as' => 'admin.photo_gallery.toggle-menu', 'uses' => 'PhotoGalleryController@toggleMenu'))
->where('id', '[0-9]+');
// ajax - page
Route::post('page/{id}/toggle-publish', array('as' => 'admin.page.toggle-publish', 'uses' => 'PageController@togglePublish'))
->where('id', '[0-9]+');
Route::post('page/{id}/toggle-menu', array('as' => 'admin.page.toggle-menu', 'uses' => 'PageController@toggleMenu'))
->where('id', '[0-9]+');
// ajax - form post
Route::post('form-post/{id}/toggle-answer', array('as' => 'admin.form-post.toggle-answer', 'uses' => 'FormPostController@toggleAnswer'))
->where('id', '[0-9]+');
// settings
Route::get('/settings', array('as' => 'admin.settings', 'uses' => 'SettingController@index'));
Route::post('/settings', array('as' => 'admin.settings.save', 'uses' => 'SettingController@save'), array('before' => 'csrf'));
//products
Route::resource('products', 'ProductsController');
////products AJAX INDEX Tablesorter
Route::get('tablesorter_products_index', array('as'=>'admin.products.data', 'uses'=>'AjaxController@getDatatable_products'));
// photo galleryProducts
Route::resource('photo_gallery_products', 'PhotoGalleryProductsController');

Route::get('products/{id}/delete', array('as' => 'admin.products.delete', 'uses' => 'ProductsController@confirmDestroy'))
->where('id', '\d+');

Route::resource('customer', 'CustomerController');
////customer AJAX INDEX Tablesorter
Route::get('tablesorter_customer_index', array('as'=>'admin.customer.data', 'uses'=>'AjaxController@getDatatable_customer'));
Route::get('customer/{id}/delete', array('as' => 'admin.customer.delete', 'uses' => 'CustomerController@confirmDestroy'))
->where('id', '\d+');
// addresses customer
Route::resource('address', 'AddressController');
Route::get('tablesorter_address_index', array('as'=>'admin.address.data', 'uses'=>'AjaxController@getDatatable_address'));
Route::get('address/{id}/delete', array('as' => 'admin.address.delete', 'uses' => 'AddressController@confirmDestroy'))
->where('id', '\d+');
//Logistician Manager
Route::resource('logisticianmanager', 'LogisticianmanagerController');
////Logistician Manager AJAX INDEX Tablesorter
Route::get('tablesorter_logisticianmanager_index', array('as'=>'admin.logisticianmanager.data', 'uses'=>'AjaxController@getDatatable_logisticianmanager'));
Route::get('logisticianmanager/{id}/delete', array('as' => 'admin.logisticianmanager.delete', 'uses' => 'LogisticianmanagerController@confirmDestroy'))
->where('id', '\d+');
////Logistician with zipcode and Deliverytimes (GROUP)
Route::get('logisticianmanager/{id}/group', array('as' => 'admin.logisticianmanager.group_sefa_free', 'uses' => 'Logisticianmanager_sefa_free_Controller@group'))
->where('id', '\d+');


//Search for Results from Zip
Route::get('search', array('as' => 'admin.search', 'uses' => 'SearchbackenddeliveryzipcodeController@index')) ->where('id', '\d+');
Route::post('search',array('as' => 'admin.search', 'uses' => 'SearchbackenddeliveryzipcodeController@search'))
->where('keyword', '\d+');
// Deliverytimes Start
// AJAX START -> Deliverytimes 
Route::resource('deliverytimes', 'DeliverytimesController');
Route::post('logisticianmanager/submitx/{id}/toggle-publish', array('as' => 'admin.logisticianmanager.submitx', 'uses' => 'DeliverytimesController@lieferzeiten_update'))
->where('id', '\d+');
//AJAX END
Route::get('deliverytimes/{id}/delete', array('as' => 'admin.deliverytimes.delete', 'uses' => 'DeliverytimesController@confirmDestroy'))
->where('id', '\d+');
// Deliverytimes End
// Deliveryzipcode create and validate
Route::resource('deliveryzipcode', 'DeliveryzipcodeController');
Route::get('tablesorter_deliveryzipcode_index', array('as'=>'admin.deliveryzipcode.data', 'uses'=>'AjaxController@getDatatable_deliveryzipcode'));
Route::get('deliveryzipcode/{id}/delete', array('as' => 'admin.deliveryzipcode.delete', 'uses' => 'DeliveryzipcodeController@confirmDestroy'))
->where('id', '\d+');
// deliveryassign Startpage Dummy
Route::get('deliveryassign/{id}/group', array('as' => 'admin.deliveryassign.group_sefa_free', 'uses' => 'Logisticianmanager_sefa_free_Controller@group_assign'))
->where('id', '\d+');
// AJAX -> deliveryassign Zuordnung ZIP
Route::post('zip_repository', 'Logisticianmanager_sefa_free_Controller@zip_repository_update');
Route::post('zip_logistiker','Logisticianmanager_sefa_free_Controller@zip_logistiker_update');
// deliverycalendar
Route::get('deliverycalendar', array('as' => 'admin.deliverycalendar.index', 'uses' => 'Calendar_sefa_free_Controller@index'));
// deliverycalendar Ajax Calls
Route::get('events_calendar', 'Calendar_sefa_free_Controller@index_get');
Route::post('add_calendar', 'Calendar_sefa_free_Controller@create');
Route::post('update_calendar', 'Calendar_sefa_free_Controller@update');
Route::post('destroy_calendar', 'Calendar_sefa_free_Controller@destroy');
// form post
Route::resource('form-post', 'FormPostController', array('only' => array('index', 'show', 'destroy')));
Route::get('form-post/{id}/delete', array('as' => 'admin.form-post.delete', 'uses' => 'FormPostController@confirmDestroy'))
->where('id', '[0-9]+');
// slider
Route::get('/slider', array('as' => 'admin.slider', function () {
return View::make('backend/slider/index');
}));
// slider
Route::resource('slider', 'SliderController', array('only' => array('index', 'create', 'edit', 'update', 'destroy')));
Route::get('slider/{id}/delete', array('as' => 'admin.slider.delete', 'uses' => 'SliderController@confirmDestroy'))
->where('id', '[0-9]+');
// file upload slider
Route::post('/slider/upload/{id}', array('as' => 'admin.slider.upload.image', 'uses' => 'SliderController@upload'))
->where('id', '[0-9]+');
Route::post('/slider-delete-image', array('as' => 'admin.slider.delete.image', 'uses' => 'SliderController@deleteImage'));
// menu-managment
Route::resource('menu', 'MenuController');
Route::post('menu/save', array('as' => 'admin.menu.save', 'uses' => 'MenuController@save'));
Route::get('menu/{id}/delete', array('as' => 'admin.menu.delete', 'uses' => 'MenuController@confirmDestroy'))
->where('id', '[0-9]+');
Route::post('menu/{id}/toggle-publish', array('as' => 'admin.menu.toggle-publish', 'uses' => 'MenuController@togglePublish'))
->where('id', '[0-9]+');


//Lists
Route::resource('list_bundesland', 'List_BundeslandController');
Route::get('list_bundesland/{id}/delete', array('as' => 'admin.list.list_bundesland.delete', 'uses' => 'List_BundeslandController@confirmDestroy'))
->where('id', '[0-9]+');
Route::resource('list_currency', 'List_CurrencyController');
Route::get('list_currency/{id}/delete', array('as' => 'admin.list.list_currency.delete', 'uses' => 'List_CurrencyController@confirmDestroy'))
->where('id', '[0-9]+');
Route::resource('list_abotyp', 'List_AbotypController');
Route::get('list_abotyp/{id}/delete', array('as' => 'admin.list.list_abotyp.delete', 'uses' => 'List_AbotypController@confirmDestroy'))
->where('id', '[0-9]+');
Route::resource('list_gruppe', 'List_GruppeController');
Route::get('list_gruppe/{id}/delete', array('as' => 'admin.list.list_gruppe.delete', 'uses' => 'List_GruppeController@confirmDestroy'))
->where('id', '[0-9]+');
Route::resource('list_status', 'List_StatusController');
Route::get('list_status/{id}/delete', array('as' => 'admin.list.list_status.delete', 'uses' => 'List_StatusController@confirmDestroy'))
->where('id', '[0-9]+');

Route::resource('list_ust', 'List_UstController');
Route::get('list_ust/{id}/delete', array('as' => 'admin.list.list_ust.delete', 'uses' => 'List_UstController@confirmDestroy'))
->where('id', '[0-9]+');

Route::resource('list_type', 'List_TypeController');
Route::get('list_type/{id}/delete', array('as' => 'admin.list.list_type.delete', 'uses' => 'List_TypeController@confirmDestroy'))
->where('id', '[0-9]+');

Route::resource('list_recipe_type', 'List_Recipe_typeController');
Route::get('list_recipe_type/{id}/delete', array('as' => 'admin.list.list_recipe_type.delete', 'uses' => 'List_Recipe_typeController@confirmDestroy'))
->where('id', '[0-9]+');


//Filters
//Select Fields logisticianmanager
Route::get('list_settings_logisticianmanager', function()
{
return View::make('backend.lists.index_list_settings_logisticianmanager');
});
//Select Fields customer
Route::get('list_settings_customer', function()
{
return View::make('backend.lists.index_list_settings_customer');
});
//Select Fields products
Route::get('list_settings_products', function()
{
return View::make('backend.lists.index_list_settings_products');
});

// log
Route::any('log', ['as'=>'admin.log', 'uses'=>'LogController@index']);

//Settings: show form to create settings
Route::get( '/settings/new', array(
    'as' => 'settings.new',
    'uses' => 'SettingsController@add'
) );
 
//Settings: create a new setting
Route::post( '/settings', array(
    'as' => 'settings.create',
    'uses' => 'SettingsController@create'
) );

});


/*
|--------------------------------------------------------------------------
| Backend Routes outside the group Backend
|--------------------------------------------------------------------------
*/

//Newsletter
Route::resource('/admin/newsletter', 'NewsletteradminController');
//userverwaltung admin
Route::resource('userverwaltung', 'UsernewadminController');
Route::resource('admin/userverwaltung', 'UsernewadminController');
//Groups admin
Route::resource('admin/groups', 'GroupadminController');
//Session
Route::resource('sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));
//resend
Route::get('admin/resend', array('as' => 'resendActivationForm', function()
{
return View::make('users.resend');
}));
Route::post('resend', 'UseradminController@resend');
Route::get('forgot', array('as' => 'forgotPasswordForm', function()
{
return View::make('users.forgot');
}));
Route::post('admin/forgot', 'UseradminController@forgot');
Route::post('admin/users/{id}/change', 'UseradminController@change');
Route::get('admin/users/{id}/reset/{code}', 'UseradminController@reset')->where('id', '[0-9]+');
Route::get('admin/users/{id}/suspend', array('as' => 'suspendUserForm', function($id)
{
return View::make('users.suspend')->with('id', $id);
}));
Route::post('admin/users/{id}/suspend', 'UseradminController@suspend')->where('id', '[0-9]+');
Route::get('admin/users/{id}/unsuspend', 'UseradminController@unsuspend')->where('id', '[0-9]+');
Route::get('admin/users/{id}/ban', 'UseradminController@ban')->where('id', '[0-9]+');
Route::get('admin/users/{id}/unban', 'UseradminController@unban')->where('id', '[0-9]+');
Route::resource('admin/users', 'UseradminController');
// Group Routes
Route::resource('groups', 'GroupController');

/*
|--------------------------------------------------------------------------
| Backend Plugins
|--------------------------------------------------------------------------
*/

Route::get('filemanager/show', function () {
return View::make('backend/plugins/filemanager');
});
// filemanager little fileupload images
Route::get('filemanager/showiamges', function () {
return View::make('backend/plugins/filemanager');
});

/*
|--------------------------------------------------------------------------
| Backend Login
|--------------------------------------------------------------------------
*/

//login
Route::get('/admin/login', array('as' => 'admin.login', function () {
return View::make('backend/auth/login');
}));
Route::group(array('namespace' => 'App\Controllers\Admin'), function () {
//admin auth
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'AuthController@getLogout'));
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'AuthController@getLogin'));
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'AuthController@postLogin'));
//admin password reminder
Route::get('admin/forgot-password', array('as' => 'admin.forgot.password', 'uses' => 'AuthController@getForgotPassword'));
Route::post('admin/forgot-password', array('as' => 'admin.forgot.password.post', 'uses' => 'AuthController@postForgotPassword'));
Route::get('admin/{id}/reset/{code}', array('as' => 'admin.reset.password', 'uses' => 'AuthController@getResetPassword'))
->where('id', '[0-9]+');
Route::post('admin/reset-password', array('as' => 'admin.reset.password.post', 'uses' => 'AuthController@postResetPassword'));
});

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
*/

// error
App::error(function (Exception $exception) {
Log::error($exception);
$error = $exception->getMessage();
return Response::view('errors.error', compact('error'));
});
// 404 page not found
App::missing(function () {
return Response::view('errors.missing', array(), 404);
});
HTML::macro('clever_link', function($route, $text) {	
if( Request::path() == $route ) {
$active = "class = 'active'";
}
else {
$active = '';
}
return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});
// error
App::error(function (Exception $exception) {
Log::error($exception);
$error = $exception->getMessage();
return Response::view('errors.error', compact('error'));
});
// 404 page not found
App::missing(function () {
return Response::view('errors.missing', array(), 404);
});
HTML::macro('clever_link', function($route, $text) {    
if( Request::path() == $route ) {
$active = "class = 'active'";
}
else {
$active = '';
}
return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});

/*
|--------------------------------------------------------------------------
| Kundenbereich mit Warenkorb Frontend
|--------------------------------------------------------------------------
*/

// login option unangemeldet
Route::get('meinkontologin', function()
{
return View::make('frontend.meinkonto.meinkontologin');
});
// login option unangemeldet in die Bestellung
Route::get('meinkontologinzurbestellung', function()
{
return View::make('frontend.meinkonto.meinkontologinzurbestellung');
});
// Registrierung / 
Route::post('meinkontoregistrierung', function()
{
$produkt = Input::get('produkt');
$produkttyp = Input::get('produkttyp');
$obstbox = Input::get('obstbox');
$wein = Input::get('wein');
$price_produkt = Input::get('price_produkt');
$price_adobstbox = Input::get('price_adobstbox');
$price_adwein = Input::get('price_adwein');
// $input = Input::all();
return View::make('frontend.meinkonto.meinkontoregistrierung');
});
//bestellung_add
Route::post('bestellung_add', function()
{
$produkt = Input::get('produkt');
$produkttyp = Input::get('produkttyp');
$obstbox = Input::get('obstbox');
$wein = Input::get('wein');
$price_produkt = Input::get('price_produkt');
$price_adobstbox = Input::get('price_adobstbox');
$price_adwein = Input::get('price_adwein');
// $input = Input::all();
return View::make('frontend.bestellung.bestellung_add');
});
//pricing
Route::get('bestellung_pricing', function()
{
$price_produkt = Input::get('price_produkt');
return View::make('frontend.bestellung.bestellung_pricing');
});
// Boxen aufrufen
Route::get('/bestellprozess_boxen',function(){
return View::make('frontend.meinkonto.bestellprozess_boxen');
Session::flush();
//	Session::put('produkt', $produkt);
});
Route::post('/bestellprozess_boxen',function(){
return View::make('frontend.meinkonto.meinkontoregistrierung');
});
//Mein Konto
Route::get('meinkonto', function()
{
return View::make('frontend.meinkonto.index');
});
// Session Routes
Route::get('admin/register', 'UserControlleradmin@create');
Route::get('login',  array('as' => 'login', 'uses' => 'SessionController@create'));
Route::get('logout', array('as' => 'logout', 'uses' => 'SessionController@destroy'));
Route::resource('sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));
// User Routes
Route::get('meinkontoregistrierung', 'UserController@create');
Route::get('users/{id}/activate/{code}', 'UserController@activate')->where('id', '[0-9]+');
Route::get('resend', array('as' => 'resendActivationForm', function()
{
return View::make('users.resend');
}));
Route::post('resend', 'UserController@resend');
Route::get('forgot', array('as' => 'forgotPasswordForm', function()
{
return View::make('users.forgot');
}));
Route::post('forgot', 'UserController@forgot');
Route::post('users/{id}/change', 'UserController@change');
Route::get('users/{id}/reset/{code}', 'UserController@reset')->where('id', '[0-9]+');
Route::get('users/{id}/suspend', array('as' => 'suspendUserForm', function($id)
{
return View::make('users.suspend')->with('id', $id);
}));
Route::post('users/{id}/suspend', 'UserController@suspend')->where('id', '[0-9]+');
Route::get('users/{id}/unsuspend', 'UserController@unsuspend')->where('id', '[0-9]+');
Route::get('users/{id}/ban', 'UserController@ban')->where('id', '[0-9]+');
Route::get('users/{id}/unban', 'UserController@unban')->where('id', '[0-9]+');
Route::resource('users', 'UserController');
// Group Routes
Route::resource('groups', 'GroupController');
// Group Routes
Route::resource('artikel', 'ArtikelController');
Route::get('/log', array('as' => 'home', function()
{
return View::make('home');
}));
// App::missing(function($exception)
// {
//     App::abort(404, 'Page not found');
//     //return Response::view('errors.missing', array(), 404);
// });


/*
|----------------------------------------------------------------------------------------------------------------------------------
| Global Variables
|-----------------------------------------------------------------------------------------------------------------------------------
*/

// Select Listen
View::share ('list_bundesland',List_Bundesland::all());
View::share ('list_currency',List_Currency::all());
View::share ('list_gruppe',List_Gruppe::all());
View::share ('list_status',List_Status::all());
View::share ('list_abotyp',List_Abotyp::all());
View::share ('list_type',List_Type::all());
View::share ('list_recipe_type',List_Recipe_type::all());
View::share ('list_ust',List_Ust::all());



//Wichtig damit Daten überall ankommen
//importent for Share Data from Footer 
View::share ('footer',Footer::all());
//importent for Share Data from Menu 
View::share ('menu',Menu::all());
//importent for Share Data from Blog 
View::share ('articles',Article::all()); 
View::share ('article',Article::all());
View::share ('kochabobox',Kochabobox::all());
View::share ('offer',Offer::all());
View::share ('ausgabe',Users::all());
View::share ('ausgabenl',Newsletter::all());

Route::get('/home',function() {
return View::make('home');
});













/*
|----------------------------------------------------------------------------------------------------------------------------------
| TESTS tests (in progress)       PLEASE NOT DELETE 
|-----------------------------------------------------------------------------------------------------------------------------------
*/

//<!-- BAUSTELLE ANFANG-->
//<!-- BAUSTELLE ENDE-->