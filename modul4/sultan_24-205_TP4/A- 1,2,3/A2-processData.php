<!-- Ubah processData.php agar menambahkan validate.inc dan melakukan validasi surname. -->
<?php
require 'A1-validate.inc';

if (validateName($_POST, 'surname'))
    echo 'Data OK!';
else
    echo 'Data invalid!';
?>
