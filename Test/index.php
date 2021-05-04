<?php

session_start();

$_SESSION["panier"] = "list" ;


?>
<html>
<head>



</head>




<body>

<h3>Insérer des informations :</h3>

<form  method="get"  action="personne.php">

<label>Id : <label>
<input type="text" name="id" id="id"  /> </br></br>

<label>Nom : <label>
<input type="text" name="nom" id="nom"  /> </br></br>

<label>Age : <label>
<input type="text" name="age" id="age"  /> </br></br>

<input type="submit" id="save" value="save me!!!" />
 
</form>

</br></br></br></br>

<h3>Modifier des informations à l'aide de l'Id :</h3>

<form  method="get"  action="modify.php">

<label>Id : <label>
<input type="text" name="id" id="id"  /> </br></br>

<label>Le nouveau nom : <label>
<input type="text" name="nom" id="nom"  /> </br></br>

<label>Le nouveau age : <label>
<input type="text" name="age" id="age"  /> </br></br>

<input type="submit" value="MODIFY my informations" />
 
</form>

</br></br></br></br>

<h3>Supprimer des informations à l'aide de l'Id :</h3>

<form  method="get"  action="delete.php">

<label>Id : <label>
<input type="text" name="id" id="id"  /> </br></br>

<input type="submit" value="DELETE my informations" />
 
</form>


</body>
</html>