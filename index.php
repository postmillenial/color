<?php include "header.php";
    $color = sprintf( "%02X", mt_rand( 0, 0xFF ));
    $val = $color.$color.$color;
    page_header("Color: #$val");
    echo "<style>body{background-color:#$val}</style>";
?>
<?php include "footer.html"; ?>
