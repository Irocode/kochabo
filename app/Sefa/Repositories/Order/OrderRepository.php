<?php namespace Sefa\Repositories\Order;
use Config;
use Order;
use Order_Status_History;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class OrderRepository extends Validator implements BaseRepositoryInterface

				{
				protected $perPage;
				protected $order;
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
				public function __construct(Order $order,Order_Status_History $order_status_history)

								{
								$config = Config::get('sfcms');
								$this->perPage = $config['modules']['per_page'];
								$this->order = $order;
								$this->order_status_history = $order_status_history;
						
								}
				public function all()

								{
								return $this->order->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
								}
				public function lists()

								{
								return $this->order->get()->lists('title', 'id');
								}
				public function paginate($perPage = null, $all = false)

								{
								if ($all) return $this->order->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
								return $this->order->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
								}
				public function find($id)

								{
								return $this->order->findOrFail($id);
								}
				public function create($attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								if ($this->isValid($attributes))
												{
												$this->order->fill($attributes)->save();
												return true;
												}
								throw new ValidationException('order validation failed', $this->getErrors());
								}
				public function update($id, $attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								$this->order = $this->find($id);
								if ($this->isValid($attributes))
												{
												$this->order->fill($attributes)->save();
												return true;
												}
								throw new ValidationException('order validation failed', $this->getErrors());
								}
				public function destroy($id)

								{
								$order = $this->order->find($id)->delete();
								}
				public function togglePublish($id)

								{
								$order = $this->order->find($id);
								$order->is_published = ($order->is_published) ? false : true;
								$order->save();
								return Response::json(array(
												'result' => 'success',
												'changed' => ($order->is_published) ? 1 : 0
								));
								}
				}



