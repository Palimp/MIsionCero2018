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
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="col-12 col-md-auto">
            <h4>
                <?=__('Problemática: '.$trouble)?>
            </h4>
            <p class="fs22 green">
                <?=__('Retos basados en estados de ánimo')?>
            </p>
            <p>
                <?=__('Los equipos tienen 5 minutos para convertir en retos los 3 estados de ánimo seleccionados')?>
            </p>
        </div>
        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>
                    <?php
                    if ($stop) {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="stop" value="1">
                        <button class="btn btn-primary"><?=__('Parar tiempo')?></button>
                        <?php
                    } else {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
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
                        'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para añadir tiempo')?>" class="d-inline-block grey_link">
                        <i class="fa fa-plus"></i>
                    </a>
                    </form>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page57'), 'class' => 'd-inline-block'
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
    </section>
    <?php if ($admin) { ?>
        <p>
            Como Jefe de Expedición, puedes ampliar, reducir o pausar el tiempo desde tu cronómetro.
            <br>
            Cuando todos los equipos hayan finalizado pulsa ”Continuar Etapa”
        </p>  
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 9') ?></button>
    <?php } ?>
</main>

<script>
    var page = 57;
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
        "action" => "page60"
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
        "action" => "page60"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page56"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

