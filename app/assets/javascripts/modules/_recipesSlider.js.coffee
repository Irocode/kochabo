$ ->
  
  if ($container = $(".recipe-week-view")).length
    
    $("body").on "click", ".ka-week-switch a", (e) ->
      e.preventDefault()
      
      _weeks = ["current", "next", "weekafternext"]
      _week = $(".recipe-week-view").data("week")
      
      _ok = $.inArray(_week, _weeks) 
      
      if _ok > -1
        changeWeek _weeks[ _ok+1 ]
      else
        console.log "error"


      # switch e.currentTarget.className
      #   when "prev" then changeWeek $(e.currentTarget).parents("[data-week]").prev().data("week")
      #   when "next" then changeWeek $(e.currentTarget).parents("[data-week]").next().data("week")
      
    
    changeWeek = ( week ) ->
      console.log "change to #{week}"
      # compile handlebars template  
      
    
    # compile handlebars template
    tmpl = Handlebars.compile $("#recipe-template").html()

    rl = window.recipeFetcher
      filter:
        type: $container.data("week")
      onComplete: (data) =>

        $(".recipes-list").each ->

          $el = $(this)
        
          # build context for handlebars
          context =
            recipes : data[($el.data("box-type"))]

          # append rendered handlebars template
          $el.append tmpl(context)
       
          # append placeholder
          placeholder = 6 - $el.children(".col-sm-4").length
          for num in [1..placeholder]
            $el.append "<div class='col-sm-4'><div class='placeholder'><img src='/images/logos/kochabo-leafs-gradient.svg'></div></div>"
  
