<?php
include 'require-ressources/dao.php';

$details = getProjectDetails($_GET['id']);

$currentPage = 'projets';
require ('require-ressources/header/header.php');

?>


<div>
    <div class="container projet-x">
        <div class="row projet-information">
            <div class="col projet-description">
                <div>
                    <h1><?= $details['title'] ?><br></h1>
                    <p><br><?= $details['description'] ?><br><br></p><a href="<?= $details['github_link'] ?>">Github<i class="fas fa-link"></i></a></div>
            </div>
            <div class="col-4 align-self-center">
                <ul class="list-unstyled header-list">
                    <li>Language:
                        <ul class="list-unstyled item-list">
                            <?php
                            foreach ($details['languages'] as $value) {
                                ?><li><?php echo $value; ?></li><?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>Features:
                        <ul class="list-unstyled item-list">
                            <?php
                            foreach ($details['features'] as $value) {
                                ?><li><?php echo $value; ?></li><?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
<!--                <div class="carousel-item active"><img class="w-100 d-block" src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>
                <div class="carousel-item"><img class="w-100 d-block" src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600" alt="Slide Image"></div>-->

                <?php
                for ($i = 0; $i < count($details['images']); $i++) {
                    if ($i === 0) {
                        ?>
                        <div class="carousel-item active"><img class="w-100 d-block" src="<?= $details['images'][0] ?>" alt="Slide Image"></div>
                        <?php
                    } else {
                        ?>
                        <div class="carousel-item"><img class="w-100 d-block" src="<?= $details['images'][$i] ?>" alt="Slide Image"></div>
                        <?php
                    }
                }
                ?>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button"
                                                                                                                                                                                                     data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>

<?php
require('require-ressources/footer/footer.php');
?>