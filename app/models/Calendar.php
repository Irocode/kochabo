<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Calendar extends BaseModel implements BaseModelInterface
{
    //protected $primaryKey = 'user_id'; http://stackoverflow.com/questions/23048804/ajax-search-laravel
    //protected $primaryKey = 'user_id';
    public $table = 'calendar';
    public $fillable = [
        'id',
        'timestamp',
        'start',
        'end',
        'title',
        'hinweis'];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "calendar/" . $this->attributes['id'] . "/" . $this->attributes['title'];
    }
}
