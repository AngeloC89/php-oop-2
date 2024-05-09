<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Category.php";
include __DIR__ . "/Models/Toy.php";
include __DIR__ . "/Models/Meal.php";

$categoria_cane = new Category("cane", "https://c8.alamy.com/compit/2bg0cd9/modelli-di-disegno-vettoriale-del-logo-del-cane-animale-2bg0cd9.jpg");

//($scadenza,$title, $price, $description, $img, $category)
$croccantini = new Meal('12/12/2025', 'croccantini per cane', 9.90, 'Cibo secco senza glutine', 'https://www.bauzaar.it/media/catalog/product/0/_/0._-_2021-06-28t144750.711.png?width=700&height=700&store=default&image-type=image',$categoria_cane);
?>

<main>

<h2>main</h2>

<div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?= $croccantini->img ?>" class="card-img-top" alt="<?= $croccantini->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $croccantini->title ?></h5>
                            <div class="d-flex justify-content-between ">
                                <h6 class="card-text">
                                    <?= $croccantini->price ?> &euro;
                                </h6>
                                <div>
                                    <?= $croccantini->description ?>
                                </div>
                            </div>
                            <p>
                                <?= $categoria_cane->name ?>
                            </p>
                            <img src="<?= $categoria_cane->logo ?>" class="card-img-top w-25 " alt="<?= $categoria_cane->logo ?>">
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
</main>

<?php
include __DIR__ . "/Views/footer.php";
?> 

