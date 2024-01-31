<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Toy.php';

$catsCategory = new Category('Cats', 'Products for cats', 'https://cdn-icons-png.flaticon.com/512/3479/3479853.png');
$dogsCategory = new Category('Dogs', 'Products for dogs', 'https://cdn2.iconfinder.com/data/icons/dog-activities-round/128/1545485_-_canine_dog_dogs_labrador_r-512.png');

$leash = new Product('Dog\'s leash', 'beautiful dog leash', 65.7, 'https://images.eprice.it/nobrand/0/lightbox/825/204478825/222322234419PRDID.0.jpg', true, 12, $dogsCategory);

$cat_leash = new Product('Cat\'s leash', 'A weird stupid cat leash', 20.49, 'data:image/jpeg;base64,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', true, 36, $catsCategory);



$cat_food = new Food('Cat\'s food', 'Top food for your cat\'s', 1000, 'https://mypetmall.net/pub/media/catalog/product/n/u/nuovo.pouch.monoprotein_2400x2400-min_1--512x512.webp', true, 111, $catsCategory, 9, 15, 30);

$dog_food = new Food('Dog\'s food', 'Top food for your big dogs', 999, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLTO0jfECF5rJmO30P1AWnFmSfGWn2EFgj0w&usqp=CAU', true, 6, $dogsCategory, 2, 20, 45);

$cat_toy = new Toy('Cat\'s toy', 'Best toy for your little kitties', 10.05, 'data:image/jpeg;base64,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', true, 10, $dogsCategory, 'Good question');

$Kennel = new Kennel('Kennel', 'Best kennel for dogs', 152.76, 'https://m.media-amazon.com/images/I/81mTYtNJ0dL.jpg', true, 2, $dogsCategory, 'medium');



$products = [
    $leash, $cat_leash, $cat_food, $dog_food, $cat_toy, $Kennel,
];


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Animal's store</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    Beautiful animal's product
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-3 mb-5 ">
                <div class="card h-100">
                    <img src="<?php echo $product->imageUrl; ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $product->description; ?>
                        </h5>
                        <h6 class="card-subtitle">
                            <?php echo $product->category->name; ?>
                        </h6>
                        <p class="card-text">
                            <?php echo $product->description; ?>
                        </p>

                        <?php if ($product->getAdditionalInfo()) { ?>
                        <p>
                            Additional info:
                            <br>

                            <?php echo $product->getAdditionalInfo(); ?>
                        </p>
                        <?php } ?>
                        <a href="#" class="btn btn-primary">
                            Acquista per <?php echo $product->price; ?>&euro;
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </section>
    </main>
</body>

</html>