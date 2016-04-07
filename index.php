<?php include "header.php";
    $color = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
    page_header("Color: $color");
    echo "<style>body{background-color:$color}</style>";
?>
<?php include "footer.html"; ?>
