<?php
require_once 'config.php';
if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $query = 'Select country_name FROM countries WHERE country_name LIKE :country';
    $stmt = $conn->prepare($query);
    $stmt->execute(['country' => '%' . $inpText . '%']);
    $events = $stmt->fetchAll();
    if ($events) {
        foreach ($events as $event) {
            echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $event['country_name'] . '</a>';
        }
    } else {
        echo '<p class="list-group-item border-1">No Record</p>';
    }
}
?>