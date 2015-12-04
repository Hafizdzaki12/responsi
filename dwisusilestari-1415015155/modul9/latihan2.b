<?php
sesiion_start();
unset($_SESSION['login']);
unset($_session[''username']);
echo "sukses logout. silahkan <a href='login.php'>login</a>untuk masuk kehalaman a dmin";
