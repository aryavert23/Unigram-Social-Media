<html>
    <?php
        $unfollower=$_GET['nombredeusuario1'];
        $unfollowed=$_GET['nombredeusuario2'];
        $string="DELETE from r_follower WHERE nombreUsuario1='$unfollower' AND nombreUsuario2='$unfollowed'";
        include "../conexiones.php";
        $insert=mysqli_query($conexio,$string);
    ?>
    <head>
        <meta http-equiv="refresh" content="0;url=verPerfil.php?nombredeusuario=<?php echo $unfollowed ?>" />
    </head>
</html>