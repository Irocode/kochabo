<?php namespace Sefa\Repositories\Deliveryzipcode;
use Config;
use Deliveryzipcode;
use Logisticianmanager;
use Response;
use Input;
use Searchbackenddeliveryzipcode;
use Notification;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
class DeliveryzipcodeRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $Deliveryzipcode;
    protected $logisticianmanager;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = ['zip' => 'required|numeric|min:4',
    //  'password' => 'required|min:8',
    ];
    public function __construct(Deliveryzipcode $deliveryzipcode, Logisticianmanager $logisticianmanager)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->deliveryzipcode = $deliveryzipcode;
        $this->logisticianmanager = $logisticianmanager;
    }
    public function all()

    {
        return $this->deliveryzipcode->orderBy('zip', 'ASC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->deliveryzipcode->get()->lists('zip', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->deliveryzipcode->orderBy('zip', 'ASC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->deliveryzipcode->orderBy('zip', 'ASC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->deliveryzipcode->findOrFail($id);
    }
    public function create($attributes)

    {
        $zip = Input::get('zip');
        $zipinput = Input::get('zip');
        if (sizeof(Deliveryzipcode::where('zip', '=', Input::get('zip'))->get()) > 0)
        {
            Notification::warning('Postleitzahl ist schon vorhanden');
            return 'Error :  exists';
        }
        else
        {
            $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
            if ($this->isValid($attributes))
            {
                Notification::success('Postleitzahl wurde übernommen');
                $this->deliveryzipcode->fill($attributes)->save();
                return true;
            };
            // Errorhandling Anfang
            // $x="1"; $y="1";
            // if($zipinput==$zipdb){
            // Notification::warning($zipinput);
            // };
            // Errorhandling Ende
        }
        throw new ValidationException('deliveryzipcode validation failed', $this->getErrors());
    }
    /*
    public function update($id, $attributes) {
    $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
    $this->deliveryzipcode = $this->find($id);
    if ($this->isValid($attributes)) {
    $this->deliveryzipcode->fill($attributes)->save();
    return true;
    }
    */
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->deliveryzipcode = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->deliveryzipcode->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('deliveryzipcode validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        // $affectedRows = Address::where('user_id', '=', $id)->delete();
        $deliveryzipcode = $this->deliveryzipcode->find($id)->delete();
    }
    public function lieferzeiten_update($id)

    {
        $deliveryzipcode = $this->deliveryzipcode->find($id);
        $zip = $deliveryzipcode->zip;
        $affectedRows = Deliveryzipcode::where('id', '=', $id)->update(array(
            'zip' => $zip
        ));
        $deliveryzipcode->save();
        $deliveryzipcode = $this->deliveryzipcode->find($id);
        $deliveryzipcode->is_published = ($deliveryzipcode->is_published) ? false : true;
        $deliveryzipcode->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($deliveryzipcode->is_published) ? 1 : 0
        ));
        return true;
    }
}


