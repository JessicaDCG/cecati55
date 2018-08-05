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



$cakeDescription = 'ALMACEN :: CECATI 55';  
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
      

</head>
<body class="home">

<header class="row">
    <!--
    <div class="header-image"><?= $this->Html->image('cake.logo.svg') ?></div> 
    -->
    <div class="header-title">
        <h1>Almacen CECATI</h1>
    </div>
</header>

<div class="row">
    <div class="columns large-12">
        <div class="ctp-warning alert text-center">
            <p>aaaaaaaaa</p>
        </div>
        
        
    </div>

</div>

<?php
    // Start a modal with a title, default value for 'close' is true
    echo $this->Modal->create("My Modal Form", ['id' => 'MyModal1', 'close' => false]) ;
?>
<p>Here I write the body of my modal !</p>
<?php
    // Close the modal, output a footer with a 'close' button
    echo $this->Modal->end() ;
    // It is possible to specify custom buttons:
    echo $this->Modal->end([
        $this->Form->button('Submit', ['bootstrap-type' => 'primary']),
        $this->Form->button('Close', ['data-dismiss' => 'modal'])
    ]);
?>

<div id="MyModal1" tabindex="-1" role="dialog" aria-hidden="true" aria-labbeledby="MyModal1Label" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <!-- With 'close' => true, or without specifying:
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h4 class="modal-title" id="MyModal1Label">Example 1 - Simple header & footer, custom body</h4>
            </div>
            <div class="modal-body ">
                <p>Here I write the body of my modal !</p>
            </div>
            <div class="modal-footer ">
                <button class="btn btn-primary btn-primary" type="submit">Submit</button>
                <button data-dismiss="modal" class="btn btn-default" type="submit">Close</button>
            </div>
        </div>
    </div>
</div>



<hr />
<hr />
<hr />
<hr />

<div class="row">
    <div class="columns large-6">
        <h4>Administracion</h4>
        <ul>
            <li class="bullet success"><?= $this->Html->link(__('Personal Plantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
            <li class="bullet success"><?= $this->Html->link(__('Areas'), ['controller' => 'Area', 'action' => 'index']) ?></li>
            <li class="bullet success"><?= $this->Html->link(__('Talleres'), ['controller' => 'Taller', 'action' => 'index']) ?></li>   
            <li class="bullet success"><?= $this->Html->link(__('Personas'), ['controller' => 'Persona', 'action' => 'index']) ?></li>   
            <li class="bullet success"><?= $this->Html->link(__('Usuarios'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>   

        
        </ul>
    </div>
    <div class="columns large-6">
        <h4>Usuario</h4>
        <ul>
       
            <li class="bullet success"><?= $this->Html->link(__('Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>     
            
       
        </ul>
    </div>
    <hr />
</div>

<div class="row">
    <div class="columns large-6">
        <h4>Database</h4>
        <?php
        try {
            $connection = ConnectionManager::get('default');
            $connected = $connection->connect();
        } catch (Exception $connectionError) {
            $connected = false;
            $errorMsg = $connectionError->getMessage();
            if (method_exists($connectionError, 'getAttributes')) :
                $attributes = $connectionError->getAttributes();
                if (isset($errorMsg['message'])) :
                    $errorMsg .= '<br />' . $attributes['message'];
                endif;
            endif;
        }
        ?>
        <ul>
        <?php if ($connected) : ?>
            <li class="bullet success">CakePHP is able to connect to the database.</li>
        <?php else : ?>
            <li class="bullet problem">CakePHP is NOT able to connect to the database.<br /><?= $errorMsg ?></li>
        <?php endif; ?>
        </ul>
    </div>
    <div class="columns large-6">
        <h4>DebugKit</h4>
        <ul>
        
            <li class="bullet success">DebugKit is loaded.</li>
        
         
        </ul>
    </div>
    <hr />
</div>

<div class="row">
    <div class="columns large-6">
        <h3>Editing this Page</h3>
        <ul>
            <li class="bullet cutlery">To change the content of this page, edit: src/Template/Pages/home.ctp.</li>
            <li class="bullet cutlery">You can also add some CSS styles for your pages at: webroot/css/.</li>
        </ul>
    </div>
    <div class="columns large-6">
        <h3>Getting Started</h3>
        <ul>
            <li class="bullet book"><a target="_blank" href="#">CakePHP 3.0 Docs</a></li>
            <li class="bullet book"><a target="_blank" href="#">The 15 min Bookmarker Tutorial</a></li>
            <li class="bullet book"><a target="_blank" href="#">The 15 min Blog Tutorial</a></li>
            <li class="bullet book"><a target="_blank" href="#">    The 15 min CMS Tutorial</a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="columns large-12 text-center">
        <h3 class="more">More about Cake</h3>
        <p>
            CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Front Controller and MVC.<br />
            Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.
        </p>
    </div>
    <hr/>
</div>


</body>
</html>
