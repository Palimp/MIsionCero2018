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
        <?= $this->Html->image("breadp49.svg", ['class' => 'w-100']); ?>
    </header>
    <section>
        <h4>
            <?=__('Etapa 5- Puntos de vista')?><br>
            <?=__('Problemática: '.$trouble)?>
        </h4>
        <p class="fs22 green">
            <?=__('¿Cómo ven los actores involucrados el problema, desde su punto de vista?')?>
        </p>
        <p>
            <b><?=__('Los 5 retos más votados por todos los equipos pasan al Final del Viaje')?></b>
        </p>


        <p class="fs22">
            <i class="fa fa-comment-o"></i>
            <?=__('Pensar en los diferentes actores involucrados que intervienen en nuestra problemática.')?>
        </p>
        <p>
            <?=__('Un cliente interno/externo, un competidor, un proveedor, un distribuidor, la administración, otro departamento, un usuario, la familia de un usuario...)')?>
        </p>

        <div class="text-center green fs26">
            <p>
                <?=__('¿cómo ven el reto desde su punto de vista?')?>
                </br>
                <i class="fa fa-chevron-down"></i>
                </br>
                <b><?=__('Luego expresar las diferentes visiones en forma de reto:')?></b>
                </br>
                <em><?=__('¿cómo…?')?></em>
            </p>
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

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Iniciar Etapa 5') ?></button>
    <?php } ?>
</main>

<script>
    var page = 32;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page33"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page31"
    ])
    ?>';
            });
<?php } else { ?>
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

