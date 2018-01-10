<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
$ambits[-1] = new \stdClass();
$ambits[-1]->ambit = __('Sin ámbito');

function getTipo($a, $b, $c) {
    $types = ['Ambicioso', 'Normal', 'Quick win'];
    if ($c >= $b and $c >= $a) {
        return $types[2];
    }
    if ($a >= $b and $a >= $c) {
        return $types[0];
    }
    if ($b >= $a and $b >= $c) {
        return $types[1];
    }
}
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp85.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <h4>
            <?=__('FINAL DEL VIAJE- Clasificación Retos / Votos / Ámbitos / Alcance')?>
        </h4>
        <p class="fs22 green">
            <?=__('¡Enhorabuena exploradores! Hemos terminado la Misión 0 con éxito.')?>
        </p>
        <p>
            <?= __('Esta es la clasificación final de los retos finalistas') ?>
        </p>
        <table class="reduced table table-striped text-center">
            <thead>
                <tr>
                    <td></td>
                    <th><?= __('Votos') ?></th>
                    <th><?= __('Ámbito') ?></th>
                    <th><?= __('Tipología') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cont = 0;
                $ant = 0;
                foreach ($ranking as $team) {
                    $cont++;
                    ?>
                    <tr <?= ($cont <= 5 || $ant == $team['votes'] ) ? 'class="green"' : '' ?>>
                        <td scope="row" class="text-left">
                            <?= $team['question'] ?>
                        </td>
                        <td>
                            <?= $team['votes'] ?>
                        </td>
                        <td><?= $ambits[$team['ambit'] - 1]->ambit ?></td>
                        <td><?= getTipo($team['amb'], $team['nor'], $team['qui']) ?></td>
                    </tr>
                    <?php
                    if ($cont == 5) {
                        $ant = $team['votes'];
                        
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <?= __('¡Los equipos que hayan obtenido más votos ganan Bikles!') ?>
            </div>
        </div>
    </section>
</section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Final del Viaje') ?></button>
<?php } ?>
</main>

<script>
    var page = 66;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page67"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page65"
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

