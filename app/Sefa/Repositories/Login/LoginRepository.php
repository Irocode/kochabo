<?php namespace Sefa\Repositories\login;

use Config;
use login;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class LoginRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $login;

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

    public function __construct(login $login) {

        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->login = $login;
    }

    public function all() {

        return $this->login->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->login->get()->lists('title', 'id');
    }

    public function paginate($perPage = null, $all=false) {

        if($all)
            return $this->login->orderBy('created_at', 'DESC')
            ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->login->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }

    public function find($id) {

        return $this->login->findOrFail($id);
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {

            $this->login->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('login validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->login = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->login->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('login validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $login = $this->login->find($id)->delete();
    }

    public function togglePublish($id) {

        $login = $this->login->find($id);
        $login->is_published = ($login->is_published) ? false : true;
        $login->save();

        return Response::json(array('result' => 'success', 'changed' => ($login->is_published) ? 1 : 0));
    }
}
