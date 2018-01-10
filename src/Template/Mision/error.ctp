<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
  */
if (empty($error)){$error=__('Ha ocurrido un error');}
?>
<main>
      <header class="text-center mb-10" style="padding-top: 10rem;">
        <div>
          <img src="img/logo_binnakle_es.png" alt="">
        </div>
          <p></p>
            <p class="fs26"><?=$error?></p>
        <div>
            <?=$this->Html->link(
    __('Volver a la página principal'),'/');
?>
          
        </div>
      </header>


   
    </main>

