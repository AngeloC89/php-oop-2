<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Models/Category.php";
include __DIR__ . "/Models/Toy.php";
include __DIR__ . "/Models/Meal.php";
include __DIR__ . "/Models/Accessory.php";



// $accessories = Accessory::fetchAccessories();
$meal = Meal::fetchMeal();
$accessory = Accessory::fetchAccessory();
// var_dump($category);
// var_dump($meal);


//($scadenza,$title, $price, $description, $img, $category)
// $croccantini = new Meal('12/12/2025', 'croccantini per cane', 9.90, 'Cibo secco senza glutine', 'https://www.bauzaar.it/media/catalog/product/0/_/0._-_2021-06-28t144750.711.png?width=700&height=700&store=default&image-type=image', $categories[0]);
?>



<main>
    <section class="container">
        <h3>accessories</h3>
        <div class="row">
            <?php foreach ($accessory as $item) { ?>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?= $item->img ?>" class="card-img-top" alt="<?= $item->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->title ?></h5>
                            <div class="d-flex justify-content-between ">
                                <h6 class="card-text">
                                    <?= $item->price ?> &euro;
                                </h6>
                                <div>
                                    <?= $item->description ?>
                                </div>
                            </div>
                            <p>
                                <?= $item->category->name ?>
                            </p>
                            <img src="<?= $item->category->logo ?>" class="card-img-top w-25 "
                                alt="<?= $item->category->name ?>">
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </section>
    <section class="container">
        <h3>Meal</h3>
        <div class="row">
            <?php foreach ($meal as $item) { ?>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?= $item->img ?>" class="card-img-top" alt="<?= $item->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->title ?></h5>
                            <div class="d-flex justify-content-between ">
                                <h6 class="card-text">
                                    <?= $item->price ?> &euro;
                                </h6>
                                <div>
                                    <?= $item->description ?>
                                </div>
                            </div>
                            <p>
                                <?= $item->category->name ?>
                            </p>
                            <img src="<?= $item->category->logo ?>" class="card-img-top w-25 "
                                alt="<?= $item->category->name ?>">
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </section>


</main>

<?php
include __DIR__ . "/Views/footer.php";
?>