<?php namespace Sefa\Repositories\CustomersGroups;
use Config;
use CustomersGroups;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class CustomersGroupsRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $customers_groups;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(CustomersGroups $customers_groups)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->customers_groups = $customers_groups;
    }
    public function all()

    {
        return $this->customers_groups->orderBy('created_at', 'DESC')->get();
    }
    public function lists()

    {
        return $this->order->get()->lists('last_name', 'address_id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->customers_groups->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->customers_groups->customers_groupsBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->customers_groups->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->customers_groups->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('customers_groups validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->customers_groups = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->customers_groups->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('customers_groups validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $customers_groups = $this->customers_groups->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $customers_groups = $this->customers_groups->find($id);
        $customers_groups->is_published = ($customers_groups->is_published) ? false : true;
        $customers_groups->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($customers_groups->is_published) ? 1 : 0
        ));
    }
}


