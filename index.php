<?php

$names = ['Benji', 'jane', 'jim', 'jill'];
// $names = array('Benji', 'jane', 'jim', 'jill');

    $count = 1;
    // while($count <= 100) {
    //     echo "<li>$count</li>";
    //     $count++;
    // }
    for($i = 0; $i < count($names); $i++) {      
        echo "<p>hello, my nam is $names[$i]</p>";
    }
?>

<p>hello, my nam is <?php echo $names[0]; ?></p>