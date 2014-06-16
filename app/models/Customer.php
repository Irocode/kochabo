<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Customer extends BaseModel implements BaseModelInterface
{
    public $table = 'customers';
    public $fillable = [
        'id',
        'first_name',
        'gender',
        'last_name',
        'datetime',
        'kundeseit',
        'abobox',
        'abolieferung',
        'abotyp',
        'aboweine',
        'abobiere',
        'anzahlobstboxen',
        'abostatus',
        'gruppen',
        'is_published'];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "customers/" . $this->attributes['id'] . "/" . $this->attributes['slug'];
    }
}
