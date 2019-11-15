<?php
   if(isset($_POST['submit']) {
      if($_GET['lang'] == "english") {
         echo("First name: " . $_POST['firstname'] . "<br />\n");
         echo("Last name: " . $_POST['lastname'] . "<br />\n");
      } else if($_GET['lang'] == "spanish") {
         echo("Nombre: " . $_POST['firstname'] . "<br />\n");
         echo("Apellido: " . $_POST['lastname'] . "<br />\n");
   }
?>

<form method="post">
   <p>First name: <input type="text" name="firstname" /></p>
   <p>Last name: <input type="text" name="firstname" /></p>
   <input type="submit" name="submit" value="Submit" />
</form>