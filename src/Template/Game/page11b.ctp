<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <h4>
                    <?=__('Problemática: '.$trouble)?>
                </h4>
                <p class="fs22 green">
                    <i class="fa fa-lightbulb-o"></i>
                    <?= __('Convertir estos 3 comentarios en RETOS y seleccionar a qué ÁMBITO pertenece cada uno de ellos.') ?><br>
                    <b><?= __('Los equipos tienen 5 minutos') ?>
                </p>
            </div>
            <div class="col fs32">
                <div class="d-flex align-items-end flex-column">
                    <div>
                        <h1><time id="clock"><?= $time ?></time> <i class="fa fa-clock-o"></i></h1>

                    </div>
                </div>
            </div>
        </div>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?>
            <b class="fs22" id="c<?=$i?>">
                <?= $comments[$i]['comment'] ?>
            </b>

            <div class="row">
                <div class="col-10 pl-0">
                    <b class="fs26">¿</b>
                    <span>Cómo</span>
                    <input type="text" id="reto<?= $i ?>" class="form-control d-inline w-75" placeholder="<?= __('Introduce aquí el reto') ?>">
                    <b class="fs26">?</b>

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
        <?php } ?>
        <div class="text-right mt-5">
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
            <?php
            echo $this->Form->create('Teams', array(
                'url' => array('controller' => 'Game', 'action' => 'page11b'),
                "id" => 'team'
            ));
            echo $this->Form->input(
                    'datos', [
                'type' => 'hidden',
                'id' => 'datos'
            ]);
            ?>
            <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
                <i class="fa fa-check fa-2x"></i>
            </a>
            </form>
        </div>
    </section>

</main>

<script>
    var page = 11;

    $(function () {
<?php if (!$admin) { ?>

            $('#sendretos').click(function () {
                var datos = []
                for (i = 0; i < 3; i++) {
                    if (!$('#reto' + i).val()) {
                        $('#reto' + i).focus();
                        return;
                    }
                    if (!$("[name='radio" + i + "']:checked").val()) {
                        $("[name='radio" + i + "']").focus();
                        return;
                    }
                    datos.push({"reto": $('#reto' + i).val(), "ambito": $("[name='radio" + i + "']:checked").val()});

                }
                $('#datos').val(JSON.stringify(datos));
                $('#team').submit();
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
                        var datos = [], ambito;
                        for (i = 0; i < 3; i++) {
                            if (!$('#reto' + i).val()) {
                                $('#reto' + i).val($('#c'+i).text().trim());
                            }
                            ambito=$("[name='radio" + i + "']:checked").val();
                            if (!ambito) {
                                ambito=10;
                            }
                            datos.push({"reto": $('#reto' + i).val(), "ambito": ambito});

                        }
                        $('#datos').val(JSON.stringify(datos));
                        
                        $('#team').submit();return;
                        alert("<?= __('Se acabó el tiempo') ?>");
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    } else {
                        setTimeout(checkTime, 500);
                    }
                });
            }

<?php } ?>

    });
</script>

