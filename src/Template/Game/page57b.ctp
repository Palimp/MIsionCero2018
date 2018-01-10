<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
$ids = [];
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <h4>
                <?= __('Problemática: ' . $trouble) ?>
            </h4>
            <p class="fs22 green">
                <?= __('Retos basados en estados de ánimo') ?>
            </p>
            <p>
                <?= __('Los equipos tienen 5 minutos para convertir en retos los 3 estados de ánimo seleccionados') ?>
            </p>
        </div>

        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>

                </div>

            </div>
        </div>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            $ids[] = $comments[$i]->id;
            ?>

            <b class="fs22" id="c<?= $i ?>">
                <?= $comments[$i]->feeling ?>
            </b>

            <div class="row">
                <div class="col-10 pl-0">
                    <input type="text" id="com<?= $i ?>" class="form-control d-inline w-75" placeholder="<?= __('Introduce aquí el reto') ?>" value="<?= $comments[$i]->question ?>">

                </div>
            </div>
            <b>
                <?= __('Ámbito') ?>
            </b>
            <div class="fs14 mr-1">
                <?php foreach ($ambits as $ambit) { ?>
                    <label class="custom-control custom-radio">
                        <input name="radio<?= $i ?>" type="radio" class="custom-control-input" value="<?= $ambit->id ?>">
                        <span class="custom-control-indicator"></span>
                        <span class="custom-control-description"><?= $ambit->ambit ?></span>
                    </label>
                <?php } ?>

            </div>

            <?php
        }
        ?>
        <div class="col-2">
            <!-- Button trigger modal_ex6 -->
            <div class="d-inline">
                <a href="#" data-toggle="modal" data-target="#modal_ex6" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
                <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
                    <i class="fa fa-check fa-2x"></i>
                </a>
            </div>
            <!-- modal_ex6 -->
            <div>
                <div id="modal_ex6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex6LiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-start">
                                <div class="example fs26">
                                    <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                                    <div class="example_wrapper d-inline-block">
                                        <div class="example_inner text-left py-3 px-4">
                                            <b><?= __('Ejemplo: ') ?></b>
                                            <?= __('si nuestra problemática inicial fuera') ?>
                                            <b><?= __('¿Cómo mejorar la comunicación interna?') ?></b>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <b>
                                        <?= __('Para la Etapa 9, algunos ejemplos de ') ?><i><?= __('retos basados en momentos clave de interacción y en pain points') ?></i> <?= __(' podrían ser:') ?> 
                                    </b>
                                </p>
                                <div class="row py-5 text-center">
                                    <div class="col">
                                        <p>
                                            <i class="fa fa-smile-o fa-3x text-success"></i>
                                            </br>
                                            <b>
                                                <?= __('POSITIVO') ?>
                                            </b>
                                            </br>
                                            </br>
                                            <?= __('Motivado') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo motivar al colectivo sobre nuestro problema?') ?>
                                        </p>
                                    </div>
                                    <div class="col">
                                        <p>
                                            <i class="fa fa-smile-o fa-3x fa-rotate-180 text-danger"></i>
                                            </br>
                                            <b>
                                                <?= __('NEGATIVO') ?>
                                            </b>
                                            </br>
                                            </br>
                                            <?= __('Pesimista') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo convencernos de que tiene solución?') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <p id="mensaje"></p>
        </div>
    </section>
    <div>

    </div>
</main>

<script>
    var page = 57;
    function checkPage() {
        $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"]) ?>",
                function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 1000);
                    } else {
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    }

                });

    }
    $(function () {
<?php if (!$admin) { ?>

            $('#sendretos').click(function () {
                var datos = []
                var ids = [<?= join(",", $ids) ?>];
                for (i = 0; i < 3; i++) {
                    if (!$('#com' + i).val()) {
                        $('#com' + i).focus();
                        return;
                    }
                    if (!$("[name='radio" + i + "']:checked").val()) {
                        $("[name='radio" + i + "']").focus();
                        return;
                    }
                    datos.push({"id": ids[i], "valor": $('#com' + i).val(), "ambito": $("[name='radio" + i + "']:checked").val()});

                }

                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savemotions"])
    ?>", {'datos': JSON.stringify(datos)}, function (data, status) {

                    $('#mensaje').html('<?= __('El Jefe de Expedición ha recibido tus comentarios') ?>');
                    setTimeout(checkPage, 1000);
                });

            });
            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "gettime"]) ?>",
                        function (data, status) {
                            if (data != "0" && data != "00:00") {
                                $('#clock').html(data);
                                setTimeout(checkTime, 500);

                            } else if (data != "0") {
                                alert("<?= __('Se acabó el tiempo') ?>");
                                location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                            } else {
                                setTimeout(checkTime, 500);
                            }

                        });

            }

<?php } ?>

    });
</script>

