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
        <?= $this->Html->image("breadp60.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
    <!-- start ESTO VA EN UNA PAGINA PREVIA NUEVA-->
                <div class="col-12 col-md-auto">
                    <h4>
                        Etapa 6- Parada lúdica
                    </h4>
                    <p class="fs22 green">
                        Eres bueno vendiendo?
                        <i class="fa fa-smile-o"></i>
                    </p>
                    <p>
                        <i class="fa fa-comment-o"></i>
                        En esta etapa los Exploradores tendrán que demostrar su ingenio tratando de vender el objeto que aparecerá en pantalla a otro equipo, teniendo en cuenta las limitaciones indicadas.
                        <br>
                        2 equipos trabajan juntos: 
                    </p>
                    <ul>
                        <li>
                            Fase 1- El primer equipo tiene 3 minutos para convencer al segundo equipo que le compre su objeto. 
                            <br>
                            Finalizado el tiempo, el segundo equipo comunicará al Jefe de Expedición si le ha convencido la presentación. 
                        </li>
                        <li>
                            Fase 2- Los equipos intercambian los roles: el equipo 2 presenta al equipo 1. 
                        </li>
                    </ul>
                </div>
                <?php if ($admin) { ?>
                    <p>
                        Si el número de equipos es impar, el equipo con más bikles juega contra el Jefe de Expedición
                    </p>
                <?php } ?>
                <div class="text-center mt-5">
                    <div class="alert alert-danger d-inline-block" role="alert">
                        <?= __('¡Los equipos que mejor vendan los objetos ganarán Bikles!') ?>
                        </br>
                        <?= __('Los equipos que no logren convencer al rival, perderán Bikles.') ?>
                    </div>
                </div>
                <!-- en el boton de pasar al video poner TXTO: "Pasar al vídeo" -->
                <!-- end ESTO VA EN UNA PAGINA PREVIA NUEVA-->
    </section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Pasar a objetos') ?></button>
<?php } ?>
</main>

<script>
    var page = 401;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page41"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page40"
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

