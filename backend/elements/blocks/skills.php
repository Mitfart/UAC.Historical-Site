<?php
require_once "backend/database.php";

const BLOCK_NAME = 'skills';

$query = "
        SELECT * 
        FROM blocks
        WHERE path LIKE '" . BLOCK_NAME . "'
    ";
$event_data = $db->query($query);

$query = "
        SELECT * 
        FROM skills_block
    ";
$skills = $db->query($query);
?>

<section id="skills" class="skills">
    <div class="container">
        <h1 class="text-center">
            Народное искусство Казахстана
        </h1>

        <div class="skills__items row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-sm-5 gy-5">
            <?php foreach ($skills as $skill) { ?>
                <div class="col">
                    <div class="skill">
                        <div class="skill__img rect bg-dark">
                            <img alt="#" src="<?= "img/$skill[img]" ?>">
                        </div>
                        <div class="skill__content">
                            <h3 class="skill__title">
                                <?= $skill['title'] ?>
                            </h3>
                            <p class="skill__description">
                                <?= $skill['text'] ?>
                            </p>

                            <button type="button"
                                    class="btn skill__btn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#skill_1">
                                Подробнее
                                <svg class="skill__icon"
                                     fill="none"
                                     stroke="currentColor"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 24 24"
                                     stroke-width="1.5">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                                </svg>
                            </button>

                            <div class="modal fade"
                                 id="skill_1"
                                 data-bs-backdrop="static"
                                 data-bs-keyboard="false"
                                 tabindex="-1"
                                 aria-labelledby="skill__label_1"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="skill__img rect bg-dark">
                                            <img alt="#" src="<?= "img/$skill[img]" ?>">
                                        </div>
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5"
                                                id="skill__label_1">
                                                <?= $skill['title'] ?>
                                            </h1>
                                            <button type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?= $skill['text'] ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button"
                                                    class="btn btn_wire btn-sm"
                                                    data-bs-dismiss="modal">
                                                закрыть
                                            </button>
                                            <button type="button"
                                                    class="btn">
                                                Подробнее
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
