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
        <?= $this->Html->image("breadp28.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <?php if ($admin) { ?>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= $url ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <!-- ONLY GM -->
            <div class="video">
                <?= __($texto) ?>
            </div>
            <!-- ONLY GM -->
            <div class="text-left mt-5 row">
                <div class="col-3">
                    <a href="#" data-toggle="modal" data-target="#modal_video_1" class="grey_link">
                        <i class="fa fa-question-circle-o fa-2x example_ic mr-3 pull-left"></i>
                        <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver pregunta') ?>
                        </p>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#" data-toggle="modal" data-target="#modal_video_2" class="grey_link">
                        <i class="fa fa-check-square-o fa-2x green mr-3 pull-left"></i>
                        <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver solución') ?>
                        </p>
                    </a>
                </div>
                <div>
                    <div id="modal_video_1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_video_1LiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="example fs26">
                                        <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                                        <div class="example_wrapper d-inline-block">
                                            <div class="example_inner text-left py-3 px-4">
                                                <b><?= __('Pregunta') ?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h3>¿Alguien ha observado algo extraño en la escena?</h3>
                                    Cuando hayan respondido todos los equipos el JE dará play al video para conocer la solución.
                                    <br>
                                    Luego el Jefe de Exploradores hará click en el icono <i class="fa fa-check-square-o green"></i> para ver cuantos Bikles ganará cada equipo
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="modal_video_2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_video_2LiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="example fs26">
                                        <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                                        <div class="example_wrapper d-inline-block">
                                            <div class="example_inner text-left py-3 px-4">
                                                <b><?= __('Solución') ?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="video"> <?= __($solucion) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <!-- ONLY PLAYER -->

            <div class="text-center mt-5">
                <div class="alert alert-danger d-inline-block" role="alert">
                    <b>
                        <?= __('¡Observar bien el video!') ?>
                    </b>
                    </br>
                    <?= __('El Jefe de Expedición hará preguntas al acabar…') ?>
                </div>
            </div>
            <!-- ONLY PLAYER -->
        <?php } ?>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 2') ?></button>
        <button  id="otro" type="button" class="btn btn-primary mb-10"><?= __('Cambiar de vídeo') ?></button>
    <?php } ?>
    </section>
</main>

<script>
    var page = 16;
    $(function () {
<?php if ($admin) { ?>

            $('#otro').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page16"
    ])
    ?>';
            });
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page17"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page151"
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

