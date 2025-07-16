<?php 
include 'connection.php'; 
$id = isset($_GET['id']) ? $_GET['id'] : null;

$nom = $cognom = $edat = ""; // Valores por defecto

if ($id !== null) {
    $select = "SELECT * FROM nom WHERE id='$id'";
    $data = mysqli_query($CON, $select);
    $row = mysqli_fetch_array($data);

    if ($row) {
        $nom = $row['nom'];
        $cognom = $row['cognom'];
        $edat = $row['edat'];
    }
}
?>
<div>
<form action="" method="POST">
    <input value="<?php echo $nom; ?>" TYPE="text" name="nom" placeholder="nom"> <br><br>
    <input value="<?php echo $cognom; ?>" TYPE="text" name="cognom" placeholder="cognom"><br><br>
    <input value="<?php echo $edat; ?>" TYPE="number" name="edat" placeholder="edat"><br><br>
    <input type="submit" name="actualitza" value="actualitza">
    <button>
        <a href="visualitza.php">Tornar</a>
    </button>
</form>
</div>
<?php
if(isset($_POST['actualitza'])) {
    $nom = $_POST['nom'];
    $cognom = $_POST['cognom'];
    $edat = $_POST['edat']; 
    $update = "UPDATE nom SET nom='$nom', cognom='$cognom', edat='$edat' WHERE id='$id'";
    $data = mysqli_query($CON, $update);
    if ($data) {
        ?>
<script type="text/javascript">
       alert("Dades actualitzades");
       window.location.href = "visualitza.php";
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