<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>

<h1>Cars</h1>

<div class="grid">
<?php
$result = $conn->query("SELECT * FROM cars");
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

<?php include("includes/footer.php"); ?>
