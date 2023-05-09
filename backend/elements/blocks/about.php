<?php
require_once "backend/database.php";

const BLOCK_NAME = 'about';

$query = "
        SELECT * 
        FROM blocks
        WHERE path LIKE '" . BLOCK_NAME . "'
    ";
$event_data = $db->query($query);

$query = "
        SELECT * 
        FROM about_block
    ";
$about_slides = $db->query($query)->fetchAll();
$active_slide = $about_slides[0];

echo print_r($active_slide, true);
?>

<section id="about" class="about">
    <div class="w-100">
        <div class="carousel carousel-dark slide h-100 d-flex"
             data-bs-ride="carousel"
             id="slider_about"
             style="min-height: 75vh;">
            <div class="carousel-inner d-flex bg-dark">
                <?php foreach ($about_slides as $slide) { ?>
                    <div class="carousel-item about__slide <?= $active_slide['id'] === $slide['id'] ? 'active' : '' ?>">
                        <img class="about__bg" src="<?= "img/$slide[img]" ?>" alt="Error">
                        <div class="about__content p-3">
                            <h1 class="display-1 m-0">
                                <?= $slide['title'] ?>
                            </h1>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <nav class="container h-100 position-absolute"
                 style="left: 50%; translate: -50% 0">
                <div class="d-flex gap-2 p-3 position-absolute bottom-0 end-0">
                    <button class="btn rect p-2" data-bs-slide="prev" data-bs-target="#slider_about" type="button">
                        <svg class="icon"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.5"
                             viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.75 19.5L8.25 12l7.5-7.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <span class="visually-hidden"> Previous </span>
                    </button>
                    <button class="btn rect p-2"
                            data-bs-slide="next"
                            data-bs-target="#slider_about"
                            type="button">
                        <svg class="icon"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="1.5"
                             viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.25 4.5l7.5 7.5-7.5 7.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</section>
