<?php
include_once("../config.php");
if (!empty($_POST["id"])) {
    $id = intval($_POST['id']);
?>
    <option value="">Select Subcategory</option>
    <?php
   $query = mysqli_query($conn, "SELECT * FROM subcategory WHERE category_id = '$id'");
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <option value="<?php echo $row['subcategory_name']; ?>"><?php echo $row['subcategory_name']; ?></option>
<?php
    }
}
?>