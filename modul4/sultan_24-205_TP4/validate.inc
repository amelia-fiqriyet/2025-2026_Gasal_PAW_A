<!-- B. NMR 9 -->
    <!-- 9.	Menambahkan validasi server-side untuk field masukan lain dan tampilan pesan error yang sesuai untuk setiap field masukan. --><?php
/*
<?php
    function validateName(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z'-]+$/";
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'harus diisi';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'hanya boleh berisi huruf';
    }
}

function validateEmail(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'harus diisi';
    } elseif (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'format email tidak valid';
    }
}

function validatePassword(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'harus diisi';
    } elseif (strlen($field_list[$field_name]) < 8) {
        $errors[$field_name] = 'minimal 8 karakter';
    }
} */
?>

<?php
function validateName(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z'-]+$/";
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'Nama harus diisi';
    } elseif (!preg_match($pattern, $field_list[$field_name])) {
        $errors[$field_name] = 'Nama hanya boleh berisi huruf';
    }
}

function validateEmail(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'Email harus diisi';
    } elseif (!filter_var($field_list[$field_name], FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'Format email tidak valid';
    }
}

function validatePassword(&$errors, $field_list, $field_name) {
    if (!isset($field_list[$field_name]) || empty(trim($field_list[$field_name]))) {
        $errors[$field_name] = 'Password harus diisi';
    } elseif (strlen($field_list[$field_name]) < 8) {
        $errors[$field_name] = 'Password minimal 8 karakter';
    }
}
?>
