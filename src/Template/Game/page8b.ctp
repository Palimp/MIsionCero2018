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
        <div class="col-12 col-md-auto">
            <p class="fs22">
                <?= $trouble ?>
            </p>
        </div>
        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>

                </div>

            </div>
        </div>
        <?php
        foreach ($comments as $comment) {
            ?>
            <div id="bloque<?= $comment->id ?>" class="row form-group"><div class="col pl-0"><b><?= $comment->comment ?></b></div><div class="col col-md-auto"><a href="#" id="delete<?= $comment->id ?>" onclick="delComment(<?= $comment->id ?>)" data-toggle="tooltip" title="Haz click para borrar un comentario" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>
            <?php
        }
        ?>
        <div id="bloque" class="row form-group">
            <div class="col pl-0">
                <input type="text" name="comment" id="comment" class="form-control" placeholder="Introduzca aquí su comentario">
            </div>
            <div class="col col-md-auto">
                <a id="addcomment" href="#" data-toggle="tooltip" title="<?=('Haz click para añadir un comentario')?>" class="d-inline-block">
                    <i class="fa fa-plus fa-2x"></i>
                </a>
            </div>
        </div>
        <div>
            <a href="#" data-toggle="modal" data-target="#modal_ex1" class="grey_link">
                <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                <p class="fs12"><?=__('click aquí para')?><br><?=__(' ver ejemplo')?>
                </p>
            </a>
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
    </section>
    <div>
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
    </div>
</main>

<script>
    var page = 8;
    function delComment(id) {
        $.get("<?=
        $this->Url->build([
            "controller" => "Game",
            "action" => "deletecomment"
        ])
        ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#bloque' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>

            $('#addcomment').click(function () {
                $('#addcomment').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addcomment"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {
            
                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b>' + $('#comment').val() + '</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un comentario" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
                        $('#comment').val('');

                    }
                });
            });
            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
        
                    if (data != "0" && data!="00:00") {
                        $('#clock').html(data);
                        setTimeout(checkTime, 500);

                    } else if (data != "0") {
                        alert("<?=__('Se acabó el tiempo')?>");
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    }
                    else{
                          setTimeout(checkTime, 500);
                      }

                });

            }

<?php } ?>

    });
</script>

