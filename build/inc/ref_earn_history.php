<?php
$earn = $con->query("SELECT * FROM ref_earn WHERE member_id='$member_id'");
if ($earn) {
    foreach ($earn as $earn2) {
        ?>
        <tr>
            <td><?php echo $earn2['earn_date']; ?></td>
            <td><?php echo $earn2['amount']; ?></td>

        </tr>
        <?php

    }
}
?>
