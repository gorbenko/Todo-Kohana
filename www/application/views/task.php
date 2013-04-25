<tr class="tr_task" data-id="<?=$id?>">
    <td><?=date("d.m.Y", $date_start)?></td>
    <td><?=date("d.m.Y", $date_end)?></td>
    <td><?=date("d.m.Y", $date_finish)?></td>
    <td title="<?=$description?>"><?=Text::limit_chars($description, 50)?></td>
    <td class="td_action">
        <span title="Редактировать" class="action action-edit"></span>
        <span title="Удалить" class="action action-delete"></span>
    </td>
</tr>
