$ ->
  
  if ($elMasonry = $("#recipe-masonry")).length
    
    $(window).on "hashchange", ->
      page = location.hash.match(/seite-([0-9]+)/)
      if page
        if ( $el = $("[data-page='#{page[1]}']") ).length
          $("body").animate
            scrollTop: $el.offset().top
          , '300', 'swing'
        else
          location.reload()
    
    appendRecipePage = ( page ) ->
      rl = window.recipeFetcher
        filter:
          type: "all"
          page: page
          pagesize: 61
        onError: ( error ) =>
          $(".recipes-loader a").text("Du hast das Ende der Kochabo Rezeptewelt entdeckt")
        onComplete: (data) =>
        
          # build context for handlebars
          context =
            page: page
            url: location.origin + location.pathname + "#!seite-#{page}"
            recipes : data

          # append rendered handlebars template
          $elMasonry.append tmpl(context)
          history.pushState({}, '', location.origin + location.pathname + "#!seite-#{page}")
       
          $(".page:last .masonry").trigger("masonry:refresh")
          
    
    # compile handlebars template
    tmpl = Handlebars.compile $("#recipe-template").html()
    
    # is page hash set?
    hash = location.hash.match(/seite-([0-9]+)/)
    startPage = if hash then hash[1] else 1
    
    # load very first batch of recipes
    appendRecipePage startPage
        
    $("body").on "masonry:ready", ".masonry", (e) =>
      $(".recipes-loader > a").removeAttr("disabled").find(".fa").removeClass("fa-spin")
      $(".recipes-count").text $(".ka-recipe").not(".inactive").length
  
    $("body").on "click", ".recipes-loader > a", (e) =>
      e.preventDefault()

      $(".recipes-loader a").attr("disabled", "disabled")
      $(".recipes-loader .fa").addClass("fa-spin")
      
      appendRecipePage( $(".page:last").data("page") + 1 )
      
      
        

