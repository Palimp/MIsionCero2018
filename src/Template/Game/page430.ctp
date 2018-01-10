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
            <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
        </header>
        <h4>
            Etapa 7- <i>Pain points</i>
            <br>
            <?=__('Problemática: '.$trouble)?>
        </h4>

        <p class="fs22 green">
            <i class="fa fa-lightbulb-o"></i>
             Identificar los momentos clave de interacción con los diferentes actores de la problemática y sus <i>pain points</i>: puntos críticos o problemas que se presentan en cada momento.
        </p>
        <p>
            Convertir los pain points en retos: <i>¿Cómo…?</i>
            <br>
            <i class="fa fa-comment-o"></i>
            Para una interacción se pueden identificar varios <i>pain points</i>
            <br>
            <i class="fa fa-comment-o"></i>
            Los Exploradores pueden introducir más de un reto por <i>pain point</i>
        </p>
        
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
        
    </section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Empezar Etapa 7') ?></button>
<?php } ?>
</main>

<script>
    var page = 430;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page44"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page43"
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

