<?php
include_once("includes/admin_header.php");
include_once("../config.php");

?>

<div class="container mt-4">
    <div class="alert alert-danger text-center">
        <h2>Manage Category</h2>
    </div>
    <big><p>Select and edit category here.</p></big>
    <hr>
    <div>

        <table class="table table-striped table-hover table-condensed mt-2" id="mytable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = mysqli_query($conn,"select * from category");
                $i     = 0;
                while($data = mysqli_fetch_array($query)){  
            ?>


                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $data['category_name']; ?></td>
                    <td> <a href="edit_category.php?cid=<?php echo $data['category_id']; ?>" onclick="return editconfirmdata()" class="text-decoration-none text-primary"><i class='fas fa-edit'></i> </a>
                    </td> 
                    <td> <a href="delete_category.php?cid=<?php echo $data['category_id']; ?>" onclick="return delconfirmdata()" class="text-decoration-none text-danger" ><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            <?php }?>
               
            </tbody>
        </table>
        <hr>
    </div>
                </div>

   

    <script>
        function delconfirmdata(){
        var res = confirm('Are u sure you want to delete this? ');
        if (res == true){
            return true;
        }
        else{
            return false;
        }
    }

        function editconfirmdata(){
        var res = confirm('Are u sure you want to edit this? ');
        if (res == true){
            return true;
        }
        else{
            return false;
        }
    }
        
    </script>

<?php
        include_once("includes/admin_footer.php");
    ?>
