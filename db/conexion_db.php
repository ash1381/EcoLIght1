<?php
          $con=mysql_connect("localhost","ecoli795","Qamcosbin3!") or die ("No se puede conectar a la base de datos");
          $db=mysql_select_db('ecoli795_ecolight', $con) or die ("No se puede conectar a la base de datos");
          mysql_set_charset('utf8');
?>
