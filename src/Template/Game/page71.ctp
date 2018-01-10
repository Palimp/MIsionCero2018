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
    <section>
         <h1 class="green text-center my-5">
            <?=__('¡Felicidades!')?>
            </br>
            <?=__('El equipo ganador es ')?>
            <span><?=$teams[0]['name']?></span>
        </h1>
        <div class="text-center mb-10" style="position:relative; width: 637px; margin: auto;">
            <span class="first"><?=$teams[1]['name']?></span>
            <b class="second"><?=$teams[0]['name']?></b>
            <span class="third"><?=isset($teams[2]['name'])?$teams[2]['name']:''?></span>
              <?= $this->Html->image("imgp92.svg"); ?>
        </div>
    </section>


   
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
<?php } ?>
</main>

<script>
    var page = 71;
    $(function () {
<?php if ($admin) { ?>


          
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page70"
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

