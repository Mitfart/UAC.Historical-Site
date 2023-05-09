<?php
require_once "backend/database.php";

const BLOCK_NAME = 'events';

$query = "
        SELECT * 
        FROM blocks
        WHERE path LIKE '" . BLOCK_NAME . "'
    ";
$event_data = $db->query($query);

$query = "
        SELECT * 
        FROM events_block
    ";
$events = $db->query($query);
?>

<section id="events" class="events">
    <div class="container">
        <h1 class="text-center">
            События
        </h1>

        <div class="events__items row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gx-sm-3 gy-3">
            <?php foreach ($events as $event) { ?>
                <div class="col">
                    <a class="event rect" href="<?= "#" ?>">
                        <div class="event__img">
                            <img alt="#" src="<?= "img/$event[img]" ?>">
                        </div>
                        <div class="event__content">
                            <h6 class="event__pre-title">
                                <?= $event['date'] ?>
                            </h6>
                            <h4 class="event__title">
                                <?= $event['title'] ?>
                            </h4>
                            <button class="event__btn">
                                Записаться
                                <svg class="event__icon"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="1.5"
                                     viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
