<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?= __('Selección de Retos / Ámbitos de tu equipo:') ?>
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
            <p class="fs22">
                <?= $comments[$i]['question'] ?>
            </p>

            <input type="hidden" id="reto<?= $i ?>" value="<?= $comments[$i]['id'] ?>">
            <b>
                <?= __('Ámbitos') ?>
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

            <?php
            echo $this->Form->create('Teams', array(
                'url' => array('controller' => 'Game', 'action' => 'page36b'),
                "id" => 'team'
            ));
            echo $this->Form->input(
                    'datos', [
                'type' => 'hidden',
                'id' => 'datos'
            ]);
            ?>
            <a href="#" id="sendretos" data-toggle="tooltip" title="Haz click para enviar" class="d-inline-block">
                <i class="fa fa-check fa-2x"></i>
            </a>
            </form>
        </div>
    </section>

</main>

<script>
    var page = 36;

    $(function () {
<?php if (!$admin) { ?>

            $('#sendretos').click(function () {

                var datos = []
                for (i = 0; i < 3; i++) {

                    if (!$("[name='radio" + i + "']:checked").val()) {
                        $("[name='radio" + i + "']").focus();
                        return;
                    }
                    datos.push({"id": $('#reto' + i).val(), "ambito": $("[name='radio" + i + "']:checked").val()});
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

                        alert("<?= __('Se acabó el tiempo') ?>");
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"])
    ?>';
                    }
                      else {
                        setTimeout(checkTime, 500);
                    }
                });
            }

<?php } ?>

    });
</script>

