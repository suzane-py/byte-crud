<?php

Class LibUtil {

    public static function redirecionar($pagina) {
        echo "<script>location.href='".$pagina."'; </script>";
        exit();
    }

}