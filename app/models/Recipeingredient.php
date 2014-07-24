<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Recipeingredient extends BaseModel implements BaseModelInterface
{
    //protected $primaryKey = 'id';
    public $table = 'recipe_ingredient';
    public $fillable = [
        'id',
        'recipe_id',
        'ingredient_id',
        'delivery',               
        'amount_2_persons',   
        'amount_4_persons',    
        'amount_6_persons' ,
        'einheit',
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

  
   //hasmanybelongs
    public function recipe()

    {
        return $this->belongsTo ('Recipe');

    }


}

