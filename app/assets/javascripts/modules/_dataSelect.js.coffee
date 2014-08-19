$ ->
  
  if ($dateSelect = $("#recipes-delivery-dates")).length
    # get next delivery dates
    req = $.ajax
      url: "http://api.kochabo.at/api/deliverydates.php"
      data: 
        range: 5
      dataType: "jsonp"
      type: "GET"
    .done (data) =>
      _data = []
      _weeks = ["current", "next", "weekafternext"]
      
      for date, index in data
        _date = document.createElement("option")
        _date.value = if index < _weeks.length then _weeks[index] else date[1]
        _date.innerHTML = moment(date[1]).format("dd, DD.MM.YYYY") 
        _data.push _date
    
      $dateSelect
      .append _data
      .trigger "selectbox:create"
      
    .fail (data) =>      
      alert "Ooops! Liefertermine konnten leider nicht geladen werden :("

  
  
  