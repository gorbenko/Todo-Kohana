<tr>
    <td><?=date("d.m.Y", $date_start)?></td>
    <td><?=date("d.m.Y", $date_end)?></td>
    <td><?=date("d.m.Y", $date_finish)?></td>
    <td title="<?=$description?>"><?=substr($description, 0, 50)?></td>
    <td class="td_action">
        <span title="Редактировать" class="action action-edit" data-id="<?=$id?>"></span>
        <span title="Удалить" class="action action-delete" data-id="<?=$id?>"></span>
    </td>
</tr>
