<?php namespace Sefa\Repositories\Products;
use Config;
use Products;
use Response;
use Photo;
use PhotoGallery;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class ProductsRepository extends Validator implements BaseRepositoryInterface

				{
				protected $perPage;
				protected $Products;
				protected $photoGallery;
				/**
				 * Rules
				 *
				 * @var array
				 */
				protected static $rules = ['product_name' => 'required', 'description' => 'required', ];
				public function __construct(Products $products, PhotoGallery $photoGallery)

								{
								$config = Config::get('sfcms');
								$this->perPage = $config['modules']['per_page'];
								$this->products = $products;
								}
				public function all()

								{
								return $this->products->orderBy('product_name', 'ASC')->where('is_published', 1)->get();
								}
				public function store()

								{
								$lastInsertedId = $this->products->id;
								$user_id = $this->photoGallery->lastInsertedId;
								$id = $this->photoGallery->create($attributes);
								}
				public function lists()

								{
								return $this->products->get()->lists('title', 'id');
								}
				public function paginate($perPage = null, $all = false)

								{
								if ($all) return $this->products->orderBy('product_name', 'ASC')->paginate(($perPage) ? $perPage : $this->perPage);
								return $this->products->orderBy('product_name', 'ASC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
								}
				public function find($id)

								{
								return $this->products->findOrFail($id);
								}
				public function create($attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								if ($this->isValid($attributes))
												{
												$this->products->fill($attributes)->save();
												$lastInsertedId = $this->products->id;
												$photoGallery = new PhotoGallery;
												$photoGallery->user_id = $lastInsertedId;
												return true;
												}
								throw new ValidationException('products validation failed', $this->getErrors());
								}
				public function update($id, $attributes)

								{
								$attributes['is_published'] = isset($attributes['is_published']) ? true : false;
								$this->products = $this->find($id);
								if ($this->isValid($attributes))
												{
												$this->products->fill($attributes)->save();
												return true;
												}
								throw new ValidationException('products validation failed', $this->getErrors());
								}
				public function destroy($id)

								{
								Photo::where('relationship_id', '=', $id)->delete();
								PhotoGallery::where('id', '=', $id)->delete();
								$products = $this->products->find($id)->delete();
								}
				}


