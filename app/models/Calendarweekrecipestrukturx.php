<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Calendarweekrecipestrukturx extends BaseModel implements BaseModelInterface
{
   protected $primaryKey = 'packetid';
    public $table = 'calendarweekrecipestrukturx';
    public $fillable = [

        'id',        
        'packetid',
        'recipeid',
        'productid',
        'productname',
        'sorting',
        'recipeflyerurl',
        'created_at',
        'updated_at',
        'is_published' ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "calendarweek/" . $this->attributes['id'] . "/" . $this->attributes['id'];
    }

 




}

