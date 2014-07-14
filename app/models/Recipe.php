<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Recipe extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'id';
    public $table = 'recipe';
    public $fillable = [
        
        'id',
        'kochabo_id',
        'urlslug',               
        'titel',   
        'duration',   
        'cooking_time',
        'tip',
        'athome',
        'description',
        'img_small',
        'img_medium',
        'img_large',
        'imagesmall',
        'imagemiddle',
        'imagebig',
        'nutrition_fat',
        'nutrition_carbs',
        'nutrition_protein',
        'nutrition_kcal',
        'step_1',
        'step_2',
        'step_3',
        'step_4',
        'step_5',
        'step_6',
        'step_7',
        'gluten_free',
        'lactose_free',
        'vegan',
        'vegetarien',
        'meat',
        'fish',
        'created_at',
        'updated_at' ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "recipe/" . $this->attributes['id'] . "/" . $this->attributes['id'];
    }


  public function ingredients()
    {
        return $this->hasMany ('Ingredients', 'user_id')->orderBy('user_id', 'ASC');
    }





 public function recipe_ingredient()
    {
        return $this->hasMany ('Recipe_ingredient', 'recipe_id')->orderBy('recipe_id', 'ASC');
    }

}

