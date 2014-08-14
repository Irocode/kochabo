<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Eloquent::unguard();

        $this->call('NewsTableSeeder');
        $this->call('ArticlesTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('ArticlesTagsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('PhotoGalleriesTableSeeder');
        $this->call('SettingsTableSeeder');
    	$this->call('MenusTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('AddressTableSeeder');
		$this->call('AktuellerezepteTableSeeder');
		$this->call('BeispielboxTableSeeder');
		$this->call('CalendarTableSeeder');	
		$this->call('DeliveryareaTableSeeder');
		$this->call('DeliveryassignTableSeeder');
		$this->call('DeliverytimesTableSeeder');
		$this->call('DeliveryzipcodeTableSeeder');
		$this->call('FbfNewsletterSignupsTableSeeder');
		$this->call('FootersTableSeeder');
		$this->call('FormPostsTableSeeder');
		$this->call('G1TableSeeder');
		$this->call('G2TableSeeder');
		$this->call('G3TableSeeder');
		$this->call('GroupsTableSeeder');
		$this->call('GutscheinTableSeeder');
		$this->call('KochaboboxTableSeeder');
		$this->call('ListAbotypTableSeeder');
		$this->call('ListBundeslandTableSeeder');
		$this->call('ListCountryTableSeeder');
		$this->call('ListCurrencyTableSeeder');
		$this->call('ListDayTableSeeder');
		$this->call('ListGenderTableSeeder');
		$this->call('ListGruppeTableSeeder');
		$this->call('ListMonthTableSeeder');
		$this->call('ListStatusTableSeeder');
		$this->call('ListUstTableSeeder');
		$this->call('ListRecipeTypeTableSeeder');
		$this->call('LoginTableSeeder');
		$this->call('LogisticianmanagerTableSeeder');		
		$this->call('NewslettersTableSeeder');
		$this->call('ObstboxTableSeeder');
		$this->call('OffersTableSeeder');
		$this->call('OrderTableSeeder');
		$this->call('PhotosTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('RankingTableSeeder');
		$this->call('SlidersTableSeeder');		
		$this->call('ThrottleTableSeeder');
		$this->call('UsersGroupsTableSeeder');
		$this->call('VetoTableSeeder');
		$this->call('OrderItemsTableSeeder');
		$this->call('OrderStatusHistoryTableSeeder');
		$this->call('OrderAddressTableSeeder');
		$this->call('DeliveryDateTableSeeder');
		$this->call('SubscriptionTableSeeder');
		$this->call('ProductSubscriptionTableSeeder');
		$this->call('CustomersGroupsTableSeeder');
		$this->call('ListJaneinTableSeeder');
		$this->call('IngredientsTableSeeder');
		$this->call('RecipeTableSeeder');
		$this->call('RecipeIngredientTableSeeder');
		$this->call('ListEinheitTableSeeder');
		$this->call('ProfileTableSeeder');
		$this->call('CalendarweekTableSeeder');
		$this->call('CalendarweekrecipestrukturTableSeeder');
	}
}