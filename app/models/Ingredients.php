<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Ingredients extends BaseModel implements BaseModelInterface
{
    protected $primaryKey = 'id';
    public $table = 'ingredients';
    public $fillable = [
        
        'id',
        'name',
        'description',               
        'kcal100g',   
        'defaultunit', 
        'imagex',
        'created_at',
        'updated_at' ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "ingredients/" . $this->attributes['id'] . "/" . $this->attributes['id'];
    }

 
   //hasmanybelongs
    public function recipe()

    {
        return $this->belongsTo ('Recipe');

    }



}

