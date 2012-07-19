<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<table style="border: 1px solid #6399cd;">
    <tr>
        <td style="background: #eee;"><?= $data->create_time ?></td>
    </tr>
    
    <tr>
        <td><?= nl2br($data->msg_content) ?></td>
    </tr>
</table>