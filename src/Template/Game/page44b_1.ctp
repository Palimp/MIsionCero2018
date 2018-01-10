<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <h4>
                <?=__('Problemática: '.$trouble)?>
            </h4>
            <p class="fs22 green">
                <?= __('Retos basados en momentos claves de interacción y en ') ?><i><?= __('pain points') ?></i>
            </p>
            <p>
                <?= __('Los equipos tienen 10 minutos para introducir todos los retos posibles, basados en basados en los ') ?><i><?= __('pain points ') ?></i><?= __('identificados') ?><br>
                <?= __('Para ello, procederán en 3 fases:') ?>
            </p>

            <p>
                <?=__('Identificar momentos claves de interacción con clientes internos/externos, usuarios/consumidores, otros actores claves en relación en nuestra problemática. Introducirlos en la columna izquierda.')?>
            <p>
            </p>
            <?=__('Después, para cada uno de estos momentos, listar los ') ?><i><?= __('pain points ') ?></i><?= __('(puntos dolorosos): puntos críticos o problemas. Introducir estos ') ?><i><?= __('pain points ') ?></i><?= __('en la segunda columna.') ?><br>
                <?= __('Se puede introducir más de un ') ?><i><?= __('pain point ') ?></i><?= __('por interracción.')?>
            </p>
            <p>
                <?=__('Para acabar, lo más importante: transformar los ') ?><i><?= __('pain points ') ?></i><?= __('en retos (¿Cómo…?). Introducir los retos en la tercera columna.') ?><br>
                <?= __('Pueden introducir más de un reto por pain point')?>
            </p>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <?=__('¡Los equipos con más retos ganarán Bikles, y los equipos con menos retos perderán Bikles!')?>
            </div>
        </div>

        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>

                </div>

            </div>
        </div>
        <table class="table table-striped">
            <thead class="text-center">
                <tr>
                    <th class="fs32 fw100" style="position: relative;">
                        <span>1</span>
                        </br>
                        <i class="fa fa-chevron-right fa-2x" style="right: -1.6rem; position: absolute;  bottom: 1.6rem;"></i>
                        <?= __('INTERACCIONES') ?>
                    </th>
                    <th class="fs32 fw100" style="position: relative;">
                        <span>2</span>
                        </br>
                        <i class="fa fa-chevron-right fa-2x" style="right: -1.6rem; position: absolute;  bottom: 1.6rem;"></i>
                        <?= __('PAINPOINTS') ?>
                    </th>
                    <th class="green fs32 fw100" style="position: relative;">
                        <span>3</span>
                        </br>
                        <?= __('RETOS') ?>
                    </th>
                </tr>
            </thead>
            <tbody class="fs16">
                <tr>
                    <td scope="row" class="align-top">
                        <i><?= __('Hay algo que comunicar') ?></i>
                    </td>
                    <td>
                        <i><?= __('Los cambios no se explican bien') ?></i>
                    </td>
                    <td class="green">
                        <i><?= __('¿cómo explicar mejor los cambios?') ?></i>
                    </td>
                </tr>
                <?php
                foreach ($comments as $comment) {
                    foreach ($comment->pain as $pain) {
                        ?>
                        <tr id="pain<?= $pain->id ?>"><td> <b><?= $comment->question ?></b></td><td><?= $pain->question ?><a href="#" id="delete<?= $pain->id ?>" onclick="delPain(<?= $pain->id ?>)" data-toggle="tooltip" title="<?= __('Haz click para borrar una interacción') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>
                                <?php
                                foreach ($pain->ppchan as $chan) {
                                    ?>
                                    <div id="<?= $chan->id ?>"> <b><?= $chan->question ?></b><a href="#" id="delcha<?= $chan->id ?>" onclick="delPpcha(<?= $chan->id ?>)" data-toggle="tooltip" title="<?= __('Haz click para borrar un reto') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div>
                                    <?php
                                }
                                ?>
                            </td></tr>
                        <?php
                    }
                }
                ?>
                <tr>
                    <td scope="row" class="align-top">
                        <input type="text" id="inter" class="form-control d-inline-block" placeholder="<?= __('Introduce aquí la interacción') ?>" >
                        <a id="addinter" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir una interacción') ?>" class="d-inline-block">
                            <i class="fa fa-plus fa-2x"></i>
                        </a>
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>


        <div class="row justify-content-between mt-5 w-100">
            <div class="col">
                <!-- Button trigger modal_ex5 -->
                <a href="#" data-toggle="modal" data-target="#modal_ex5" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
            </div>

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
        <div id="modal_ex5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex5LiveLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-start">
                        <div class="example fs26">
                            <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                            <div class="example_wrapper d-inline-block">
                                <div class="example_inner text-left py-3 px-4">
                                    <b><?=__('Ejemplo: ')?></b>
                                    <?=__('si nuestra problemática inicial fuera')?>
                                    <b><?=__('¿Cómo mejorar la comunicación interna?')?></b>
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
                                <?=__('Para la Etapa 7, algunos ejemplos de ')?><i><?=__('retos basados en momentos clave de interacción y en pain points')?></i> <?=__(' podrían ser:')?> 
                            </b>
                        </p>
                        <table class="table table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th class="fs32 fw100 w30" style="position: relative;">
                                        <span>1</span>
                                        </br>
                                        <i class="fa fa-chevron-right fa-2x" style="right: -1.6rem; position: absolute;  bottom: 1.6rem;"></i>
                                        <?= __('INTERACCIONES') ?>
                                    </th>
                                    <th class="fs32 fw100 w30" style="position: relative;">
                                        <span>2</span>
                                        </br>
                                        <i class="fa fa-chevron-right fa-2x" style="right: -1.6rem; position: absolute;  bottom: 1.6rem;"></i>
                                        <?= __('PAINPOINTS') ?>
                                    </th>
                                    <th class="green fs32 fw100 w30" style="position: relative;">
                                        <span>3</span>
                                        </br>
                                        <?= __('RETOS') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="fs16">
                                <tr>
                                    <td scope="row" class="align-top">
                                        <?= __('Hay algo que comunicar') ?>
                                    </td>
                                    <td>
                                        <?= __('Los cambios no se explican bien') ?>
                                        </br>
                                        <?= __('No tenemos la información oficial completa a la hora de comunicar') ?>
                                    </td>
                                    <td class="green">
                                        <?= __('¿Cómo explicar mejor los cambios?') ?>
                                        </br>
                                        <?= __('¿Cómo conseguir tener toda la info a tiempo antes de tener que comunicar?') ?>
                                        </br>
                                        <?= __('¿Cómo comunicar bien sin tener toda la información?') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="align-top">
                                        <?= __('Hay algo que comunicar') ?>
                                    </td>
                                    <td>
                                        <?= __('Los cambios no se explican bien') ?>
                                    </td>
                                    <td class="green">
                                        <?= __('¿Cómo explicar mejor los cambios?') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="align-top">
                                        <?= __('Hay algo que comunicar') ?>
                                    </td>
                                    <td>
                                        <?= __('Los cambios no se explican bien') ?>
                                    </td>
                                    <td class="green">
                                        <?= __('¿Cómo explicar mejor los cambios?') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row" class="align-top">
                                        <?= __('Hay algo que comunicar') ?>
                                    </td>
                                    <td>
                                        <?= __('Los cambios no se explican bien') ?>
                                    </td>
                                    <td class="green">
                                        <?= __('¿Cómo explicar mejor los cambios?') ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    var page = 44;
    var inter = '<tr><td scope="row" class="align-top"><input type="text" id="inter" class="form-control" placeholder="<?= __('Introduce aquí la interacción') ?>"><a id="addinter" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir una interacción') ?>" class="d-inline-block"><i class="fa fa-plus fa-2x"></i></a></td><td></td><td></td></tr>';
    var pain = '<input id="pain" type="text" class="form-control form-group" placeholder="<?= __('Introduce aquí el painpoint') ?>"><a id="addpain" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir una interacción') ?>" class="d-inline-block"><i class="fa fa-plus fa-2x"></i></a>';
    var ppcha = '<input id="ppcha" type="text" class="form-control form-group" placeholder="<?= __('Introduce aquí un reto') ?>"><a id="addppcha" href="#" data-toggle="tooltip" title="<?= __('Haz click para añadir una interacción') ?>" class="d-inline-block"><i class="fa fa-plus fa-2x"></i></a>';
    function delPpcha(id) {
        $.get("<?=
                                        $this->Url->build([
                                            "controller" => "Game",
                                            "action" => "deleteppcha"
                                        ])
                                        ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#' + id).remove();
            }
        });
    }
    function delPain(id) {
        $.get("<?=
                                        $this->Url->build([
                                            "controller" => "Game",
                                            "action" => "deletepain"
                                        ])
                                        ?>", {'id': id}, function (data, status) {
            console.log(data);
            if (status == 'success') {

                $('#pain' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>

            $('#addinter').click(function () {
                $('#addinter').attr('style', 'display: none !important');
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "addinter"]) ?>",
                        {'comment': $('#inter').val()}, function (data, status) {

                    if (status == 'success') {
                        $('#addinter').removeAttr('style');
                        $('#addpain').remove();
                        $('#pain').remove();
                        $('#addppcha').remove();
                        $('#ppcha').remove();
                        $('#addinter').closest('tr').before('<tr id="bloque' + data + '"><td> <b>' + $('#inter').val() + '</b><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar una interacción" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>' + pain + '</td><td></td></tr>');
                        $('#inter').val('');
                        $('#addpain').click(function () {
                            var id = $('#addpain').closest('tr').attr('id').replace('bloque', '');
                            console.log('pain1 ' + id);


                            $('#addpain').attr('style', 'display: none !important');
                            $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addpain"
    ])
    ?>", {'comment': $('#pain').val(), 'inter_id': id}, function (data, status) {

                                if (status == 'success') {
                                    $('#addpain').removeAttr('style');
                                    $('#addppcha').remove();
                                    $('#ppcha').remove();

                                    $('#addpain').closest('tr').before('<tr id="pain' + data + '"><td> <b>' + $('#addpain').closest('tr').find("td:first").find("b").html() + '</b></td><td>' + $('#pain').val() + '<a href="#" id="delete' + data + '" onclick="delPain(' + data + ')" data-toggle="tooltip" title="Haz click para borrar una interacción" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>' + ppcha + '</td></tr>');
                                    $('#pain').val('');
                                    $('#addppcha').click(function () {
                                        var id = $('#addppcha').closest('tr').attr('id').replace('pain', '');
                                        console.log(id);

                                        $('#addppcha').attr('style', 'display: none !important');
                                        $.get("<?= $this->Url->build(["controller" => "Game", "action" => "addppcha"]) ?>",
                                                {'comment': $('#ppcha').val(), 'inter_id': id}, function (data, status) {

                                            if (status == 'success') {
                                                $('#addppcha').removeAttr('style');
                                                $('#ppcha').before('<div id="' + data + '"> <b>' + $('#ppcha').val() + '</b><a href="#" id="delete' + data + '" onclick="delPpcha(' + data + ')" data-toggle="tooltip" title="<?= __('Haz click para borrar una interacción') ?>" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div>');
                                                $('#ppcha').val('');

                                            }
                                        });
                                    });
                                }
                            });
                        });

                    }
                });
            });

            $('#addpain').click(function () {
                var id = $('#addinter').closest('tr').attr('id');
                console.log('pain2 ' + id);

                return;
                $('#addpain').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addpain"
    ])
    ?>", {'comment': $('#pain').val(), 'inter_id': id}, function (data, status) {

                    if (status == 'success') {
                        $('#addinter').removeAttr('style');
                        $('#addinter').closest('tr').before('<tr id="bloque' + data + '"><td> <b>' + $('#inter').val() + '</b><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar una interacción" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></td><td>' + pain + '</td><td></td></tr>');
                        $('#inter').val('');

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

                    } else {
                        /* alert("<?= __('Se acabó el tiempo') ?>");
                         location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                         */
                    }

                });

            }

<?php } ?>

    });
</script>

