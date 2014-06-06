<?php
include('http://127.0.0.1/laravel/kochabo/admin/connect')


try {
 $bdd = new PDO('mysql:host=localhost;dbname=kochabo', 'root', 'bono9999');
} catch(Exception $e) {
exit('Unable to connect to database.');
}
// Values received via ajax
$id = $_POST['id'];
if(!empty($_GET)) extract($_GET);
if(!empty($_POST)) extract($_POST);
// List of events
 $json = array();

 // Query that retrieves events
 $requete = "SELECT * FROM calendar ORDER BY id";


 // Execute the query
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

 // sending the encoded result to success page
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

