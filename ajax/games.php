<?php 
require '../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM games
            WHERE
              title LIKE '%$keyword%'
            ";
$games = query($query);
?>

<?php foreach ($games as $game) : ?>
                <div class="col-lg-2 col-sm-4 col-4 mt-4">
                    <img src="asset/img/game/<?= $game['image'] ?>" style="height: 170px; width:100%; border-radius: 12px;" >
                    <h2 class="mt-2"><?= $game['title']?></h2>
                    <a href="order_form.php?title=<?= $game['title'] ?>&price=<?= $game['price'] ?>" class="btn" style="background-color:#cc462b"><i class="bi bi-cart"></i>Browse</a>
                </div>
                <?php endforeach; ?>