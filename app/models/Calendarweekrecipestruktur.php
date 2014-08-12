<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Calendarweekrecipestruktur extends BaseModel implements BaseModelInterface
{
   protected $primaryKey = 'packetid';
    public $table = 'calendarweekrecipestruktur';
    public $fillable = [

        'id',        
        'packetid',
        'recipeid',
        'productid',
        'productname',
        'sorting',
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

