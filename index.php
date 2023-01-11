<?php 
    function intro($name, $color) {
        echo "Hi, my name is $name, and my favorite color is $color<br></br>";
    }
intro("ben", "red");
intro("jack", "blue");
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>