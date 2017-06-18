<?php
$earn = $con->query("SELECT * FROM withdraw_history");
if ($earn) {
    foreach ($earn as $earn2) {
        ?>
        <tr>
            <td><?php echo $earn2['member_id']; ?></td>
            <td><?php echo $earn2['withdraw_date']; ?></td>
            <td><?php echo $earn2['payment_method']; ?></td>
            <td><?php echo "$" . $earn2['amount']; ?></td>
            <td><?php echo $earn2['message']; ?></td>
            <td><?php echo $earn2['status']; ?></td>

        </tr>
        <?php

    }
}
?>
