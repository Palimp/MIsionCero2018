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
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <h4>
                <?=__('Problemática: '.$trouble)?>
            </h4>
            <p class="fs22 green">
                <?= __('Comentarios espontáneos más relevantes sobre nuestra problemática:') ?>
            </p>
            <p>
                <?= __('Los equipos tienen 10 minutos para introducir todos los comentarios posibles.') ?><br>
                <b><?= __('¡Los equipos con más comentarios ganarán Bikles, y los equipos con menos comentarios perderán Bikles!') ?></b>
            </p>
        </div>
        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <?=__('Como Jefe de Expedición, puedes ampliar, reducir o pausar el tiempo desde tu cronómetro.')?>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>
                    <?php
                    if ($stop) {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="stop" value="1">
                        <button class="btn btn-primary"><?= __('Parar tiempo')?></button>
                        <?php
                    } else {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="start" value="1">
                        <button class="btn btn-primary"><?= __('Reanudar tiempo')?></button>
                    <?php } ?>

                    </form>
                </div>
                <div>
                    <time>00:30</time>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=('Haz click para añadir tiempo')?>" class="d-inline-block grey_link">
                        <i class="fa fa-plus"></i>
                    </a>
                    </form>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page8'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="-30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=('Haz click para restar tiempo')?>" class="d-inline-block grey_link">
                        <i class="fa fa-minus"></i>
                    </a>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <a href="#" data-toggle="modal" data-target="#modal_ex1" class="grey_link">
                <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                <p class="fs12"><?=__('click aquí para')?><br><?=__(' ver ejemplo')?>
                </p>
            </a>
        </div>
        <div id="modal_ex1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex1LiveLabel" style="display: none;" aria-hidden="true">
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
                        <div class="alert alert-success d-inline-block">
                            <p>
                                <?=__('Podremos seguir una simulación de partida sobre la problemática ficticia ')?>
                                <br>
                                <b><?=__('“¿Cómo mejorar la comunicación interna?” ')?></b>
                                <br>
                                <?=__('para que los exploradores puedan comprender mejor el trabajo a realizar en cada etapa. ')?>
                            </p>
                            <p>
                                <?=__('Al abrir el cuadro ‘Ejemplo’ en cada una de las etapas los equipos podrán leer o consultar los contenidos que se podrían haber generado sobre esta problemática, en cada momento de la partida')?>
                            </p>
                        </div>
                        <p>
                            <b>
                                <?=__('Para la Etapa 1, algunos ejemplos de ')?><i><?=__('comentarios informales')?></i> <?=__('sobre la problemática podrían ser:')?> 
                            </b>
                        </p>
                        <ul>
                            <li>
                                <?=__('Los rumores siempre van más rápido que la información interna')?>
                            </li>
                            <li>
                                <?=__('Nadie lee los mails de comunicación interna')?> 
                            </li>
                            <li>
                                <?=__('Mucha gente no entiende los mails de comunicación interna')?>
                            </li>
                            <li>
                                <?=__('No tocan lo que nos gustaría realmente saber')?>
                            </li>
                            <li>
                                <?=__('Para los de la fábrica, la información no es relevante')?>
                            </li>
                            <li>
                                <?=__('Los mails de comunicación son muy aburridos')?>
                            </li>
                            <li>
                                <?=__('Siempre presentan un mundo perfecto')?>
                            </li>
                            <li>
                                <?=__('Los que mandan comunicación están muy lejos y no saben lo que hacemos')?>
                            </li>
                            <li>
                                <?=__('Tendríamos que tener a personas de comunicación en cada área ')?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    <?=__('¡Ganarán Bikles los equipos con más comentarios!')?>
                </b>
                </br>
                <?=__('¡Perderán Bikles los equipos con menos comentarios!')?>
            </div>
        </div>
        <p>
            <?=__('Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”')?>
        </p>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 1') ?></button>
    <?php } ?>
</main>

<script>
    var page = 8;
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
                            alert("Se acabó el tiempo");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page9"
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
        "action" => "page9"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page7"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

