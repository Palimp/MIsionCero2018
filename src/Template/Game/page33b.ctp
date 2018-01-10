<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <p class="fs22">
                <?= __('El equipo escribe los retos') ?>.
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
        foreach ($comments as $comment) {
            ?>
            <div id="bloque<?= $comment->id ?>" class="row form-group"><div class="col pl-0"> <b class="fs26">¿</b>
                    <span><?= __('Cómo') ?></span> <b><?= $comment->question ?> ?</b></div><div class="col col-md-auto"><a href="#" id="delete<?= $comment->id ?>" onclick="delComment(<?= $comment->id ?>)" data-toggle="tooltip" title="<?= __('Haz click para borrar un comentario') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>
            <?php
        }
        ?>
        <div id="bloque" class="row form-group">
            <div class="col pl-0">
                <b class="fs26">¿</b>
                <span><?= __('Cómo') ?></span>
                <input type="text" name="comment" id="comment" class="form-control d-inline w-75" placeholder="<?= __('Introduzca aquí su reto') ?>">
            </div>
            <div class="col col-md-auto">
                <a id="addcomment" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir un reto') ?>" class="d-inline-block">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </div>
        </div>
        <div>
            <a href="#" data-toggle="modal" data-target="#modal_ex4" class="grey_link">
                <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                </p>
            </a>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    <?= __('¡Ganarán Bikles los equipos con más comentarios!') ?>
                </b>
                </br>
                <?= __('¡Perderán Bikles los equipos con menos comentarios!') ?>
            </div>
        </div>
    </section>
    <div>
        <div id="modal_ex4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex4LiveLabel" style="display: none;" aria-hidden="true">
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
                                <?= __('Para la Etapa 5, algunos ejemplos de ') ?><i><?= __('retos basados en puntos de vista') ?></i> <?= __(' podrían ser:') ?> 
                            </b>
                        </p>
                        <div class="text-center">
                            <div class="row">
                                <div class="col">
                                    <p>
                                        <i class="fa fa-shopping-cart fa-2x"></i>
                                        </br>
                                        <b>
                                            <?= __('Mis clientes') ?>
                                        </b>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que mi comunicación acerque los empleados al cliente?') ?>
                                    </p>
                                </div>
                                <div class="col">
                                    <p>
                                        <i class="fa fa-user-o fa-2x"></i>
                                        </br>
                                        <b>
                                            <?= __('Los jefes') ?>
                                        </b>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que los jefes ayuden a sus equipos a entender la comunicación?') ?>
                                        </br>
                                        </br>
                                        <?= __('¿Cómo informarles primero y que no digan nada hasta que sea oficial?') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>
                                        <i class="fa fa-handshake-o fa-2x"></i>
                                        </br>
                                        <b>
                                            <?= __('Los responsables de comunicación') ?>
                                        </b>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que conozcan mejor los diferentes colectivos?') ?>
                                        </br>
                                        </br>
                                        <?= __('¿Cómo conseguir que formen a la gente?') ?>
                                    </p>
                                </div>
                                <div class="col">
                                    <p>
                                        <i class="fa fa-crosshairs fa-2x"></i>
                                        </br>
                                        <b>
                                            <?= __('El entorno de los trabajadores') ?>
                                        </b>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        </br>
                                        <?= __('¿Cómo conseguir que parte de la comunicación corporativa pueda ayudar a mejorar nuestra imagen en el entorno?') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    var page = 20;
    function delComment(id) {
        $.get("<?=
                                        $this->Url->build([
                                            "controller" => "Game",
                                            "action" => "deletestake"
                                        ])
                                        ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#bloque' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>

            $('#addcomment').click(function () {
                $('#addcomment').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addstake"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {
                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b class="fs26">¿</b><span><?= __('Cómo') ?></span> <b>' + $('#comment').val() + ' ?</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="<?= __('Haz click para borrar un reto') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
                        $('#comment').val('');

                    }
                });
            });
            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
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

