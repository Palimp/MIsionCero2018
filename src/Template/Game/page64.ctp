<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
//print_r($tops);
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp85.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <h4>
            Final del Viaje- Los 25 retos finalistas
        </h4>
        <p class="fs22 green">
            Exploradores, hemos llegado al Final del Viaje<br>
            Estamos a punto de conocer los mejores retos para resolver la problemática planteada.
        </p>
        <p>
            <i class="fa fa-lightbulb-o"></i>
            Cada equipo tiene que indicar, para cada retos, si lo considera un reto:
        </p>
        <ul>
            <li>
                <i class="fa fa-comment-o"></i>
                AMBICIOSO: los retos ambiciosos nos llevan, a priori, a proyectos complejos, con impacto
            </li>
            <li>
                <i class="fa fa-comment-o"></i>
                NORMAL: los retos normales nos llevan a todo tipo de ideas
            </li>
            <li>
                <i class="fa fa-comment-o"></i>
                QUICK WIN: Un reto quick win nos llevará a ideas más operativas, implementables sin necesidad de elevados recursos
            </li>
        </ul>
        <table class="reduced table table-striped">
            <tbody>
                <tr>
                    <td scope="row">
                    </td><?php if (!$admin) { ?>
                        <td style="padding-top: 0; padding-bottom: 0;">
                            <div class="row text-center">
                                <div class="w-100 mr-1 py-1" style="background-color: rgba(0, 0, 0, 0.04);">
                                    <b>Tipologia</b>
                                </div>
                                <div class="col py-1">
                                    Ambicioso
                                </div>
                                <div class="col py-1">
                                    Normal
                                </div>
                                <div class="col py-1">
                                    Quick win
                                </div>
                            </div>
                        </td><?php } ?>
                </tr>
                <?php foreach ($tops as $top) {
                    ?>
                    <tr>
                        <td scope="row">
                            <?= $top->question ?>
                        </td>
                        <?php if (!$admin) { ?>
                            <td>

                                <div class="row text-center">
                                    <div class="col">
                                        <label class="custom-control custom-radio">
                                            <input name="radio_<?= $top->id ?>" value="1" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="custom-control custom-radio">
                                            <input name="radio_<?= $top->id ?>"  value="2" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="custom-control custom-radio">
                                            <input name="radio_<?= $top->id ?>"  value="3" type="radio" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                        </label>
                                    </div>
                                </div>

                            </td> <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div id="error"></div>

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Continuar Final del Viaje') ?></button>
    <?php } else { ?>
        <div class="text-right mt-5">
            <a href="#" id="submitvotos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block" <?= $voted ? 'style="display:none !important"' : '' ?>>
                <i class="fa fa-check fa-2x"></i>
            </a>
        </div>
    <?php } ?>
</main>

<script>
    var page = 64;
    var cambiar = false;
    
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
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page65"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page63"
    ])
    ?>';
            });
<?php } else { ?>


            $('#submitvotos').click(function () {
                if ($(":radio:checked").length != 25) {
                    alert("Ups! Explorador, algo no ha ido bien… Usa tus prismáticos y revisa tus votos");
                    return;
                }
                var votos = [];
                $('#submitvotos').attr('style', 'display:none !important');

                $('#error').html('');
                $(":radio:checked").each(function () {
                    votos.push({'id':$(this).attr('name').replace('radio_', ''),'val': $(this).val()});
                });
                console.log(votos);
                
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "savetopvotos"]) ?>", {'ids': JSON.stringify(votos)}, function (data, status) {
console.log(data);
                    $(':radio').attr('disabled', 'disabled');
                    cambiar = true;
                    $('#error').html('<?= __('Votos enviados') ?>');
                    setTimeout(checkPage, 1000);
                });

            });



<?php } ?>
    });
</script>

