gulp    = require "gulp"
cache   = require "gulp-cached"
include = require "gulp-include"
sass    = require "gulp-ruby-sass"
coffee  = require "gulp-coffee"
concat  = require "gulp-concat" 

ASSET_SOURCE_ROOT_PATH  = "app/assets"
ASSET_DEST_ROOT_PATH    = "assets/frontend/new"
ASSET_BOWER_ROOT_PATH   = "bower_components"

options = 

  # SASS / CSS
  SASS_SOURCE     : "stylesheets/*.sass"
  SASS_DEST       : "stylesheets"

  # JavaScript
  COFFEE_SOURCE   : "javascripts/*.coffee"
  COFFEE_DEST     : "javascripts"
  
  # Icons
  FONTS_FONT_AWESOME_SOURCE    : "bower_components/font-awesome/fonts/*",
  FONTS_FONT_AWESOME_DEST      : "fonts",
  
vendorJS = [
  "bower_components/modernizr/modernizr.js"
  "bower_components/jquery/dist/jquery.js",
  "bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js"

  "bower_components/velocity/jquery.velocity.js"
  "bower_components/velocity/velocity.ui.js"
  "bower_components/magnific-popup/src/js/core.js"
  "bower_components/magnific-popup/src/js/iframe.js"
  "bower_components/SelectOrDie/_src/selectordie.js"
  "bower_components/imagesloaded/imagesloaded.pkgd.js"
  "bower_components/wookmark-jquery/jquery.wookmark.js"
  "bower_components/moment/min/moment-with-locales.js"
  "bower_components/moment/locale/de-at.js"

  "bower_components/isMobile/isMobile.js"
  "bower_components/jquery-placeholder/jquery.placeholder.js"
  "bower_components/jquery.eqheight/index.js"

  "bower_components/handlebars/handlebars.js"
] 

vendorCSS = [
  # "bower_components/bootstrap-sass/dist/css/bootstrap.css"
  "bower_components/font-awesome/css/font-awesome.css"
  "bower_components/magnific-popup/dist/magnific-popup.css"
  "bower_components/animate.css/animate.css"

]   

gulp.task "styles", ->
  gulp.src("#{ASSET_SOURCE_ROOT_PATH}/#{options.SASS_SOURCE}")
  .pipe(cache("styles"))
  .pipe(sass(loadPath: "bower_components"))
  .on("error", (e) -> console.log e; @emit('end'))
  .pipe(gulp.dest("#{ASSET_DEST_ROOT_PATH}/#{options.SASS_DEST}"))

gulp.task "scripts", ->
  gulp.src("#{ASSET_SOURCE_ROOT_PATH}/#{options.COFFEE_SOURCE}")
  .pipe(cache("scripts"))
  .pipe(include())
  .pipe(coffee(loadPath: "bower_components"))
  .on("error", (e) -> console.log e; @emit('end'))
  .pipe(gulp.dest("#{ASSET_DEST_ROOT_PATH}/#{options.COFFEE_DEST}"))
  
gulp.task "vendors_js", ->
  gulp.src(vendorJS)
  .pipe(concat("vendor.js"))
  .on("error", (e) -> console.log e; @emit('end'))
  .pipe(gulp.dest("#{ASSET_DEST_ROOT_PATH}/#{options.COFFEE_DEST}"))

gulp.task "vendors_css", ->
  gulp.src(vendorCSS)
  .pipe(concat("vendor.css"))
  .on("error", (e) -> console.log e; @emit('end'))
  .pipe(gulp.dest("#{ASSET_DEST_ROOT_PATH}/#{options.SASS_DEST}"))
  
gulp.task "font-awesome", ->
  gulp.src("#{options.FONTS_FONT_AWESOME_SOURCE}")
  .pipe(gulp.dest("#{ASSET_DEST_ROOT_PATH}/#{options.FONTS_FONT_AWESOME_DEST}"));



gulp.task "watch", ->
  gulp.watch "#{ASSET_SOURCE_ROOT_PATH}/#{options.SASS_SOURCE}", ["styles"]
  gulp.watch "#{ASSET_SOURCE_ROOT_PATH}/#{options.COFFEE_SOURCE}", ["scripts"]
    
gulp.task "default", ["styles", "scripts", "vendors_css", "vendors_js", "font-awesome"]