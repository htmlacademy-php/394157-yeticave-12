<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php 
                function formatting_cut( $number_for_formatting ) {
                    $num_symbols_integer = ceil($number_for_formatting);
                    $num_symbols_integer = number_format($num_symbols_integer,0,',',' ');

                    return $num_symbols_integer . ' <b class="rub">р</b>';
                }
            ?>
            <?php foreach($categories as $category): ?>
                <li class="promo__item promo__item--boards">
                    <a class="promo__link" href="pages/all-lots.html"><?= esc($category) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php foreach($lots as $lot_item): ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?= esc($lot_item['img']) ?>" width="350" height="260" alt="">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?= esc($lot_item['category']) ?></span>
                        <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= esc($lot_item['name']) ?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?php echo formatting_cut($lot_item['price']) ?></span>
                            </div>
                            <div class="lot__timer timer">
                                12:23
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>