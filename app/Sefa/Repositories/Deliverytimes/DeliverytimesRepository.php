<?php namespace Sefa\Repositories\Deliverytimes;
use Config;
use Deliverytimes;
use Logisticianmanager;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
class DeliverytimesRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $deliverytimes;
    protected $logisticianmanager;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'name'    => 'required',
    ];
    public function __construct(Deliverytimes $deliverytimes, Logisticianmanager $logisticianmanager)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->deliverytimes = $deliverytimes;
        $this->logisticianmanager = $logisticianmanager;
    }
    public function all()

    {
        return $this->deliverytimes->orderBy('name', 'ASC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->deliverytimes->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->deliverytimes->orderBy('name', 'ASC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->deliverytimes->orderBy('name', 'ASC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->deliverytimes->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->deliverytimes->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('deliverytimes validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->deliverytimes = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->deliverytimes->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('deliverytimes validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $deliverytimes = $this->deliverytimes->find($id)->delete();
    }
}


