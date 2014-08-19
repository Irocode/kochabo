$ ->
  $("[data-lightbox='video']").magnificPopup
    type: "iframe"
    preloader: false
    fixedContentPos: true
    closeBtnInside: false
    closeMarkup: "<button class='mfp-close'>✕</button>" 
    callbacks: 
      markupParse: (template, values, item) ->
        if values.iframe_src.indexOf("vimeo.com") >= 0
          values.iframe_src += "&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=84bc28"
      open: ->
        target = this.currItem.el[0]
        history.pushState(video: target.href, "&#9658; " + target.title, "#videoplayer") if (Modernizr.history) 
      close: =>      
        history.pushState({}, '', "#{location.pathname}") if (Modernizr.history) 
 
  $(window).on "popstate", (e) ->
    if location.href.indexOf("#videoplayer")
      $.magnificPopup.close()
      
