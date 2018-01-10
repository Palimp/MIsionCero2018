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
                <i class="fa fa-lightbulb-o"></i>
                <?= __('Convertir estos 3 comentarios en RETOS y seleccionar a qué ÁMBITO pertenece cada uno de ellos.') ?>
            </p>
            <p>
                <b><?= __('Los equipos tienen 5 minutos') ?>
            </p>
        </div>
        <div class="col-12 col-md-auto">
            <p class="fs22">
                <?= $trouble ?>
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
                            'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="stop" value="1">
                        <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                        <?php
                    } else {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="start" value="1">
                        <button class="btn btn-primary"><?= __('Reanudar tiempo') ?></button>
                    <?php } ?>

                    </form>
                </div>
                <div>
                    <time>00:30</time>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para añadir tiempo') ?>" class="d-inline-block grey_link">
                        <i class="fa fa-plus"></i>
                    </a>
                    </form>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page11'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="-30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para restar tiempo') ?>" class="d-inline-block grey_link">
                        <i class="fa fa-minus"></i>
                    </a>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-2">
            <!-- Button trigger modal_ex2 -->
            <div class="d-inline">
                <a href="#" data-toggle="modal" data-target="#modal_ex2" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
            </div>
            <!-- modal_ex2 -->
            <div>
                <div id="modal_ex2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex2LiveLabel" style="display: none;" aria-hidden="true">
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
                                        <?= __('Transformar los comentarios elegidos en retos:') ?>
                                    </b>
                                </p>
                                <div class="text-center">
                                    <p>
                                        <?= __('Los rumores siempre van más rápido que la información interna') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la información se adelante a los rumores?') ?>
                                    </p>
                                    <p>
                                        <?= __('Nadie lee los mails de comunicación interna') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que todos abran y lean los mails de comunicación interna?') ?>
                                    </p>
                                    <p>
                                        <?= __('Mucha gente no entiende los mails de comunicación interna') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que los mails de comunicación interna sean fáciles de entender?') ?>
                                    </p>
                                    <p>
                                        <?= __('No tocan lo que nos gustaría realmente saber') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la comunicación que recibimos sea la que nos interesa?') ?>
                                    </p>
                                    <p>
                                        <?= __('Para los de la fábrica, la información no es relevante') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la información que recibe la gente de la fábrica sea relevante para ellos?') ?>
                                    </p>
                                    <p>
                                        <?= __('Los mails de comunicación son muy aburridos') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que los mails de comunicación sean amenos?') ?>
                                    </p>
                                    <p>
                                        <?= __('Siempre presentan un mundo perfecto') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo conseguir que la comunicación nos parezca realista ?') ?>
                                    </p>
                                    <p>
                                        <?= __('Los que mandan comunicación están muy lejos y no saben lo que hacemos') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('Cómo conseguir que todos perciban que los que mandan la comunicación están cerca y entienden nuestro trabajo') ?>
                                    </p>
                                    <p>
                                        <?= __('Tendríamos que tener a personas de comunicación en cada área  ') ?>
                                        </br>
                                        <i class="fa fa-chevron-down"></i>
                                        </br>
                                        <?= __('¿Cómo tener a personas de comunicación o capaces de comunicar en cada área?') ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p>
                <?=__('Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”')?>
            </p>
        </div>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 1') ?></button>
    <?php } ?>
</main>

<script>
    var page = 11;
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
                            alert("<?= __('Se acabó el tiempo') ?>");
                            location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page12"]) ?>';
                        }
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page12"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page10"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

