window.recipeFetcher = ( args ) ->
         
  loadRecipes = =>
    
    # ajax call
    req = $.ajax
      url: options.api
      data: options.filter
      dataType: "jsonp"
      type: "GET"
      beforeSend: =>
        options.beforeSend()
        
    .done (data) =>
      if !data.error
        parseJSON data      
        options.onSuccess()
      else
        options.onError( data.error )
  
    .fail (data) =>      
      ajaxFail "Ooops! Rezepte konnten leider nicht geladen werden :("
      options.onError()
      
  parseJSON = ( json ) =>
    
    recipeBoxes = 
      vegan   : []
      veggie  : []
      classic : []
      fitness : []
    
    if options.filter.type is "all"
      
      _recipes = []

      for recipe in json.recipes
        _recipes.push buildRecipe recipe, index
      
      options.onComplete( _recipes )
      
    else 
      # split recipes by box type
      for recipe in json.recipes
        if recipe.isVegan
          recipeBoxes.vegan.push recipe
        else if recipe.isVeggie
          recipeBoxes.veggie.push recipe
        else if recipe.isFit
          recipeBoxes.fitness.push recipe
        else
          recipeBoxes.classic.push recipe
            
      # build custom json format
      _recipeBoxes = {}
    
      for box, recipes of recipeBoxes
        _recipes = []
        for recipe, index in recipes
          _recipes.push buildRecipe recipe, index
        _recipeBoxes[box] = _recipes
    
      options.onComplete( _recipeBoxes ) 
        
          
  buildRecipe = ( recipe, index ) ->
    
    _filter = []
    
    # check for recipe attributes
    if recipe.isFish
      _filter.push "fish"
    if recipe.isMeat
      _filter.push "meat"
    if recipe.isVegetarian
      _filter.push "veggie"
    if recipe.isVegan
      _filter.push "vegan"
    if recipe.isGlutenFree
      _filter.push "glutenfree"
    if recipe.LactoseFree
      _filter.push "lactosefree"
    
            
    # recipe data
    _recipe =
      id: recipe.id
      filter: "[\"#{_filter.join("\",\"")}\"]"
      url: recipe.url
      upcoming: if (Number(recipe.lastUsedYear) is moment().year() and Number(recipe.lastUsedCw) >= moment().week()) then recipe.lastUsedCw else false
      imageBig: recipe.imageBig
      image720: recipe.image720
      name: recipe.name
      duration: recipe.duration
      ingredients: recipe.ingredientsCount
      order: recipe.order
      visibility: if index is 0 then "in" else false
          

  ajaxFail = (msg) ->
    alert msg
    
  defaults =
    api         : "//api.kochabo.at/api/recipes.php"
    filter:       
      type      : "all"
    beforeSend  : ->
    onSuccess   : ->
    onError     : ->
    onComplete  : ->
  

  options = $.extend true, defaults, args

  loadRecipes()