<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Game $game
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="games view large-9 medium-8 columns content">
    <h3><?= h($game->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code1') ?></th>
            <td><?= h($game->code1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code2') ?></th>
            <td><?= h($game->code2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($game->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trouble') ?></th>
            <td><?= h($game->trouble) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($game->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teams') ?></th>
            <td><?= $this->Number->format($game->teams) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($game->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Page') ?></th>
            <td><?= $this->Number->format($game->page) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Score') ?></th>
            <td><?= $this->Number->format($game->score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiration') ?></th>
            <td><?= h($game->expiration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time1') ?></th>
            <td><?= h($game->time1) ?></td>
        </tr>
    </table>
</div>
