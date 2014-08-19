window.centerElements = ->

  init = ->    
    @$centerX  = $(".center-x")
    @$centerY  = $(".center-y")
  
    @$window = $(window)
      
    resizeHandler()
      
    @$window.on "load resize orientationchange", =>
      resizeHandler() 


  resizeHandler = ->
    centerX()
    centerY()

  
  centerX = ->
    @$centerX.each ->
      $el = $(@)
      $el
      .css
        marginLeft: -($el.width() / 2)
      .addClass("centered-x")

  centerY = ->
    @$centerY.each ->
      $el = $(@)
      $el
      .css
        marginTop: -($el.height() / 2)
      .addClass("centered-y")
      
  init()

$ ->
  window.centerElements()