<?php
    require_once "view_begin.php";
?>

    <h1> Modify a Nobel Prize </h1>
    <form action = "?controller=set&action=update" method="post">
        <p> <label> <input type="hidden" name="Id" value="<?=$person['id']?>"/> </label> </p>
        <p> <label> Name: <input type="text" name="Name" value="<?=$person['name']?>"/> </label> </p>
        <p> <label> Year: <input type="text" name="Year" value="<?=$person['year']?>"/> </label></p>
        <p> <label> Birth Date: <input type="text" name="BirthDate" value="<?=$person['birthdate']?>"/></label> </p>
        <p> <label> Birth Place: <input type="text" name="BirthPlace" value="<?=$person['birthplace']?>"/> </label></p>
        <p> <label> County: <input type="text" name="Country" value="<?=$person['country']?>"/></label> </p>

        <p>
            <?php foreach ($category as $v) : ?>
                <?php if ($v['category'] == $person['category'] ) : ?>
                    <input type="radio" name="Category" value="<?= $v['category'] ?>" checked="checked"/> <?= $v['category'] ?></label>
                <?php else : ?>
                    <input type="radio" name="Category" value="<?= $v['category'] ?>"/> <?= $v['category'] ?></label>
                <?php endif ?>
            <?php endforeach ?>
        </p>

        <textarea name="Motivation" cols="70" rows="10" > <?= htmlspecialchars($person['motivation'])?></textarea>
        <p>  <input type="submit" value="Modify in database"/> </p>
    </form>
<?php
    require_once "view_end.php";
?>
