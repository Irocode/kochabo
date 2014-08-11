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
        'type', 
        'recipeflyerur',        
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

 
   public function calendarweekrecipestruktur()
    {
        return $this->hasMany ('Calendarweekrecipestruktur', 'packetid')->orderBy('packetid', 'ASC');
    }


}

