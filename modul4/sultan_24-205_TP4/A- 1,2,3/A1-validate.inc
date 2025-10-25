<!-- Buatlah file PHP validate.inc yang berisi fungsi validateName untuk memvalidasi field surname dengan format alfabet.-->
<?php
function validateName($field_list, $field_name) {
    if (!isset($field_list[$field_name]))
        return false;

    $pattern = "/^[a-zA-Z'-]+$/";
    if (!preg_match($pattern, $field_list[$field_name]))
        return false;

    return true;
}
?>
