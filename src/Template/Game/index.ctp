<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 *  */
if ($admin) {
    echo $this->element('navbar');
}
?>
<main>
    <header class="mb-5">
        <div class="text-center">
            <img src="img/logo_m0_es_sm.svg" alt="">
        </div>
    </header>
    <section>
        <h4><?=__('Misión 0 -¿Por qué?')?></h4>
        <div class="alert alert-success d-inline-block">
            ¡Ganarán Bikles los equipos con más votos!
        </div>
        <div class="fs22 alert alert-success d-inline-block">
            <?=__('Las empresas suelen plantearse problemáticas y necesidades de manera muy genérica')?>
        </div>
        <?= $this->Html->image("img1.jpg", ['class' => 'float-right']); ?>
        
        <div>
            <p><?=__('Por ejemplo:')?></p>
            <ul style="line-height: 3rem;">
                <li>
                    <?=__('Tengo un problema de comunicación interna')?>
                </li>
                <li>
                    <?=__('Tengo que integrar a los millenials')?>
                </li>
                <li>
                    <?=__('Quiero reducir costes')?>
                </li>
                <li>
                    <?=__('Quiero relanzar mi producto')?>
                </li>
                <li>
                    <?=__('Tengo que optimizar mi logística')?>
                </li>
                <li>
                    <?=__('Quiero impulsar la transformación digital')?>
                </li>
                <li>
                    <?=__('Quiero entrar en un nuevo mercado')?>
                </li>
                <li>
                    <?=__('Tengo que adaptar la estructura de ventas al nuevo entorno')?>
                </li>
                <li>
                    …
                </li>
            </ul>
        </div>
        <?php if ($admin) { ?>
            <button style="display:none" id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
        <?php } ?>
    </section>
</main>

<script>
    var page = 1;
<?php if ($admin) { ?>
        $(function () {

            function checkTeams() {
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "teamsok"
    ])
    ?>", function (data, status) {

                    if (data == 0) {
                        setTimeout(checkTeams, 500);
                    } else {
                        $('#siguiente').show();
                        $('#siguiente').click(function () {
                            location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page2"
    ])
    ?>';
                        });
                    }

                });

            }

            setTimeout(checkTeams, 500);
        });
    <?php
} else {
    ?>
        $(function () {

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

            setTimeout(checkPage, 500);
        });
    <?php
}
?>
</script>

