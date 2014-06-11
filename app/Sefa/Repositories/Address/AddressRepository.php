<?php namespace Sefa\Repositories\Address;
use Config;
use Address;
use AddressNoPrimaryKey;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
class AddressRepository extends Validator implements BaseRepositoryInterface {
	

protected $perPage;
protected $address;
/**
* Rules
*
* @var array
*/
protected static $rules = [
//'first_name'    => 'required',
//'last_name'  => 'required',

];
public function __construct(Address $address, AddressNoPrimaryKey $addressnoprimarykey) {
$config = Config::get('sfcms');
$this->perPage = $config['modules']['per_page'];
$this->address = $address;
$this->addressnoprimarykey = $addressnoprimarykey;
}
public function all() {
return $this->address->orderBy('created_at', 'DESC')
->where('is_published', 1)
->get();
}
public function lists() {
return $this->address->get()->lists('title', 'id');
}
public function paginate($perPage = null, $all=false) {
if($all)
return $this->address->orderBy('created_at', 'DESC')
->paginate(($perPage) ? $perPage : $this->perPage);
return $this->address->orderBy('created_at', 'DESC')
->where('is_published', 1)
->paginate(($perPage) ? $perPage : $this->perPage);
}
public function find($id) {
return $this->address->findOrFail($id);
}
public function create($attributes) {
$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
if ($this->isValid($attributes)) {
$this->address->fill($attributes)->save();
return true;
}
throw new ValidationException('address validation failed', $this->getErrors());
}
public function update($id, $attributes) {
$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
$this->address = $this->find($id);
if ($this->isValid($attributes)) {
$this->address->fill($attributes)->save();
return true;
}
throw new ValidationException('address validation failed', $this->getErrors());
}
public function destroy($id) {
$address = $this->address->find($id)->delete();
}
public function togglePublish($id) {
$address = $this->address->find($id);
$address->is_published = ($address->is_published) ? false : true;
$address->save();
return Response::json(array('result' => 'success', 'changed' => ($address->is_published) ? 1 : 0));
}
}