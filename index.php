<?php require_once "backend/elements/base/start.php"; ?>
<?php require_once "backend/elements/base/header.php"; ?>
<main class="main">
    <?php
    require_once "backend/database.php";

    $query = "
        SELECT * 
        FROM blocks
    ";
    $events = $db->query($query);

    foreach ($events as $event) {
        require_once "backend/elements/blocks/$event[path_name].php";
    }
    ?>
</main>
<?php require_once "backend/elements/base/footer.php"; ?>
<?php require_once "backend/elements/base/end.php"; ?>
