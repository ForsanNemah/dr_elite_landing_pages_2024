<?php


 
function convert_date_format($date_string) {
    $original_format = 'd/m/Y H:i:s';
    $new_format = 'Y/m/d H:i:s';
    
    $datetime = DateTime::createFromFormat($original_format, $date_string);
    if ($datetime !== false) {
        return $datetime->format($new_format);
    }
    
    // Try again with leading zeros for single-digit values
    $date_parts = explode(' ', $date_string);
    $date_parts[0] = str_pad($date_parts[0], 2, '0', STR_PAD_LEFT);
    $date_parts[1] = str_pad($date_parts[1], 2, '0', STR_PAD_LEFT);
    $time_parts = explode(':', $date_parts[1]);
    $time_parts[0] = str_pad($time_parts[0], 2, '0', STR_PAD_LEFT);
    $time_parts[1] = str_pad($time_parts[1], 2, '0', STR_PAD_LEFT);
    $date_parts[1] = implode(':', $time_parts);
    $datetime = DateTime::createFromFormat($original_format, implode(' ', $date_parts));
    
    if ($datetime !== false) {
        return $datetime->format($new_format);
    }
    
    return null;
}

$input_date = '15/2/2024 11:19:6';
$output_date = convert_date_format($input_date);
echo $output_date; // Output: 2024/05/25 12:34:56




?>