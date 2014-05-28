<?php namespace Sefa\Repositories\Test;

use Article;
use Config;
use test;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class TestRepository extends Validator implements BaseRepositoryInterface {

    protected $perPage;
    protected $test;
     protected $perPageFooter;

    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
        'hl_ueberuns'    => 'required',
        'hl_rezepte'  => 'required',
        'hl_contact'  => 'required',
        'ct_ueberuns'  => 'required',
        'ct_rezepte'  => 'required',
        'ct_contact'  => 'required',




       
    ];


   




    public function __construct(test $test) {

        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->test = $test;
        $this->perPageFooter = $config['modules']['per_page_footer'];
    }

    public function all() {

        return $this->test->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->get();
    }

    public function lists() {

        return $this->test->get()->lists('title', 'id');
    }



    



    public function paginate($perPage = null, $all=false) {

        if($all)
            return $this->test->orderBy('created_at', 'DESC')
            ->paginate(($perPage) ? $perPage : $this->perPage);

        return $this->test->orderBy('created_at', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPage) ? $perPage : $this->perPage);
    }




      public function paginate_footer($perPageFooter = null, $all=false) {

        if($all)
             return $this->article->with('tags')->orderBy('id', 'DESC')
            ->paginate(($perPageFooter) ? $perPageFooter : $this->perPageFooter);

        return $this->article->with('tags')->orderBy('id', 'DESC')
            ->where('is_published', 1)
            ->paginate(($perPageFooter) ? $perPageFooter : $this->perPageFooter);
    }

    

    public function find($id) {

        return $this->test->findOrFail($id);
    }

    public function create($attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        if ($this->isValid($attributes)) {

            $this->test->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('test validation failed', $this->getErrors());
    }

    public function update($id, $attributes) {

        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;

        $this->test = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->test->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('test validation failed', $this->getErrors());
    }

    public function destroy($id) {

        $test = $this->test->find($id)->delete();
    }

    public function togglePublish($id) {

        $test = $this->test->find($id);
        $test->is_published = ($test->is_published) ? false : true;
        $test->save();

        return Response::json(array('result' => 'success', 'changed' => ($test->is_published) ? 1 : 0));
    }
}
