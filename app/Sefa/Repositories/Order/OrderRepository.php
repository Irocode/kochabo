<?php namespace Sefa\Repositories\Order;
use Config;
use Order;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class OrderRepository extends Validator implements BaseRepositoryInterface

				{
				protected $perPage;
				protected $order;
				/**
				 * Rules
				 *
				 * @var array
				 */
				protected static $rules = [
				// 'first_name'    => 'required',
				// 'last_name'  => 'required',
				];
				public function __construct(Order $order)

								{
								$config = Config::get('sfcms');
								$this->perPage = $config['modules']['per_page'];
								$this->order = $order;
						
								}
				public function all()

								{
								return $this->order->orderBy('created_at', 'DESC')->get();
								}
				public function lists()

								{
								return $this->order->get()->lists('created_at', 'id');
								}
				public function paginate($perPage = null, $all = false)

								{
								if ($all) return $this->order->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
								return $this->order->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
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
		
				}



