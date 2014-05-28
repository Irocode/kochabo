<?php namespace Sefa\Repositories\kochabobox;

use Config;
use kochabobox;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class KochaboBoxRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $kochabobox;

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

    public function __construct(kochabobox $kochabobox) {

        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->kochabobox = $kochabobox;
    }

    public function all() {

        return $this->kochabobox->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->kochabobox->get()->lists('title', 'id');
    }

    public function paginate($perPage = null, $all=false) {

        if($all)
            return $this->kochabobox->orderBy('created_at', 'DESC')
            ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->kochabobox->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }

    public function find($id) {

        return $this->kochabobox->findOrFail($id);
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {

            $this->kochabobox->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('kochabobox validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->kochabobox = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->kochabobox->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('kochabobox validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $kochabobox = $this->kochabobox->find($id)->delete();
    }

    public function togglePublish($id) {

        $kochabobox = $this->kochabobox->find($id);
        $kochabobox->is_published = ($kochabobox->is_published) ? false : true;
        $kochabobox->save();

        return Response::json(array('result' => 'success', 'changed' => ($kochabobox->is_published) ? 1 : 0));
    }
}
