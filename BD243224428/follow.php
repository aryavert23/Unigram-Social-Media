<html>
    <?php
        $follower=$_GET['nombredeusuario1'];
        $followed=$_GET['nombredeusuario2'];
        $string="INSERT into r_follower set nombreUsuario1 = \"$follower\", nombreUsuario2 = \"$followed\"";
        include "../conexiones.php";
        $insert=mysqli_query($conexio,$string);
    ?>
    <head>
        <meta http-equiv="refresh" content="0;url=verPerfil.php?nombredeusuario=<?php echo $followed ?>" />
    </head>
</html>