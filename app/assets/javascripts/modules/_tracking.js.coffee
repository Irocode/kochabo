# Log all jQuery AJAX requests to Google Analytics
# See: http://www.alfajango.com/blog/track-jquery-ajax-requests-in-google-analytics/
if typeof ga isnt "undefined" and ga isnt null
  $(document).ajaxSend (event, xhr, settings) ->
    ga "send", "pageview", settings.url

# Track JavaScript errors in Google Analytics
# See: https://github.com/h5bp/html5-boilerplate/blob/master/doc/extend.md#track-javascript-errors-in-google-analytics
((window) ->
  link = (href) ->
    a = window.document.createElement("a")
    a.href = href
    a

  window.onerror = (message, file, line, column) ->
    if typeof ga isnt "undefined" and ga isnt null
      host = link(file).hostname
      ga "send",
        hitType: "event"
        eventCategory: ((if host is window.location.hostname or host is undefined or host is "" then "" else "external ")) + "error"
        eventAction: message
        eventLabel: (file + " LINE: " + line + ((if column then " COLUMN: " + column else ""))).trim()
        nonInteraction: 1
) window