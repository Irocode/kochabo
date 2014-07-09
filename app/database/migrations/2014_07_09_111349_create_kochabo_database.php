<?php
 
//
// NOTE Migration Created: 2014-07-09 11:13:49
// --------------------------------------------------
 
class CreateKochaboDatabase {
//
// NOTE - Make changes to the database.
// --------------------------------------------------
 
public function up()
{

//
// NOTE -- address
// --------------------------------------------------
 
Schema::create('address', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('customercustomer_id');
 $table->string('art', 50);
 $table->string('gender', 255);
 $table->string('first_name', 255);
 $table->string('last_name', 255);
 $table->string('street', 255);
 $table->string('city', 255);
 $table->string('country', 255);
 $table->string('stateprovince', 255);
 $table->('zip');
 $table->string('housenumber', 100);
 $table->string('stairway_number', 100);
 $table->string('floor', 100);
 $table->string('appartement_number', 100);
 $table->text('deliveryinformation');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published');
 $table->string('slug', 255)->nullable();
 });


//
// NOTE -- aktuellerezepte
// --------------------------------------------------
 
Schema::create('aktuellerezepte', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- articles
// --------------------------------------------------
 
Schema::create('articles', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->unsignedInteger('category_id');
 $table->string('meta_keywords', 255)->nullable();
 $table->text('meta_description')->nullable();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 });


//
// NOTE -- articles_tags
// --------------------------------------------------
 
Schema::create('articles_tags', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('article_id')->unsigned();
 $table->unsignedInteger('tag_id')->unsigned();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- beispielbox
// --------------------------------------------------
 
Schema::create('beispielbox', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- calendar
// --------------------------------------------------
 
Schema::create('calendar', function($table) {
 $table->increments('id');
 $table->timestamp('timestamp')->default("CURRENT_TIMESTAMP");
 $table->date('start')->nullable();
 $table->date('end')->nullable();
 $table->string('title', 255);
 $table->mediumtext('hinweis');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- categories
// --------------------------------------------------
 
Schema::create('categories', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 });


//
// NOTE -- customers_groups
// --------------------------------------------------
 
Schema::create('customers_groups', function($table) {
 $table->increments('customers_groups_id')->unsigned();
 $table->text('groupname')->nullable();
 $table->boolean('default');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- delivery_date
// --------------------------------------------------
 
Schema::create('delivery_date', function($table) {
 $table->unsignedInteger('delivery_date_id');
 $table->date('date')->default("0000-00-00");
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- deliveryarea
// --------------------------------------------------
 
Schema::create('deliveryarea', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('user_id')->unsigned();
 $table->string('address_delivery_bill', 255);
 $table->string('prefix', 255);
 $table->string('gender', 255);
 $table->string('first_name', 255);
 $table->string('last_name', 255);
 $table->string('suffix', 255);
 $table->string('company', 255);
 $table->string('street', 255);
 $table->string('city', 255);
 $table->string('country', 255);
 $table->string('stateprovince', 255);
 $table->('zip');
 $table->('telephone');
 $table->('fax');
 $table->text('email');
 $table->string('latitude', 255);
 $table->string('longitude', 255);
 $table->text('deliveryinformation');
 $table->string('dateofbirth', 255);
 $table->('mobile');
 $table->text('permissions')->nullable();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->unsignedInteger('users_id');
 $table->boolean('is_published');
 $table->string('slug', 255)->nullable();
 $table->string('gender_delivery', 255);
 $table->string('city_delivery', 255);
 $table->string('company_delivery', 255);
 $table->string('country_delivery', 255);
 $table->string('dateofbirth_delivery', 255);
 $table->string('deliveryinformation_delivery', 255);
 $table->('fax_delivery');
 $table->string('email_delivery', 255);
 $table->string('first_name_delivery', 255);
 $table->string('last_name_delivery', 255);
 $table->string('stateprovince_delivery', 255);
 $table->string('street_delivery', 255);
 $table->('telephone_delivery');
 $table->('zip_delivery');
 });


//
// NOTE -- deliveryassign
// --------------------------------------------------
 
Schema::create('deliveryassign', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('user_id')->unsigned();
 $table->string('address_delivery_bill', 255);
 $table->string('prefix', 255);
 $table->string('gender', 255);
 $table->string('first_name', 255);
 $table->string('last_name', 255);
 $table->string('suffix', 255);
 $table->string('company', 255);
 $table->string('street', 255);
 $table->string('city', 255);
 $table->string('country', 255);
 $table->string('stateprovince', 255);
 $table->('zip');
 $table->('telephone');
 $table->('fax');
 $table->text('email');
 $table->string('latitude', 255);
 $table->string('longitude', 255);
 $table->text('deliveryinformation');
 $table->string('dateofbirth', 255);
 $table->('mobile');
 $table->text('permissions')->nullable();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->unsignedInteger('users_id');
 $table->boolean('is_published');
 $table->string('slug', 255)->nullable();
 $table->string('gender_delivery', 255);
 $table->string('city_delivery', 255);
 $table->string('company_delivery', 255);
 $table->string('country_delivery', 255);
 $table->string('dateofbirth_delivery', 255);
 $table->string('deliveryinformation_delivery', 255);
 $table->('fax_delivery');
 $table->string('email_delivery', 255);
 $table->string('first_name_delivery', 255);
 $table->string('last_name_delivery', 255);
 $table->string('stateprovince_delivery', 255);
 $table->string('street_delivery', 255);
 $table->('telephone_delivery');
 $table->('zip_delivery');
 });


//
// NOTE -- deliverytimes
// --------------------------------------------------
 
Schema::create('deliverytimes', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('user_id')->unsigned();
 $table->string('name', 255);
 $table->string('delivery_time_from', 255);
 $table->string('delivery_time_to', 255);
 $table->string('nightjump', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->text('is_published');
 });


//
// NOTE -- deliveryzipcode
// --------------------------------------------------
 
Schema::create('deliveryzipcode', function($table) {
 $table->increments('id');
 $table->unsignedInteger('user_id');
 $table->('zip');
 $table->boolean('is_published');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- fbf_newsletter_signups
// --------------------------------------------------
 
Schema::create('fbf_newsletter_signups', function($table) {
 $table->increments('id')->unsigned();
 $table->string('email', 255)->unique();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->timestamp('deleted_at')->nullable();
 });


//
// NOTE -- footers
// --------------------------------------------------
 
Schema::create('footers', function($table) {
 $table->increments('id')->unsigned();
 $table->string('hl_ueberuns', 255);
 $table->text('ct_ueberuns');
 $table->text('hl_rezepte');
 $table->string('slug', 255)->nullable();
 $table->date('datetime')->nullable();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('ct_rezepte');
 $table->text('hl_contact');
 $table->text('ct_contact');
 });


//
// NOTE -- form_posts
// --------------------------------------------------
 
Schema::create('form_posts', function($table) {
 $table->increments('id')->unsigned();
 $table->string('sender_name_surname', 255);
 $table->string('sender_email', 255);
 $table->string('sender_phone_number', 255);
 $table->string('subject', 255);
 $table->text('message');
 $table->string('created_ip', 15);
 $table->boolean('is_answered');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- g1
// --------------------------------------------------
 
Schema::create('g1', function($table) {
 $table->increments('id')->unsigned();
 $table->string('name', 255)->nullable();
 $table->unsignedInteger('size')->nullable();
 $table->string('type', 255)->nullable();
 $table->string('url', 255)->nullable();
 $table->string('title', 255)->nullable();
 $table->text('description')->nullable();
 $table->text('ordner')->nullable();
 $table->text('contributor');
 $table->text('uploadedOn');
 });


//
// NOTE -- g2
// --------------------------------------------------
 
Schema::create('g2', function($table) {
 $table->increments('id')->unsigned();
 $table->string('name', 255)->nullable();
 $table->unsignedInteger('size')->nullable();
 $table->string('type', 255)->nullable();
 $table->string('url', 255)->nullable();
 $table->string('title', 255)->nullable();
 $table->text('description')->nullable();
 $table->text('ordner')->nullable();
 $table->text('contributor');
 $table->text('uploadedOn');
 });


//
// NOTE -- g3
// --------------------------------------------------
 
Schema::create('g3', function($table) {
 $table->increments('id')->unsigned();
 $table->string('name', 255)->nullable();
 $table->unsignedInteger('size')->nullable();
 $table->string('type', 255)->nullable();
 $table->string('url', 255)->nullable();
 $table->string('title', 255)->nullable();
 $table->text('description')->nullable();
 $table->text('ordner')->nullable();
 $table->text('contributor');
 $table->text('uploadedOn');
 });


//
// NOTE -- groups
// --------------------------------------------------
 
Schema::create('groups', function($table) {
 $table->increments('id')->unsigned();
 $table->string('name', 255)->unique();
 $table->text('permissions')->nullable();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- gutschein
// --------------------------------------------------
 
Schema::create('gutschein', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- ingredients
// --------------------------------------------------
 
Schema::create('ingredients', function($table) {
 $table->increments('id');
 $table->string('name', 255);
 $table->mediumtext('description');
 $table->string('kcal100g', 255);
 $table->unsignedInteger('default');
 $table->('image');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->unsignedInteger('is_published');
 });


//
// NOTE -- kochabobox
// --------------------------------------------------
 
Schema::create('kochabobox', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- list_abotyp
// --------------------------------------------------
 
Schema::create('list_abotyp', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_bundesland
// --------------------------------------------------
 
Schema::create('list_bundesland', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_country
// --------------------------------------------------
 
Schema::create('list_country', function($table) {
 $table->increments('code', 2);
 $table->string('en', 50);
 $table->string('de', 50);
 });


//
// NOTE -- list_currency
// --------------------------------------------------
 
Schema::create('list_currency', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_day
// --------------------------------------------------
 
Schema::create('list_day', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_gender
// --------------------------------------------------
 
Schema::create('list_gender', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_gruppe
// --------------------------------------------------
 
Schema::create('list_gruppe', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_janein
// --------------------------------------------------
 
Schema::create('list_janein', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->('wert');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_month
// --------------------------------------------------
 
Schema::create('list_month', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_recipe_type
// --------------------------------------------------
 
Schema::create('list_recipe_type', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_status
// --------------------------------------------------
 
Schema::create('list_status', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_type
// --------------------------------------------------
 
Schema::create('list_type', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- list_ust
// --------------------------------------------------
 
Schema::create('list_ust', function($table) {
 $table->increments('id');
 $table->string('bezeichnung', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- login
// --------------------------------------------------
 
Schema::create('login', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- logisticianmanager
// --------------------------------------------------
 
Schema::create('logisticianmanager', function($table) {
 $table->increments('id')->unsigned();
 $table->string('street', 255);
 $table->string('streetno', 255);
 $table->string('city', 255);
 $table->string('stateprovince', 255);
 $table->unsignedInteger('zip');
 $table->string('country_id', 255);
 $table->string('contactPerson', 255);
 $table->string('email', 255);
 $table->string('phone', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published');
 $table->string('name', 255);
 });


//
// NOTE -- menus
// --------------------------------------------------
 
Schema::create('menus', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->string('url', 255);
 $table->unsignedInteger('order');
 $table->unsignedInteger('parent_id');
 $table->string('type', 10);
 $table->string('option', 255)->nullable();
 $table->boolean('is_published')->default("1");
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- news
// --------------------------------------------------
 
Schema::create('news', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime')->nullable();
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- newsletters
// --------------------------------------------------
 
Schema::create('newsletters', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('user_id');
 $table->string('email', 255)->nullable();
 $table->string('first_name', 255)->nullable();
 $table->string('last_name', 255)->nullable();
 $table->timestamp('created_at')->default("CURRENT_TIMESTAMP");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->('aktiviert');
 $table->string('code', 255)->unique();
 });


//
// NOTE -- obstbox
// --------------------------------------------------
 
Schema::create('obstbox', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- offers
// --------------------------------------------------
 
Schema::create('offers', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- order
// --------------------------------------------------
 
Schema::create('order', function($table) {
 $table->increments('order_id');
 $table->date('delivery_date');
 $table->unsignedInteger('order_increment_id');
 $table->unsignedInteger('deliverable');
 $table->unsignedInteger('customercustomer_id');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- order_address
// --------------------------------------------------
 
Schema::create('order_address', function($table) {
 $table->increments('address_id')->unsigned();
 $table->unsignedInteger('orderorder_id');
 $table->string('address_type', 20);
 $table->string('gender', 255);
 $table->string('first_name', 255);
 $table->string('last_name', 255);
 $table->string('street', 255);
 $table->string('city', 255);
 $table->string('country', 255);
 $table->string('stateprovince', 255);
 $table->('zip');
 $table->string('housenumber', 100);
 $table->string('stairway_number', 100);
 $table->string('floor', 100);
 $table->string('appartement_number', 100);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->string('delivery_information', 255)->nullable();
 });


//
// NOTE -- order_items
// --------------------------------------------------
 
Schema::create('order_items', function($table) {
 $table->increments('order_items_id');
 $table->unsignedInteger('orderorder_id');
 $table->unsignedInteger('product_id');
 $table->string('product_sku', 100);
 $table->string('product_name', 100);
 $table->decimal('original_price_net', 10,2);
 $table->decimal('ust', 10,2);
 $table->decimal('discount', 10,2);
 $table->decimal('affilate_discount', 10,2);
 $table->decimal('affilate_credit', 10,2);
 $table->decimal('giftvoucher_credit', 10,2);
 $table->string('coupon_code', 100);
 $table->string('giftvoucher_code', 100);
 $table->string('affilate_code', 100);
 $table->unsignedInteger('quantity');
 $table->timestamp('timestamp')->default("CURRENT_TIMESTAMP");
 $table->date('created_at')->default("0000-00-00");
 $table->date('updated_at')->default("0000-00-00");
 });


//
// NOTE -- order_status_history
// --------------------------------------------------
 
Schema::create('order_status_history', function($table) {
 $table->increments('order_status_history_id');
 $table->unsignedInteger('orderorder_id');
 $table->string('status', 100);
 $table->string('channel', 100);
 $table->string('operator', 100);
 $table->timestamp('timestamp')->default("CURRENT_TIMESTAMP");
 $table->date('created_at')->default("0000-00-00");
 $table->date('updated_at')->default("0000-00-00");
 });


//
// NOTE -- pages
// --------------------------------------------------
 
Schema::create('pages', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 });


//
// NOTE -- photo_galleries
// --------------------------------------------------
 
Schema::create('photo_galleries', function($table) {
 $table->increments('id')->unsigned();
 $table->string('products_id', 255);
 $table->string('title', 255);
 $table->text('content');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 });


//
// NOTE -- photos
// --------------------------------------------------
 
Schema::create('photos', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('user_id');
 $table->string('file_name', 255);
 $table->string('title', 255);
 $table->string('pathto', 255);
 $table->unsignedInteger('file_size');
 $table->string('type', 20);
 $table->unsignedInteger('relationship_id')->unsigned();
 $table->text('path');
 });


//
// NOTE -- product_subscription
// --------------------------------------------------
 
Schema::create('product_subscription', function($table) {
 $table->unsignedInteger('product_product_id');
 $table->unsignedInteger('subscription_subscription_id');
 $table->unsignedInteger('quantity');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- products
// --------------------------------------------------
 
Schema::create('products', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('user_id');
 $table->unsignedInteger('photo_galleries_id');
 $table->mediumtext('product_name');
 $table->('description');
 $table->mediumtext('picurl');
 $table->string('picangelegt', 50);
 $table->string('type', 255);
 $table->unsignedInteger('nr_of_recipes')->unsigned();
 $table->unsignedInteger('nr_of_persons');
 $table->decimal('price', 10,2);
 $table->mediumtext('productlink');
 $table->string('currency', 100);
 $table->('ust');
 $table->string('recipetype', 255);
 $table->string('sku', 100);
 $table->unsignedInteger('standalone');
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->string('is_published', 255);
 });


//
// NOTE -- ranking
// --------------------------------------------------
 
Schema::create('ranking', function($table) {
 $table->increments('ranking_id')->unsigned();
 $table->('entry_id')->unsigned();
 $table->boolean('ranking_value');
 $table->boolean('ranking_column')->unsigned();
 $table->boolean('judge_id');
 $table->('contest_id')->unsigned();
 $table->timestamp('timestamp')->default("CURRENT_TIMESTAMP");
 $table->string('ip_address', 15);
 $table->text('text');
 });


//
// NOTE -- recipe
// --------------------------------------------------
 
Schema::create('recipe', function($table) {
 $table->increments('id');
 $table->unsignedInteger('kochabo_id');
 $table->unsignedInteger('urlslug');
 $table->string('titel', 255);
 $table->unsignedInteger('duration');
 $table->unsignedInteger('cooking_time');
 $table->('description');
 $table->string('img_small', 255)->nullable();
 $table->string('img_medium', 255);
 $table->string('img_large', 255);
 $table->('nutrition_carbs');
 $table->('nutrition_fat');
 $table->('nutrition_protein');
 $table->('nutrition_kcal');
 $table->mediumtext('step_1');
 $table->mediumtext('step_2');
 $table->mediumtext('step_3');
 $table->mediumtext('step_4');
 $table->mediumtext('step_5');
 $table->mediumtext('step_6');
 $table->mediumtext('step_7');
 $table->unsignedInteger('gluten_free');
 $table->unsignedInteger('lactose_free');
 $table->unsignedInteger('vegan');
 $table->unsignedInteger('vegetarien');
 $table->unsignedInteger('meat');
 $table->unsignedInteger('fish');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->unsignedInteger('is_published');
 });


//
// NOTE -- recipe_ingredient
// --------------------------------------------------
 
Schema::create('recipe_ingredient', function($table) {
 $table->increments('recipe_id');
 $table->unsignedInteger('ingredient_id');
 $table->unsignedInteger('delivery');
 $table->unsignedInteger('amount_2_persons');
 $table->unsignedInteger('amount_4_persons');
 $table->unsignedInteger('amount_6_persons');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->unsignedInteger('is_published');
 });


//
// NOTE -- settings
// --------------------------------------------------
 
Schema::create('settings', function($table) {
 $table->increments('id')->unsigned();
 $table->string('site_title', 255);
 $table->string('ga_code', 255);
 $table->string('meta_keywords', 255);
 $table->string('meta_description', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- sliders
// --------------------------------------------------
 
Schema::create('sliders', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->('type');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- sofunktioniertes
// --------------------------------------------------
 
Schema::create('sofunktioniertes', function($table) {
 $table->increments('id')->unsigned();
 $table->string('title', 255);
 $table->text('content');
 $table->string('slug', 255)->nullable();
 $table->date('datetime');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published')->default("1");
 $table->text('bild1');
 });


//
// NOTE -- subscription
// --------------------------------------------------
 
Schema::create('subscription', function($table) {
 $table->unsignedInteger('subscription_id');
 $table->unsignedInteger('customercustomer_id');
 $table->date('start_date')->default("0000-00-00");
 $table->date('end_date')->default("0000-00-00");
 $table->unsignedInteger('interval_type');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- tags
// --------------------------------------------------
 
Schema::create('tags', function($table) {
 $table->increments('id')->unsigned();
 $table->string('name', 255);
 $table->string('slug', 255);
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });


//
// NOTE -- throttle
// --------------------------------------------------
 
Schema::create('throttle', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('user_id')->unsigned();
 $table->string('ip_address', 255)->nullable();
 $table->unsignedInteger('attempts');
 $table->boolean('suspended');
 $table->boolean('banned');
 $table->timestamp('last_attempt_at')->nullable();
 $table->timestamp('suspended_at')->nullable();
 $table->timestamp('banned_at')->nullable();
 });


//
// NOTE -- users
// --------------------------------------------------
 
Schema::create('users', function($table) {
 $table->increments('id')->unsigned();
 $table->unsignedInteger('customers_groups_id');
 $table->string('email', 255)->unique();
 $table->string('password', 255);
 $table->string('passwordhardcode', 255);
 $table->text('permissions')->nullable();
 $table->boolean('activated');
 $table->string('activation_code', 255)->nullable();
 $table->timestamp('activated_at')->nullable();
 $table->timestamp('last_login')->nullable();
 $table->string('persist_code', 255)->nullable();
 $table->string('reset_password_code', 255)->nullable();
 $table->text('first_name')->nullable();
 $table->date('date_of_birth')->nullable()->default("0000-00-00");
 $table->string('telephone', 255);
 $table->string('gender', 100);
 $table->unsignedInteger('default_billing_address');
 $table->unsignedInteger('default_shipping_address');
 $table->text('last_name')->nullable();
 $table->string('birthday', 2);
 $table->string('birthmonth', 2);
 $table->string('birthyear', 4);
 $table->('status');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 $table->boolean('is_published');
 });


//
// NOTE -- users_groups
// --------------------------------------------------
 
Schema::create('users_groups', function($table) {
 $table->increments('user_id')->unsigned();
 $table->increments('group_id')->unsigned();
 });


//
// NOTE -- veto
// --------------------------------------------------
 
Schema::create('veto', function($table) {
 $table->increments('veto_id');
 $table->unsignedInteger('delivery_datedelivery_date_id');
 $table->unsignedInteger('customercustomer_id');
 $table->timestamp('created_at')->default("0000-00-00 00:00:00");
 $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
 });



}
 
//
// NOTE - Revert the changes to the database.
// --------------------------------------------------
 
public function down()
{

Schema::drop('address');
Schema::drop('aktuellerezepte');
Schema::drop('articles');
Schema::drop('articles_tags');
Schema::drop('beispielbox');
Schema::drop('calendar');
Schema::drop('categories');
Schema::drop('customers_groups');
Schema::drop('delivery_date');
Schema::drop('deliveryarea');
Schema::drop('deliveryassign');
Schema::drop('deliverytimes');
Schema::drop('deliveryzipcode');
Schema::drop('fbf_newsletter_signups');
Schema::drop('footers');
Schema::drop('form_posts');
Schema::drop('g1');
Schema::drop('g2');
Schema::drop('g3');
Schema::drop('groups');
Schema::drop('gutschein');
Schema::drop('ingredients');
Schema::drop('kochabobox');
Schema::drop('list_abotyp');
Schema::drop('list_bundesland');
Schema::drop('list_country');
Schema::drop('list_currency');
Schema::drop('list_day');
Schema::drop('list_gender');
Schema::drop('list_gruppe');
Schema::drop('list_janein');
Schema::drop('list_month');
Schema::drop('list_recipe_type');
Schema::drop('list_status');
Schema::drop('list_type');
Schema::drop('list_ust');
Schema::drop('login');
Schema::drop('logisticianmanager');
Schema::drop('menus');
Schema::drop('news');
Schema::drop('newsletters');
Schema::drop('obstbox');
Schema::drop('offers');
Schema::drop('order');
Schema::drop('order_address');
Schema::drop('order_items');
Schema::drop('order_status_history');
Schema::drop('pages');
Schema::drop('photo_galleries');
Schema::drop('photos');
Schema::drop('product_subscription');
Schema::drop('products');
Schema::drop('ranking');
Schema::drop('recipe');
Schema::drop('recipe_ingredient');
Schema::drop('settings');
Schema::drop('sliders');
Schema::drop('sofunktioniertes');
Schema::drop('subscription');
Schema::drop('tags');
Schema::drop('throttle');
Schema::drop('users');
Schema::drop('users_groups');
Schema::drop('veto');

}
}