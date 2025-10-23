<?php
require 'validate.inc';

$errors = array();

validateName($errors, $_POST, 'surname');

if ($errors) {
    echo '<h3 style="color:red">Terjadi kesalahan:</h3>';
    foreach ($errors as $field => $error) {
        echo ucfirst($field) . " : $error<br/>";
    }
} else {
    echo '<h3 style="color:green">Data berhasil dikirim!</h3>';
}
?>
