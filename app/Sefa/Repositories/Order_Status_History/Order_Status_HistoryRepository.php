<?php namespace Sefa\Repositories\Order_Status_History;
use Config;
use Order_Status_History;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class Order_Status_HistoryRepository extends Validator implements BaseRepositoryInterface

				{
				protected $perPage;
				protected $order_status_history;
				/**
				 * Rules
				 *
				 * @var array
				 */
				protected static $rules = [
				// 'first_name'    => 'required',
				// 'last_name'  => 'required',
				];
				public function __construct(Order_Status_History $order_status_history)

								{
								$config = Config::get('sfcms');
								$this->perPage = $config['modules']['per_page'];
								$this->order_status_history = $order_status_history;
								}
				public function all()

								{
								return $this->order_status_history->order_status_historyBy('created_at', 'DESC')->where('is_published', 1)->get();
								}
				public function lists()

								{
								return $this->order_status_history->get()->lists('title', 'id');
								}
				public function paginate($perPage = null, $all = false)

								{
								if ($all) return $this->order_status_history->order_status_historyBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
								return $this->order_status_history->order_status_historyBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
								}
				public function find($id)

								{
								return $this->order_status_history->findOrFail($id);
								}
				public function create($attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								if ($this->isValid($attributes))
												{
												$this->order_status_history->fill($attributes)->save();
												return true;
												}
								throw new ValidationException('order_status_history validation failed', $this->getErrors());
								}
				public function update($id, $attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								$this->order_status_history = $this->find($id);
								if ($this->isValid($attributes))
												{
												$this->order_status_history->fill($attributes)->save();
												return true;
												}
								throw new ValidationException('order_status_history validation failed', $this->getErrors());
								}
				public function destroy($id)

								{
								$order_status_history = $this->order_status_history->find($id)->delete();
								}
				public function togglePublish($id)

								{
								$order_status_history = $this->order_status_history->find($id);
								$order_status_history->is_published = ($order_status_history->is_published) ? false : true;
								$order_status_history->save();
								return Response::json(array(
												'result' => 'success',
												'changed' => ($order_status_history->is_published) ? 1 : 0
								));
								}
				}



