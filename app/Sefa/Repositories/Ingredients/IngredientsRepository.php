<?php namespace Sefa\Repositories\Ingredients;
use Config;
use Ingredients;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class IngredientsRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $ingredients;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(Ingredients $ingredients)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->ingredients = $ingredients;
    }
    public function all()

    {
        return $this->ingredients->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->ingredients->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->ingredients->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->ingredients->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->ingredients->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->ingredients->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('ingredients validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->ingredients = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->ingredients->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('ingredients validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $ingredients = $this->ingredients->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $ingredients = $this->ingredients->find($id);
        $ingredients->is_published = ($ingredients->is_published) ? false : true;
        $ingredients->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($ingredients->is_published) ? 1 : 0
        ));
    }
}


