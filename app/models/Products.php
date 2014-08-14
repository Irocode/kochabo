<?php

class Products extends Eloquent
{
    //public  $timestamps = false;
    public $table = 'products';
    public $fillable = [
        'id',
        'user_id',        
        'currency',
        'productlink',
        'product_name',
        'photo_galleries_id',
        'description',
        'type',
        'nr_of_recipes',
        'nr_of_persons',
        'price','ust',
        'recipetype',
        'recipetypenummer',
        'sku',
        'standalone' ,        
        'imagex',
        'updated_at',
        'created_at' ];
}


