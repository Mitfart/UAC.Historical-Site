<?php
require_once '../../backend/database.php';

$search_text = trim($_POST['searchText'] ?? '');

$query = "
        SELECT title 
        FROM events_block
        WHERE title LIKE '%$search_text%'
    ";

$events = $db->query($query)->fetchAll();

if ($events) {
    foreach ($events as $event) { ?>
        <li class="dropdown-item booking__option"><?= $event['title'] ?></li>
    <?php }
} else { ?>
    <li class="dropdown-item booking__option">No record</li>
<?php }