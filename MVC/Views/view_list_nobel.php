<table>
    <tr> <th>Name</th><th>Category</th><th>Year</th> </tr>
    <?php foreach ($tab as $v) : ?>
        <tr>
            <td> <a href="?controller=list&action=informations&id=<?= htmlspecialchars($v['id']) ?>"><?= htmlspecialchars($v['name']) ?> </a></td>
            <td> <?= htmlspecialchars($v['category']) ?> </td>
            <td> <?= htmlspecialchars($v['year']) ?> </td>
            <td class="sansBordure">
                <a href="?controller=set&action=remove&id=<?= htmlspecialchars($v['id']) ?>">
                    <img class='icone' src='Content/img/remove-icon.png' alt='remove'>
                </a>
            </td>
            <td class="sansBordure">
                <a href="?controller=set&action=form_update&id=<?= htmlspecialchars($v['id']) ?>">
                    <img class='icone' src='Content/img/edit-icon.png' alt='modify'>
                </a>
            </td>
        </tr>
    <?php endforeach ?>
