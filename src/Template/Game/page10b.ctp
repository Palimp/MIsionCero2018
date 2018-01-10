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
        <h4>
            <?=__('Problemática: '.$trouble)?>
        </h4>
        <p class="fs22 green">
            <?= __('Insights Espontáneos') ?>
        </p>
        <p>
            <?= __('Los 3 comentarios seleccionados por tu equipo:') ?>
        </p>
        <?php if ($admin) { ?>

        <?php } else { ?>
            <table class="reduced table table-striped">
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td scope="row" >
                                <span id="com<?= $comment['id'] ?>"> <?= $comment['comment'] ?></span>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } ?>
        
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
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 1') ?></button>
    <?php } ?>
</main>

<script>
    var page = 10;
    var chequeados = [];
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page11"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page9"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 500);

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

