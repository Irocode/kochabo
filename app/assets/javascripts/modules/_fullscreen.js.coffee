$ ->

  clientHeight = $(window).height()
  
  $("[data-fullscreen]").each ->
    customOffset = $(@).attr("data-offset") or 0
    minHeight = parseInt( $(@).css("min-height"), 10 )
      
    if $(@).attr("data-fullscreen") is "flexible"
      elOffset = $(@).offset()
      _height = clientHeight - customOffset - elOffset.top
      newHeight = if _height > 400 then _height else 400
      unless newHeight > minHeight 
        $(@).css
          "min-height": 0
        .height newHeight 