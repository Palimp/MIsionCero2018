<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>
 <main>
      <section>

        <div class="alert alert-success d-inline-block">
          <?=__('Al finalizar la partida de Misión 0 obtendrás una ')?><b><?=__('lista de retos concretos, priorizados y clasificados por ámbito, ')?></b> <?=__(' que te permitirá trabajar la problemática de manera concreta y enfocada, optimizando la búsqueda posterior de soluciones innovadoras')?></b>
        </div>

        <div class="text-right">
          <a href="#" class="mr-2" data-toggle="tooltip" title="<?=__('Haz click para descargar')?>"><i class="fa fa-download"></i></a>
          <a href="#" data-toggle="tooltip" title="<?=__('Haz click para imprimir')?>">
            <i class="fa fa-print"></i>
          </a>          
        </div>
        <p class="fs22">
          <?=__('Problemática inicial:')?>
        </p>
        <h2 class="text-center green">
          <?=__('¿Cómo………………………………?')?>
        </h2>
        <p class="fs22 mt-5">
          <?=__('Tabla resumen de los retos')?>
        </p>
        <article class="row mt-2">
          <div class="col mr-4 pz-4 t5_p">
            <h4 class><?=__('TOP 5 RETOS PRIORITARIOS')?></h4>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
          </div>
          <div class="col ml-4 pz-4 t5_qw">
            <h4><?=__('TOP 5 RETOS OPERATIVOS (QUICK WINS)')?></h4>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
            <p><?=__('¿Cómo………………………………?')?></p>
          </div>
        </article>
        <article class="row mt-5">
          <div class="col">
            <p class="fs22">
              <?=__('Ámbitos')?>
            </p>
            <div id="accordion_a_ex" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="progressa" role="tab" id="h_a1_ex">
                  <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a1_ex" aria-expanded="true" aria-controls="c_a1_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #D9E095;">
                      <p class="mb-0">
                        <?=__('Proceso interno')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_a1_ex" class="collapse" role="tabpanel" aria-labelledby="h_a1_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_a2_ex">
                  <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a2_ex" aria-expanded="false" aria-controls="c_a2_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FEFBC5;">
                      <p class="mb-0">
                        <?=__('Recursos')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_a2_ex" class="collapse" role="tabpanel" aria-labelledby="h_a2_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_a3_ex">
                  <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a3_ex" aria-expanded="false" aria-controls="c_a3_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #E1F5EC;">
                      <p class="mb-0">
                        <?=__('Comercial')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_a3_ex" class="collapse" role="tabpanel" aria-labelledby="h_a3_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_a4_ex">
                  <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a4_ex" aria-expanded="false" aria-controls="c_a4_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FEE4BD;">
                      <p class="mb-0">
                        <?=__('Comunicación')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_a4_ex" class="collapse" role="tabpanel" aria-labelledby="h_a4_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_a5_ex">
                  <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a5_ex" aria-expanded="false" aria-controls="c_a5_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FFE1FF;">
                      <p class="mb-0">
                        <?=__('Organización')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_a5_ex" class="collapse" role="tabpanel" aria-labelledby="h_a5_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_a6_ex">
                  <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a6_ex" aria-expanded="false" aria-controls="c_a6_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #E1F5FF;">
                      <p class="mb-0">
                        <?=__('Supply')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_a6_ex" class="collapse" role="tabpanel" aria-labelledby="h_a6_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p class="mb-0">
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_a7_ex">
                  <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a7_ex" aria-expanded="false" aria-controls="c_a7_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FFD8D9;">
                      <p class="mb-0">
                        <?=__('Otros')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_a7_ex" class="collapse" role="tabpanel" aria-labelledby="h_a7_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <p class="fs22">
              <?=__('Tipologia')?>
            </p>
            <div id="accordion_t_ex" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="progressa" role="tab" id="h_t1_ex">
                  <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t1_ex" aria-expanded="true" aria-controls="c_t1_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #D9E095;">
                      <p class="mb-0">
                        <?=__('Ambicioso')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_t1_ex" class="collapse" role="tabpanel" aria-labelledby="h_t1_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_t2_ex">
                  <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t2_ex" aria-expanded="false" aria-controls="c_t2_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FEFBC5;">
                      <p class="mb-0">
                        <?=__('Normal')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_t2_ex" class="collapse" role="tabpanel" aria-labelledby="h_t2_ex">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="progressa" role="tab" id="h_t3_ex">
                  <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t3_ex" aria-expanded="false" aria-controls="c_t3_ex" class="w-100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #E1F5EC;">
                      <p class="mb-0">
                        <?=__('Quick Win')?>
                      </p>
                    </div>
                  </a>
                </div>
                <div id="c_t3_ex" class="collapse" role="tabpanel" aria-labelledby="h_t3">
                  <div class="card-block">
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                    <p>
                      <?=__('¿Cómo………………………………?')?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>
        <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
    </main>
<script>
    var page = 5;
    $(function () {
<?php if (!$admin) { ?>
            setTimeout(checkPage, 500);

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
<?php } else { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page6"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page4"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

