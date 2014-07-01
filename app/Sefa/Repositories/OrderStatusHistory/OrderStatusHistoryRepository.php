<?php namespace Sefa\Repositories\OrderStatusHistory;
use Config;
use OrderStatusHistory;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class OrderStatusHistoryRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $order_status_history;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(OrderStatusHistory $order_status_history)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->order_status_history = $order_status_history;
    }
    public function all()

    {
        return $this->order_status_history->orderBy('created_at', 'DESC')->get();
    }
    public function lists()

    {
        return $this->order->get()->lists('last_name', 'order_status_history_id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->order_status_history->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->order_status_history->order_status_historyBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->order_status_history->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->order_status_history->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('order_status_history validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->order_status_history = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->order_status_history->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('order_status_history validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $order_status_history = $this->order_status_history->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $order_status_history = $this->order_status_history->find($id);
        $order_status_history->is_published = ($order_status_history->is_published) ? false : true;
        $order_status_history->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($order_status_history->is_published) ? 1 : 0
        ));
    }
}


