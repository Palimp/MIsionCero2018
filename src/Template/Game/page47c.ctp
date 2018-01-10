<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?= __('Selección de Retos / Ámbitos de tu equipo:') ?>
                </p>
            </div>

        </div>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?><p>
                <b class="fs22">
                    <?= $comments[$i]->question ?>
                </b>


                <b>
                    <?= __('Ámbito: ') ?>


                    <?= $ambits[$comments[$i]->ambit - 1]->ambit ?>
                </b>
            </p>
        <?php } ?>

    </section>

</main>

<script>
    var page = 47;

    $(function () {
<?php if (!$admin) { ?>


            function checkPage() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"])
    ?>", function (data, status) {
                    if (data == page) {
                        setTimeout(checkPage, 1000);
                    } else {
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    }
                });
            }

            setTimeout(checkPage, 1000);

<?php } ?>

    });
</script>

