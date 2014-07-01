<?php namespace Sefa\Repositories\Beispielbox;

use Config;
use beispielbox;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class BeispielboxRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $beispielbox;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = ['title' => 'required', 'content' => 'required', 'datetime' => 'required|date', ];
    public function __construct(beispielbox $beispielbox)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->beispielbox = $beispielbox;
    }
    public function all()

    {
        return $this->beispielbox->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->beispielbox->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->beispielbox->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->beispielbox->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->beispielbox->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->beispielbox->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('beispielbox validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->beispielbox = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->beispielbox->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('beispielbox validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $beispielbox = $this->beispielbox->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $beispielbox = $this->beispielbox->find($id);
        $beispielbox->is_published = ($beispielbox->is_published) ? false : true;
        $beispielbox->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($beispielbox->is_published) ? 1 : 0
        ));
    }
}


