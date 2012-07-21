<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
$msg_color = $data->staff_id == 0 ? '#FFEEDD' : '#D2E9FF';
?>
<table style="border: 1px solid #6399cd;">
    <tr>
        <td style="background: <?= $msg_color ?>;"><?= $data->create_time ?></td>
    </tr>
    
    <tr>
        <td><?= nl2br($data->msg_content) ?></td>
    </tr>
</table>