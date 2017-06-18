<?php
$earn = $con->query("SELECT * FROM withdraw_history WHERE status='pending'");
if ($earn) {
    foreach ($earn as $earn2) {
        $earnid = $earn2['member_id'];
        ?>
        <tr>
            <td><?php echo $earn2['member_id']; ?></td>
            <td><?php echo $earn2['withdraw_date']; ?></td>
            <td><?php echo $earn2['payment_method']; ?></td>
            <td><?php echo "$" . $earn2['amount']; ?></td>
            <td><?php echo $earn2['message']; ?></td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-inline dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        Select Option
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo "injection/withdraw_approve.php?id=$earnid"; ?>">Approve</a>
                        <a class="dropdown-item"
                           href="<?php echo "injection/withdraw_cancel.php?id=$earnid"; ?>">Cancel</a>
                    </div>
                </div>
            </td>
        </tr>
        <?php

    }
}
?>
