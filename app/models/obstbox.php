<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Obstbox extends BaseModel implements BaseModelInterface {

    public $table = 'obstbox';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'bild1'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "obstbox/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}



