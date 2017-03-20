<?php

foreach( $data['categories'] as $key => $category) {
    echo '<a href="/catalog/'.$category['id'].'">'.$category['title'].'</a><br/>';
}
echo '<hr/>';