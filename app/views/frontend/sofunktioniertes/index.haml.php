!!! 5
/[if IE 8]      <html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en">
/[if IE 9]      <html class="no-js lt-ie10 lt-ie9" lang="en">
/[if lt IE 10]  <html class="no-js lt-ie10" lang="en">
/[if !IE]>
%html{:lang => "de", :class => "no-js"}
  /<![endif]
  %head
    %meta{ :charset => "utf-8" }
    %title Kochabo.at

    %meta{ "http-equiv" => "X-UA-Compatible", :content => "IE=edge,chrome=1" }

    %meta{ :name => "description", :content => "Gschmackige Rezepte und frische Zutaten wöchentlich direkt nach Hause geliefert. Keine Versandkosten - jede Woche neu!" }
    %meta{ :name => "keywords", :content => "KochAbo, Lebensmittel, Zutaten, Rezepte, Lebensmittellieferung, Online Supermarkt, gesund, abwechslungsreich, ausgewogen, Qualität, Nachhaltigkeit" }
    %meta{ :name => "author", :content => "" }

    -# Mobile
    %meta{:name => "viewport", :content => "initial-scale=1.0, user-scalable=no, maximum-scale=1, width=device-width, minimal-ui" }

    -# Apple
    %meta{ :name => "apple-mobile-web-app-title", :content => "" }
    %meta{ :name => "apple-mobile-web-app-capable", :content => "yes" }
    %meta{ :name => "apple-mobile-web-app-status-bar-style", :content => "translucent-black" }

    -# Chrome
    %meta{ :name => "mobile-web-app-capable", :content => "yes" }

    -# iOS Icons
    %link{ :rel => "apple-touch-icon", :sizes => "152x152", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-152x152-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :sizes => "144x144", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-144x144-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :sizes => "120x120", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-120x120-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :sizes => "114x114", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-114x114-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :sizes => "76x76", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-76x76-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :sizes => "72x72", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-72x72-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :sizes => "60x60", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-60x60-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :sizes => "57x57", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-57x57-precomposed.png" }
    %link{ :rel => "apple-touch-icon", :href => "/assets/frontend/new/images/favicons/apple-touch-icon-precomposed.png" }

    -# Favicons
    %link{ :rel => "icon", :type => "image/png", :sizes => "196x196", :href => "/assets/frontend/new/images/favicons/favicon-196x196.png" }
    %link{ :rel => "icon", :type => "image/png", :sizes => "128x128", :href => "/assets/frontend/new/images/favicons/favicon-128x128.png" }
    %link{ :rel => "icon", :type => "image/png", :sizes => "96x96", :href => "/assets/frontend/new/images/favicons/favicon-96x96.png" }
    %link{ :rel => "icon", :type => "image/png", :sizes => "32x32", :href => "/assets/frontend/new/images/favicons/favicon-32x32.png" }
    %link{ :rel => "icon", :type => "image/png", :sizes => "16x16", :href => "/assets/frontend/new/images/favicons/favicon-16x16.png" }
    %link{ :rel => "icon", :type => "image/ico", :href => "/assets/frontend/new/images/favicons/favicon.ico" }
    %link{ :rel => "shortcut icon", :href => "/assets/frontend/new/images/favicons/favicon.png" }

    -# Microsoft
    %meta{ :name => "msapplication-TileImage", :content => "/assets/frontend/new/images/favicons/mstile-144x144.png" }
    %meta{ :name => "msapplication-square70x70logo", :content => "/assets/frontend/new/images/favicons/mstile-70x70.png" }
    %meta{ :name => "msapplication-square150x150logo", :content => "/assets/frontend/new/images/favicons/mstile-150x150.png" }
    %meta{ :name => "msapplication-wide310x150logo", :content => "/assets/frontend/new/images/favicons/mstile-310x150.png" }
    %meta{ :name => "msapplication-square310x310logo", :content => "/assets/frontend/new/images/favicons/mstile-310x310.png" }

    %meta{ :name => "application-name", :content => "KochAbo.at - Einfach kochen." }
    %meta{ :name => "msapplication-TileColor", :content => "#FFFFFF"}
    %meta{ :name => "msapplication-tap-highlight", :content => "no"}
    %meta{ :name => "msapplication-tooltip", :content => "Gschmackige Rezepte und frische Zutaten wöchentlich direkt nach Hause geliefert. Keine Versandkosten - jede Woche neu!"}

    -# Open Graph
    %meta{ :property => "og:title", :content => "KochAbo.at" }
    %meta{ :property => "og:type", :content => "website" }
    %meta{ :property => "og:url", :content => "ROOT" }
    %meta{ :property => "og:image", :content => "" }
    %meta{ :property => "og:description", :content => "KochAbo.at - Einfach kochen." }
    %meta{ :property => "fb:admins", :content => "249007485172986" }

    -# Twitter Cards
    %meta{ :name => "twitter:card", :content => "summary" }
    %meta{ :name => "twitter:site", :content => "@KochAbo_at" }
    %meta{ :name => "twitter:creator", :content => "@KochAbo_at" }
    %meta{ :name => "twitter:url", :content => "ROOT" }
    %meta{ :name => "twitter:title", :content => "Kochabo.at" }
    %meta{ :name => "twitter:description", :content => "KochAbo.at - Einfach kochen." }
    %meta{ :name => "twitter:image", :content => "" }
    
    -# Stylesheets
    %link{:href => "assets/frontend/new/stylesheets/bootstrap.css", :rel => "stylesheet" }    
    %link{:href => "assets/frontend/new/stylesheets/vendor.css", :rel => "stylesheet" }
    %link{:href => "assets/frontend/new/stylesheets/application.css", :rel => "stylesheet" }
    
  %body   
    #fb-root
    #spinner
      .leafs
        .left &nbsp;
        .right &nbsp;
    
    #app    
      %header#header
        .infobar
          .container
            %a.brand.pull-left{ :href => "/" }
              %img{ :src => "/assets/frontend/new/images/logos/kochabo-inline.svg" }
            .pull-right
              %ul.trust.list-unstyled.list-inline.pull-left.hidden-sm.hidden-xs
                %li
                  %a{ :href => "#" }
                    %span.icon
                      %i.fa.fa-truck
                    %span.text
                      Kostenlose <br>Lieferung
                %li
                  %a{ :href => "#" }
                    %span.icon
                      %i.fa.fa-lock
                    %span.text
                      Sicher <br>einkaufen
                %li
                  %a{ :href => "tel:+43 1 544 39 00" }
                    %span.icon
                      %i.fa.fa-phone
                    %span.text
                      Hotline <br> 01 544 39 00
              %ul.badges.list-unstyled.list-inline.pull-left.hidden-xs
                %li
                  %a{ :href => "#" }
                    %img{ :src => "/assets/frontend/new/images/icons/e-trust.png", :width => "34" }
                %li
                  %a{ :href => "#" }
                    %img{ :src => "/assets/frontend/new/images/icons/ganz-oesterreich.png", :width => "74" }
      
              .cta.pull-left.text-center
                %a.btn.btn-danger{  :href => "/kochabo-box" } 
                  %i.fa.fa-shopping-cart.fa-gap-right
                  Jetzt probieren!
                %small 
                  Bereits registriert? 
                  %a{ :href => "#", "data-target" => "#modal-login", "data-toggle" => "modal" } Login
          
        %nav.navbar.navbar-default.navbar-static-top
          .container
            %a.brand-small{ :href => "/" }
              %img{ :src => "/assets/frontend/new/images/logos/kochabo-sign.svg" }
            .navbar-header
              %button.navbar-toggle{"data-target" => "#navbar", "data-toggle" => "collapse", :type => "button"}
                %span.sr-only Zur Navigation
                %span.text Menü
                %span.icon
                  %span.icon-bar
                  %span.icon-bar
                  %span.icon-bar

            #navbar.collapse.navbar-collapse
              %ul.main-nav.nav.navbar-nav
                %li.active
                  %a{:href => "#"} So funktioniert's
                %li
                  %a{:href => "/kochabo-box"} Kochabo Box
                %li
                  %a{:href => "/aktuelle-rezepte"} Aktuelle Rezepte
                %li
                  %a{:href => "#"} Blog
                %li
                  %a{:href => "/rezeptewelt"} 
                    Kochabo Welt
                    %span.label.label-default Neu
        
              .slide-container.navbar-right.hidden-sm.hidden-xs
                .slide
                  .cta
                    %a.btn.btn-danger{ :href => "/kochabo-box" } 
                      %i.fa.fa-shopping-cart.fa-gap-right
                      Jetzt probieren!
        
                  %ul.social.nav.navbar-nav
                    %li.facebook
                      %a{:href => "https://www.facebook.com/KochAbo", :target => "_blank"} 
                        %span.circle
                          %i.fa.fa-facebook
                    %li.twitter
                      %a{:href => "https://twitter.com/KochAbo_at", :target => "_blank"} 
                        %span.circle
                          %i.fa.fa-twitter
                    %li.pinterest
                      %a{:href => "http://www.pinterest.com/kochabo/", :target => "_blank"} 
                        %span.circle
                          %i.fa.fa-pinterest
         
      #main
        %section#hero
          .container
            .content.center-x.center-y
              %h1 Frischeste Zutaten mit passenden Rezepten direkt nach Hause geliefert!
              .cta
                %a.btn.btn-success.btn-lg{ :href => "/kochabo-box" } 
                  %i.fa.fa-shopping-cart.fa-gap-right
                  Jetzt ausprobieren
                %a.btn.btn-default.btn-lg{ :href => "#how-it-works" } 
                  %i.fa.fa-question-circle.fa-gap-right
                  Wie funktioniert's?
              %a.tv-spot{ :href => "https://vimeo.com/56008308", "data-lightbox" => "video" }
                .icon.icon-play
                  %i.fa.fa-play
                Kochabo TV Spot ansehen    
          .background &nbsp;
    
          %a.badge.btn-success.btn.hide{ :href => "#" }
            Aktuelles
  
        %section.news
          .container-fluid
            .row
              .col-md-4
                %a.inner{ :href => "#" }
                  .icon
                    %img{ :src => "/assets/frontend/new/images/backgrounds/news-weinbox.png" }
                  .text
                    %span.badge.badge-success.badge-sm Jetzt neu
                    %h4 Die Kochabo Weinbox
                    %p Endlich ist sie da, die Weinliebhaber konnten es kaum erwarten!
              .col-md-4
                %a.inner{ :href => "#" }
                  .icon
                    %img{ :src => "/assets/frontend/new/images/backgrounds/news-fitbox.png" }
                  .text
                    %span.badge.badge-success.badge-sm Jetzt neu
                    %h4 Die Kochabo Fitbox
                    %p Für alle Sportbegeisterten und Ernährungsenthusiasten.
              .col-md-4
                %a.inner{ :href => "#" }
                  .icon
                    %img{ :src => "/assets/frontend/new/images/backgrounds/news-blog.png" }
                  .text
                    %span.badge.badge-success.badge-sm Blog
                    %h4 Wir waren bei Sonnentor
                    %p Neben reinen Gewürze, Salz, Kreuzkümmel, Curry und mehr…



        %a#how-it-works
        %section.how-it-works
          .container
            %header.text-center
              %hr.logo
              %h2 Und wie funktioniert's?
            .content
              .row.text-center
                .col-sm-3
                  .inner
                    .icon
                      %img.img-responsive{ :src => "/assets/frontend/new/images/sprites/bestellen.png" }
                      .ka-circlet.ka-circlet-success 1            
                    %h3 Bestellen
                    %p Einfach anmelden, im persönlichen Kundenkonto die gewünschte Lieferung wählen und bestellen.
                .col-sm-3
                  .inner
                    .icon
                      %img.img-responsive{ :src => "/assets/frontend/new/images/sprites/liefern.png" }
                      .ka-circlet.ka-circlet-success 2        
                    %h3 Liefern
                    %p Wir liefern deutschlandweit. In vielen Städten bereits mit unserem speziellen Kurierservice.
                .col-sm-3
                  .inner
                    .icon
                      %img.img-responsive{ :src => "/assets/frontend/new/images/sprites/kochen.png" }
                      .ka-circlet.ka-circlet-success 3
                    %h3 Kochen
                    %p Sie kochen jede Woche 3 Rezepte Schritt für Schritt nach Anleitung. Auch für Ungeübte mit Erfolgs-garantie.
                .col-sm-3
                  .inner
                    .icon
                      %img.img-responsive{ :src => "/assets/frontend/new/images/sprites/geniessen.png" }
                      .ka-circlet.ka-circlet-success 4
                    %h3 Genießen
                    %p Profitieren Sie auch im Alltag von leckeren und abwechslung-sreichen Gerichten mit der ganzen Familie.



        %section#box-contents
          .container
            %header.text-center
              %hr.logo
              %h2 Was erwartet dich in deiner Kochabo Box?
          .content
            .container
              .row
                .col-sm-3
                  .inner
                    .icon
                      %i.fa.fa-lightbulb-o
                    %h3 Einfache Bestellung
                    %p KochAbo liefert kostenlos an jeden Haushalt in ganz Österreich. Gib einfach im untenstehenden Feld deine Postleitzahl ein, dann erhältst du die genaue Lieferzeit in deinem Ort.
                .col-sm-3.col-sm-offset-6
                  .inner
                    .icon
                      %i.fa.fa-lightbulb-o
                    %h3 Lieferung frei Haus
                    %p Abhängig von deiner Postleitzahlliefern wir dir deine Box Montag abendzwischen 17 und 22 Uhr oder Dienstag früh. Wahlweise kannst du dir deine Box auch Donnerstag abend oder Freitag Früh zustellen.
                .col-sm-3
                  .inner
                    .icon
                      %i.fa.fa-lightbulb-o
                    %h3 Kreation der Rezepte
                    %p Unser KochAbo-Koch erfindet immer neue geniale Rezepte. Die Rezepte sind gut beschrieben, einfach und rasch zum Nachkochen.
                .col-sm-3.col-sm-offset-6
                  .inner
                    .icon
                      %i.fa.fa-lightbulb-o
                    %h3 Gesund genießen
                    %p Jetzt ist es soweit! Du musst nur noch kochen und kannst die köstlichen und gesunden Mahlzeiten mit deinen Lieben genießen.



        %section.authors
          .container
            %header.text-center
              %hr.logo
              %h2 Wer steht hinter den Rezepten?
            .row
              .col-sm-3
                .inner.text-right
                  %h3 Eva Fischer
                  %p Eva übernimmt die <strong>Qualitätssicherung und Produktentwicklung</strong> beim Lebensmittel- und Rezeptelieferanten KochAbo. Mit der ausgebildeten <strong>Gesundheitsmanagerin</strong> holt sich KochAbo weitere Kompetenz für hochqualitative, lokale und saisonale Nahrungsmittel.
                  %br
                  %a{ :href => "http://www.foodtastic.at/" } foodtastic.at

              .col-sm-6
                %img.img-responsive{ :src => "/assets/frontend/new/images/backgrounds/cooks.png" }
              .col-sm-3
                .inner
                  %h3 Johnny Bravo
                  %p Max wird außerdem die Verantwortung für die <strong>gesunden, ausgewogenen Rezepte</strong> haben, die KochAbo gemeinsam mit den Lebensmitteln liefert. KochAbo verwendet für die KochAbo-Boxen (bestehend aus Rezepten mit dazu passenden Lebensmitteln) <strong>ausschließlich hochqualitative Nahrungsmittel</strong>.
          .cta.text-center
            %a.btn.btn-success.btn-lg{ :href => "#" } Mehr Infos zu Kochabo
            %a.btn.btn-default.btn-lg{ :href => "#" } Aktuelle Rezepte entdecken




        %section.mobile-app
          .container
            .row
              .col-sm-6
                %header
                  %h2 Alle Rezepte direkt auf deinem Smartphone
                  %p.lead Mit der KochAbo App holst du dir alle KochAbo Rezepte völlig kostenlos auf dein Smartphone. Die App hält alle Zutaten und Zubereitungsanleitung der herrlich genialen Rezepte von KochAbo.at für dich bereit.
                  .content
                    %ul.list-unstyled
                      %li
                        %span.icon
                          %img{ :src => "/assets/frontend/new/images/logos/kochabo-leaf.svg" }
                        %span.text Komfortable Suche nach Schlagworten
                      %li
                        %span.icon
                          %img{ :src => "/assets/frontend/new/images/logos/kochabo-leaf.svg" }
                        %span.text Zutatenangaben mit anpassbaren Portionsgrößen
                      %li
                        %span.icon
                          %img{ :src => "/assets/frontend/new/images/logos/kochabo-leaf.svg" }
                        %span.text Vollständige Zubereitungsanleitung völlig kostenlos
                      %li
                        %span.icon
                          %img{ :src => "/assets/frontend/new/images/logos/kochabo-leaf.svg" }
                        %span.text Zubereitungsaufwand und Zubereitungszeit
                      %li
                        %span.icon
                          %img{ :src => "/assets/frontend/new/images/logos/kochabo-leaf.svg" }
                        %span.text Komfortable Bestellfunktion für KochAbo voll integriert
                    .cta
                      %a{ :href => "https://itunes.apple.com/at/app/kochabo-rezepte-einfach-kochen./id658240811" }
                        %img{ :src => "/assets/frontend/new/images/icons/app-apple.png" }
                      %a{ :href => "https://play.google.com/store/apps/details?id=at.kochabo" }
                        %img{ :src => "/assets/frontend/new/images/icons/app-android.png" }






        %section.call-to-action.col-2
          .container
            .row
              .col-sm-6
                %header
                  %h2 Isst du schon oder überlegst du noch?
                  %p.lead Du entscheidest, wann Du eine KochAbo-Box bekommen möchtest. Keine Verpflichtung. Kein Risiko. Pausiere einzelne Liefertermine oder auf unbestimmte Zeit.
              .col-sm-6
                .content
                  %a.btn.btn-success.btn-lg{ :href => "#" } Kochabo ausprobieren
                  %a.btn.btn-default.btn-lg{ :href => "#" } Rezeptewelt entdecken




        %section#as-seen-on
          .container
            %header.text-center
              %h2 Sie kennen uns vielleicht aus…
              %p.lead Du entscheidest, wann Du eine KochAbo-Box bekommen möchtest. Keine Verpflichtung. Kein Risiko. Pausiere einzelne Liefertermine oder auf unbestimmte Zeit.
            .content.text-center
              %img.img-responsive.center-block{ :src => "/assets/frontend/new/images/icons/as-seen.png" }

        %section#tv-spot
          .container.text-center
            .inner
              %h2 Isst du noch oder genießt du schon dein Kochabo?
              %a.tv-spot{ :href => "https://vimeo.com/56008308", "data-lightbox" => "video" }
                .icon.icon-play
                  %i.fa.fa-play

        %section#testimonials
          .container
            %header.text-center
              %h2 Was unsere Kunden über uns sagen
            .content
              .tab-content
                #testimonial-1.tab-pane.fade.in.active
                  %blockquote
                    %p “Die Qualität, speziell beim Fleisch, ist hervorragend. Die berechneten Mengen passen wunderbar.”

                #testimonial-2.tab-pane.fade
                  %blockquote
                    %p “Ihr erleichtert mir mein Leben und das auch noch mehr als schmackhaft. Bitte macht weiter so!”

                #testimonial-3.tab-pane.fade
                  %blockquote
                    %p “Ich finde das genial. Ich spar mir Zeit und esse dazu noch gesund und abwechslungsreich.”

                #testimonial-4.tab-pane.fade
                  %blockquote
                    %p “Ich bin sehr zufrieden und finde die Idee einfach spitze. Auch die Rezepte sind sehr lecker und leicht nachzukochen.”



              %ul.customers.row.list-unstyled{:role => "tablist"}
                %li.col-sm-3.active
                  %a.customer.active{"data-toggle" => "tab", :href => "#testimonial-1", :role => "tab"}
                    .avatar
                      %img{ :src => "http://www.gravatar.com/avatar/41a7aea78a6d00a65453c35610306f2c.png" }
                    .user
                      %span.name Arthur Willis
                      %span.location Wien
                %li.col-sm-3
                  %a.customer{"data-toggle" => "tab", :href => "#testimonial-2", :role => "tab"}
                    .avatar
                      %img{ :src => "http://www.gravatar.com/avatar/41a7aea78a6d00a65453c35610306f2c.png" }
                    .user
                      %span.name Crystal Wells
                      %span.location Baden, NÖ
                %li.col-sm-3
                  %a.customer{"data-toggle" => "tab", :href => "#testimonial-3", :role => "tab"}
                    .avatar
                      %img{ :src => "http://www.gravatar.com/avatar/41a7aea78a6d00a65453c35610306f2c.png" }
                    .user
                      %span.name Christine Guerrero
                      %span.location St. Pölten, NÖ
                %li.col-sm-3
                  %a.customer{"data-toggle" => "tab", :href => "#testimonial-4", :role => "tab"}
                    .avatar
                      %img{ :src => "http://www.gravatar.com/avatar/41a7aea78a6d00a65453c35610306f2c.png" }
                    .user
                      %span.name Bobby Porter
                      %span.location Innsbruck, Tirol

    
      %footer#footer 

        %section#support
          .container
            %header.text-center
              %h2 Eine deiner Fragen wurden nicht beantwortet?
              %p.lead Dann zöger' nicht! Wir freuen uns deine Fragen beantworten zu können.
            .row.eq-heights
              .col-sm-4
                .ka-support.phone.eq-height
                  .icon
                    %i.fa.fa-phone
                  .action
                    %a.btn.btn-link{ :href => "tel:+43 1 544 39 00" } 01 544 39 00
                  %p Ruf' uns doch einfach an! <br>Mo: 09:00 bis 22:30 <br>Di-Fr: 09:00 bis 18:00
              .col-sm-4  
                .ka-support.chat.eq-height
                  .icon
                    %i.fa.fa-comments
                  .action
                    %a.btn.btn-success.btn-lg{ :href => "#" } Jetzt Chat starten
                  %p Schreibe direkt im Browser mit einem unserer Mitarbeiter. Einfach und unkompliziert.
              .col-sm-4  
                .ka-support.email.eq-height
                  .icon
                    %i.fa.fa-paper-plane
                  .action
                    %a.btn.btn-link{ :href => "mailto:hilfe@kochabo.at" } hilfe@kochabo.at
                  %p Wir bemühen uns sämtliche Kundenanfragen innerhalb von 24 Stunden zu beantworten.
              
  
        %section#newsletter-inline
          .container
            %form
              .row
                .col-sm-8.col-md-9
                  %label.hide-label{ :for => "newsletter-signup-inline" } Melde dich für den Newsletter an!
                  %input#newsletter-signup-inline.form-control.input-lg{ :type => "email", :placeholder => "Trage deine E-Mail Adresse hier ein und melde dich für den Newsletter an…" }
                .col-sm-4.col-md-3
                  .text-center
                    %a.btn.btn-danger.btn-lg{ :href => "#" } 
                      %i.fa.fa-paper-plane
                      Jetzt anmelden!
      
  

        %section#footer-nav
          .container
            .row
              .col-sm-3
                %h4 So funktioniert's
                %hr
                %ul.ka-list.list-unstyled
                  %li
                    %a{ :href => "/lieferinformationen" } Die Idee
                  %li
                    %a{ :href => "/partner" } Unsere Partner
                  %li
                    %a{ :href => "/lieferinformationen" } Lieferinformationen
                  %li
                    %a{ :href => "/lieferinformationen" } Keine feste Bindung
              .col-sm-2
                %h4 Kochabo
                %hr
                %ul.ka-list.list-unstyled
                  %li
                    %a{ :href => "#" } Kontakt
                  %li
                    %a{ :href => "#" } Presse
                  %li
                    %a{ :href => "#" } Jobs
              .col-sm-2
                %h4 Rechtliches
                %hr
                %ul.ka-list.list-unstyled
                  %li
                    %a{ :href => "#" } AGB
                  %li
                    %a{ :href => "#" } Impressum
                  %li
                    %a{ :href => "#" } Datenschutz
              .col-sm-2
                %a.trust-widget{ :href => "http://www.trustedshops.eu/profile/kochabo-at_X4BDD499594B754C79AD91C654C01E609.html", :target => "_blank", :title => "Kochabo.at Bewertung via TRUSTED SHOPS" }
                  %img.img-responsive{ :src => "/assets/frontend/new/images/icons/e-trust-widget.gif" }
              .col-sm-3
                .trust-boost
                  %strong Trusted Shops
                  %p Trusted Shops hat diesen Shop auf über 70 Qualitätskriterien wie Bonität, Preistransparenz, Kundenservice und Datenschutz geprüft. Dieser Shop ist durch SSL Verschlüsselung geschützt.
                  %strong Zahlungsmöglichkeiten
                  %ul.payments.list-unstyled.list-inline
                    %li
                      %i.icon.icon-mastercard{ :title => "Bequem bezahlen mit MasterCard Kreditkarte" }
                    %li
                      %i.icon.icon-visa{ :title => "Bequem bezahlen mit VISA Kreditkarte" }
                    %li
                      %i.icon.icon-paypal{ :title => "Bequem bezahlen mit mit PayPal" }
                    %li
                      %i.icon.icon-debit{ :title => "Bequem bezahlen mit Bankeinzug oder auf Rechnung" }

                
        %section#closure
          .container
            .text-center
              %a.brand{ :href => "/" }
                %img{ :src => "/assets/frontend/new/images/logos/kochabo-center.svg" }
              %ul.social.list-unstyled.list-inline
                %li.facebook
                  %a.fb-like{:href => "https://www.facebook.com/KochAbo", "data-action" => "like", "data-href" => "https://www.facebook.com/KochAbo", "data-layout" => "data-button_count", "data-share" => "false", "data-show-faces" => "false" } Like Kochabo.at
                %li.twitter
                  %a.twitter-follow-button{ :href => "https://twitter.com/KochAbo_at", "data-show-count" => "false", "data-lang" => "de", "data-dnt" => "true" } Folge @Kochabo.at
                %li.pinterest
                  %a{ :href => "http://www.pinterest.com/kochabo/", "data-pin-do" => "buttonFollow" } Pin Kochabo.at
       
    -# Javascripts
    %script{ :src => "assets/frontend/new/javascripts/vendor.js" }
    %script{ :src => "assets/frontend/new/javascripts/application.js" }
    


    



