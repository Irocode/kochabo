<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Gutschein extends BaseModel implements BaseModelInterface
{
    public $table = 'gutschein';
    public $fillable = [
        'title',
        'slug',
        'content',
        'datetime',
        'is_published',
        'bild1' ];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "gutschein/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}



