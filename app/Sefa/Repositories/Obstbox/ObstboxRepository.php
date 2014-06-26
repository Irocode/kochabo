<?php namespace Sefa\Repositories\Obstbox;

use Config;
use obstbox;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class ObstboxRepository extends Validator implements BaseRepositoryInterface

                {
                protected $perPage;
                protected $obstbox;
                /**
                 * Rules
                 *
                 * @var array
                 */
                protected static $rules = ['title' => 'required', 'content' => 'required', 'datetime' => 'required|date', ];
                public function __construct(obstbox $obstbox)

                                {
                                $config = Config::get('sfcms');
                                $this->perPage = $config['modules']['per_page'];
                                $this->obstbox = $obstbox;
                                }
                public function all()

                                {
                                return $this->obstbox->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
                                }
                public function lists()

                                {
                                return $this->obstbox->get()->lists('title', 'id');
                                }
                public function paginate($perPage = null, $all = false)

                                {
                                if ($all) return $this->obstbox->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
                                return $this->obstbox->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
                                }
                public function find($id)

                                {
                                return $this->obstbox->findOrFail($id);
                                }
                public function create($attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                if ($this->isValid($attributes))
                                                {
                                                $this->obstbox->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('obstbox validation failed', $this->getErrors());
                                }
                public function update($id, $attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                $this->obstbox = $this->find($id);
                                if ($this->isValid($attributes))
                                                {
                                                $this->obstbox->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('obstbox validation failed', $this->getErrors());
                                }
                public function destroy($id)

                                {
                                $obstbox = $this->obstbox->find($id)->delete();
                                }
                public function togglePublish($id)

                                {
                                $obstbox = $this->obstbox->find($id);
                                $obstbox->is_published = ($obstbox->is_published) ? false : true;
                                $obstbox->save();
                                return Response::json(array(
                                                'result' => 'success',
                                                'changed' => ($obstbox->is_published) ? 1 : 0
                                ));
                                }
                }


