<?php namespace Sefa\Repositories\Recipe;
use Config;
use Recipe;
use Recipe_ingredient;
use Response;
use Image;
use File;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;
class RecipeRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $recipe;
    protected $recipe_ingredient;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(Recipe $recipe, Recipe_ingredient $recipe_ingredient)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->recipe = $recipe;
        $this->recipe_ingredient = $recipe_ingredient;
    }
    public function all()

    {
        return $this->recipe->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->recipe->get()->lists('title', 'id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->recipe->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->recipe->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->recipe->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->recipe->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('recipe validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->recipe = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->recipe->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('recipe validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $recipe = $this->recipe->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $recipe = $this->recipe->find($id);
        $recipe->is_published = ($recipe->is_published) ? false : true;
        $recipe->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($recipe->is_published) ? 1 : 0
        ));
    }
}


