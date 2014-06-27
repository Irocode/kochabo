<?php namespace Sefa\Repositories\OrderItems;
use Config;
use OrderItems;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class OrderItemsRepository extends Validator implements BaseRepositoryInterface

				{
				protected $perPage;
				protected $order_items;
				/**
				 * Rules
				 *
				 * @var array
				 */
				protected static $rules = [
				// 'first_name'    => 'required',
				// 'last_name'  => 'required',
				];
				public function __construct(OrderItems $order_items)

								{
								$config = Config::get('sfcms');
								$this->perPage = $config['modules']['per_page'];
								$this->order_items = $order_items;
						
								}
				public function all()

								{
								return $this->order_items->order_itemsBy('created_at', 'DESC')->get();
								}
				public function lists()

								{
								return $this->order_items->get()->lists('title', 'id');
								}
				public function paginate($perPage = null, $all = false)

								{
								if ($all) return $this->order_items->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
								return $this->order_items->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
								}
				public function find($id)

								{
								return $this->order_items->findOrFail($id);
								}
				public function create($attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								if ($this->isValid($attributes))
												{
												$this->order_items->fill($attributes)->save();
												return true;
												}
								throw new ValidationException('order_items validation failed', $this->getErrors());
								}
				public function update($id, $attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								$this->order_items = $this->find($id);
								if ($this->isValid($attributes))
												{
												$this->order_items->fill($attributes)->save();
												return true;
												}
								throw new ValidationException('order_items validation failed', $this->getErrors());
								}
				public function destroy($id)

								{
								$order_items = $this->order_items->find($id)->delete();
								}
				public function togglePublish($id)

								{
								$order_items = $this->order_items->find($id);
								$order_items->is_published = ($order_items->is_published) ? false : true;
								$order_items->save();
								return Response::json(array(
												'result' => 'success',
												'changed' => ($order_items->is_published) ? 1 : 0
								));
								}
				}



