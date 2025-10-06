<?php
$nb_post = 0;

foreach ($posts as $post) {
    if ($post['published'] === true) {
        $nb_post++;
    }
}
?>