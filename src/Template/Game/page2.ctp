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
        <p class="fs26 green">
            <?=__('Se organizan multitud de reuniones para tratar estas problemáticas, pero…')?>
        </p>
        <div class="row">
            <div class="col-7">
                <p>
                    <?=__('Trabajar sobre temas tan genéricos no ayuda a generar soluciones nuevas, especialmente si son temas recurrentes sobre los que ya hemos trabajado con anterioridad')?>
                </p>
                <?= $this->Html->image("img2.jpg", ['class' => 'img-fluid']); ?>
            </div>
            <div class="col-5 pl-5">
                <p>
                    <?=__('Las reuniones suelen convertirse en tertulias y debates sin un output concreto')?>
                </p>
                <?= $this->Html->image("img3.jpg", ['class' => 'img-fluid']); ?>
            </div>
        </div>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>

<script>
    var page = 2;
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
        "action" => "page3"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
            });
<?php } ?>
          
    });
</script>

