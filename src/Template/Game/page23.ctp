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
        <?= $this->Html->image("breadp33.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <h4>
            <?=__('Problemática: '.$trouble)?>
        </h4>
        <p class="fs22 green">
            <i class="fa fa-lightbulb-o"></i>
            <?=__('Seleccionar a qué ÁMBITO pertenece cada uno de los 3 retos seleccionados por el equipo.')?>
            <br> <?=__('Los equipos tienen 2 minutos')?>
        </p>

        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>
                    <?php
                    if ($stop) {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="stop" value="1">
                        <button class="btn btn-primary"><?= __('Parar tiempo') ?></button>
                        <?php
                    } else {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="start" value="1">
                        <button class="btn btn-primary"><?= __('Reanudar tiempo') ?></button>
                    <?php } ?>

                    </form>
                </div>
                <div>
                    <time>00:30</time>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para añadir tiempo') ?>" class="d-inline-block grey_link">
                        <i class="fa fa-plus"></i>
                    </a>
                    </form>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page23'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="-30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?= __('Haz click para restar tiempo') ?>" class="d-inline-block grey_link">
                        <i class="fa fa-minus"></i>
                    </a>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 3') ?></button>
    <?php } ?>
</main>

<script>
    var page = 23;
    var stop =<?= $stop ?>;

    $(function () {
<?php if ($admin) { ?>

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
                    } else {
                        if (stop) {
                            alert("<?= __('Se acabó el tiempo') ?>");
                            location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "page24"]) ?>';
                        }
                    }
                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page24"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page22"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

