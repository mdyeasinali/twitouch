<?php
$query = $con->query("SELECT * FROM job_catagory");
if ($query) {
    foreach ($query as $take) {
        $cat_id = $take['catagory_id'];
        ?>
        <tr>
            <td><?php echo $take['catagory_id']; ?></td>
            <td><?php echo $take['catagory']; ?></td>
            <td><?php echo "$" . $take['payment']; ?></td>
            <td><?php echo $take['status']; ?></td>
            <td><a href="job_catagory.php?cat_id=<?php echo $cat_id; ?>" class="btn btn-inline">Edit</a></td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-inline dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Select Option
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"
                           href="<?php echo "injection/catagory_active.php?catagory_id=$cat_id"; ?>">Active</a>
                        <a class="dropdown-item"
                           href="<?php echo "injection/catagory_inactive.php?catagory_id=$cat_id"; ?>">Inactive</a>
                    </div>
                </div>
            </td>
        </tr>
        <?php
    }
}
?>