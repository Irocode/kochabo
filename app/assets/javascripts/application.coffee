#= require_tree ./modules

window.delay    = (ms, func) -> setTimeout func, ms
window.interval = (ms, func) -> setInterval func, ms

$ ->
  
  $body   = $("body")
  $header = $("#header")
  $navbar = $(".navbar", $header)
  $social = $(".social", $navbar)
  $cta    = $(".call-to-action", $navbar)
  $filter = $(".recipe-filter")
  $cart   = $(".sidebar-cart") 

  $navbar
  .affix
    offset:
      top: $header.height() - $navbar.height()

  if $filter.length
    $filter
      .affix
        offset:
          top: $filter.offset().top - $navbar.height()

    $filter.on "affix.bs.affix", ->
      $filter.css
        top: $navbar.height()
      
  if $cart.length
    $cart.affix
      offset:
        top: $cart.offset().top - parseInt($cart.css("marginTop")) - $navbar.height()
        bottom: $(document).height() - ($cart.parents("section").offset().top + $cart.parents("section").height())
    
    $cart.on "affix.bs.affix", ->
      $cart.css
        top: $navbar.height()
          
          

  
      
  $(".eq-heights").eqHeight(".eq-height")
  
  $("body").on "click", ".nav-tabs a", (e) ->
    e.preventDefault()
    $(@).tab "show"
    
  $(".tooltip-external").tooltip
    html: true
    placement: "auto top"
    template: '<div class="tooltip ka-tooltip" role="tooltip"><div class="tooltip-prepend"><i class="fa fa-external-link"></i></div><div class="tooltip-inner"></div><div class="tooltip-arrow"></div></div>'
    
  $("body").tooltip
    selector: "[data-toggle=tooltip]"
  
  
  $("body").on "click", "#newsletter-inline .btn", (e) ->
    e.preventDefault()
    $("#newsletter-signup-inline").focus()
    $(@).velocity "callout.shake", 
      duration: 600
      queue: false 


  # hoverTimeout = null
  # $(window).on "scroll touchmove", =>
  #
  #   clearTimeout hoverTimeout
  #   $body.hasClass("no-hover") or $body.addClass("no-hover")
  #
  #   hoverTimeout = window.delay 250, ->
  #     $body.removeClass("no-hover")


  
  $(".ka-selectbox").each ->
    $el = $(this)
    
    $el.on "selectbox:create", =>
      $el.selectOrDie
        customClass: "ka-selectbox"
        onChange: ->
          $el.trigger "selectbox:update", $(@).val()
    
    $el.trigger "selectbox:create" if !$el.data("async")
            
  window.delay 1200, ->
    $window.spinner = $("#spinner")
    if $window.spinner.is(":visible")
      $window.spinner.velocity
        opacity: 0
      ,
        duration: 600
        complete: ->
          $window.spinner.css "display", "none"
          
          
  # if Modernizr.cssanimations
  #   $("#choose-box .ka-box").css
  #     opacity: 0
  #   window.delay 400, ->
  #     $("#choose-box").addClass("animated")
      
    
  $(".input-group .form-control").on "focus", ->
    $(@).parents(".input-group").addClass("input-group-active")

  $(".input-group .form-control").on "blur", ->
    $(@).parents(".input-group").removeClass("input-group-active")
    
    
    
