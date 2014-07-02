<?php namespace Sefa\Repositories\OrderDetails;
use Config;
use OrderDetails;
use OrderAddress;
use OrderStatus_History;
use OrderItems;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class OrderDetailsRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $order_details;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(OrderDetails $order_details, OrderAddress $order_address, OrderStatus_History $order_status_history, OrderItems $order_items)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->order = $order_details;
        $this->order_address = $order_address;
        $this->order_status_history = $order_status_history;
        $this->order_items = $order_items;
    }
    public function all()

    {
        return $this->order->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->order->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->order->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->order->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->order->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->order->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('order validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->order = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->order->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('order validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $order_details = $this->order->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $order_details = $this->order->find($id);
        $order_details->is_published = ($order_details->is_published) ? false : true;
        $order_details->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($order_details->is_published) ? 1 : 0
        ));
    }
}


