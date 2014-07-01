<?php namespace Sefa\Repositories\Logisticianmanager;
use Config;
use Logisticianmanager;
use Response;
use Deliverytimes;
use Deliveryzipcode;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class LogisticianmanagerRepository extends Validator implements BaseRepositoryInterface

{
    protected $deliverytimes;
    protected $perPage;
    protected $logisticianmanager;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = ['name' => 'required', 'street' => 'required', 'zip' => 'required', 'city' => 'required', 'stateprovince' => 'required', 'country_id' => 'required', 'contactPerson' => 'required', 'phone' => 'required', ];
    public function __construct(Logisticianmanager $logisticianmanager, Deliverytimes $deliverytimes)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->logisticianmanager = $logisticianmanager;
        $this->deliverytimes = $deliverytimes;
    }
    public function all()

    {
        return $this->logisticianmanager->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->logisticianmanager->get()->lists('title', 'id', 'name');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->logisticianmanager->orderBy('created_at', 'DESC')->where('id', '>', 1)->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->logisticianmanager->orderBy('created_at', 'DESC')->where('is_published', 1)->where('id', '>', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->logisticianmanager->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->logisticianmanager->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('News validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->logisticianmanager = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->logisticianmanager->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('News validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $affectedRows_update = Deliveryzipcode::where('user_id', '=', $id)->update(array(
            'user_id' => '0'
        ));
        $affectedRows = Deliverytimes::where('user_id', '=', $id)->delete();
        $logisticianmanager = $this->logisticianmanager->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $logisticianmanager = $this->logisticianmanager->find($id);
        $logisticianmanager->is_published = ($logisticianmanager->is_published) ? false : true;
        $logisticianmanager->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($logisticianmanager->is_published) ? 1 : 0
        ));
    }
}


