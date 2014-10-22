<?php
  $dbname = '';
  $dbuser = '';
  $dbpass = '';
  $dbhost = '';
  $db = new PDO('mysql:host='$dbhost';dbname='$dbname'', $dbuser, $dbpass);
 ?>
 <form method="GET" action="">
     <label for="sub_input">Le nombre de clef a generer</label> <br>
     <input type="text" name="sub_input" id="sub_input">
     <button id="sub" type="submit">Valider</button>
 </form>
<?php
if (isset($_GET['sub_input'])) {
    $nbr = $_GET['sub_input'];
    $i = "0";
while ($i <= $nbr):
    $clef = sha1(rand('1' , '9999999999'));
    $req = $db->prepare("INSERT INTO clef (clef) VALUES (:clef)");
    $req->execute(array(
        "clef" => $clef,
        ));
echo "Le cle numero ".$i." est : ".$clef."<br>";
$i++;
endwhile;
}
 ?>


