<?php
    require_once "view_begin.php";
 ?>

<h1> List of last 25 nobel prizes </h1>

<?php foreach ($info as $k => $v ) : ?>
    <?php if ( $v == "" ) : ?>
        <p><strong> <?= htmlspecialchars($k) ?> </strong> : ??? </p>
    <?php else : ?>
        <p><strong> <?= htmlspecialchars($k) ?> </strong> : <?= htmlspecialchars($v) ?> </p>
    <?php endif ?>
<?php endforeach ?>

<?php
    require_once "view_end.php";
 ?>
