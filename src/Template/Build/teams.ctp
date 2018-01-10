<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');

$fila = '<div class="row bloque">
            <div class="col">
                <div class="d-inline">
                    ' . $this->Form->input(
                'name[]', [
            'type' => 'select',
            'multiple' => false,
            'options' => $names,
            'empty' => __('Selecciona el nombre del equipo'),
            'label' => '',
            'class' => 'custom-select ml-2'
        ]) . '
                </div>
            </div>
            <div class="col-8">

                <div class="row form-group">
                    <div class="col pl-0">
                        <input name="members[]"  type="text" class="form-control" placeholder="' . __('Nombre de los jugadores separados por comas') . '">
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="#" data-toggle="tooltip" title="' . __('Haz click para eliminar el equipo') . '" class="d-inline-block">
                            <i class="fa fa-trash fa-2x"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        ';
?>

<main>
    <section>
        <p class="fs22">
            ¡Competiremos por equipos!
        </p>
        <p>
            1. Elige un nombre de equipo
            </br>
            2. Introduce los nombres de sus miembros, separados por comas (¡importante!)
            </br>
            3. Repite el proceso hasta formar todos los equipos que participarán en la partida
        </p>
        <?php
        echo $this->Form->create('Teams', array(
            'url' => array('controller' => 'Build', 'action' => 'teams'),
            "id"=>'team'
        ));
        echo $this->Form->input(
                                'names', [
                            'type' => 'hidden',
                             'value'=> serialize($names)
                        ]);
        ?>
        <div class="row">
            <div class="col">
                <p class="fs22">
                    Equipo
                </p>

            </div>
            <div class="col-8">
                <p class="fs22">
                    Jugadores
                </p>


            </div>
        </div>
        <?php
        foreach ($teams as $team) {
            ?>
            <div class="row bloque">
                <div class="col">

                    <div class="d-inline">
                        <?php
                        echo $this->Form->input(
                                'name[]', [
                            'type' => 'select',
                            'multiple' => false,
                            'options' => $names,
                            'empty' => __('Selecciona el nombre del equipo'),
                            'label' => '',
                            'class' => 'custom-select ml-2',
                            'default' => array_search($team[1],$names)
                        ]);
                        ?>


                    </div>
                </div>
                <div class="col-8">

                    <div class="row form-group">
                        <div class="col pl-0">
                            <input name="members[]"  type="text" class="form-control" placeholder="Nombre de los jugadores separados por comas" value="<?= $team[2] ?>">
                            <input name="ids[]"  type="hidden" class="form-control"  value="<?= $team[3] ?>">
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="#" data-toggle="tooltip" title="Haz click para eliminar el equipo" class="d-inline-block">
                                <i class="fa fa-trash fa-2x"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <?php
        }
        ?>
        <!--   <div class="row bloque">
               <div class="col">
   
                   <div class="d-inline">
        <?php
        echo $this->Form->input(
                'name[]', [
            'type' => 'select',
            'multiple' => false,
            'options' => $names,
            'empty' => __('Selecciona el nombre del equipo'),
            'label' => '',
            'class' => 'custom-select ml-2'
        ]);
        ?>
   
   
                   </div>
               </div>
               <div class="col-8">
   
                   <div class="row form-group">
                       <div class="col pl-0">
                           <input name="members[]"  type="text" class="form-control" placeholder="<?= __('Nombre de los jugadores separados por comas') ?>">
                       </div>
                       <div class="col-12 col-md-auto">
                           <a href="#" data-toggle="tooltip" title="<?= __('Haz click para eliminar el equipo') ?>" class="d-inline-block">
                               <i class="fa fa-trash fa-2x"></i>
                           </a>
                       </div>
                   </div>
   
               </div>
           </div>
           
        -->
        <?= $fila ?>
        <div id="formsubmit" class="col-1 col-md-auto">
            <a href="#" id="addteam" data-toggle="tooltip" title="<?= __('Haz click para añadir un equipo') ?>" class="d-inline-block">
                <i class="fa fa-plus fa-2x"></i>
            </a>
        </div>
        <button type="button" id="saveteam" class="btn btn-primary mb-10"><?= __('Guardar equipos') ?></button>
        </div>
        </form>
    </section>
</main>

<script>
    $(function () {

        $('.fa-trash').click(function () {
            if (confirm('<?= __('¿Está seguro?') ?>')) {
                $(this).closest(".bloque").remove();
            }
        });

        $('#addteam').click(function () {

            $('#formsubmit').before('<?= str_replace("\n", " ", $fila) ?>');

        });
        $('#saveteam').click(function () {
            $('#team').submit();
        });
        $('select').change(function(){
            var a=$(this);
             $('select').not(this).each(function(  ) {
                 if(a.val()==$(this).val()){
                     a.val('');
                 }
             });
             
            
        });

    });

</script>
