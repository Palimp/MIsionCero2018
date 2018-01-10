<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<main>
    <section>
        <p class="fs22">
            <?=__('Misión 0 es el serious game que permite convertir una problemática inicial en ')?><b><?=__('retos concretos, ')?></b><?=__('novedosos y diversos, para optimizar la búsqueda posterior de nuevas soluciones')?>
        </p>
        <div class="py-20 text-center">

            <?= $this->Html->image("imgp7.gif", ['class' => 'img-fluid']); ?>

        </div>
        <p class="fs22">
            <?=__('Binnakle, el juego para generar ')?><b><?=__('nuevas ideas ')?></b><?=__('sobre cualquier tipo de reto, te podrá ayudar más adelante a encontrar soluciones novedosas a estos retos')?>
        </p>
    </section>
      <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>
<script>
    var page = 4;
    $(function () {
<?php if (!$admin) { ?>
            setTimeout(checkPage, 500);

            function checkPage() {
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "pageactive"
    ])
    ?>", function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 500);
                    } else {
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    }

                });

            }
<?php } else { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page5"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page3"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

