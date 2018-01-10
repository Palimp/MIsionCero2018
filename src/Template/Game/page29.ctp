<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
$trouble = $practical->trouble;
$answers = [[-1, $practical->answer1], [0, $practical->answer2], [1, $practical->answer3], [2, $practical->answer4]];
shuffle($answers);
$solution = $practical->answer4;
?>

<!-- ** pag p15 ** -->
<main>


    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp45.svg", ['class' => 'w-100']); ?>
    </header>
    <section>

        <?= __($trouble) ?>

        <table class="reduced table table-striped">
            <tbody>
                <?php
                for ($i = 0; $i < count($answers); $i++) {
                    ?>
                    <tr>
                        <td scope="row">
                            <span id="fila<?= $i ?>"><?= __($answers[$i][1]) ?></span>
                        </td>
                        <td class="text-right">
                            <label class="custom-control custom-radio">
                                <input name="opcion" id="<?= $i ?>" type="radio" value="<?= $answers[$i][0] ?>" class="custom-control-input">
                                <span class="custom-control-indicator" data-toggle="tooltip" title="<?= __('Haz click para seleccionar') ?>"></span>
                            </label>
                        </td>
                    </tr>                
                <?php } ?>

            </tbody>
        </table>
        <p id="error"></p>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 4') ?></button>
        <?php
    } else if (!isset($voted)) {
        ?>
        <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
            <i class="fa fa-check fa-2x"></i>
        </a>
    <?php } ?>
</main>

<script>
    var page = 29;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page30"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page28"
    ])
    ?>';
            });
<?php } else { ?>

            $('#sendretos').click(function () {
                var voto = $('input[name=opcion]:checked').val();

                if (voto == undefined) {
                    $('#error').html('<?= __('Debe seleccionar una opción') ?>');
                    return;
                }
                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savepractical"])
    ?>", {'bikles': voto}, function (data, status) {
                    $(':radio').attr('disabled', 'disabled');
                    var textos = ['<?= __('Con este reto va a ser muy difícil alcanzar el objetivo planteado… ¡con las preguntas de siempre obtendremos las respuestas de siempre!<br/>Tu equipo pierde -1 Bikle') ?>',
                        '<?= __('Bueno….. Los equipos que no arriesgan, ni ganan ni pierden  <br>Tu equipo no gana ni pierde bikles') ?>',
                        '<?= __('Bien… aunque el reto seleccionado no es el mejor reto, es bastante innovador!<br/>Tu equipo ha ganado: 1 Bikle') ?>',
                        '<?= __('¡Felicidades! El reto seleccionado es el que mejor va a ayudar a cumplir con el objetivo! <br/>Tu equipo ha ganado: 2 Bikles') ?>'];
                    $('#error').html('<?= __('El Jefe de Expedición ha recibido tu selección') ?><br/>Bikles: ' + textos[parseInt(voto) + 1] + '<br/>La solución es:<br/><?= $solution ?>');
                    setTimeout(checkPage, 1000);
                });
            });

            $(':radio').click(function () {
                id = $(this).attr('id')
                $('[id^=fila]').removeClass('green');
                $('#fila' + id).addClass('green');
            });
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

