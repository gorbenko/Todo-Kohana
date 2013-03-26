<tr>
    <td><?=date("d.m.Y", $date_start)?></td>
    <td><?=date("d.m.Y", $date_end)?></td>
    <td><?=date("d.m.Y", $date_finish)?></td>
    <td title="<?=$description?>"><?=substr($description, 0, 50)?></td>
    <td><span title="Удалить" class="action-delete" data-id="<?=$id?>"></span></td>
</tr>