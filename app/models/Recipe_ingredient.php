<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Recipe_ingredient extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'customercustomer_id';
    public $table = 'recipe_ingredient';
    public $fillable = [
        
        'recipe_id',
        'ingredient_id',
        'delivery',               
        'amount_2_persons',   
        'amount_4_persons',    
        'amount_6_persons' ,
        'created_at',
        'updated_at' ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "recipe_ingredient/" . $this->attributes['recipe_id'] . "/" . $this->attributes['recipe_id'];
    }

  



}

