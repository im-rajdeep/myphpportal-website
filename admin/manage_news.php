<?php 
    include_once("../config.php");
    include_once("includes/admin_header.php");
?>

<div class="container mt-4">
    <div class="alert alert-danger text-center">
        <h2>Manage News posts</h2>
    </div>
    <big><p>Select and edit News posts here.</p></big>
    <hr>
    <div>
        <table class="table table table-condensed table-hover mt-2" id="mytable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Thumbnail</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include_once("../config.php");

                $query  =  mysqli_query($conn,"SELECT * FROM news");
                $i = 0;
                while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $row['news_title']; ?></td>
                    <td><?php echo $row['news_category']; ?></td>
                    <td><?php echo $row['news_subcategory']; ?></td>
                    <td><?php echo substr($row['news_description'],0,150); ?></td>
                    <td><?php echo date("F jS y", strtotime($row['news_date'])); ?></td>
                    <td> <img class="img img-thumbnail" src="../images/<?php echo $row['thumbnail']; ?>" alt="" width="80" height="50"></td>
                    <td> <a href="edit_news.php?edit=<?php echo $row['news_id']; ?>" class="text-decoration-none text-primary"><i class='fas fa-edit'></i> </a>
                    </td>
                    <td> <a href="delete_news.php?del=<?php echo $row['news_id']; ?>" class="text-decoration-none text-danger" ><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
       <?php } ?>
       </tbody>
        </table>
    </div>
    </div>

<?php 
    include_once("includes/admin_footer.php");
?>