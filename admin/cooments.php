<?php
include_once("../config.php");
include_once("includes/admin_header.php");

?>
<div class="container mt-4">
    <div class="alert alert-danger text-center">
        <h2>Comments</h2>
    </div>
    <hr>
    <div>

        <table class="table table-striped table-hover table-condensed mt-2" id="mytable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = mysqli_query($conn,"select * from comment");
                $i     = 0;
                while($data = mysqli_fetch_array($query)){  
            ?>


                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td> 
                    <td><?php echo $data['comment']; ?></td>
                    <td> <a href="delete_comment.php?cid=<?php echo $data['id']; ?>" onclick="return delconfirmdata()" class="text-decoration-none text-danger" >  <i class="fa fa-trash-o"></i></a></td>
                </tr>
            <?php }?>
               
            </tbody>
        </table>
        <hr>
    </div>
                </div>

<?php
include_once("includes/admin_footer.php");
?>