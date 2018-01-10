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
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>

        <div class="col-12 col-md-auto">
            <h4>
                <?=__('Problemática: '.$trouble)?>
            </h4>
            <p class="fs22 green">
                <?=__('Retos basados en puntos de vista')?>
            </p>
            <p>
                <?=__('Los equipos tienen 10 minutos para introducir todos los retos posibles, basados en los puntos de vista de los Stakeholders:')?><br>
                <?=__('Cada equipo se pondrá en el punto de vista de varios de ellos (un cliente interno/externo, un competidor, un proveedor, un distribuidor, la administración, otro departamento, un usuario, la familia de un usuario...) para generar retos:')?><br>
                <ol>
                    <li>
                        <?=__('Pensar: ¿cómo ven el reto desde su punto de vista? ')?>
                    </li>
                    <li>
                        <?=__('Expresarlo en forma de reto:  ¿cómo…?')?>
                    </li>
                </ol>
            </p>
        </div>

        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>
                    <?php
                    if ($stop) {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="stop" value="1">
                        <button class="btn btn-primary"><?=__('Parar tiempo')?></button>
                        <?php
                    } else {
                        echo $this->Form->create('Begin', array(
                            'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
                        ));
                        ?>
                        <input type="hidden" name="start" value="1">
                        <button class="btn btn-primary"><?=__('Reanudar tiempo')?></button>
                    <?php } ?>

                    </form>
                </div>
                <div>
                    <time>00:30</time>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para añadir tiempo')?>" class="d-inline-block grey_link">
                        <i class="fa fa-plus"></i>
                    </a>
                    </form>
                    <?php
                    echo $this->Form->create('Begin', array(
                        'url' => array('controller' => 'Game', 'action' => 'page33'), 'class' => 'd-inline-block'
                    ));
                    ?>
                    <input type="hidden" name="time" value="-30">
                    <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para restar tiempo')?>" class="d-inline-block grey_link">
                        <i class="fa fa-minus"></i>
                    </a>
                    </form>
                </div>
            </div>
        </div>
        <div>
          <a href="#" data-toggle="modal" data-target="#modal_ex4" class="grey_link">
            <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
            <p class="fs12"><?=__('click aquí para')?><br><?=__(' ver ejemplo')?>
            </p>
          </a>
        </div>
        <div id="modal_ex4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex4LiveLabel" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header align-items-start">
                <div class="example fs26">
                  <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                  <div class="example_wrapper d-inline-block">
                    <div class="example_inner text-left py-3 px-4">
                        <b><?=__('Ejemplo: ')?></b>
                        <?=__('si nuestra problemática inicial fuera')?>
                        <b><?=__('¿Cómo mejorar la comunicación interna?')?></b>
                    </div>
                  </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <p>
                    <b>
                        <?=__('Para la Etapa 5, algunos ejemplos de ')?><i><?=__('retos basados en puntos de vista')?></i> <?=__(' podrían ser:')?> 
                    </b>
                </p>
                <div class="text-center">
                  <div class="row">
                    <div class="col">
                      <p>
                        <i class="fa fa-shopping-cart fa-2x"></i>
                        </br>
                        <b>
                          <?=__('Mis clientes')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        <?=__('¿Cómo conseguir que mi comunicación acerque los empleados al cliente?')?>
                      </p>
                    </div>
                    <div class="col">
                      <p>
                        <i class="fa fa-user-o fa-2x"></i>
                        </br>
                        <b>
                          <?=__('Los jefes')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        <?=__('¿Cómo conseguir que los jefes ayuden a sus equipos a entender la comunicación?')?>
                        </br>
                        </br>
                        <?=__('¿Cómo informarles primero y que no digan nada hasta que sea oficial?')?>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <p>
                        <i class="fa fa-handshake-o fa-2x"></i>
                        </br>
                        <b>
                          <?=__('Los responsables de comunicación')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        <?=__('¿Cómo conseguir que conozcan mejor los diferentes colectivos?')?>
                        </br>
                        </br>
                        <?=__('¿Cómo conseguir que formen a la gente?')?>
                      </p>
                    </div>
                    <div class="col">
                      <p>
                        <i class="fa fa-crosshairs fa-2x"></i>
                        </br>
                        <b>
                          <?=__('El entorno de los trabajadores')?>
                        </b>
                        </br>
                        <i class="fa fa-chevron-down"></i>
                        </br>
                        </br>
                        <?=__('¿Cómo conseguir que parte de la comunicación corporativa pueda ayudar a mejorar nuestra imagen en el entorno?')?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <?=__('¡Los equipos con más retos ganarán Bikles, ')?>
                </br>
                <?=__('y los equipos con menos retos perderán Bikles!')?>
            </div>
        </div>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Etapa 5') ?></button>
    <?php } ?>
</main>

<script>
    var page = 33;
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
                            alert("<?=__('Se acabó el tiempo')?>");
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page34"
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
        "action" => "page34"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page32"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

