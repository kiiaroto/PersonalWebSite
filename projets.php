<?php
$currentPage = 'projets';
require ('require-ressources/header/header.php');

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        ?>
        <div class="row even-number">
            <div class="col-md-4 text-center"><img></div>
            <div class="col-md-8">
                <h1>Heading</h1>
            </div>
        </div>
        <hr>
        <?php
    } else {
        ?>
        <div class="row odd-number">
            <div class="col-md-8">
                <h1>Heading</h1>
            </div>
            <div class="col-md-4 text-center"><img></div>
        </div>
        <hr>
        <?php
    }
}
?>
