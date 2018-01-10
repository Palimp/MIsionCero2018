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
        <p class="fs22">
            <?= __('Cada equipo selecciona los 3 retos espontáneos que le parece más relevantes y novedosos ') ?>
            </br>
            <?= __('(para abrir nuevas líneas de trabajo de la problemática)') ?>
        </p>
        <?php if ($admin) { ?>
            <div id="hasvoted"></div>
        <?php } else { ?>
            <table class="reduced table table-striped">
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td scope="row" >
                                <span id="com<?= $comment['id'] ?>"> <?= $comment['question'] ?></span>
                            </td>
                            <td class="text-right">
                                <label class="custom-control custom-checkbox">
                                    <input id='<?= $comment['id'] ?>' type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                                </label>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="text-right mt-5">
                <a href="#" id="submitcomment" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
                    <i class="fa fa-check fa-2x"></i>
                </a>
            </div>
        <?php } ?>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 9') ?></button>
    <?php } ?>
</main>

<script>
    var page = 59;
    var chequeados = [];
    $(function () {
<?php if ($admin) { ?>

setTimeout(checkVote, 1000);
            function checkVote() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "checkvote"]) ?>",
                        {'table': 'motions'}, function (data, status) {
                           console.log(data)
                    if (data == 0) {
                        $('#hasvoted').html('<p style="color:red"><b><?= __('Los equipos aún están votando') ?></b></p>')
                        setTimeout(checkVote, 1000);
                    } else {
                        $('#hasvoted').html('<p style="color:green"><b><?= __('Todos los equipos han votado. Ya puedes pulsar en “Continuar Etapa”') ?></b></p>')

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
        "action" => "page58"
    ])
    ?>';
            });
<?php } else { ?>
            $('#submitcomment').click(function () {
                if (chequeados.length == 3) {

                    $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "selectmotion"
    ])
    ?>", {'ids': JSON.stringify(chequeados)}, function (data, status) {
                        console.log(data);
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';

                    });
                } else {
                    alert("<?= __('Debe elegir tres comentarios') ?>");
                }
            });
            $(':checkbox').click(function () {
                id = $(this).attr('id')
                $('#com' + id).toggleClass('green');
                var index = chequeados.indexOf(id);
                if (index == -1) {
                    chequeados.push(id);
                } else {

                    chequeados.splice(index, 1);
                }

            });
<?php } ?>
    });
</script>

