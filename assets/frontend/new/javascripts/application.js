(function() {
  window.centerElements = function() {
    var centerX, centerY, init, resizeHandler;
    init = function() {
      this.$centerX = $(".center-x");
      this.$centerY = $(".center-y");
      this.$window = $(window);
      resizeHandler();
      return this.$window.on("load resize orientationchange", (function(_this) {
        return function() {
          return resizeHandler();
        };
      })(this));
    };
    resizeHandler = function() {
      centerX();
      return centerY();
    };
    centerX = function() {
      return this.$centerX.each(function() {
        var $el;
        $el = $(this);
        return $el.css({
          marginLeft: -($el.width() / 2)
        }).addClass("centered-x");
      });
    };
    centerY = function() {
      return this.$centerY.each(function() {
        var $el;
        $el = $(this);
        return $el.css({
          marginTop: -($el.height() / 2)
        }).addClass("centered-y");
      });
    };
    return init();
  };

  $(function() {
    return window.centerElements();
  });

  $(function() {
    var addAddonToCart, cacheProductId, getAddonData, proceedToCheckout, removeAddonFromCart, updateCommaSeparatedString;
    $("body").on("click", "#checkout_form [type=submit]", (function(_this) {
      return function(e) {
        e.preventDefault();
        $(e.currentTarget).button("loading");
        switch ($("#checkout_form").data("step")) {
          case "product":
            return cacheProductId();
          case "addons":
            return proceedToCheckout();
          default:
            return alert("Ooops! Leider ist beim Checkout ein Fehler aufgetreten :(");
        }
      };
    })(this));
    $("body").on("click", "[data-action='addon_add']", (function(_this) {
      return function(e) {
        var addon_id;
        e.preventDefault();
        addon_id = $(e.currentTarget).parents(".addon-list-item").data("id");
        $(".addons-list").trigger("addons:update", {
          action: "loading",
          id: addon_id
        });
        return addAddonToCart(addon_id);
      };
    })(this));
    $("body").on("click", "[data-action='addon_remove']", (function(_this) {
      return function(e) {
        e.preventDefault();
        return removeAddonFromCart($(e.currentTarget).parents(".cart-item").data("id"));
      };
    })(this));
    cacheProductId = function() {
      var $productID;
      if (($productID = $("#product_id")).length) {
        simpleStorage.set("product_id", $productID.val());
      }
      return $("#checkout_form").submit();
    };
    proceedToCheckout = function() {
      var req;
      return req = $.ajax({
        url: "//kochabo.at/api/kochabo.php",
        data: {
          method: "clearCart"
        },
        dataType: "jsonp",
        type: "GET"
      }).complete((function(_this) {
        return function(data) {
          return $("#checkout_form").submit();
        };
      })(this));
    };
    getAddonData = function(addon_id) {
      var addon, data, _ref;
      _ref = window.addons;
      for (addon in _ref) {
        data = _ref[addon];
        if (data.id === addon_id) {
          return data;
        }
      }
    };
    addAddonToCart = (function(_this) {
      return function(addon_id) {
        var context, tmpl;
        tmpl = Handlebars.compile($("#cart-item").html());
        context = getAddonData(addon_id);
        context.type = "addon";
        $("#checkout_cart_sum").before(tmpl(context));
        return $("#checkout_form").trigger("cart:update", {
          action: "add",
          id: addon_id
        });
      };
    })(this);
    removeAddonFromCart = function(addon_id) {
      $(".cart-item[data-id=" + addon_id + "]").remove();
      $(".addons-list").trigger("addons:update", {
        action: "reset",
        id: addon_id
      });
      return $("#checkout_form").trigger("cart:update", {
        action: "remove",
        id: addon_id
      });
    };
    $("body").on("addons:update", ".addons-list", function(e, data) {
      var $target;
      $target = $(".addon-list-item[data-id=" + data.id + "]");
      $target.toggleClass("disabled");
      return $target.find("[data-action=addon_add]").button(data.action);
    });
    $("body").on("cart:update", "#checkout_form", (function(_this) {
      return function(e, data) {
        var current_addons;
        current_addons = $("#addons_id").val();
        $("#addons_id").val(updateCommaSeparatedString(current_addons, data.id, data.action));
        return console.log($("#addons_id").val());
      };
    })(this));
    return updateCommaSeparatedString = function(string, value, action) {
      var index, tmp;
      switch (action) {
        case "add":
          string = string === "" ? value : string + "," + value;
          break;
        case "remove":
          tmp = string.split(',');
          index = tmp.indexOf(String(value));
          if (index !== -1) {
            tmp.splice(index, 1);
            string = tmp.join(',');
          }
      }
      return string;
    };
  });

  $(function() {
    var $dateSelect, req;
    if (($dateSelect = $("#recipes-delivery-dates")).length) {
      return req = $.ajax({
        url: "http://api.kochabo.at/api/deliverydates.php",
        data: {
          range: 5
        },
        dataType: "jsonp",
        type: "GET"
      }).done((function(_this) {
        return function(data) {
          var date, index, _data, _date, _i, _len, _weeks;
          _data = [];
          _weeks = ["current", "next", "weekafternext"];
          for (index = _i = 0, _len = data.length; _i < _len; index = ++_i) {
            date = data[index];
            _date = document.createElement("option");
            _date.value = index < _weeks.length ? _weeks[index] : date[1];
            _date.innerHTML = moment(date[1]).format("dd, DD.MM.YYYY");
            _data.push(_date);
          }
          return $dateSelect.append(_data).trigger("selectbox:create");
        };
      })(this)).fail((function(_this) {
        return function(data) {
          return alert("Ooops! Liefertermine konnten leider nicht geladen werden :(");
        };
      })(this));
    }
  });

  $(function() {
    var clientHeight;
    clientHeight = $(window).height();
    return $("[data-fullscreen]").each(function() {
      var customOffset, elOffset, minHeight, newHeight, _height;
      customOffset = $(this).attr("data-offset") || 0;
      minHeight = parseInt($(this).css("min-height"), 10);
      if ($(this).attr("data-fullscreen") === "flexible") {
        elOffset = $(this).offset();
        _height = clientHeight - customOffset - elOffset.top;
        newHeight = _height > 400 ? _height : 400;
        if (!(newHeight > minHeight)) {
          return $(this).css({
            "min-height": 0
          }).height(newHeight);
        }
      }
    });
  });

  $(function() {
    this.handlerList = [];
    $(document).on("masonry:refresh", ".masonry", (function(_this) {
      return function(e) {
        var $masonry;
        $masonry = $(e.currentTarget);
        return $masonry.imagesLoaded(function() {
          var $window, options;
          $masonry.addClass("masonryfied");
          _this.handler = $masonry.find("> div");
          _this.handlerList.push(_this.handler);
          options = {
            align: 'left',
            itemWidth: 300,
            autoResize: true,
            container: $masonry,
            flexibleWidth: "50%",
            offset: 30,
            fillEmptySpace: true
          };
          $window = $(window);
          $window.resize(function() {
            var newOptions, windowWidth;
            windowWidth = $window.width();
            newOptions = {
              flexibleWidth: "50%"
            };
            if (windowWidth < 1024) {
              newOptions.flexibleWidth = "100%";
            }
            return this.handler.wookmark(newOptions);
          });
          _this.handler.wookmark(options);
          return $masonry.trigger("masonry:ready");
        });
      };
    })(this));
    return $("body").on("click", ".filter-options li a", (function(_this) {
      return function(e) {
        e.preventDefault();
        return $("body").animate({
          scrollTop: 370
        }, '300', 'swing', function() {
          var activeFilter, handler, _i, _len, _ref;
          $(".filter-options li a").removeClass("active");
          $(e.currentTarget).addClass("active");
          activeFilter = [];
          if ($(e.currentTarget).data("filter") === void 0) {
            activeFilter;
          } else {
            activeFilter.push($(e.currentTarget).data("filter"));
          }
          _ref = _this.handlerList;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            handler = _ref[_i];
            handler.wookmarkInstance.filter(activeFilter);
          }
          return _this.handlerList[_this.handlerList.length - 1].trigger("masonry:ready");
        });
      };
    })(this));
  });

  window.products = {
    classic: {
      0: {
        id: 69,
        recipes: 3,
        persons: 1,
        price: "34,90"
      },
      1: {
        id: 1,
        recipes: 3,
        persons: 2,
        price: "41,90"
      },
      2: {
        id: 2,
        recipes: 3,
        persons: 4,
        price: "61,90"
      },
      3: {
        id: 7,
        recipes: 5,
        persons: 2,
        price: "61,90"
      },
      4: {
        id: 8,
        recipes: 5,
        persons: 4,
        price: "79,90"
      }
    },
    veggie: {
      0: {
        id: 134,
        recipes: 3,
        persons: 1,
        price: "34,50"
      },
      1: {
        id: 10,
        recipes: 3,
        persons: 2,
        price: "40,90"
      },
      2: {
        id: 111,
        recipes: 3,
        persons: 4,
        price: "60,60"
      }
    },
    vegan: {
      0: {
        id: 133,
        recipes: 3,
        persons: 1,
        price: "34,50"
      },
      1: {
        id: 119,
        recipes: 3,
        persons: 2,
        price: "40,90"
      }
    },
    fit: {
      0: {
        id: 135,
        recipes: 3,
        persons: 1,
        price: "42,90"
      },
      1: {
        id: 136,
        recipes: 3,
        persons: 2,
        price: "49,90"
      }
    },
    fruits: {
      0: {
        id: 95,
        type: "small",
        price: "18,90"
      },
      1: {
        id: 96,
        type: "large",
        price: "24,90"
      }
    }
  };

  window.addons = {
    0: {
      id: 90,
      name: "Obstbox",
      amount: "3kg Obst",
      price: "12,90"
    },
    1: {
      id: 14,
      name: "Wein der Woche",
      amount: "1x Flasche",
      price: "9,90"
    },
    2: {
      id: 33,
      name: "Nixe Extra Dry",
      amount: "6er Tray",
      price: "8,90"
    },
    3: {
      id: 127,
      name: "Nixe Radler",
      amount: "6er Tray",
      price: "8,90"
    },
    4: {
      id: 128,
      name: "Goldkelchen Cider",
      amount: "4er Tray",
      price: "9,90"
    }
  };

  $(function() {});

  $(function() {
    var startCycle;
    $("body").on("click", ".panel-heading a", (function(_this) {
      return function(e, a) {
        if ($(e.currentTarget).parents('.panel-heading').siblings('.panel-collapse').hasClass('in') || $(e.currentTarget).parents('.panel').hasClass("disabled") || $(".panel-collapse.collapsing").length > 0) {
          e.stopPropagation();
          return false;
        }
      };
    })(this));
    startCycle = (function(_this) {
      return function($el) {
        return _this.recipeCycle = window.interval($el.data("interval"), function() {
          var $next;
          if ($(".panel-collapse.collapsing", $el).length === 0) {
            if (($next = $(".panel-collapse.in", $el).parents(".panel").next()).length) {
              return $next.find("[data-toggle='collapse']", $el).trigger("click");
            } else {
              return $(".panel:first", $el).find("[data-toggle='collapse']").trigger("click");
            }
          }
        });
      };
    })(this);
    return $(".recipes-accordion[data-cycle=true]").on("accordion:cycle", (function(_this) {
      return function() {
        var $accordion, _interval;
        if (($accordion = $(".recipes-accordion[data-cycle=true]")).length) {
          _interval = $accordion.data("interval");
          startCycle($accordion);
          $(".recipes-accordion").on("mouseover", function(e) {
            return clearInterval(_this.recipeCycle);
          });
          return $(".recipes-accordion").on("mouseout", function(e) {
            return startCycle($accordion);
          });
        }
      };
    })(this));
  });

  window.recipeFetcher = function(args) {
    var ajaxFail, buildRecipe, defaults, loadRecipes, options, parseJSON;
    loadRecipes = (function(_this) {
      return function() {
        var req;
        return req = $.ajax({
          url: options.api,
          data: options.filter,
          dataType: "jsonp",
          type: "GET",
          beforeSend: function() {
            return options.beforeSend();
          }
        }).done(function(data) {
          if (!data.error) {
            parseJSON(data);
            return options.onSuccess();
          } else {
            return options.onError(data.error);
          }
        }).fail(function(data) {
          ajaxFail("Ooops! Rezepte konnten leider nicht geladen werden :(");
          return options.onError();
        });
      };
    })(this);
    parseJSON = (function(_this) {
      return function(json) {
        var box, index, recipe, recipeBoxes, recipes, _i, _j, _k, _len, _len1, _len2, _recipeBoxes, _recipes, _ref, _ref1;
        recipeBoxes = {
          vegan: [],
          veggie: [],
          classic: [],
          fitness: []
        };
        if (options.filter.type === "all") {
          _recipes = [];
          _ref = json.recipes;
          for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            recipe = _ref[_i];
            _recipes.push(buildRecipe(recipe, index));
          }
          return options.onComplete(_recipes);
        } else {
          _ref1 = json.recipes;
          for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
            recipe = _ref1[_j];
            if (recipe.isVegan) {
              recipeBoxes.vegan.push(recipe);
            } else if (recipe.isVeggie) {
              recipeBoxes.veggie.push(recipe);
            } else if (recipe.isFit) {
              recipeBoxes.fitness.push(recipe);
            } else {
              recipeBoxes.classic.push(recipe);
            }
          }
          _recipeBoxes = {};
          for (box in recipeBoxes) {
            recipes = recipeBoxes[box];
            _recipes = [];
            for (index = _k = 0, _len2 = recipes.length; _k < _len2; index = ++_k) {
              recipe = recipes[index];
              _recipes.push(buildRecipe(recipe, index));
            }
            _recipeBoxes[box] = _recipes;
          }
          return options.onComplete(_recipeBoxes);
        }
      };
    })(this);
    buildRecipe = function(recipe, index) {
      var _filter, _recipe;
      _filter = [];
      if (recipe.isFish) {
        _filter.push("fish");
      }
      if (recipe.isMeat) {
        _filter.push("meat");
      }
      if (recipe.isVegetarian) {
        _filter.push("veggie");
      }
      if (recipe.isVegan) {
        _filter.push("vegan");
      }
      if (recipe.isGlutenFree) {
        _filter.push("glutenfree");
      }
      if (recipe.LactoseFree) {
        _filter.push("lactosefree");
      }
      return _recipe = {
        id: recipe.id,
        filter: "[\"" + (_filter.join("\",\"")) + "\"]",
        url: recipe.url,
        upcoming: Number(recipe.lastUsedYear) === moment().year() && Number(recipe.lastUsedCw) >= moment().week() ? recipe.lastUsedCw : false,
        imageBig: recipe.imageBig,
        image720: recipe.image720,
        name: recipe.name,
        duration: recipe.duration,
        ingredients: recipe.ingredientsCount,
        order: recipe.order,
        visibility: index === 0 ? "in" : false
      };
    };
    ajaxFail = function(msg) {
      return alert(msg);
    };
    defaults = {
      api: "//api.kochabo.at/api/recipes.php",
      filter: {
        type: "all"
      },
      beforeSend: function() {},
      onSuccess: function() {},
      onError: function() {},
      onComplete: function() {}
    };
    options = $.extend(true, defaults, args);
    return loadRecipes();
  };

  $(function() {
    var changeWeek, tmpl, togglePanelVisibility;
    if ($(".recipes-preview-slider").length) {
      $("body").on("click", ".ka-week-switch a", function(e) {
        var _current;
        e.preventDefault();
        switch (e.currentTarget.className) {
          case "prev":
            changeWeek($(e.currentTarget).parents("[data-week]").prev().data("week"));
            break;
          case "next":
            changeWeek($(e.currentTarget).parents("[data-week]").next().data("week"));
        }
        return _current = $(e.currentTarget).parents("[data-week]").data("week");
      });
      $("body").on("selectbox:update", ".ka-selectbox", function(e, val) {
        if (e.target.id === "recipes-delivery-dates") {
          return changeWeek(val);
        }
      });
      changeWeek = function(week) {
        var _weeks;
        _weeks = ["current", "next", "weekafternext"];
        $(".recipes-preview, .recipes-placeholder").addClass("hide");
        if ($.inArray(week, _weeks) > -1) {
          return $("[data-week='" + week + "']").removeClass("hide");
        } else {
          $(".recipes-placeholder").removeClass("hide");
          return console.log("error");
        }
      };
      togglePanelVisibility = function(visible, $elAccordion) {
        var $elPanels;
        $elPanels = $(".panel", $elAccordion);
        if ($elPanels.length > visible) {
          return $elPanels.each(function() {
            var $el;
            $el = $(this);
            if ($el.data("order") > visible) {
              if ($el.children(".panel-collapse").hasClass("in")) {
                $("[data-toggle='collapse']", $elAccordion).first().trigger("click");
              }
              return $el.addClass("disabled").attr("title", "Dieses Rezept ist in der " + visible + "er Box nicht enthalten");
            }
          });
        } else {
          return $elPanels.removeClass("disabled").attr("title", "");
        }
      };
      tmpl = Handlebars.compile($("#recipe-template").html());
      return $(".recipes-preview").each(function() {
        var $el, rf;
        $el = $(this);
        return rf = window.recipeFetcher({
          filter: {
            type: $el.data("week")
          },
          onComplete: (function(_this) {
            return function(data) {
              var context;
              context = {
                token: "acc-" + ($el.data("week")) + "-" + ($el.data("box-type")),
                week: $el.data("week"),
                recipes: data[$el.data("box-type")]
              };
              $el.append(tmpl(context));
              togglePanelVisibility($("input[name='box_recipe_count']:checked").val() * 1, $el);
              return $("input[name='box_recipe_count']:radio").on("change", function() {
                return togglePanelVisibility($("input[name='box_recipe_count']:checked").val() * 1, $el);
              });
            };
          })(this)
        });
      });
    }
  });

  $(function() {
    var $elMasonry, appendRecipePage, hash, startPage, tmpl;
    if (($elMasonry = $("#recipe-masonry")).length) {
      $(window).on("hashchange", function() {
        var $el, page;
        page = location.hash.match(/seite-([0-9]+)/);
        if (page) {
          if (($el = $("[data-page='" + page[1] + "']")).length) {
            return $("body").animate({
              scrollTop: $el.offset().top
            }, '300', 'swing');
          } else {
            return location.reload();
          }
        }
      });
      appendRecipePage = function(page) {
        var rl;
        return rl = window.recipeFetcher({
          filter: {
            type: "all",
            page: page,
            pagesize: 61
          },
          onError: (function(_this) {
            return function(error) {
              return $(".recipes-loader a").text("Du hast das Ende der Kochabo Rezeptewelt entdeckt");
            };
          })(this),
          onComplete: (function(_this) {
            return function(data) {
              var context;
              context = {
                page: page,
                url: location.origin + location.pathname + ("#!seite-" + page),
                recipes: data
              };
              $elMasonry.append(tmpl(context));
              history.pushState({}, '', location.origin + location.pathname + ("#!seite-" + page));
              return $(".page:last .masonry").trigger("masonry:refresh");
            };
          })(this)
        });
      };
      tmpl = Handlebars.compile($("#recipe-template").html());
      hash = location.hash.match(/seite-([0-9]+)/);
      startPage = hash ? hash[1] : 1;
      appendRecipePage(startPage);
      $("body").on("masonry:ready", ".masonry", (function(_this) {
        return function(e) {
          $(".recipes-loader > a").removeAttr("disabled").find(".fa").removeClass("fa-spin");
          return $(".recipes-count").text($(".ka-recipe").not(".inactive").length);
        };
      })(this));
      return $("body").on("click", ".recipes-loader > a", (function(_this) {
        return function(e) {
          e.preventDefault();
          $(".recipes-loader a").attr("disabled", "disabled");
          $(".recipes-loader .fa").addClass("fa-spin");
          return appendRecipePage($(".page:last").data("page") + 1);
        };
      })(this));
    }
  });

  $(function() {
    var $container, changeWeek, rl, tmpl;
    if (($container = $(".recipe-week-view")).length) {
      $("body").on("click", ".ka-week-switch a", function(e) {
        var _ok, _week, _weeks;
        e.preventDefault();
        _weeks = ["current", "next", "weekafternext"];
        _week = $(".recipe-week-view").data("week");
        _ok = $.inArray(_week, _weeks);
        if (_ok > -1) {
          return changeWeek(_weeks[_ok + 1]);
        } else {
          return console.log("error");
        }
      });
      changeWeek = function(week) {
        return console.log("change to " + week);
      };
      tmpl = Handlebars.compile($("#recipe-template").html());
      return rl = window.recipeFetcher({
        filter: {
          type: $container.data("week")
        },
        onComplete: (function(_this) {
          return function(data) {
            return $(".recipes-list").each(function() {
              var $el, context, num, placeholder, _i, _results;
              $el = $(this);
              context = {
                recipes: data[$el.data("box-type")]
              };
              $el.append(tmpl(context));
              placeholder = 6 - $el.children(".col-sm-4").length;
              _results = [];
              for (num = _i = 1; 1 <= placeholder ? _i <= placeholder : _i >= placeholder; num = 1 <= placeholder ? ++_i : --_i) {
                _results.push($el.append("<div class='col-sm-4'><div class='placeholder'><img src='/images/logos/kochabo-leafs-gradient.svg'></div></div>"));
              }
              return _results;
            });
          };
        })(this)
      });
    }
  });

  (function(doc, script) {
    var addScript, fjs, js;
    js = void 0;
    fjs = doc.getElementsByTagName(script)[0];
    return addScript = function(url, id) {
      if (doc.getElementById(id)) {
        return;
      }
      js = doc.createElement(script);
      js.async = true;
      js.src = url;
      id && (js.id = id);
      fjs.parentNode.insertBefore(js, fjs);
    };
  })(document, "script");

  if (typeof ga !== "undefined" && ga !== null) {
    $(document).ajaxSend(function(event, xhr, settings) {
      return ga("send", "pageview", settings.url);
    });
  }

  (function(window) {
    var link;
    link = function(href) {
      var a;
      a = window.document.createElement("a");
      a.href = href;
      return a;
    };
    return window.onerror = function(message, file, line, column) {
      var host;
      if (typeof ga !== "undefined" && ga !== null) {
        host = link(file).hostname;
        return ga("send", {
          hitType: "event",
          eventCategory: (host === window.location.hostname || host === void 0 || host === "" ? "" : "external ") + "error",
          eventAction: message,
          eventLabel: (file + " LINE: " + line + (column ? " COLUMN: " + column : "")).trim(),
          nonInteraction: 1
        });
      }
    };
  })(window);

  $(function() {
    $("[data-lightbox='video']").magnificPopup({
      type: "iframe",
      preloader: false,
      fixedContentPos: true,
      closeBtnInside: false,
      closeMarkup: "<button class='mfp-close'>✕</button>",
      callbacks: {
        markupParse: function(template, values, item) {
          if (values.iframe_src.indexOf("vimeo.com") >= 0) {
            return values.iframe_src += "&amp;title=0&amp;byline=0&amp;portrait=0&amp;color=84bc28";
          }
        },
        open: function() {
          var target;
          target = this.currItem.el[0];
          if (Modernizr.history) {
            return history.pushState({
              video: target.href
            }, "&#9658; " + target.title, "#videoplayer");
          }
        },
        close: (function(_this) {
          return function() {
            if (Modernizr.history) {
              return history.pushState({}, '', "" + location.pathname);
            }
          };
        })(this)
      }
    });
    return $(window).on("popstate", function(e) {
      if (location.href.indexOf("#videoplayer")) {
        return $.magnificPopup.close();
      }
    });
  });

  window.delay = function(ms, func) {
    return setTimeout(func, ms);
  };

  window.interval = function(ms, func) {
    return setInterval(func, ms);
  };

  $(function() {
    var $body, $cart, $cta, $filter, $header, $navbar, $social;
    $body = $("body");
    $header = $("#header");
    $navbar = $(".navbar", $header);
    $social = $(".social", $navbar);
    $cta = $(".call-to-action", $navbar);
    $filter = $(".recipe-filter");
    $cart = $(".sidebar-cart");
    $navbar.affix({
      offset: {
        top: $header.height() - $navbar.height()
      }
    });
    if ($filter.length) {
      $filter.affix({
        offset: {
          top: $filter.offset().top - $navbar.height()
        }
      });
      $filter.on("affix.bs.affix", function() {
        return $filter.css({
          top: $navbar.height()
        });
      });
    }
    if ($cart.length) {
      $cart.affix({
        offset: {
          top: $cart.offset().top - parseInt($cart.css("marginTop")) - $navbar.height(),
          bottom: $(document).height() - ($cart.parents("section").offset().top + $cart.parents("section").height())
        }
      });
      $cart.on("affix.bs.affix", function() {
        return $cart.css({
          top: $navbar.height()
        });
      });
    }
    $(".eq-heights").eqHeight(".eq-height");
    $("body").on("click", ".nav-tabs a", function(e) {
      e.preventDefault();
      return $(this).tab("show");
    });
    $(".tooltip-external").tooltip({
      html: true,
      placement: "auto top",
      template: '<div class="tooltip ka-tooltip" role="tooltip"><div class="tooltip-prepend"><i class="fa fa-external-link"></i></div><div class="tooltip-inner"></div><div class="tooltip-arrow"></div></div>'
    });
    $("body").tooltip({
      selector: "[data-toggle=tooltip]"
    });
    $("body").on("click", "#newsletter-inline .btn", function(e) {
      e.preventDefault();
      $("#newsletter-signup-inline").focus();
      return $(this).velocity("callout.shake", {
        duration: 600,
        queue: false
      });
    });
    $(".ka-selectbox").each(function() {
      var $el;
      $el = $(this);
      $el.on("selectbox:create", (function(_this) {
        return function() {
          return $el.selectOrDie({
            customClass: "ka-selectbox",
            onChange: function() {
              return $el.trigger("selectbox:update", $(this).val());
            }
          });
        };
      })(this));
      if (!$el.data("async")) {
        return $el.trigger("selectbox:create");
      }
    });
    window.delay(1200, function() {
      $window.spinner = $("#spinner");
      if ($window.spinner.is(":visible")) {
        return $window.spinner.velocity({
          opacity: 0
        }, {
          duration: 600,
          complete: function() {
            return $window.spinner.css("display", "none");
          }
        });
      }
    });
    $(".input-group .form-control").on("focus", function() {
      return $(this).parents(".input-group").addClass("input-group-active");
    });
    return $(".input-group .form-control").on("blur", function() {
      return $(this).parents(".input-group").removeClass("input-group-active");
    });
  });

}).call(this);
