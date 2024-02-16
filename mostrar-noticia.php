<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>gt</h1>
    <?php
include '../conexion/conexion.php'; 

$sql = "SELECT titulo, descripcion, imagen FROM noticias";
$result =$conexion->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row["titulo"] . "</h2>";
        echo "<p>" . $row["descripcion"] . "</p>";
        echo "<img src='" . $row["imagen"] . "' alt='Imagen de la noticia'>";
        echo "</div>";
    }
} else {
    echo "No hay noticias disponibles.";
}
$conexion->close();
?>

</body>
</html>

