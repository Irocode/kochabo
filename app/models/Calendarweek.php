<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Calendarweek extends BaseModel implements BaseModelInterface
{
   protected $primaryKey = 'packetid';
    public $table = 'calendarweek';
    public $fillable = [
        
        'packetid',
        'calendarweek',
        'year',               
        'modifydate',   
        'type', 
        'recipeflyerur',
        'recipeflyerursingle',
        'created_at',
        'updated_at' ];

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

