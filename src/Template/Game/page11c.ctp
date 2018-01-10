<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?=__('Selección de Retos / Ámbitos de tu equipo:')?>
                </p>
            </div>
        </div>
        <?php
        foreach($challenges as $challenge) {
            $reto=isset($challenge->reto)?$challenge->reto:$challenge->challenge;
            $ambito=isset($challenge->ambito)?$ambits[$challenge->ambito-1]->ambit:$ambits[$challenge->ambit-1]->ambit;
            
            ?><p>
            <b class="fs22">
               Cómo <?= $reto." - ".$ambito?>
            </b></p>

          
        <?php } ?>
  
    </section>

</main>

<script>
    var page = 11;

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


<?php } ?>

    });
</script>

