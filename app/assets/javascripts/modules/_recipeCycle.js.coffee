$ ->
        
  $("body").on "click", ".panel-heading a", (e, a) =>
    if $(e.currentTarget).parents('.panel-heading').siblings('.panel-collapse').hasClass('in') or $(e.currentTarget).parents('.panel').hasClass("disabled") or $(".panel-collapse.collapsing").length > 0
      e.stopPropagation()
      return false    
        
  startCycle = ( $el )=>  
    @recipeCycle = window.interval $el.data("interval"), ->
      if $(".panel-collapse.collapsing", $el).length is 0
        if ($next = $(".panel-collapse.in", $el).parents(".panel").next()).length
          $next.find("[data-toggle='collapse']", $el).trigger("click")
        else
          $(".panel:first", $el).find("[data-toggle='collapse']").trigger("click")
  
  
  
  $(".recipes-accordion[data-cycle=true]").on "accordion:cycle", =>      
    if ($accordion = $(".recipes-accordion[data-cycle=true]")).length
      _interval = $accordion.data("interval") 

      startCycle( $accordion )
    
      $(".recipes-accordion").on "mouseover", (e) =>
        clearInterval @recipeCycle

      $(".recipes-accordion").on "mouseout", (e) =>
        startCycle( $accordion )
