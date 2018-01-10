<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <header class="text-center m-5 mb-10">
        
        <?= $this->Html->image('breadp12.svg');?>
    </header>
    <section class="text-center">
        <?php
        echo $this->Form->create('Trouble', array(
            'url' => array('controller' => 'Build', 'action' => 'trouble'),
        ));
        ?>
        <p class="fs26"><?= __('La problemática inicial de la partida') ?></p>
        <p><?= __('El objetivo de la partida consistirá en transformar esta problemática en una serie de retos concretos') ?></p>
        <div class="row mx-5 form-group">
            <div class="col">
               

                <input type="text" name="trouble" id="trouble" class="form-control fs26" placeholder="Introduce aquí la problemática" value="<?=$trouble?>">
                <b class="fs26"><?= __('La problemática inicial tiene que expresarse de la siguiente manera:') ?><br><?= __('¿Cómo…?') ?></b>
            </div>
            <div class="col col-md-auto">
                <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="Confirma la problematica" class="d-inline-block">
                    <i class="fa fa-check fa-3x"></i>
                </a>
            </div>
        </div>
        </form>

        <div class="example">
            <i class="fa fa-wpforms fa-2x example_ic align-top mr-3"></i>
            <div class="example_wrapper d-inline-block">
                <div class="example_inner text-left py-3 px-4">
                    Ejemplos:<br>
                    <i>¿cómo mejorar nuestra comunicación interna?</i><br>
                    <i>¿cómo desarrollar la transformación digital?</i><br>
                    <i>¿cómo abrir nuevos mercados?</i><br>
                    <i>¿cómo podría mejorar nuestro proceso de compra?</i>
                </div>
            </div>
        </div>

    </section>
</main>
