<?php include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM nom WHERE id='$id'";
$data=mysqli_query($CON,$query);
if ($data) {
?>
<script type="text/javascript">
    alert("Eliminat!!!");
    window.open("http://localhost/jordiprova/visualitza.php", "_self");
</script>
<?php
}
else 
{
    ?>
    <script type="text/javascript">
        alert("Prova un altre vegada");
    </script>
    <?php 
}