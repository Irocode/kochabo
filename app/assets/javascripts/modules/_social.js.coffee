((doc, script) ->
  js = undefined
  fjs = doc.getElementsByTagName(script)[0]
  addScript = (url, id) ->
    return  if doc.getElementById(id)
    js = doc.createElement(script)
    js.async = true
    js.src = url
    id and (js.id = id)
    fjs.parentNode.insertBefore js, fjs
    return

  # Facebook SDK
  # addScript "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=406816512743553&version=v2.0", "facebook-jssdk"

  # Twitter SDK
  # addScript "//platform.twitter.com/widgets.js", "twitter-wjs"
  
  # Pinterest SDK
  # addScript "//assets.pinterest.com/js/pinit.js", "pinterest-wjs"
  
) document, "script"