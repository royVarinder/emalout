<?php require_once "./backend/config.php"; ?>
<?php include("includes/header.php"); ?>


<div class="category-heading"><h3><?php echo $category; ?><hr></h3><div>

<?php 
/* fetching data from the admin table */
// $category = $_GET['category'];
$category = "anythingonrentorgs";

if($category == "anythingonrentorgs")
{
    $sql = "SELECT * FROM $category";
    $result = mysqli_query($conn, $sql);
    ?> 
    <div class="container businessGrids">
    <div class="row">
    <?php if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
     $fetchImage = "SELECT * FROM  anythingonrent";

            // print_r($row);
    ?>
    <div class="col-md-3" style="margin-top:20px; text-align:left;">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['businessName']; ?></p>
                        <p class="card-text"><i class="fa fa-map-marker"></i><?php echo $row['fulladdress']; ?></p>
                        <p class="card-text"><button class="eMaloutBtn">Visit</button></p>
                    </div>
            </div>
        </div>
    <?php } } ?>
    </div>
    </div>

<?php
}

?>








<?php include("includes/footer.php"); ?>
