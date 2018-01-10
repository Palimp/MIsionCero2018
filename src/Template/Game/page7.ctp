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
            <?=__('Etapa 1- Insights espontáneos')?><br><?=__('Problemática inicial: '.$trouble)?>
        </h4>
        <p>
            <i class="fa fa-lightbulb-o"></i>
            <?=__('Pensar en los comentarios internos más habituales sobre la problemática, positivos o negativos, expresados de forma natural')?>
        </p>
        <ul>
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('Es lo que se comenta en reuniones, en la máquina del café…')?>
            </li>
            <li>
                <i class="fa fa-comment-o"></i>
                <?=__('También pueden servir quejas de clientes o usuarios')?>
            </li>
        </ul>
        <ul class="green">
            <li>
                <?=__('Lo que no funciona es…')?>
            </li>
            <li>
                <?=__('Lo que deberíamos solucionar es…')?>
            </li>
            <li>
                <?=__('¿Por qué no hacemos…?')?>
            </li>
            <li>
                <?=__('etc')?>
            </li>
        </ul>
        
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
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Iniciar etapa 1') ?></button>
    <?php } ?>
</main>

<script>
    var page = 7;
    $(function () {
<?php if (!$admin) { ?>
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
<?php } else { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page8"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page6"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

