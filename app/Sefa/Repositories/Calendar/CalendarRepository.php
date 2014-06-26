 <?php namespace Sefa\Repositories\Calendar;

use Config;
use Calendar;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class CalendarRepository extends Validator implements BaseRepositoryInterface

                {
                protected $perPage;
                protected $calendar;
                /**
                 * Rules
                 *
                 * @var array
                 */
                protected static $rules = ['title' => 'required', 'content' => 'required', 'datetime' => 'required', ];
                public function __construct(Calendar $calendar)

                                {
                                $config = Config::get('sfcms');
                                $this->perPage = $config['modules']['per_page'];
                                $this->calendar = $calendar;
                                }
                public function all()

                                {
                                return $this->calendar->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
                                }
                public function lists()

                                {
                                return $this->calendar->get()->lists('title', 'id');
                                }
                public function paginate($perPage = null, $all = false)

                                {
                                if ($all) return $this->calendar->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
                                return $this->calendar->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
                                }
                public function find($id)

                                {
                                return $this->calendar->findOrFail($id);
                                }
                public function create($attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                if ($this->isValid($attributes))
                                                {
                                                $this->calendar->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('Calendar validation failed', $this->getErrors());
                                }
                public function update($id, $attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                $this->calendar = $this->find($id);
                                if ($this->isValid($attributes))
                                                {
                                                $this->calendar->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('Calendar validation failed', $this->getErrors());
                                }
                public function destroy($id)

                                {
                                $calendar = $this->calendar->find($id)->delete();
                                }
                public function togglePublish($id)

                                {
                                $calendar = $this->calendar->find($id);
                                $calendar->is_published = ($calendar->is_published) ? false : true;
                                $calendar->save();
                                return Response::json(array(
                                                'result' => 'success',
                                                'changed' => ($calendar->is_published) ? 1 : 0
                                ));
                                }
                }


