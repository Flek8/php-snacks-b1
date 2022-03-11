<?php

    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae enim minus alias placeat aliquid animi dolores. Quidem nihil molestiae neque cupiditate necessitatibus impedit quis mollitia ratione, deserunt atque beatae?';

    $testoDiviso = explode('.', $testo);

    for ($i = 0; $i < count($testoDiviso); $i++) {

        echo "<p> $testoDiviso[$i] </p>";
    }