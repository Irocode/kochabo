<?php namespace Sefa\Repositories\OrderAddress;
use Config;
use OrderAddress;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class OrderAddressRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $order_address;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(OrderAddress $order_address)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->order_address = $order_address;
    }
    public function all()

    {
        return $this->order_address->orderBy('created_at', 'DESC')->get();
    }
    public function lists()

    {
        return $this->order->get()->lists('last_name', 'address_id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->order_address->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->order_address->order_addressBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->order_address->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->order_address->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('order_address validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->order_address = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->order_address->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('order_address validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $order_address = $this->order_address->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $order_address = $this->order_address->find($id);
        $order_address->is_published = ($order_address->is_published) ? false : true;
        $order_address->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($order_address->is_published) ? 1 : 0
        ));
    }
}


