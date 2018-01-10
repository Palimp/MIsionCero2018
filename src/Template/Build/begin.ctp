<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <header class="text-center m-5 mb-10">

        <?= $this->Html->image('breadp12.svg'); ?>
    </header>
    <section class="text-center">
        <?php
        echo $this->Form->create('Begin', array(
            'url' => array('controller' => 'Build', 'action' => 'begin'),
        ));
        ?>
        <p class="fs26"><?= __('Aquí tienes los datos de la partida:') ?></p>
        <p class="fs26"><?= __('El reto de la partida') ?></p>
        <div class="row mx-5 form-group">
            <div class="col">
                <b class="fs26"><?= $trouble ?></b>
            </div>

        </div>
        <p class="fs26"><?= __('Equipos') ?></p>

        <?php foreach ($teams as $team) {
            ?>
            <div class="row mx-5 form-group">
                <div class="col">
                    <b class="fs26"><?= $team[0] . "- " . $team[1] . " : " . $team[2] ?></b>
                </div>
            </div>
        <?php } ?>
        <p class="fs26"><?= __('Al empezar la partida ya no podrás editar los equipos ni la problemática. ¡Revisa todo bien!') ?></p>
        <p class="fs22"><?= __('Si necesitas modificar algo, puedes utilizar el Menu Jefe de Expedición arriba:') ?></p>
        <input type="hidden" name="ok" value="1">
        <button type="submit" class="btn btn-primary mb-10"><?= __('Empezar partida') ?></button>
        </form>



    </section>
</main>
