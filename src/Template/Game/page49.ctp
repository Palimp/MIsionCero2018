<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
$ambits[-1]= new \stdClass();
$ambits[-1]->ambit=__('Sin ámbito');

?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <h4>
            <?=__('ETAPA 7- Clasificación Retos / Votos / Ámbitos')?>
        </h4>
        <p class="fs22 green">
            <?=__('¡Enhorabuena exploradores! Hemos terminado la Etapa 7')?>
        </p>
        <p>
            <b><?=__('Los 5 retos más votados por todos los equipos pasan al Final del Viaje')?></b>
        </p>
        <table class="reduced table table-striped text-center">
            <thead>
                <tr>
                    <td></td>
                    <th><?=__('Votos')?></th>
                    <th><?=__('Ámbito')?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cont=0;
                foreach ($ranking as $team) {
                    $cont++;
                    ?>
                    <tr <?=$cont<=5?'class="green"':''?>>
                        <td scope="row" class="text-left">
                            <?=$team['question']?>
                        </td>
                        <td>
                            <?=$team['votes']?>
                        </td>
                        <td><?= $ambits[$team['ambit']-1]->ambit ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <?=__('¡Los equipos que hayan obtenido más votos ganan Bikles!')?>
            </div>
        </div>
    </section>
</section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Finalizar Etapa 7') ?></button>
<?php } ?>
</main>

<script>
    var page = 49;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page50"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page48"
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
                        setTimeout(checkPage, 1000);
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

