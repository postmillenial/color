<?php

function page_header($title){
    echo '<html><head><title>';
    echo strip_tags($title);
    echo '</title><link type="text/css" rel="stylesheet" href="style.css" media="all" /></head><body>';
    echo '
    <header>
        <span class="headernav">
		<a href="/color/">Give me a new color!</a>
    </header>';
    echo "<h1 class='title'>".$title."</h1>";
    echo "<div class='content'>";
}
?>
