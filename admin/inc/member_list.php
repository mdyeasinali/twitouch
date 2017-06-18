<?php
$query = $con->query("SELECT * FROM member");
if ($query) {
    foreach ($query as $take) {
        $Mid = $take['member_id'];
        ?>
        <tr>
            <td><?php echo $take['member_id']; ?></td>
            <td><?php echo $take['name']; ?></td>
            <td><?php echo $take['username']; ?></td>
            <td><?php echo $take['approve_date']; ?></td>
            <td><?php echo $take['join_date']; ?></td>
            <td><?php echo $take['status']; ?></td>
            <?php if($take['status']=='Active'){ ?>
            <td><a  href="<?php echo "injection/member_block.php?member_id=$Mid" ;?>" class="btn btn-inline">Block</a></td>
            <?php }else{?>
                <td><a href="<?php echo "injection/member_unblock.php?member_id=$Mid" ;?>" class="btn btn-inline">Unblock</a></td>
            <?php }?>
            <td><a href="member_panel.php?member_id=<?php echo $Mid ?>" class="btn btn-inline">Member Panel</a></td>
        </tr>
        <?php
    }
}
?>