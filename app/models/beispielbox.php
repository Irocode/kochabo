<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Beispielbox extends BaseModel implements BaseModelInterface {

    public $table = 'beispielbox';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'bild1'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "beispielbox/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}



