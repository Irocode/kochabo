<?php namespace Sefa\Repositories\Offer;

use Config;
use offer;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class OfferRepository extends Validator implements BaseRepositoryInterface

                {
                protected $perPage;
                protected $offer;
                /**
                 * Rules
                 *
                 * @var array
                 */
                protected static $rules = ['title' => 'required', 'content' => 'required', 'datetime' => 'required|date', ];
                public function __construct(offer $offer)

                                {
                                $config = Config::get('sfcms');
                                $this->perPage = $config['modules']['per_page'];
                                $this->offer = $offer;
                                }
                public function all()

                                {
                                return $this->offer->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
                                }
                public function lists()

                                {
                                return $this->offer->get()->lists('title', 'id');
                                }
                public function paginate($perPage = null, $all = false)

                                {
                                if ($all) return $this->offer->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
                                return $this->offer->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
                                }
                public function find($id)

                                {
                                return $this->offer->findOrFail($id);
                                }
                public function create($attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                if ($this->isValid($attributes))
                                                {
                                                $this->offer->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('offer validation failed', $this->getErrors());
                                }
                public function update($id, $attributes)

                                {
                                $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
                                $this->offer = $this->find($id);
                                if ($this->isValid($attributes))
                                                {
                                                $this->offer->fill($attributes)->save();
                                                return true;
                                                }
                                throw new ValidationException('offer validation failed', $this->getErrors());
                                }
                public function destroy($id)

                                {
                                $offer = $this->offer->find($id)->delete();
                                }
                public function togglePublish($id)

                                {
                                $offer = $this->offer->find($id);
                                $offer->is_published = ($offer->is_published) ? false : true;
                                $offer->save();
                                return Response::json(array(
                                                'result' => 'success',
                                                'changed' => ($offer->is_published) ? 1 : 0
                                ));
                                }
                }


