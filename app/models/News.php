<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class News extends BaseModel implements BaseModelInterface {


    public $table = 'news';
    public $fillable=['title', 'slug', 'content', 'datetime', 'is_published', 'bild1'];
    protected $appends = ['url'];

    public function setUrlAttribute($value) {

        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute() {

        return "news/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}
