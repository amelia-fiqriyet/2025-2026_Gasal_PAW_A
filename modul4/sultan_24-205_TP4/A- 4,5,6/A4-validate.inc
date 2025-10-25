<!-- Ubah fungsi validateName agar dapat menyimpan pesan error ke dalam array. -->
<?php
function validateName(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z'-]+$/";
    if (!isset($field_list[$field_name]) || empty($field_list[$field_name]))
        $errors[$field_name] = 'harus diisi';
    else if (!preg_match($pattern, $field_list[$field_name]))
        $errors[$field_name] = 'hanya boleh berisi huruf';
}
?>
