<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>
<nav id="mainNav" class="navbar fixed-top">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="justify-content-end">
        <div class="float-right bg-white pt-0 p-3" style="box-shadow: 0 0 6px 3px lightgrey">
            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars mr-2"></i>
                Menú Jefe de Expedición
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right pt-2">
                    <li>
                        <?=
                        $this->Html->link(
                                __('Introducir problemática'), ['controller' => 'Build', 'action' => 'trouble']
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Crear equipos'), ['controller' => 'Build', 'action' => 'teams']
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Estado partida'), ['controller' => 'Build', 'action' => 'estado']
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Otro código'), ['controller' => 'Build', 'action' => 'reset']
                        )
                        ?>
                    </li>
                    <li>
                        <hr/>
                    </li>
                    <li>
                        <a class="" href="#">Ranking bikles</a>
                    </li>
                    <li>
                        <a class="" href="#">Resumen final</a>
                    </li>
                    <li>
                        <a class="" href="#">Exportar resumen final</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
