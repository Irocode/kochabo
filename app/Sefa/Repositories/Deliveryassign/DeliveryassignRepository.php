<?php namespace Sefa\Repositories\Deliveryassign;
use Config;
use Deliveryassign;
use Logisticianmanager;
use Deliverytimes;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
class DeliveryassignRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $deliverytimes;
    protected $deliveryassign;
    protected $logisticianmanager;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'name'    => 'required',
    ];
    public function __construct(Deliveryassign $deliveryassign, Logisticianmanager $logisticianmanager, Deliverytimes $deliverytimes)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->deliveryassign = $deliveryassign;
        $this->logisticianmanager = $logisticianmanager;
    }
    public function all()

    {
        return $this->deliveryassign->orderBy('name', 'ASC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->deliveryassign->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->deliveryassign->orderBy('name', 'ASC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->deliveryassign->orderBy('name', 'ASC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->deliveryassign->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->deliveryassign->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('deliveryassign validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->deliveryassign = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->deliveryassign->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('deliveryassign validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        // $affectedRows = Address::where('user_id', '=', $id)->delete();
        $deliveryassign = $this->deliveryassign->find($id)->delete();
    }
    public function lieferzeiten_update($id)

    {
        $deliveryassign = $this->deliveryassign->find($id);
        $name = $deliveryassign->name;
        $delivery_time_from = $deliveryassign->delivery_time_from;
        $delivery_time_to = $delivery_time_to->name;
        $nightjump = $deliveryassign->nightjump;
        $affectedRows = Deliveryassign::where('id', '=', $id)->update(array(
            'name' => $name,
            'delivery_time_from' => $delivery_time_from,
            'delivery_time_to' => $delivery_time_to,
            'nightjump' => $nightjump
        ));
        $deliveryassign->save();
        $deliveryassign = $this->deliveryassign->find($id);
        $deliveryassign->is_published = ($deliveryassign->is_published) ? false : true;
        $deliveryassign->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($deliveryassign->is_published) ? 1 : 0
        ));
        return true;
    }
}


