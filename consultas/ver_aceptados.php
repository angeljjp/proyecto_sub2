<?php
    include("../conexion.php");

    $resultado = $conn->query("SELECT * FROM suscriptores_boletin WHERE acepta_terminos = 1");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Aceptaron términos</title>
        <link rel="stylesheet" href="../estilos.css">
    </head>
    <body>

        <h1>Suscriptores que Aceptaron los Términos</h1>
        <a href="../index.php" class="btn">Volver</a>

        <table>
            <tr>
            <th>ID</th><th>Nombre</th><th>Email</th><th>Grado</th><th>Fecha Alta</th><th>Canal</th>
            </tr>

<?php while($row = $resultado->fetch_assoc()): ?>
            <tr>
            <td><?= $row['id_suscriptor'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['grado'] ?></td>
            <td><?= $row['fecha_alta'] ?></td>
            <td><?= $row['canal'] ?></td>
            </tr>
<?php endwhile; ?>

        </table>
    </body>
</html>