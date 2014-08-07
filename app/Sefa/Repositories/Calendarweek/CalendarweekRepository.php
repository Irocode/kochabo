<?php namespace Sefa\Repositories\Calendarweek;
use Config;
use Calendarweek;
use Response;
use Str;
use Session;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class CalendarweekRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $calendarweek;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(Calendarweek $calendarweek)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->calendarweek = $calendarweek;
    }
    public function all()

    {
        return $this->calendarweek->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->calendarweek->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->calendarweek->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->calendarweek->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->calendarweek->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->calendarweek->fill($attributes)->save();
            $lastInsertedId= $this->calendarweek->id;
           
            $lastInsertedId= $this->calendarweek->id;      
     
              
              Session::put('lastInsertedId', $lastInsertedId);

            return true;
        }
        throw new ValidationException('calendarweek validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->calendarweek = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->calendarweek->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('calendarweek validation failed', $this->getErrors());

       
        
    }
    public function destroy($id)

    {
        $calendarweek = $this->calendarweek->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $calendarweek = $this->calendarweek->find($id);
        $calendarweek->is_published = ($calendarweek->is_published) ? false : true;
        $calendarweek->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($calendarweek->is_published) ? 1 : 0
        ));
    }
}


