<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */

?>

<main>
    <header class="text-center m-5 mb-10">

        <?= $this->Html->image('breadp12.svg'); ?>
    </header>
    <section class="text-center">

        <p></p>
        <p class="fs26"><?= __(' ') ?></p>
        <p class="fs26"><?= __(' ') ?></p>

        <?php foreach ($teams as $team) {
            ?>
            <div class="row mx-5 form-group">
                <div class="col">
                    <b class="fs26"><?= $team->team . "- " . $team->name . " : " . $team->members ?></b>
                </div>
                <?php
                if (!$team->taken) {
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'selectteam'),
                    ));
                    ?>
                    <input type="hidden" name="team" value="<?= $team->team ?>">
                    <button type="submit" class="btn btn-primary mb-5"><?= __('Seleccionar equipo') ?></button>
                    </form>
                    <?php
                } else {
                    ?>
                    <p><?= __('Ya seleccionado') ?></p>
                    <?php
                }
                ?>
            </div>
        <?php } ?>
        <p class="fs26"><?= __('Bienvenido a Misión 0, Explorador') ?></p>
        <p class="fs22"><?= __('¡Competiremos por equipos!') ?></p>
        <p><?= __('Si tu Jefe de Expedición ha formado los equipos con antelación, solo tienes que confirmar cuál es tu equipo pulsando “seleccionar equipo” al lado de tu equipo.')?>
            <br>
            <?= __('Aparecerá “Equipo seleccionado” y el equipo estará listo para esperar las instrucciones del Jefe de Expedición (¡no debes pulsar “guardar equipo abajo!)')?>
        </p>
        <p><?= __('Si no es el caso y los Exploradores forman ahora sus equipos, deberás seleccionar un nombre de equipo (¡no pierdas tiempo porque si otro equipo se adelanta y elije el nombre que querías deberás escoger otro!)  e indicar los nombres de todos sus miembros, separados por comas (¡importante!)')?>
            <br>
            <?= __('Una vez acabado, no te olvides de pulsar en “guardar equipo” para que el Jefe de Expedición pueda iniciar la partida')?>
            <br>
            <?= __('Si te has equivocado al introducir tu equipo puedes cambiarlo seleccionando otro nombre de explorador y añadiendo de nuevo los nombres de los participantes.')?>
        </p>

        <?php
        echo $this->Form->create('Teams', array(
            'url' => array('controller' => 'Game', 'action' => 'selectteam'),
            "id" => 'team'
        ));
        ?>
        <div class="row bloque">
            <div class="col">

                <div class="d-inline">
          <!--          <img class="img-fluid" style="height: 50px; width: 50px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22771%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20771%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ddcba636d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ddcba636d%22%3E%3Crect%20width%3D%22771%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.7421875%22%20y%3D%22143%22%3E771x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">-->
                    <?php
                    echo $this->Form->input(
                            'name', [
                        'type' => 'select',
                        'multiple' => false,
                        'options' => $names,
                        'empty' => __('Selecciona el nombre del equipo'),
                        'label' => '',
                        'class' => 'custom-select ml-2',
                                 'default' => null
                    ]);
                    ?>


                </div>
            </div>
            <div class="col-8">

                <div class="row form-group">
                    <div class="col pl-0">
                        <input name="member"  type="text" class="form-control" placeholder="Nombre de los jugadores separados por comas" >
                        <input name="names" type="hidden" value='<?= json_encode($names) ?>'>
                    </div>
                    <div class="col-12 col-md-auto">
                        <button type="submit" id="saveteam" class="btn btn-primary mb-10"><?= __('Guardar equipo') ?></button>
                    </div>
                </div>

            </div>
        </div>
        </form>


    </section>
</main>

<script>
    $(function () {

        function checkTeams() {
            $.get("<?=
                    $this->Url->build([
                        "controller" => "Game",
                        "action" => "teamsok"
                    ])
                    ?>", function (data, status) {

                if (data == 0) {
                    setTimeout(checkTeams, 500);
                } else {
                    location = '<?=
                    $this->Url->build([
                        "controller" => "Game",
                        "action" => "index"
                    ])
                    ?>';
                }

            });

        }

        setTimeout(checkTeams, 500);
    });
</script>
