<?php namespace Sefa\Repositories\Gutschein;

use Config;
use gutschein;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class GutscheinRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $gutschein;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = ['title' => 'required', 'content' => 'required', 'datetime' => 'required|date', ];
    public function __construct(gutschein $gutschein)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->gutschein = $gutschein;
    }
    public function all()

    {
        return $this->gutschein->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->gutschein->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->gutschein->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->gutschein->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->gutschein->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->gutschein->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('gutschein validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->gutschein = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->gutschein->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('gutschein validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $gutschein = $this->gutschein->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $gutschein = $this->gutschein->find($id);
        $gutschein->is_published = ($gutschein->is_published) ? false : true;
        $gutschein->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($gutschein->is_published) ? 1 : 0
        ));
    }
}


