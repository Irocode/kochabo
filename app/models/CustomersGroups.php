<?php

use Sefa\Interfaces\BaseModelInterface as BaseModelInterface;

class CustomersGroups extends BaseModel implements BaseModelInterface
{
    public $table = 'customers_groups';
      protected $primaryKey = 'customers_groups_id';
    public $fillable = [
        'customers_groups_id',
        'groupname',       
        'default',
        'created_at',        
        'updated_at'];

    protected $appends = ['url'];

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function getUrlAttribute()
    {
        return "customers_groups/" . $this->attributes['customers_groups_id'] . "/" . $this->attributes['customers_groups_id'];
    }
}
