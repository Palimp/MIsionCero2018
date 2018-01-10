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
    <section>
        <header class="text-center m-5 mb-10">

            <?= $this->Html->image("breadp33.svg", ['class' => 'w-100']); ?>
        </header>
            <h4>
                <?=__('Etapa 3- Preguntas básicas')?>
                <br>
                <?=__('Problemática: '.$trouble)?>
            </h4>
            <p class="fs22 green">
                <?=__('Utilizar las preguntas básicas para identificar retos más concretos y, si es posible, no habituales, sobre la problemática.')?>
            </p>
            <p class="fs22">
                <?=__('Pensar en las preguntas más básicas para identificar retos:')?>
            </p>
            <div class="row fs22 green">
                <div class="col">
                    <?=__('¿CUÁNDO?')?>
                </div>
                <div class="col">
                    <?=__('¿DÓNDE?')?>
                </div>
                <div class="col">
                    <?=__('¿CÓMO?')?>
                </div>
                <div class="col">
                    <?=__('¿QUIÉN?')?>
                </div>
            </div>
            <ul>
                <li>
                    <?=__('Paso 1- Pensar en momentos relevantes, lugares relevantes (de uso, de compra, donde ocurre…), formas de hacer las cosas, públicos objetivos (internos o externos)')?>
                </li>
                <li>
                    <?=__('Paso 2- Convertir estas respuestas en retos: ¿cómo…?')?>
                </li>
            </ul>
            <div class="row fs22 green">
                <div class="col">
                    <?=__('¿POR QUÉ?')?>
                </div>
                <div class="col">
                    <?=__('¿PARA QUÉ?')?>
                </div>
            </div>
            <ul>
                <li>
                    <?=__('Paso 1- Pensar en “¿por qué?/¿para qué?”  tenemos que trabajar este reto. Escribir estos “¿por qué?/¿para qué?” ')?>
                </li>
                <li>
                    <?=__('Paso 2- Convertirlos en reto: ¿Cómo…? ')?>
                </li>
            </ul>
            
        <div>
            <!-- Button trigger modal_ex -->
            <div class="d-inline">
                <a href="#" data-toggle="modal" data-target="#modal_ex" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
            </div>
            <!-- modal_ex -->
            <div>
                <div id="modal_ex" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_exLiveLabel" style="display: none;" aria-hidden="true">
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
                                        <?=__('Para la Etapa 3, algunos ejemplos de ')?><i><?=__('retos basados en preguntas básicas')?></i> <?=__(' podrían ser:')?> 
                                    </b>
                                </p>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-user fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('QUIÉN') ?>
                                                </b>
                                                </br>
                                                <?= __('El que manda la comunicación') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir que el que manda la comunicación conozca el colectivo que la recibe?') ?>
                                            </p>
                                            <p>
                                                <?= __('Los que la reciben') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo involucrar a la gente en la comunicación?') ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-clock-o fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('CUÁNDO') ?>
                                                </b>
                                                </br>
                                                <?= __('Cuando hay cambios') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo comunicar bien cuando hay cambios importantes?') ?>
                                            </p>
                                            <p>
                                                <?= __('Cuando hay dudas') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo comunicar en momentos de incertidumbre?') ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-map-pin fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('DÓNDE') ?>
                                                </b>
                                                </br>
                                                <?= __('En la fábrica') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo adecuar la comunicación al personal de fábrica?') ?>
                                            </p>
                                            <p>
                                                <?= __('En los espacios donde se comunica') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo optimizar la comunicación en los paneles de los espacios comunes?') ?>
                                            </p>
                                            <p>
                                                <i class="fa fa-question-circle fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('POR QUÉ’S') ?>
                                                </b>
                                                </br>
                                                <?= __('Porque nadie hace caso') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('Cómo conseguir que la gente haga caso a la comunicación?') ?>
                                            </p>
                                            <p>
                                                <?= __('Porque no nos enteramos de nada') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir que la comunicación interna nos ayude a conocer mejor lo que nos puede ayudar?') ?>
                                            </p>
                                            <p>
                                                <?= __('Porque queremos que toda la empresa comparta la visión y los valores') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir una comunicación que involucre a la gente en los valores?') ?>
                                            </p>
                                        </div>
                                        <div class="col">
                                            <p>
                                                <i class="fa fa-crosshairs fa-2x"></i>
                                                </br>
                                                <b>
                                                    <?= __('PARA QUÉ') ?>
                                                </b>
                                                </br>
                                                <?= __('Para que todos lo entiendan') ?>
                                                </br>
                                                <i class="fa fa-chevron-down"></i>
                                                </br>
                                                <?= __('¿Cómo conseguir que se entienda a primera vista el objetivo de una comunicación?') ?>
                                            </p>
                                        </div>
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
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 3') ?></button>
<?php } ?>
</main>

<script>
    var page = 19;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page20"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page18"
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

