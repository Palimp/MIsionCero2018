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
        <?= $this->Html->image("breadp28.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        
         <!-- start ESTO VA EN UNA PAGINA PREVIA NUEVA-->
        <div class="col-12 col-md-auto">
            <h4>
                Etapa 2- Parada lúdica
            </h4>
            <p class="fs22 green">
                ATENCIÓN exploradores! 
                <i class="fa fa-smile-o"></i>
            </p>
            <p>
                <i class="fa fa-comment-o"></i>
                En esta etapa los Exploradores deberán observar con atención video que se mostrará a continuación. 
                <br>
                El Jefe de Expedición realizará algunas preguntas al terminar…
                <br>
                ¡Los equipos que respondan correctamente ganarán Bikles!
                <b>
                    No pierdas ningún detalle!
                </b>
            </p>
        </div>
        <?php if ($admin) { ?>
            <p>
                El Jefe de Expedición seguirá las instrucciones al pie del vídeo para lanzar la pregunta en el momento adecuado
            </p>
        <?php } ?>
        <!-- en el boton de pasar al video poner TXTO: "Pasar al vídeo" -->
        <!-- end ESTO VA EN UNA PAGINA PREVIA NUEVA-->
    </section>
</section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Pasar al vídeo') ?></button>
<?php } ?>
</main>

<script>
    var page = 151;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page16"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page15"
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

