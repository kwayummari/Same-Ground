<?php
$connect=$db =mysqli_connect('localhost','u750269652_tda','Tda@2022','u750269652_tda')
or die("connection Failed");
$category = $_POST["category"];
$result = mysqli_query($connect, "SELECT * FROM subcategory where category = '$category'");
?>
<option value="">Select Sub Category</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["subcategory"]; ?>"><?php echo $row["subcategory"]; ?></option>
    <?php
}
?>