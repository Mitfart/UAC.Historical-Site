<?php
require_once "backend/database.php";

$query = "
        SELECT * 
        FROM blocks
    ";
$events = $db->query($query);
?>

<header class="header">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="logo" href="#">
                <svg fill="none"
                     stroke="currentColor"
                     stroke-width="1.5"
                     viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627
                              48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41
                              60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57
                              0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902
                              59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482
                              0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75
                              15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378
                              55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
                KazHistory
            </a>
            <button class="navbar-toggler btn btn_wire"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#header_menu"
                    aria-controls="header_menu"
                    aria-expanded="false"
                    aria-label="Header navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="header_menu"
                 class="navbar-collapse justify-content-end collapse">
                <ul class="menu__items navbar-nav align-items-stretch align-items-lg-center pt-3 p-lg-0 gap-2">
                    <?php foreach ($events as $event) { ?>
                        <li class="nav-item">
                            <a class="menu__item" href="<?= "#$event[path_name]" ?>">
                                <?= "$event[title]" ?>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item d-flex align-items-center gap-2">
                        <a class="menu__item btn flex-grow-1" href="#">Войти</a>
                        <a class="contact menu__item p-3" href="#">
                            <svg class="contact__icon icon"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="1.5"
                                 viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0
                                  002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97
                                  1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0
                                  01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963
                                  3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<header class="header__placeholder"></header>
