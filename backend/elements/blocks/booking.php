<?php
require_once "backend/database.php";

const BLOCK_NAME = 'booking';

$query = "
        SELECT * 
        FROM blocks
        WHERE path LIKE '" . BLOCK_NAME . "'
    ";
$event_data = $db->query($query);
?>


<section id="booking" class="booking">
    <div class="container">
        <div class="booking__content">
            <form action="" class="booking__form">
                <header class="booking__header">
                    <h1 class="booking__title">
                        <?= $event_data['title'] ?>
                    </h1>
                </header>

                <main class="booking__main">
                    <div class="booking__row">
                        <label>
                            Событие:
                            <div class="dropdown">
                                <input type="text"
                                       name="events__search"
                                       placeholder="Событие..."
                                       id="events__search"
                                       aria-expanded="false"
                                       class="booking__dropdown dropdown-toggle"
                                       data-bs-toggle="dropdown"
                                       data-bs-auto-close="true"
                                >
                                <ul aria-labelledby="event__search"
                                    class="booking__dropdown-menu dropdown-menu"
                                    id="events_list">
                                    <!-- AUTO - FILLED -->
                                </ul>
                            </div>
                        </label>

                        <label>
                            Дата события:
                            <input class="booking__date" type="date">
                        </label>
                    </div>

                    <div class="booking__row">
                        <label>
                            Тип билета:
                            <div class="dropdown">
                                <button aria-expanded="false"
                                        class="booking__dropdown dropdown-toggle"
                                        data-bs-toggle="dropdown"
                                        id="dropdown_event_type"
                                        type="button">
                                    Тип билета
                                </button>
                                <ul aria-labelledby="dropdown_event_type"
                                    class="booking__dropdown-menu dropdown-menu">
                                    <li class="dropdown-item booking__option">Взрослый</li>
                                    <li class="dropdown-item booking__option">Детский</li>
                                </ul>
                            </div>
                        </label>

                        <label>
                            Количество билетов:
                            <input class="booking__date" type="number" value="1" min="1" max="255">
                        </label>
                    </div>
                </main>

                <footer class="booking__footer">
                    <button class="btn btn_wire booking__btn booking__btn_clear"> Очистить</button>
                    <button class="btn booking__btn booking__btn_order"> Заказать</button>
                </footer>
            </form>
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        const search_field = $("#events__search");
        const search_list = $("#events_list");

        search_field.keyup(Search);
        search_field.click(Search);

        search_list.on('click', '.booking__option', function () {
            search_field.val($(this).text());
        });


        function Search() {
            let searchText = search_field.val();

            $.ajax({
                url: 'backend/requests/search_events_request.php',
                method: 'post',
                data: {
                    searchText: searchText,
                },
                success: function (response) {
                    search_list.html(response);
                },
            });
        }
    });


</script>
