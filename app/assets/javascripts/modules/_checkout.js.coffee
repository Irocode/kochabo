$ ->
  
  $("body").on "click", "#checkout_form [type=submit]", (e) =>
    e.preventDefault()
    $(e.currentTarget).button("loading")
    
    switch $("#checkout_form").data("step")
      when "product"  then cacheProductId()
      when "addons"   then proceedToCheckout()
      else alert "Ooops! Leider ist beim Checkout ein Fehler aufgetreten :("
        
  $("body").on "click", "[data-action='addon_add']", (e) =>
    e.preventDefault()
    addon_id = $(e.currentTarget).parents(".addon-list-item").data("id")
    $(".addons-list").trigger "addons:update", { action: "loading", id : addon_id }
    addAddonToCart addon_id
    
  $("body").on "click", "[data-action='addon_remove']", (e) =>
    e.preventDefault()
    removeAddonFromCart $(e.currentTarget).parents(".cart-item").data("id")

  cacheProductId = ->
  
    if ( $productID = $("#product_id") ).length
      simpleStorage.set( "product_id", $productID.val() )
    
    $("#checkout_form").submit()  
      
  proceedToCheckout = ->
    
    # clear magento's shopping cart
    req = $.ajax
      url: "//kochabo.at/api/kochabo.php"
      data: 
        method : "clearCart"
      dataType: "jsonp"
      type: "GET"
    .complete ( data ) =>
      $("#checkout_form").submit()
      
  getAddonData = (addon_id) ->
    # return addon data for id
    for addon, data of window.addons
      return data if data.id is addon_id     

  addAddonToCart = (addon_id) =>
    
    # compile handlebars template
    tmpl = Handlebars.compile $("#cart-item").html()
    
    # set context for template
    context       = getAddonData(addon_id)
    context.type  = "addon"
    
    # append rendered handlebars template
    $("#checkout_cart_sum").before tmpl(context)
    
    $("#checkout_form").trigger "cart:update", { action: "add", id : addon_id } 
    
  removeAddonFromCart = (addon_id) ->
    $(".cart-item[data-id=#{addon_id}]").remove()
    $(".addons-list").trigger "addons:update", { action: "reset", id : addon_id }
    $("#checkout_form").trigger "cart:update", { action: "remove", id : addon_id }
    
  $("body").on "addons:update", ".addons-list", (e, data) ->
    $target = $(".addon-list-item[data-id=#{data.id}]")
    $target.toggleClass("disabled")
    $target.find("[data-action=addon_add]").button(data.action)
    
  $("body").on "cart:update", "#checkout_form", (e, data) =>
    current_addons = $("#addons_id").val()
    $("#addons_id").val updateCommaSeparatedString( current_addons, data.id, data.action )
    
    console.log $("#addons_id").val()  
    
  updateCommaSeparatedString = (string, value, action) ->
    switch action
      when "add"
        string = if string is "" then value else (string + "," + value)
      when "remove"
        tmp = string.split(',')
        index = tmp.indexOf(String(value))
        if index != -1
          tmp.splice(index, 1)
          string = tmp.join(',')
    
    return string
        
        
        
    
    
      
    
        

    
