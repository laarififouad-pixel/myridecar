<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>

<section class="hero">
<div class="overlay"></div>
<div class="hero-content">
<h1>Rent your car in Fes</h1>
<p>Luxury • Airport delivery</p>
<a href="booking.php"><button>Book Now</button></a>
</div>
</section>

<section class="cars">
<h2>Our Cars</h2>
<div class="grid">

<?php
$result = $conn->query("SELECT * FROM cars LIMIT 4");
while($row = $result->fetch_assoc()){
echo "
<div class='card'>
<img src='{$row['image']}'>
<h3>{$row['name']}</h3>
<p>{$row['price']} MAD/day</p>
</div>";
}
?>

</div>
</section>

<?php include("includes/footer.php"); ?>
