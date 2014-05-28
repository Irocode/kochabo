<?php
   //$price_produkt = Input::get('price_produkt');
   
   /*
   
   $produkt='fresse';
   $produkttyp='2undwie';
   */
   
   //Kosten und Artikel Referenz
   
   $produktready = $produkt . $produkttyp;
   
   
   
   //echo"$produktready";
   
   
   
   
   if ($produktready == 'Singlebox3 köstliche Abendessen') {
   	$price_produkt ='34.90';
   };
   
   
   
   if ($produktready == 'Für ZweiClassic + 3 Rezepte') {
   	$price_produkt ='41.90';
   };
   
   if ($produktready == 'Für ZweiClassic + 5 Rezepte') {
   	$price_produkt ='61.90';
   };
   
   
   if ($produktready == 'Für ZweiVegetarisch + 3 Rezepte') {
   	$price_produkt ='40.90';
   };
   
   
   
   if ($produktready == 'FamilienboxClassic + 3 Rezepte') {
   	$price_produkt ='61.90';
   };
   
   if ($produktready == 'FamilienboxClassic + 5 Rezepte') {
   	$price_produkt ='79.90';
   };
   
   
   if ($produktready == 'FamilienboxVegetarisch + 3 Rezepte') {
   	$price_produkt ='60.90';
   };
   
   
   
   
   Session::put('price_produkt', $price_produkt);
   
   
   //echo $price_produkt;
   
   
   
   
   
   
   //Leere Variblen in der vorseite abfangen
   
   
   
   //Add Produkte definieren
   
   //Obstboxpreis
   
   	$price_adobstbox ='12.90';
   
   
   //Weinpreis
   	$price_adwein ='9.90';
   
   
   
   
   Session::put('price_adobstbox', $price_adobstbox);
   Session::put('price_adwein', $price_adwein);
   
   //echo $price_adobstbox;
   //echo $price_adwein;
   
   
   Session::put('wein', 'Wein');
   Session::put('obstbox', 'Obstbox');
   
   
   
   //Summe in REgistrierung
   
   ?>