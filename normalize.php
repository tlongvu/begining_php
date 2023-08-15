<?php
$chuoi = " happy  new  year ";
function normalizer($chuoi_ban_dau){

    $str = trim($chuoi_ban_dau);
    $tspace = "  ";
    $space = " "; 
    while(strpos($str,$tspace)>0){
        $str = str_replace($tspace,$space,$str);
    }
    return $str;
};

echo "kq: ".normalizer($chuoi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>