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
    <header class="mb-5">
        <div class="text-center">
            <?= $this->Html->image("logo_m0_es_sm.svg", ['class' => 'img-fluid']); ?>

        </div>
    </header>
    <section>
        <p class="fs22 text-center">
            <?= __('Si siempre observamos nuestro problema desde el mismo punto de vista…')?>
            <br>
            <?= __('…¡podemos perdernos soluciones simples y nuevas!')?>
        </p>
        <div class="text-center">

            <?= $this->Html->image("img4.jpg", ['class' => 'img-fluid']);?>

        </div>
    </section>
     <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>
<script>
    var page = 3;
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
        "action" => "page4"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page2"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

