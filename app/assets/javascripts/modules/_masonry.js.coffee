$ ->
  
    
  @handlerList = []
  
  $(document).on "masonry:refresh", ".masonry", (e) =>
    
    $masonry = $(e.currentTarget)
    

    $masonry.imagesLoaded =>
      
      $masonry.addClass("masonryfied")
      
      @handler = $masonry.find("> div")
      @handlerList.push @handler
          
      # Prepare layout options.
      options =
        align: 'left'
        itemWidth: 300 # Optional min width of a grid item
        autoResize: true # This will auto-update the layout when the browser window is resized.
        container: $masonry # Optional, used for some extra CSS styling
        flexibleWidth: "50%" # Optional, the maximum width of a grid item
        offset: 30
        fillEmptySpace: true

  
      # Get a reference to your grid items.
      $window = $(window)
      $window.resize ->
        windowWidth = $window.width()
        newOptions = flexibleWidth: "50%"
    
        # Breakpoint
        newOptions.flexibleWidth = "100%"  if windowWidth < 1024
        @handler.wookmark newOptions
  
      # Call the layout function.
      @handler.wookmark options
      $masonry.trigger "masonry:ready"
      
  $("body").on "click", ".filter-options li a", (e) =>
    e.preventDefault()
    
    $("body").animate
      scrollTop: 370
    , '300', 'swing', =>

      $(".filter-options li a").removeClass("active")
      $(e.currentTarget).addClass("active")
    
      activeFilter = []

      if $(e.currentTarget).data("filter") is undefined
        activeFilter
      else
        activeFilter.push $(e.currentTarget).data("filter")
      
      for handler in @handlerList
        handler.wookmarkInstance.filter(activeFilter)
      
      @handlerList[@handlerList.length-1].trigger "masonry:ready"
        
      
    
      
      
  
