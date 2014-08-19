# Global products catalogue
window.products =
  
  # Classic Box
  classic : 
    # Classic 3 Rezepte 1 Person
    0 :
      id      : 69 
      recipes : 3
      persons : 1
      price   : "34,90"
    
    # Classic 3 Rezepte 2 Personen
    1 :
      id      : 1
      recipes : 3
      persons : 2
      price   : "41,90"
      
    # Classic 3 Rezepte 4 Personen
    2 :
      id      : 2
      recipes : 3
      persons : 4
      price   : "61,90"
      
    # Classic 5 Rezepte 2 Personen
    3 :
      id      : 7
      recipes : 5
      persons : 2
      price   : "61,90"
      
    # Classic 5 Rezepte 4 Personen
    4 :
      id      : 8
      recipes : 5
      persons : 4
      price   : "79,90"

  # Vegetarian box
  veggie :
    
    # Vegetarisch 1 Person
    0 :
      id      : 134
      recipes : 3
      persons : 1
      price   : "34,50"
    
    # Vegetarisch 2 Personen
    1 :
      id      : 10
      recipes : 3
      persons : 2
      price   : "40,90"
      
    # Vegetarisch 4 Personen
    2 :
      id      : 111
      recipes : 3
      persons : 4
      price   : "60,60"

  # Vegan Box
  vegan :
    
    # Vegan 1 Person
    0 :
      id      : 133
      recipes : 3
      persons : 1
      price   : "34,50"
      
    # Vegan 2 Personen
    1 :
      id      : 119
      recipes : 3
      persons : 2
      price   : "40,90"
     
  # Fitness Box 
  fit :
    
    # Gesund und Fit 1 Person
    0 :
      id      : 135
      recipes : 3
      persons : 1
      price   : "42,90"
    
    # Gesund und Fit 2 Personen
    1 :
      id      : 136
      recipes : 3
      persons : 2
      price   : "49,90"
     
  # Fruits Box 
  fruits:
    
    # Kleine Obstbox
    0 :
      id      : 95
      type    : "small"
      price   : "18,90"
    
    # Große Obstbox
    1 :
      id      : 96
      type    : "large"
      price   : "24,90"
    


window.addons =
  
  # Obstbox
  0 :
    id      : 90
    name    : "Obstbox"
    amount  : "3kg Obst"
    price   : "12,90"
    
  # Wein der Woche
  1 :
    id      : 14
    name    : "Wein der Woche"
    amount  : "1x Flasche"
    price   : "9,90"
    
  # Bier
  2 :
    id      : 33
    name    : "Nixe Extra Dry"
    amount  : "6er Tray"
    price   : "8,90"
    
  # Radler
  3 :
    id      : 127
    name    : "Nixe Radler"
    amount  : "6er Tray"
    price   : "8,90"
    
  # Cider
  4 :
    id      : 128
    name    : "Goldkelchen Cider"
    amount  : "4er Tray"
    price   : "9,90"

  
$ ->
  # console.log window.products
  # console.log window.addons