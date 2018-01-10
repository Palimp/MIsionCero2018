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
        <h4>
            <?=__('Etapa 9- Me siento')?>
            <br>
            <?=__('Problemática: '.$trouble)?>
        </h4>
        <p class="fs22 green">
            <?= __('¿Cómo me siento ante la problemática?') ?>
        </p>
        <p class="fs22">
            <i class="fa fa-lightbulb-o"></i>
            <?= __('Seleccionar los 3 estados de ánimo o sensaciones que mejor representan cómo se siente el equipo ante la problemática planteada.') ?>
        </p>
        <p>
            <i class="fa fa-comment-o"></i>
            <?= __('Pueden ser positivos y/o negativos: pueden ser de columnas diferentes') ?>
        </p>
        <div class="m-auto">
            <div class="row justify-content-center top6">
                <div class="col-4 offset-sm-1">
                    <ul>
                        <li class="ml-5 fs22">
                            <i class="fa fa-smile-o fa-3x text-success ml-4"></i>
                            </br>
                            <?= __('POSITIVO') ?>
                        </li>
                        <?php foreach ($pos as $t) {
                            ?>
                            <li>
                                <label class="custom-control custom-checkbox">
                                    <input id="_<?= $t->id ?>" type="checkbox" <?=$admin?'disabled':''?> class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                    <span class="custom-control-description"><?= __($t->name) ?></span>
                                </label>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li class="ml-5 fs22">
                            <i class="fa fa-smile-o fa-3x fa-rotate-180 text-danger ml-4"></i>
                            </br>
                            <?= __('NEGATIVO') ?>
                        </li>
                        <?php foreach ($neg as $t) {
                            ?>
                            <li>
                                <label class="custom-control custom-checkbox">
                                    <input id="_<?= $t->id ?>" type="checkbox" <?=$admin?'disabled':''?> class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                    <span class="custom-control-description"><?= __($t->name) ?></span>
                                </label>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="error"></div>
        
        <div class="col-2">
            <!-- Button trigger modal_ex6 -->
            <div class="d-inline">
                <a href="#" data-toggle="modal" data-target="#modal_ex6" class="grey_link">
                    <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                    <p class="fs12"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
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
        <p>Cuando todos los equipos hayan finalizado su votación, pulsa ”Continuar Etapa”</p>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Iniciar Etapa 9') ?></button>
    <?php } else { ?>
        <div class="text-right mt-5">
            <a href="#" id="submitvotos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                <i class="fa fa-check fa-2x"></i>
            </a>
        </div>
    <?php } ?>
</main>

<script>
    var page = 56;
    var cambiar = false;
    var chequeados = [];
    function checkPage() {
        $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "pageactive"
    ])
    ?>", function (data, status) {

            if (data == page) {
                setTimeout(checkPage, 1000);
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
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page57"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page55"
    ])
    ?>';
            });
<?php } else { ?>
            $('#submitvotos').click(function () {
console.log("ww");
                $('#error').html('');
                var votos = [];
                $(':checkbox:checked').each(function () {
                    votos.push($(this).attr('id').replace("_", ""));
                });
                console.log(votos);
                if (votos.length!=3){
                    $('#error').html('<?= __('Ups! Explorador, algo no ha ido bien…') ?><i class="fa fa-smile-o fa-rotate-180 text-danger"></i><?= __('Usa tus prismáticos y revisa tus votos') ?>');
                    return;
                }
                                $('#submitvotos').attr('style', 'display:none !important');

                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savefeelings"])
    ?>", {'ids': JSON.stringify(votos)}, function (data, status) {

                    $(':checkbox').attr('disabled', 'disabled');
                    cambiar = true;
                    $('#error').html('<?= __('Votos enviados') ?>');
                    setTimeout(checkPage, 1000);
                });

            });



<?php } ?>
    });
</script>

