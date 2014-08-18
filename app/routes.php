<?php
/*
|--------------------------------------------------------------------------
| New Frontend Routes START
|--------------------------------------------------------------------------
*/
// start HOME
Route::get('/',function() {
return View::make('frontend.start.index');
});
// so-funktionierts
Route::get('/so-funktionierts',function() {
return View::make('frontend.so-funktionierts.index');
});
// kochabo-box
Route::get('/kochabo-box',function() {
return View::make('frontend.kochabo-box.index');
});
// aktuelle-rezepte
Route::get('/aktuelle-rezepte',function() {
return View::make('frontend.aktuelle-rezepte.index');
});
// rezeptewelt
Route::get('/rezeptewelt',function() {
return View::make('frontend.rezeptewelt.index');
});
// rezeptewelt
Route::get('/rezeptewelt',function() {
return View::make('frontend.rezeptewelt.index');
});
// classic-box
Route::get('/boxen/classic-box',function() {
return View::make('frontend.boxen.classic-box.index');
});
// veggie-box
Route::get('/boxen/veggie-box',function() {
return View::make('frontend.boxen.veggie-box.index');
});
// vegan-box
Route::get('/boxen/vegan-box',function() {
return View::make('frontend.boxen.vegan-box.index');
});
// gesund-fit-box
Route::get('/boxen/gesund-fit-box',function() {
return View::make('frontend.boxen.gesund-fit-box.index');
});
// wein-box
Route::get('/boxen/wein-box',function() {
return View::make('frontend.boxen.wein-box.index');
});
// obst-box
Route::get('/boxen/obst-box',function() {
return View::make('frontend.boxen.obst-box.index');
});
// rezeptewelt
Route::get('/boxen/delikatessen-box',function() {
return View::make('frontend.rezeptewelt.index');
});
// lieferinformationen
Route::get('/lieferinformationen',function() {
return View::make('frontend.lieferinformationen.index');
});
// partner
Route::get('/partner',function() {
return View::make('frontend.partner.index');
});
// datenschutz
Route::get('/datenschutz',function() {
return View::make('frontend.datenschutz.index');
});
// agb
Route::get('/agb',function() {
return View::make('frontend.agb.index');
});
// impressum
Route::get('/impressum',function() {
return View::make('frontend.impressum.index');
});
// jobs
Route::get('/jobs',function() {
return View::make('frontend.jobs.index');
});
// press
Route::get('/press',function() {
return View::make('frontend.press.index');
});
// jobs/review
Route::get('/press/review',function() {
return View::make('frontend.jobs.review');
});
// contact
Route::get('/contact',function() {
return View::make('frontend.contact.index');
});
// faq
Route::get('/faq',function() {
return View::make('frontend.faq.index');
});
// team
Route::get('/team',function() {
return View::make('frontend.team.index');
});
// abo
Route::get('/abo',function() {
return View::make('frontend.abo.index');
});
// jetzt-bestellen
Route::get('/jetzt-bestellen',function() {
return View::make('frontend.jetzt-bestellen.index');
});
// lieferanten
Route::get('/lieferanten',function() {
return View::make('frontend.lieferanten.index');
});
//geschenkgutschein
Route::get('/geschenkgutschein',function() {
return View::make('frontend.geschenkgutschein.index');
});
/*
|--------------------------------------------------------------------------
| New Frontend Routes END
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| OLD Frontend Routes
|--------------------------------------------------------------------------
*/

