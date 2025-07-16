<?php include 'connection.php'; ?>
<div style="margin-bottom:20px;">
    <a href="http://localhost/jordiprova/index.php" style="font-size:2em; font-weight:bold; text-decoration:none;">INICI</a>
</div>
<table border="1px" cellpadding="10px" cellspacing="0px">
<tr>
    <th>Nom</th>
    <th>Cognom</th>
    <th>Edat</th>
    <th colspan="2">Dades</th>
</tr>
<?php
$query = "SELECT * FROM nom";
$data = mysqli_query($CON, $query);
$result = mysqli_num_rows($data);

if ($result > 0) {
    while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['cognom']; ?></td>
            <td><?php echo $row['edat']; ?></td>
            <td><a href="actualitza.php?id=<?php echo $row['id']; ?>">Edita</a></td>

            <td> <a onclick="return ('¿Estas segur de eliminar? ')" href="elimina.php?id=<?php echo $row['id'] ?>">Elimina</a> </td>
        </tr>
        <?php
    }
} else {
    ?>
    <tr>
        <td colspan="4">No es troben dades</td>
    </tr>
    <?php
}
?>
</table>
