<?php namespace Sefa\Repositories\Recipeingredient;
use Config;
use Recipeingredient;
use Recipe;
use Response;
use Sefa\Repositories\BaseRepositoryInterface as BaseRepositoryInterface;
use Sefa\Exceptions\Validation\ValidationException;
use Sefa\Repositories\AbstractValidator as Validator;

class RecipeingredientRepository extends Validator implements BaseRepositoryInterface

{
    protected $perPage;
    protected $recipe_ingredient;
     protected $recipe;
    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [

    'ingredient_id'    => 'required',
    'amount_2_persons'    => 'numeric',
    'amount_4_persons'    => 'numeric',
    'amount_6_persons'    => 'numeric',


    // 'first_name'    => 'required',
    // 'last_name'  => 'required',
    ];
    public function __construct(Recipeingredient $recipe_ingredient,Recipe $recipe)

    {
        $config = Config::get('sfcms');
        $this->perPage = $config['modules']['per_page'];
        $this->recipe_ingredient = $recipe_ingredient;
        $this->recipe = $recipe;

    }
    public function all()

    {
        return $this->recipe_ingredient->orderBy('created_at', 'DESC')->where('is_published', 1)->get();
    }
    public function lists()

    {
        return $this->recipe_ingredient->get()->lists('recipe_id', 'recipe_id');
    }
    public function paginate($perPage = null, $all = false)

    {
        if ($all) return $this->recipe_ingredient->orderBy('created_at', 'DESC')->paginate(($perPage) ? $perPage : $this->perPage);
        return $this->recipe_ingredient->orderBy('created_at', 'DESC')->where('is_published', 1)->paginate(($perPage) ? $perPage : $this->perPage);
    }
    public function find($id)

    {
        return $this->recipe_ingredient->findOrFail($id);
    }
    public function create($attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        if ($this->isValid($attributes))
        {
            $this->recipe_ingredient->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('recipe_ingredient validation failed', $this->getErrors());
    }
    public function update($id, $attributes)

    {
        $attributes['is_published'] = isset($attributes['is_published']) ? true : false;
        $this->recipe_ingredient = $this->find($id);
        if ($this->isValid($attributes))
        {
            $this->recipe_ingredient->fill($attributes)->save();
            return true;
        }
        throw new ValidationException('recipe_ingredient validation failed', $this->getErrors());
    }
    public function destroy($id)

    {
        $recipe_ingredient = $this->recipe_ingredient->find($id)->delete();
    }
    public function togglePublish($id)

    {
        $recipe_ingredient = $this->recipe_ingredient->find($id);
        $recipe_ingredient->is_published = ($recipe_ingredient->is_published) ? false : true;
        $recipe_ingredient->save();
        return Response::json(array(
            'result' => 'success',
            'changed' => ($recipe_ingredient->is_published) ? 1 : 0
        ));
    }
}


