<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

// if (!Configure::read('debug')) :
//     throw new NotFoundException(
//         'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
//     );
// endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
    <head>
    <?= $this->Html->charset() ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Bienvenidos al juego de - Misión 0 - Identifica tus retos para fijar un rumbo a tu expedición! - webApp">
        <meta name="author" content="visualiabcn.com">
        <title>Misión 0</title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
     <?= $this->Html->css('font-awesome.min.css') ?>
   <?= $this->Html->css('style.css') ?>
   <?= $this->Html->script('jquery-3.1.1.slim.min.js') ?>
   <?= $this->Html->script('popper.min.js') ?>
   <?= $this->Html->script('bootstrap.min.js') ?>
   <?= $this->Html->script('scripts.js') ?>
   <?= $this->Html->script('ie10-viewport-bug-workaround.js') ?>

        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    </head>
    <body class="home">
        <main>
            <header class="text-center mb-10" style="padding-top: 10rem;">
                <div>
                    <img src="img/logo_binnakle_es.png" alt="">
                </div>
                <div>
                    <img src="img/logo_m0_es.svg" alt="">
                </div>
            </header>
            <section class="text-center">
     <?php
                echo $this->Form->create('codeLogin', array(
                'url' => array('controller' => 'Mision', 'action' => 'codelogin'),
                ));
                ?>
                <div class="form-group">
                    <p class="fs26"><?=__('Introduce el código')?></p>
                    <div class="row mx-5">
                        <div class="col">
                            <input id="code" name="code" type="password" class="form-control fs26" aria-describedby="codeHelp" placeholder="Introduce aquí el código">
                        </div>
                        <div class="col-12 col-md-auto">
                            <i class="fa fa-wpforms fa-3x example_ic align-middle mr-3"></i>
                            <span id="codeHelp" class="text-muted"><?=__('Ejemplo 9P8674')?></span>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-10"><?=__('Empezar partida')?></button>
                </form>

                <!-- Button trigger modals -->

                <div>
                    <a href="#" data-toggle="modal" data-target="#modal_buy"><?=__('Compra tu código para poder jugar')?></a>
                </div>
                <div>
                    <a href="#" data-toggle="modal" data-target="#modal_contact"><?=__('Contacta con nosotros')?></a>
                </div>
            </section>
            <div>
                <!-- Modal contact -->

                <div id="modal_contact" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_contactLiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_contactLiveLabel">Contacta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                <?php
                echo $this->Form->create('SendMail', array(
                'url' => array('controller' => 'Mision', 'action' => 'sendmail'),
                ));
                ?>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="sr-only" for="inlineFormInput">Persona de contacto</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="contact" name="contact" placeholder="Persona de contacto">
                                    </div>
                                    <div class="col">
                                        <label class="sr-only" for="inlineFormInput">Empresa</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="company" name="company" placeholder="Empresa">
                                    </div>
                                    <div class="col">
                                        <label class="sr-only" for="inlineFormInput">E-mail</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="mail" name="mail" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <p>O envíanos un mail a <a href="mailto:info@binnakle.com">info@binnakle.com</a></p>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal buy -->

                <div id="modal_buy" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_buyLiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_buyLiveLabel">Compra</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <p>Es necesario realizar la compra de una licencia de Misión 0 para poder jugar una partida.</p>
                                <p>Con la compra de una licencia obtendrás un código de acceso que permite:</p>
                                <ul>
                                    <li>
                                        La configuración de la partida por parte del Jefe de Expedición: problemática a trabajar y equipos
                                    </li>
                                    <li>
                                        El desarrollo de la partida (Jefe de Expedición y Exploradores): 1 hora antes del inicio de la partida / 2 horas de duración de la partida / 1 hora después de la partida
                                    </li>
                                </ul>
                                <br>
                                <p>Precio de licencia para una partida de Misión 0: 500€ (+ IVA en España)</p>
                                <br>
                                <p>
                                    Para comprar tu licencia y obtener tu código:
                                </p>
                                    
                                <ol>
                                    <li>
                                        Realiza una transferencia bancaria a esta cuenta
                                        <br>
                                       Código IBAN: BBVA ES74 0182-7212-50-0201916788
                                       <br>
                                       SWIFT: BBVAESMMXXX
                                    </li>
                                    <li>
                                        Envía el justificante de la transferencia por email a <a href="mailto:info@binnakle.com">info@binnakle.com</a>, indicando tu nombre y los datos fiscales para la factura
                                    </li>
                                    <li>
                                        Recibirás tu código de acceso junto a la factura.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
