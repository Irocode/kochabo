<?php
class RecipeController extends BaseController {

    /**
     * Post Model
     * @var Post
     */
    protected $recipe;


    /**
     * Inject the models.
     * @param Recipe $recipe
     */
    public function __construct()
    {
       
        $response = file_get_contents('http://api.kochabo.at/api/recipes.php?id=390');
        $result = json_decode($response);

        $this->recipe = $result->recipe;
    }

	/**
	 * Returns all the recipes.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		// Get all the recipes
        $response = file_get_contents('http://api.kochabo.at/api/recipes.php?type=all');

        dd($response);
		// Show the page
		return View::make('frontend/recipes/index', compact('recipes'));
	}

	/**
	 * View a recipe.
	 *
	 * @param  string  $slug
	 * @return View
	 * @throws NotFoundHttpException
	 */
	public function getView($slug)
	{
        // TODO: Error handling
        $response = file_get_contents('http://api.kochabo.at/api/recipes.php?slug=' . urlencode($slug));
        $recipe = json_decode($response)->recipe;



		// Get this blog post data
		if (is_null($recipe))
		{
			// If we ended up in here, it means that
            // a recipe does not exist or cannot be returned by the API.
			// So, this means that it is time for
			// 404 error page.
			return App::abort(404);
		}

		// Show the page
		return View::make('frontend/recipes/view_recipe', compact('recipe'));
	}




	





}
