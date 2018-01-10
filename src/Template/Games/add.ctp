<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="games form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Add Game') ?></legend>
        <?php
            echo $this->Form->control('code1');
            echo $this->Form->control('code2');
            echo $this->Form->control('name');
            echo $this->Form->control('teams');
            echo $this->Form->control('expiration', ['empty' => true]);
            echo $this->Form->control('active');
            echo $this->Form->control('trouble');
            echo $this->Form->control('page');
            echo $this->Form->control('time1', ['empty' => true]);
            echo $this->Form->control('score');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
