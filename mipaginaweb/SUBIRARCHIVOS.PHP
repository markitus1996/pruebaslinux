<?php

copy ( $_FILES [ 'foto'][ 'tmp_name'], $_FILES [ 'foto'][ 'tmp_name']);
echo "archivo subido correctamente";
$nombre =  $_FILES [ 'foto'][ 'tmp_name'];
echo "<img src=\"$nombre\">;

?>
