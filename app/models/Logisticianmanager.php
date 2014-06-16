<?php
use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class Logisticianmanager extends BaseModel implements BaseModelInterface
{
    public $table = 'logisticianmanager';
    public $fillable=[
        'id',
        'name',
        'street',
        'streetno',
        'city',
        'stateprovince',
        'zip',
        'country_id',
        'contactPerson',
        'email',
        'phone',
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
        return "logisticianmanager/" . $this->attributes['id'] . "/" . $this->attributes['id'];
    }

    public function deliverytimes()
    {
        return $this->hasMany ('Deliverytimes', 'user_id')->orderBy('user_id', 'ASC');
    }

    public function deliveryzipcode()
    {
        return $this->hasMany ('Deliveryzipcode', 'user_id')->orderBy('user_id', 'ASC');
    }
}
