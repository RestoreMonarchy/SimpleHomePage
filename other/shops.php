<?php

    foreach ($shops as $item) {
        echo '<div class="col">
        <center><a href="' .$item['URL']. '" type="button" class="btn btn-dark btn-lg">' .$item['Text'].
        '</a></center>
      </div>';
    }

?>