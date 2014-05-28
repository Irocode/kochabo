<?php namespace Sefa\Repositories\aktuellerezepte;

use Config;
use aktuellerezepte;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class AktuellerezepteRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $aktuellerezepte;

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

    public function __construct(aktuellerezepte $aktuellerezepte) {

        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->aktuellerezepte = $aktuellerezepte;
    }

    public function all() {

        return $this->aktuellerezepte->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->aktuellerezepte->get()->lists('title', 'id');
    }

    public function paginate($perPage = null, $all=false) {

        if($all)
            return $this->aktuellerezepte->orderBy('created_at', 'DESC')
            ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->aktuellerezepte->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }

    public function find($id) {

        return $this->aktuellerezepte->findOrFail($id);
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {

            $this->aktuellerezepte->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('aktuellerezepte validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->aktuellerezepte = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->aktuellerezepte->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('aktuellerezepte validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $aktuellerezepte = $this->aktuellerezepte->find($id)->delete();
    }

    public function togglePublish($id) {

        $aktuellerezepte = $this->aktuellerezepte->find($id);
        $aktuellerezepte->is_published = ($aktuellerezepte->is_published) ? false : true;
        $aktuellerezepte->save();

        return Response::json(array('result' => 'success', 'changed' => ($aktuellerezepte->is_published) ? 1 : 0));
    }
}
