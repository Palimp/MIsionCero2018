<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}

$trouble = $puzzle->puzzle;
$answers = [[-1, $puzzle->answer1], [0, $puzzle->answer2], [1, $puzzle->answer3], [2, $puzzle->answer4]];
shuffle($answers);
$solution=$puzzle->answer1;
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp74.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?= __('Cada equipo tendrá que leer el enigma') ?>
                </p>
            </div>

            <div class="col fs32">
                <div class="d-flex align-items-end flex-column">
                    <div>
                        <h1><time id="clock"><?= $time ?></time></h1>
                        <i class="fa fa-clock-o"></i>
                        <?php
                        if ($admin) {
                            if ($stop) {
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                                ));
                                ?>
                                <input type="hidden" name="stop" value="1">
                                <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                                <?php
                            } else {
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                                ));
                                ?>
                                <input type="hidden" name="start" value="1">
                                <button class="btn btn-primary"><?= __('Reanudar tiempo') ?></button>
                                <?php
                            }
                        }
                        ?>

                        </form>
                    </div>
                    <div>

                        <?php
                        if ($admin) {

                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="time" value="30">
                            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para añadir tiempo') ?>" class="d-inline-block grey_link">
                                <i class="fa fa-plus"></i>
                            </a>
                            </form>
                            <?php
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page52'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="time" value="-30">
                            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para restar tiempo') ?>" class="d-inline-block grey_link">
                                <i class="fa fa-minus"></i>
                            </a>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <p>
            <?= __('El primer equipo en comunicar la solución gana Bikles') ?>
            </br>
            </br>
            <b><?= __('Enigma') ?></b>
            </br>
            <?= __($trouble) ?>
        </p>
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
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <?= __('¡3 Bikles para el primer equipo que da la respuesta correcta!') ?>
            </div>
        </div>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Acabar fase retos') ?></button>
        <?php
    } else if (!isset($voted)) {
        ?>
        <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
            <i class="fa fa-check fa-2x"></i>
        </a>
    <?php } ?>
</main>

<script>
    var page = 52;
    var stop =<?= $stop ?>;

    $(function () {


        setTimeout(checkTime, 1000);

<?php if ($admin) { ?>
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {

                        $('#clock').html(data);
                        setTimeout(checkTime, 1000);
                    } else {
                        if (stop) {
                            alert("<?= __('Se acabó el tiempo') ?>");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => $admin ? 'page53' : 'index'
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
        "action" => "page53"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page511"
    ])
    ?>';
            });
    <?php
} else {
    ?>
            $('#sendretos').click(function () {
                var voto = $('input[name=opcion]:checked').val();

                if (voto == undefined) {
                    $('#error').html('<?= __('Debe seleccionar una opción') ?>');
                    return;
                }
                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savepuzzle"])
    ?>", {'bikles': voto, 'puzzle': 1}, function (data, status) {
                    console.log(data);
                    $(':radio').attr('disabled', 'disabled');
                    var textos = ['<?= __('La respuesta es incorrecta, lo sentimos mucho.') ?>',
                        '<?= __('Bien.. la respuesta es correcta pero no has sido el primero') ?>',
                        '<?= __('¡Felicidades! Has sido el primero en adivinar la respuesta. Ganas 3 bikles') ?>'];

                    $('#error').html('<?= __('El Jefe de Expedición ha recibido tu selección') ?><br/>' + textos[parseInt(data)]+"<br/>La solución es: <?=$solution ?>");
                    setTimeout(checkPage, 1000);
                });
            });

            $(':radio').click(function () {
                id = $(this).attr('id')
                $('[id^=fila]').removeClass('green');
                $('#fila' + id).addClass('green');
            });
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
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {

                        $('#clock').html(data);
                        setTimeout(checkTime, 1000);
                    } else if (data != "0") {
                        alert("<?= __('Se acabó el tiempo') ?>");
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    } else {
                        setTimeout(checkTime, 1000);
                    }

                });
            }
    <?php
}
?>



    });
</script>

