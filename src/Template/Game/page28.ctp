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
        <?= $this->Html->image("breadp45.svg", ['class' => 'w-100']); ?>
    </header>
    <section>
        <h4>
            Etapa 4- Parada lúdica
        </h4>
        <p class="fs22 green">
            Casos prácticos
        </p>
        <ul>
            <li>
                <i class="fa fa-comment-o"></i>
                A continuación se presentará el caso de una empresa a los exploradores<br>
                Deberán seleccionar el reto que mejor podrá ayudarles a cumplir el objetivo planteado
            </li>
        </ul>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                 La distribución de Bikles dependerá de la respuesta elegida: si seleccionan retos que pueden abrir nuevas vías de trabajo, ganarán Bikles! (según el criterio de Binnakle <i class="fa fa-smile-o"></i>). En caso contrario, perderán Bikles.
            </div>
        </div>

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Iniciar Caso práctico') ?></button>
    <?php } ?>
</main>

<script>
    var page = 28;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page29"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page27"
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

