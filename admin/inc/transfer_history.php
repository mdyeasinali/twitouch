<?php

$earn = $con->query("SELECT * FROM transfer_history");
if ($earn) {
    foreach ($earn as $earn2 ) {
        ?>
        <tr>
            <td><?php echo $earn2['member_id']; ?></td>
            <td><?php echo $earn2['reciever_id']; ?></td>
            <td><?php echo "$" . $earn2['amount']; ?></td>
            <td><?php echo $earn2['transfer_date']; ?></td>
            <td><?php echo $earn2['message']; ?></td>

        </tr>
        <?php

    }
}
?>
