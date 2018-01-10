<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
  */
echo $nombre;
?>
<main>
      <header class="text-center mb-10" style="padding-top: 10rem;">
        <div>
          <img src="img/logo_binnakle_es.png" alt="">
        </div>
          <p></p>
            <p class="fs26"><?=__('Su mensaje se ha enviado')?></p>
        <div>
            <?=$this->Html->link(
    'Volver a la página principal','/');
?>
          
        </div>
      </header>


   
    </main>

