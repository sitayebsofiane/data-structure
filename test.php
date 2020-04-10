<?php
// $hash1 = password_hash("bruno", PASSWORD_DEFAULT);

// if (password_verify('bruno', $hash1)) {
//     echo 'Le mot de passe est valide !';
// } else {
//     echo 'Le mot de passe est invalide.';
// }
$id = -15;

$id = is_int($id) ? abs($id) : 0;
echo $id;