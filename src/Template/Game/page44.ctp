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
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
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
            <?php if ($admin) { ?>
                <p>
                    Como Jefe de Expedición, puedes ampliar, reducir o pausar el tiempo desde tu cronómetro.
                    <br>
                    Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”
                </p>  
            <?php } ?>
            <div class="col fs32">
                <div class="d-flex align-items-end flex-column">
                    <div>
                        <h1><time id="clock"><?= $time ?></time></h1>
                        <i class="fa fa-clock-o"></i>
                        <?php
                        if ($stop) {
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="stop" value="1">
                            <button class="btn btn-primary"><?=__('Parar tiempo')?></button>
                            <?php
                        } else {
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="start" value="1">
                            <button class="btn btn-primary"><?=__('Reanudar tiempo')?></button>
                        <?php } ?>

                        </form>
                    </div>
                    <div>
                        <time>00:30</time>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para añadir tiempo')?>" class="d-inline-block grey_link">
                            <i class="fa fa-plus"></i>
                        </a>
                        </form>
                        <?php
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page44'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="time" value="-30">
                        <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para restar tiempo')?>" class="d-inline-block grey_link">
                            <i class="fa fa-minus"></i>
                        </a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <!-- Button trigger modal_ex5 -->
                <a href="#" data-toggle="modal" data-target="#modal_ex5" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
            </div>
            
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
        
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 7') ?></button>
    <?php } ?>
</main>

<script>
    var page = 44;
    var stop =<?= $stop ?>;

    $(function () {
<?php if ($admin) { ?>

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
                        if (stop) {
                            alert("<?=__('Se acabó el tiempo')?>");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page45"
    ])
    ?>';
                        }
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page45"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page430"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

