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
        <p class="fs26"><?= __('El reto de la partida') ?></p>
        <div class="row mx-5 form-group">
            <div class="col">
                <b class="fs26"><?= $game->trouble ?></b>
            </div>

        </div>
        <p class="fs26"><?= ($game->active) ? __('Partida empezada') : __('Partida sin empezar') ?></p>
        <?php
        echo $this->Form->create('Begin', array(
            'url' => array('controller' => 'Build', 'action' => 'estado'),
        ));
        ?>
        <input type="hidden" name="begin" value="<?=$game->active?>"/>
        <button type="submit" class="btn btn-primary mb-2"><?= ($game->active) ? __('Detener partida') : __('Empezar partida') ?></button>
        </form>
        <p class="fs26"><?= __('Equipos') ?></p>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th><?= __('Número') ?></th>
                    <th><?= __('Equipo') ?></th>
                    <th><?= __('Miembros') ?></th>
                    <th><?= __('Estado') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teams as $team) {
                    ?>
                    <tr>
                        <td><?= $team->team ?></td>
                        <td><?= $team->name ?></td>
                        <td><?= $team->members ?></td>
                        <td><?= $team->taken ? __("Cogido") : __("Libre") ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
          <?php
        echo $this->Form->create('Teams', array(
            'url' => array('controller' => 'Build', 'action' => 'estado'),
        ));
        ?>
        <button type="submit" class="btn btn-primary mb-2"><?= __('Desbloquear equipos') ?></button>
        <p class="fs26"><?= __('Al desbloquear los equipos todos tendrán que volver a seleccionarlos') ?></p>
        <input type="hidden" name="ok" value="1">
        </form>



    </section>
</main>