//Group Frontend
Route::group((Config::get('sfcms')['cache']) ? array('before' => 'cache.fetch', 'after' => 'cache.put') : array(), function () {

//Home
Route::get('/NIX', ['as' => 'dashboard', 'uses' => 'HomeController@index']);

//frontend dashboard
Route::get('/start', array('as' => 'frontend._layout.dashboard', function()
{
return View::make('frontend._layout.dashboard');
}));




//CartTest
Route::resource('cart', 'CartController');

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
Route::post('/obstbox/login_query', array('as' => 'dashboard.obstbox.login_query', 'uses' => 'ObstboxController@login_query'));
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
Route::get('/contactNIX', array('as' => 'dashboard.contact', 'uses' => 'FormPostController@getContact'));
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

//order
Route::resource('order_all', 'OrderController');
Route::resource('order', 'OrderDetailController');
////order AJAX INDEX Tablesorter

Route::get('tablesorter_order_index/{id}', array('as'=>'admin.order.data', 'uses'=>'AjaxController@getDatatable_order'));
Route::get('tablesorter_order_index', array('as'=>'admin.order.data', 'uses'=>'AjaxController@getDatatable_order_all'));
Route::get('order/{id}/delete', array('as' => 'admin.order.delete', 'uses' => 'OrderController@confirmDestroy'))
->where('id', '\d+');

//order_address
Route::resource('order_address', 'OrderAddressController');
////order AJAX INDEX Tablesorter
Route::get('tablesorter_order_address_index/{id}', array('as'=>'admin.order_address.data', 'uses'=>'AjaxController@getDatatable_order_address'));
Route::get('order_address/{id}/delete', array('as' => 'admin.order_address.delete', 'uses' => 'OrderAddressController@confirmDestroy'))
->where('id', '\d+');

//order_items
Route::resource('order_items', 'OrderItemsController');
////order AJAX INDEX Tablesorter
Route::get('tablesorter_order_items_index/{id}', array('as'=>'admin.order_items.data', 'uses'=>'AjaxController@getDatatable_order_items'));
Route::get('tablesorter_order_items_index', array('as'=>'admin.order_items.data', 'uses'=>'AjaxController@getDatatable_order_items_all'));
Route::get('order_items/{id}/delete', array('as' => 'admin.order_items.delete', 'uses' => 'OrderItemsController@confirmDestroy'))
->where('id', '\d+');

//ingredients
Route::resource('ingredients', 'IngredientsController');
////order AJAX INDEX Tablesorter ingredients
Route::get('tablesorter_ingredients_index/{id}', array('as'=>'admin.ingredients.data', 'uses'=>'AjaxController@getDatatable_ingredients'));
Route::get('tablesorter_ingredients_index', array('as'=>'admin.ingredients.data', 'uses'=>'AjaxController@getDatatable_ingredients_all'));
Route::get('ingredients/{id}/delete', array('as' => 'admin.ingredients.delete', 'uses' => 'IngredientsController@confirmDestroy'))
->where('id', '\d+');

//calendarweek
Route::resource('calendarweek', 'CalendarweekController');
Route::get('calendarweeknew/{year?}/{calendarweek?}/edit', array('as' => 'admin.calendarweek.edit', 'uses' => 'HelperController@calendarweeknew'))
->where(array('year' => '[0-9]+', 'calendarweek' => '[0-9]+'));







//recipe_ingredient
Route::resource('recipe_ingredient', 'RecipeingredientController');
////order AJAX INDEX Tablesorter ingredients
Route::get('tablesorter_recipe_ingredient_index/{id}', array('as'=>'admin.recipe_ingredient.data', 'uses'=>'AjaxController@getDatatable_recipe_ingredient'));
Route::get('tablesorter_recipe_ingredient_index', array('as'=>'admin.recipe_ingredient.data', 'uses'=>'AjaxController@getDatatable_recipe_ingredient_all'));
Route::get('recipe_ingredient/{id}/delete', array('as' => 'admin.recipeingredient.delete', 'uses' => 'RecipeingredientController@confirmDestroy'))
->where('id', '\d+');

//recipe
Route::resource('recipe', 'RecipeController');
////order AJAX INDEX Tablesorter ingredients
Route::post('recipe/submitx/{id}/toggle-publish', array('as' => 'admin.recipe.submitx', 'uses' => 'RecipeingredientController@zutaten_update'));
Route::get('tablesorter_recipe_index/{id}', array('as'=>'admin.recipe.data', 'uses'=>'AjaxController@getDatatable_recipe'));
Route::get('tablesorter_recipe_index', array('as'=>'admin.recipe.data', 'uses'=>'AjaxController@getDatatable_recipe_all'));


Route::get('recipe/{id}/delete', array('as' => 'admin.recipe.delete', 'uses' => 'RecipeController@confirmDestroy'))
->where('id', '\d+');

//customers_groups
Route::resource('customers_groups', 'CustomersGroupsController');
////order AJAX INDEX Tablesorter
Route::get('tablesorter_customers_groups_index/{id}', array('as'=>'admin.customers_groups.data', 'uses'=>'AjaxController@getDatatable_customers_groups'));
Route::get('tablesorter_customers_groups_index_all', array('as'=>'admin.customers_groups.data', 'uses'=>'AjaxController@getDatatable_customers_groups_all'));
Route::get('customers_groups/{id}/delete', array('as' => 'admin.customers_groups.delete', 'uses' => 'CustomersGroupsController@confirmDestroy'))
->where('id', '\d+');
//customer_management _customers_groups_tablesorter
Route::get('tablesorter_customer_management_customers_groups/{id}', array('as'=>'admin.customer_management.data_customers_groups', 'uses'=>'AjaxController@getDatatable_tablesorter_customer_management_customers_groups'));
//customer_management _customers_groups_index
Route::get('index_customer_management_groups/{id}', array('as'=>'admin.customer_management.index_customers_groups', 'uses'=>'CustomersGroupsController@index_customers_groups'));




//order_status_history
Route::resource('order_status_history', 'OrderStatusHistoryController');
////order AJAX INDEX Tablesorter
Route::get('tablesorter_order_status_history_index/{id}', array('as'=>'admin.order_status_history.data', 'uses'=>'AjaxController@getDatatable_order_status_history'));
Route::get('tablesorter_order_status_history_index', array('as'=>'admin.order_status_history.data', 'uses'=>'AjaxController@getDatatable_order_status_history_all'));
Route::get('order_status_history/{id}/delete', array('as' => 'admin.order_status_history.delete', 'uses' => 'OrderStatusHistoryController@confirmDestroy'))
->where('id', '\d+');

Route::resource('address', 'AddressController');
Route::get('tablesorter_address_index', array('as'=>'admin.address.data', 'uses'=>'AjaxController@getDatatable_address_all'));
Route::get('tablesorter_address_index/{id}', array('as'=>'admin.address.data', 'uses'=>'AjaxController@getDatatable_address'));
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

////customer_management AJAX INDEX Tablesorter
Route::get('tablesorter_customer_management_index', array('as'=>'admin.customer_management.data', 'uses'=>'AjaxController@getDatatable_customer_management'));

//Lists
Route::resource('list_einheit', 'List_EinheitController');
Route::get('list_einheit/{id}/delete', array('as' => 'admin.list.list_einheit.delete', 'uses' => 'List_EinheitController@confirmDestroy'))
->where('id', '[0-9]+');
Route::resource('list_janein', 'List_JaneinController');
Route::get('list_janein/{id}/delete', array('as' => 'admin.list.list_janein.delete', 'uses' => 'List_JaneinController@confirmDestroy'))
->where('id', '[0-9]+');
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


Route::resource('list_kundengruppe', 'List_KundengruppeController');

////Newsletter AJAX INDEX Tablesorter
Route::get('tablesorter_newsletter_index/{id}', array('as'=>'admin.newsletter.data', 'uses'=>'AjaxController@getDatatable_newsletter'));
Route::get('tablesorter_newsletter_index', array('as'=>'admin.newsletter.data', 'uses'=>'AjaxController@getDatatable_newsletter_all'));




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


//Select Fields ALL
Route::get('list_settings_all', function()
{
return View::make('backend.lists.index_list_settings_all');
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
| Backend Routes outside the group ADMIN
|--------------------------------------------------------------------------
*/

//Newsletter
Route::resource('/admin/newsletter', 'NewsletteradminController');
Route::get('admin/newsletter/{id}/delete', array('as' => 'admin.newsletter.delete', 'uses' => 'NewsletteradminController@confirmDestroy'))
->where('id', '[0-9]+');

//customer_management
Route::resource('admin/customer_management', 'Customer_management_adminController');
Route::resource('customer_management', 'Customer_management_adminController');

Route::get('admin/register', 'Customer_management_adminController@create');
Route::get('admin/customer_management/{id}/delete', array('as' => 'admin.customer_management.delete', 'uses' => 'Customer_management_adminController@confirmDestroy'))
->where('id', '\d+');







//Groups admin
Route::resource('admin/groups', 'GroupadminController');
//Session
Route::resource('admin/sessions', 'SessionController', array('only' => array('create', 'store', 'destroy')));

Route::post('admin/users/{id}/change', 'UseradminController@change');
Route::get('admin/tablesorter_users_index', array('as'=>'admin.users.data', 'uses'=>'UseradminController@getindex'));

Route::get('admin/users/{id}/reset/{code}', 'UseradminController@reset')->where('id', '[0-9]+');
Route::get('admin/users/{id}/suspend', array('as' => 'adminsuspendUserForm', function($id)
{
return View::make('backend.users.suspend')->with('id', $id);
}));
Route::post('admin/users/{id}/suspend', 'UseradminController@suspend')->where('id', '[0-9]+');
Route::get('admin/users/{id}/unsuspend', 'UseradminController@unsuspend')->where('id', '[0-9]+');
Route::get('admin/users/{id}/ban', 'UseradminController@ban')->where('id', '[0-9]+');
Route::get('admin/users/{id}/unban', 'UseradminController@unban')->where('id', '[0-9]+');
Route::resource('admin/users', 'UseradminController');

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


Route::get('filemanagernew/show', function () {
return View::make('backend/plugins/filemanagernew');
});


// filemanager little fileupload images
Route::get('filemanagernew/showiamges', function () {
return View::make('backend/plugins/filemanagernew');
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
Route::post('versand', 'SessionController@forgotperemail');
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
View::share ('list_gender',List_Gender::all());
View::share ('list_currency',List_Currency::all());
View::share ('list_gruppe',List_Gruppe::all());
View::share ('list_status',List_Status::all());
View::share ('list_abotyp',List_Abotyp::all());
View::share ('list_type',List_Type::all());
View::share ('list_recipe_type',List_Recipe_type::all());
View::share ('list_ust',List_Ust::all());
View::share ('list_month',List_Month::all());
View::share ('list_day',List_Day::all());
View::share ('list_country',List_Country::all());
View::share ('list_janein',List_Janein::all());
View::share ('list_kundengruppe',List_Kundengruppe::all());
View::share ('list_einheit',List_Einheit::all());



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
|--------------------------------------------------------------------------
| SHOPPING CART
|--------------------------------------------------------------------------
*/

Route::post('shop', function()
{
return View::make('frontend.shoppingcart.index');
});
Route::get('cart', function()
{
return View::make('frontend.shoppingcart.cart');
});


Route::get('/shop', function()
{
	return Redirect::to('shop');

});

Route::get('/shop', function()
{
	return Redirect::to('shop');

});

Route::get('shop',function()
	{
		// get all products from db
		$products = Product::all();
		

		return View::make('frontend.shoppingcart.products')->with('products',$products);
		
	});
Route::get('/cart',function()
	{
		// display cart
		if(Cart::total() == 0){
			return Redirect::to('/shop');
		}
		$cartContent = Cart::content();
		return View::make('frontend.shoppingcart.cart')->with('cartContent',$cartContent);
	

	});
Route::get('/checkout', function()
	{
		// destroy cart, get ready for new shopping 
		//Cart::destroy();

		$cartContent = Cart::content();
		$products = Product::all();
		$users = Users::all();
	    $day = List_Day::lists('bezeichnung', 'bezeichnung');
        $month = List_Month::lists('bezeichnung', 'bezeichnung');
        $gender = List_Gender::lists('bezeichnung', 'bezeichnung');


		
		return View::make('frontend.checkout.index')->with('month',$month)->with('gender',$gender)->with('day',$day)->with('cartContent',$cartContent)->with('products',$products)->with('users',$users);
	});
// cart management routes
Route::get('shop/insert/{id}','CartController@insert');
Route::get('delete/{rowid}','CartController@delete');
Route::post('update','CartController@update');
Route::get('terminate','CartController@terminate');

Route::get('checkout/{id}/edit','CartController@ceckout_one_edit');

Route::get('checkout/{id}/steptwo/{address_id}','CartController@ceckout_two_edit')->where('id', '[0-9]+');
Route::post('checkout/{id}/steptwo/{address_id}', 'CartController@ceckout_two_edit')->where('id', '[0-9]+');

//Abfrage Postleizahl
Route::get('postleitzahl_check', 'Ajax_Front_Controller@postleitzahl_check');
Route::post('postleitzahl_check', 'Ajax_Front_Controller@postleitzahl_check');


/*
|----------------------------------------------------------------------------------------------------------------------------------
| Checkout 
|-----------------------------------------------------------------------------------------------------------------------------------
*/

Route::post('checkout', function()
{
return View::make('frontend.checkout.index');
});


// login option unangemeldet in die Bestellung
Route::get('meinkontologinzurbestellung', function()
{
return View::make('frontend.meinkonto.meinkontologinzurbestellung');
});





/*
|----------------------------------------------------------------------------------------------------------------------------------
| Login with Facebook 
|-----------------------------------------------------------------------------------------------------------------------------------
*/
Route::get('/login', 'LoginController@showLogin');

Route::post('/login', 'LoginController@storeLogin');

Route::get('/logout', 'LoginController@getLogout');

Route::resource('/conformemail', 'ConformeemailController');



Route::get('/social/{provider}/{action?}', array("as" => "loginWith", "uses" => "LoginController@loginWithSocial"));


/*

Route::get('social/{action?}', array("as" => "hybridauth", function($action = "")
{
	// check URL segment
	if ($action == "auth") {
		// process authentication
		try {
			Hybrid_Endpoint::process();
		}
		catch (Exception $e) {
			// redirect back to http://URL/social/
			return Redirect::route('hybridauth');
		}
		return;
	}
	try {
		// create a HybridAuth object
		$socialAuth = new Hybrid_Auth(app_path() . '/config/hybridauth.php');
		// authenticate with facebook
		$provider = $socialAuth->authenticate("Facebook");
		// fetch user profile
		$userProfile = $provider->getUserProfile();
	}
	catch(Exception $e) {
		// exception codes can be found on HybBridAuth's web site
		return $e->getMessage();

		
	}

$email=$userProfile->email;
$displayName= $userProfile->displayName;


if  (empty($email)) {Session::flush();} else {
Session::put('email', $email);
Session::put('displayName', $displayName);  

Session::put('hybridAuth', $userProfile);
}



$provider->logout();
return View::make('frontend.meinkonto.index')->with('displayName', $displayName)->with('email', $email)->with('hybridAuth', $userProfile);


}));



/*
|----------------------------------------------------------------------------------------------------------------------------------
| TESTS tests (in progress)       PLEASE NOT DELETE 
|-----------------------------------------------------------------------------------------------------------------------------------
*/

//<!-- BAUSTELLE ANFANG-->
//<!-- BAUSTELLE ENDE-->








