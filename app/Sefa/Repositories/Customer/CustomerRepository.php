<?php namespace Sefa\Repositories\Customer;
use Config;
use customer;
use address;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
class CustomerRepository extends Validator implements BaseRepositoryInterface {
protected $perPage;
protected $customer;
protected $address;
/**
* Rules
*
* @var array
*/
protected static $rules = [
'first_name'    => 'required',
'last_name'  => 'required',
'datetime'  => 'required',
];
public function __construct(customer $customer) {
$config = Config::get('sfcms');
$this->perPage = $config['modules']['per_page'];
$this->customer = $customer;
}
public function all() {
return $this->customer->orderBy('created_at', 'DESC')
->where('is_published', 1)
->get();
}
public function lists() {
return $this->customer->get()->lists('title', 'id');
}
public function paginate($perPage = null, $all=false) {
if($all)
return $this->customer->orderBy('created_at', 'DESC')
->paginate(($perPage) ? $perPage : $this->perPage);
return $this->customer->orderBy('created_at', 'DESC')
->where('is_published', 1)
->paginate(($perPage) ? $perPage : $this->perPage);
}
public function find($id) {
return $this->customer->findOrFail($id);
}
public function create($attributes) {
$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
if ($this->isValid($attributes)) {
$this->customer->fill($attributes)->save(); 
// erstelle Tabel mit UserID der ID von customer
$lastInsertedId = $this->customer->id;
$address = new Address;
$address->user_id = $lastInsertedId;
$address->gender = $this->customer->gender;
$address->first_name = $this->customer->first_name;
$address->last_name = $this->customer->last_name;
$address->dateofbirth = $this->customer->datetime;
// $address->id = '9991';
$address->save();
return true;
}
throw new ValidationException('customer validation failed', $this->getErrors());
}
public function update($id, $attributes) {
$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
$this->customer = $this->find($id);
if ($this->isValid($attributes)) {  
$this->customer->fill($attributes)->save();

//Id umwandlen in user_id
$lastInsertedId = $this->customer->id;
$first_name = $this->customer->first_name;
$last_name = $this->customer->last_name;
$datetime = $this->customer->datetime;

$affectedRows = Address::where('user_id', '=', $lastInsertedId)->update(array('first_name' => $first_name,'last_name' => $last_name,'dateofbirth' => $datetime));
$address = new Address;
$address->save();

return true;
}
throw new ValidationException('customer validation failed', $this->getErrors());
}
public function destroy($id) {

$affectedRows = Address::where('user_id', '=', $id)->delete();

$customer = $this->customer->find($id)->delete();
}
public function togglePublish($id) {
$customer = $this->customer->find($id);
$customer->is_published = ($customer->is_published) ? false : true;
$customer->save();
return Response::json(array('result' => 'success', 'changed' => ($customer->is_published) ? 1 : 0));
}
}