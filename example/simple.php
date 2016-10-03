<?php
include "../bootstrap.php";

use Toolsphp\progressBar\ProgressBar;

$bar = ProgressBar::create(100, 100);

for ($i = 0; $i < 100; $i++) {
    $bar->update($i);
    sleep(1);
}