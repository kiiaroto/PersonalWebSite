<?php
 include 'require-ressources/dao.php';
$currentPage = 'projets';
require ('require-ressources/header/header.php');

$imagePath = '/images/projets/2018-05-20_18-04-30.png';

$projets = getProjectList();
?>


<div>
    <div class="container">


        <?php
        foreach (array_reverse($projets) as $p) {
            if ($p['id'] % 2 == 1) {
                ?>
                <div class="row odd-number">
                    <div class="col-md-12 col-lg-7 text-col">
                        <h1 class="projet-title"><?= $p['title'] ?></h1>
                        <p class="projet-text"><br><?= $p['description'] ?><br></p>
                        <div class="text-right text-link"><a href="projet.php?id=<?= $p['id'] ?>">Plus d'information</a></div>
                    </div>
                    <div class="col-md-12 col-lg-5 text-center picture-col"><a href="projet.php?id=<?= $p['id'] ?>"><img class="rounded img-fluid image" src="<?= $imagePath ?>"><div class="over-picture"><p class="text-over-picture font-weight-bold">Click ici pour plus d'informations</p></div></a></div>
                </div>
                <hr>
                <?php
            } else {
                ?>
                <div class="row even-number">
                    <div class="col-md-12 col-lg-7 order-lg-2 text-col">
                        <h1 class="projet-title"><?= $p['title'] ?></h1>
                        <p class="projet-text"><br><?= $p['description'] ?><br></p>
                        <div class="text-right text-link"><a href="projet.php?id=<?= $p['id'] ?>">Plus d'information</a></div>
                    </div>
                    <div class="col-md-12 col-lg-5 order-lg-1 text-center picture-col"><a href="projet.php?id=<?= $p['id'] ?>"><img class="rounded img-fluid image" src="<?= $imagePath ?>"><div class="over-picture"><p class="text-over-picture font-weight-bold">Click ici pour plus d'informations</p></div></a></div>
                </div>
                <hr>
                <?php
            }
        }
        ?>

    </div>
</div>

<?php
require('require-ressources/footer/footer.php');
?>