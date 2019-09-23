<?php

$rand = rand(10, 10000);
for ($i = 0; $i < $rand; $i++) {
    hash('sha256', $rand . $i . $rand);
}
echo 'Hello World!';
