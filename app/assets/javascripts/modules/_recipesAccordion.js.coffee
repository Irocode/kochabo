$ ->
  
  if $(".recipes-preview-slider").length
    
    $("body").on "click", ".ka-week-switch a", (e) ->
      e.preventDefault()
      switch e.currentTarget.className
        when "prev" then changeWeek $(e.currentTarget).parents("[data-week]").prev().data("week")
        when "next" then changeWeek $(e.currentTarget).parents("[data-week]").next().data("week")
      _current = $(e.currentTarget).parents("[data-week]").data("week")
      
      
    $("body").on "selectbox:update", ".ka-selectbox", ( e, val ) ->
      if e.target.id is "recipes-delivery-dates"
        changeWeek val
      
    changeWeek = ( week ) ->
      _weeks = ["current", "next", "weekafternext"]
      
      $(".recipes-preview, .recipes-placeholder").addClass("hide")
      
      if $.inArray(week, _weeks) > -1
        $("[data-week='#{week}']").removeClass("hide")
      else
        $(".recipes-placeholder").removeClass("hide")
        console.log "error"
    
    togglePanelVisibility = ( visible, $elAccordion ) ->
      $elPanels = $(".panel", $elAccordion)
      if $elPanels.length > visible
        $elPanels.each ->
          $el = $(this)
          if $el.data("order") > visible
            $("[data-toggle='collapse']", $elAccordion).first().trigger "click" if $el.children(".panel-collapse").hasClass("in")
            $el
            .addClass "disabled"
            .attr "title", "Dieses Rezept ist in der #{visible}er Box nicht enthalten"
      else
        $elPanels
        .removeClass "disabled"
        .attr "title", ""
    
    # compile handlebars template
    tmpl = Handlebars.compile $("#recipe-template").html()
  
    $(".recipes-preview").each ->
      $el = $(this)
    
      rf = window.recipeFetcher
        filter:
          type: $el.data("week")
        onComplete: (data) =>
      
          # build context for handlebars
          context = 
            token   : "acc-#{$el.data("week")}-#{$el.data("box-type")}"
            week    : $el.data("week")
            recipes : data[($el.data("box-type"))]
        
          # append rendered handlebars template
          $el.append tmpl(context)
          
          togglePanelVisibility $("input[name='box_recipe_count']:checked").val() * 1, $el 

          $("input[name='box_recipe_count']:radio").on "change", ->
            togglePanelVisibility $("input[name='box_recipe_count']:checked").val() * 1, $el 
        
  
