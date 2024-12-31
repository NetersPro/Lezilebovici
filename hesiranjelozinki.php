<?php
$plainPassword = "jasamnastavnik";
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);
echo $hashedPassword;
?>