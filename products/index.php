<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PRODUCT CARD</title>
  <link rel="stylesheet" href="./css/format.css">
  <link rel="stylesheet" href="./css/products-1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
  $productsData = json_decode(json_encode([
    'title' => 'Bali Full Day Tour',
    'description' => 'Mahesa Bali Tours offers exceptional service and comfortable facilities to make your journey unforgettable. Discover the beauty of Bali with our professional and friendly team.',
    'items' => [
      ['location' => 'Bali, Indonesia', 'title' => 'Spiritual Purification Full Day Tour', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate doloremque ducimus explicabo fugit iusto laudantium, officia quia saepe vero voluptate. Dignissimos illo ipsa placeat provident, ratione repellat sunt ut voluptas?', 'price' => 40, 'img_cover' => 'https://jwc.gotra-resources.my.id/web-upload/1705815786-21-01-2024-fCIdotuBZHFgyvsOELmWD4b9nkG2PAar.webp'],
      ['location' => 'Bali, Indonesia', 'title' => 'Spiritual Purification Full Day Tour', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate doloremque ducimus explicabo fugit iusto laudantium, officia quia saepe vero voluptate. Dignissimos illo ipsa placeat provident, ratione repellat sunt ut voluptas?', 'price' => 40, 'img_cover' => 'https://jwc.gotra-resources.my.id/web-upload/1705815786-21-01-2024-fCIdotuBZHFgyvsOELmWD4b9nkG2PAar.webp'],
      ['location' => 'Bali, Indonesia', 'title' => 'Spiritual Purification Full Day Tour', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate doloremque ducimus explicabo fugit iusto laudantium, officia quia saepe vero voluptate. Dignissimos illo ipsa placeat provident, ratione repellat sunt ut voluptas?', 'price' => 40, 'img_cover' => 'https://jwc.gotra-resources.my.id/web-upload/1705815786-21-01-2024-fCIdotuBZHFgyvsOELmWD4b9nkG2PAar.webp'],
    ]
  ]));
?>


<section id="_products-1" class="_products">
  <div class="_wrapper">
    <header class="_header">
    </header>

    <main class="_content">
      <?php foreach ($productsData->items as $items): ?>
        <article class="_card">
          <div class="_image">
            <img src="<?= $items->img_cover ?>" alt="cover">
          </div>
          <div class="_content">
            <span class="_location"><i class="fa-solid fa-location"></i> <?= $items->location ?></span>
            <h3 class="_title"><?= $items->title ?></h3>
            <div class="_stars">
              <?php for ($i = 0; $i < 5; $i++) {
                echo "<i class='fa-solid fa-star'></i>";
              } ?>
            </div>
            <p class="_description"><?= $items->desc ?></p>
            <hr class="_line">
            <div class="_price-cta">
              <p class="_price">Start From<br><span>USD 40 / person</span></p>
              <a href="#" class="_cta">Learn More</a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </main>
  </div>
</section>

</body>
</html>