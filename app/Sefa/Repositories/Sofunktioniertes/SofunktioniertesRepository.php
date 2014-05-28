<?php namespace Sefa\Repositories\sofunktioniertes;

use Config;
use sofunktioniertes;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class SofunktioniertesRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $sofunktioniertes;

    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
        'title'    => 'required',
        'content'  => 'required',
        'datetime' => 'required|date',
    ];

    public function __construct(sofunktioniertes $sofunktioniertes) {

        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->sofunktioniertes = $sofunktioniertes;
    }

    public function all() {

        return $this->sofunktioniertes->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->sofunktioniertes->get()->lists('title', 'id');
    }

    public function paginate($perPage = null, $all=false) {

        if($all)
            return $this->sofunktioniertes->orderBy('created_at', 'DESC')
            ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->sofunktioniertes->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }

    public function find($id) {

        return $this->sofunktioniertes->findOrFail($id);
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {

            $this->sofunktioniertes->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('sofunktioniertes validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->sofunktioniertes = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->sofunktioniertes->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('sofunktioniertes validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $sofunktioniertes = $this->sofunktioniertes->find($id)->delete();
    }

    public function togglePublish($id) {

        $sofunktioniertes = $this->sofunktioniertes->find($id);
        $sofunktioniertes->is_published = ($sofunktioniertes->is_published) ? false : true;
        $sofunktioniertes->save();

        return Response::json(array('result' => 'success', 'changed' => ($sofunktioniertes->is_published) ? 1 : 0));
    }
}
