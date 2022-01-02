<?php


class Security
{

//if(!isset($user)){
//die ('accesso negato');
//}
    static function AccessControl()
    {
        if (!isset($_SESSION['user'])) {
            if (!headers_sent()) {
                header('location:index.php');
            } else {
                ?>
                <meta http-equiv="refresh" content="0;URL=index.php">
                <?php
            }
        }
    }

    static function redirectTo($location)
    {
        if (!headers_sent()) {
            header('Location: ' . $location);
        } else {
            ?>
            <meta http-equiv="refresh" content="0;URL=<?php echo $location ?>">
            <?php
        }

    }

}
