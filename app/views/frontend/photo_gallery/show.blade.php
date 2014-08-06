@extends('frontend/_layout/layout')
@section('content')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
   <div class="container">
      <h1 class="pull-left">{{ $photo_gallery->title }}</h1>
      <ul class="pull-right breadcrumb">
         <li><a href="#">Home</a></li>
         <li class="active">Galerie Bilder und Fotos</li>
      </ul>
   </div>
</div>
<!--/breadcrumbs-->
<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <p>{{ $photo_gallery->content }}</p>
      </div>
   </div>
</div>
<div class="container">
   <div class="gallery-page">
      <div class="row">
         <div class="col-lg-12">
            <h4 class="page-header">Thumbnails</h4>
         </div>
         <?php
            $idx= $photo_gallery->id;
             
            // Ordnername 
            $ordner = "jquery-file-upload/server/php/g$idx/files/"; //auch komplette Pfade möglich ($ordner = "download/files";)
            $myuserurl=  URL::to('');
            $ordneralleine ="files/";
            // Ordner auslesen und Array in Variable speichern
            $allebilder = scandir($ordner); // Sortierung A-Z
            // Sortierung Z-A mit scandir($ordner, 1) 
             
            // Schleife um Array "$alledateien" aus scandir Funktion auszugeben
            // Einzeldateien werden dabei in der Variabel $datei abgelegt
            foreach ($allebilder as $bild) {
             
                // Zusammentragen der Dateiinfo
                $bildinfo = pathinfo($myuserurl."/jquery-file-upload/server/php/g$idx/files/".$bild); 
                 $bildinfot = pathinfo($myuserurl."/jquery-file-upload/server/php/g$idx/files/thumbnail/".$bild); 
                //Folgende Variablen stehen nach pathinfo zur Verfügung
                // $dateiinfo['filename'] =Dateiname ohne Dateiendung  *erst mit PHP 5.2
                // $dateiinfo['dirname'] = Verzeichnisname
                // $dateiinfo['extension'] = Dateityp -/endung
                // $dateiinfo['basename'] = voller Dateiname mit Dateiendung
             
                // Größe ermitteln für Ausgabe
                $size = ceil(filesize($ordner."/".$bild)/1024); 
                //1024 = kb | 1048576 = MB | 1073741824 = GB
             
                // scandir liest alle Dateien im Ordner aus, zusätzlich noch "." , ".." als Ordner
                // Nur echte Dateien anzeigen lassen und keine "Punkt" Ordner
                // _notes ist eine Ergänzung für Dreamweaver Nutzer, denn DW legt zur besseren Synchronisation diese Datei in den Orndern ab
                // Thumbs.db ist eine Ergänzung unsichtbare Dateiergänzung die von ACDSee kommt
                // um weitere ungewollte Dateien von der Anzeige auszuschließen kann man die if Funktion einfach entsprechend erweitern
                if ($bild != "." && $bild != ".."  && $bild != "") { 
                ?>
         <div class="col-md-3 col-sm-6">
            <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project Title" href="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>">
               <span class="overlay-zoom">
                  <img alt="" src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>" class="img-responsive">
                  <div class="zoom-icon"></div>
               </span>
            </a>
         </div>
         <?php  
            };          
            
            
            };
            
            ?>
      </div>
   </div>
   <hr>
   <footer>
      <div class="row">
         <div class="col-lg-12">
            <p>Copyright &copy; KochAbo.at</p>
         </div>
      </div>
   </footer>
</div>
<!--[if lt IE 9]>
<script src="{{URL::to('assets/frontend/plugins/respond.js')}}"></script>
<![endif]-->
@stop