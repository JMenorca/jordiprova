<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Jordi Prova GITHUB</title>
    </head>
    <body>
<div>
<form action="" method="POST">
    <input TYPE="text" name="nom" placeholder="nom"> <br><br>

    <input TYPE="text" name="cognom" placeholder="cognom"><br><br>

    <input TYPE="number" name="edat" placeholder="edat"> <br><br>

    <input type="submit" name="guardar" value="guardar">
    <button>
<a href="visualitza.php">Visualitza</a>
    </button>


</form>

</div>
<?php
if(isset($_POST['guardar'])) {
    $nom=$_POST['nom'];
    $cognom=$_POST['cognom'];
    $edat=$_POST['edat']; 
$query= "INSERT INTO nom (
nom,cognom,edat) VALUES('$nom','$cognom','$edat')";
$data=mysqli_query($CON,$query);
if ($data) {
    ?>
<script type="text/javascript">
       alert("Dades guardades");
</script>
    <?php
}
else
{
    ?>
    <script type="text/javascript">
       alert("Torna a provar");
       </script>
       <?php
}
}
?>
    </body>
</html>