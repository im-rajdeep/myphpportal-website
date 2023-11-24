<?php
    include_once("includes/admin_header.php");
    include_once("../config.php");


?>

<div class="container mt-4">
    <div class="alert alert-danger text-center">
        <h2>Manage Sub-Category</h2>
    </div>
    <big><p>Select and edit Sub-category here.</p></big>
    <hr>
    <div>

        <table class="table table table-hover mt-2" id="mytable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category name</th>
                    <th>Subcategory name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = mysqli_query($conn,"SELECT * FROM subcategory LEFT JOIN category ON subcategory.category_id = category.category_id");
                $i     = 0;
                while($data = mysqli_fetch_array($query)){  
            ?>


                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $data['category_name']; ?></td>
                    <td><?php echo $data['subcategory_name']; ?></td>
                    <td> <a href="edit_subcategory.php?id=<?php echo $data['subcategory_id']; ?>" onclick="return editconfirmdata()" class="text-decoration-none text-primary"><i class='fas fa-edit'></i> </a>
                    </td> 
                    <td> <a href="delete_subcategory.php?id=<?php echo $data['subcategory_id']; ?>" onclick="return delconfirmdata()" class="text-decoration-none text-danger" ><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            <?php 
                }
            ?>
               
            </tbody>
        </table>
        <hr>
    </div>
            </div>

   

    <script>
        function delconfirmdata(){
        var res = confirm('Do u sure you want to delete this?');
        if (res == true){
            return true;
        }
        else{
            return false;
        }
    }

        function editconfirmdata(){
        var res = confirm('Do u sure you want to edit this?');
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