<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <header class="text-center mb-10" style="padding-top: 10rem;">
        <div>
            <img src="img/logo_binnakle_es.png" alt="">
        </div>
        <div>
            <img src="img/logo_m0_es.svg" alt="">
        </div>
    </header>
    <section class="text-center">

        <div class="form-group">
            <p class="fs26"><?= __('Creación de juego') ?></p>

        </div>

        <!-- Button trigger modals -->

        <div>
            <?php
            if (empty($codes)) {
                echo __("No se ha creado el juego");
            } else {
                ?>
                <h1 class="fs26"><?= __('Juego creado') ?></h1>
                <h1 class="fs26"><?= __('Código administrador: ') . $codes[0] ?></h1>
                <h1 class="fs26"><?= __('Código usuario: ') . $codes[1] ?></h1>
                <?php
            }
            ?>
        </div>
    </section>

</main>
