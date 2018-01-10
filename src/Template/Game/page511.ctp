<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp74.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <!-- start ESTO VA EN UNA PAGINA PREVIA NUEVA-->
        <div class="col-12 col-md-auto">
            <h4>
                Etapa 6- Parada lúdica
            </h4>
            <p class="fs22 green">
                La parada que estabas esperando… ¡CULTURA GENERAL! <i class="fa fa-smile-o"></i>
            </p>
            <p>
                <i class="fa fa-comment-o"></i>
                En esta etapa los Exploradores tendrán que demostrar sus conocimientos respondiendo a preguntas
                <br>
                ¡Ganaran Bikles los equipos que responden correctamente!
            </p>
        </div>
        <?php if ($admin) { ?>
            <p>
                Sigue las instrucciones al pie del video para pausar y lanzar la pregunta en el momento adecuado
            </p>
        <?php } ?>
        <!-- en el boton de pasar al video poner TXTO: "Pasar a enigmas" -->
        <!-- end ESTO VA EN UNA PAGINA PREVIA NUEVA-->
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Pasar a enigmas') ?></button>
    <?php } ?>
</main>

<script>
    var page = 511;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page52"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page51"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 1000);

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
<?php } ?>
    });
</script>

