<?php 

    
    require_once('config.php');

    foreach ($options as $option) {
        
        extract($option);

        if ($position == 'center') {
            $position = 'class="text-center"';
            echo '<th ' .$position. 'scope="col">' .$value. '</th>';
        } else if ($position == 'left') {
            $position = 'class="text-left"';
            echo '<th ' .$position. 'scope="col">' .$value. '</th>';
        }
        else if ($position == 'right') {
            $position = 'class="text-right"';
            echo '<th ' .$position. 'scope="col">' .$value. '</th>';
        } else {
            echo '<th scope="col">' .$value. '</th>';
        }
        
    }


?>