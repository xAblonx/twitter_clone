<?php
  namespace App;
  use MF\Init\Bootstrap;

  class Route extends Bootstrap {

    protected function initRoutes() {
      $routes['home'] = array(
        'route' => '/',
        'controller' => 'indexController',
        'action' => 'index'
      );

      $routes['inscreverse'] = array(
        'route' => '/inscreverse',
        'controller' => 'indexController',
        'action' => 'inscreverse'
      );

      $routes['registrar'] = array(
        'route' => '/registrar',
        'controller' => 'indexController',
        'action' => 'registrar'
      );

      $routes['autenticar'] = array(
        'route' => '/autenticar',
        'controller' => 'authController',
        'action' => 'autenticar'
      );

      $routes['sair'] = array(
        'route' => '/sair',
        'controller' => 'authController',
        'action' => 'sair'
      );

      $routes['timeline'] = array(
        'route' => '/timeline',
        'controller' => 'appController',
        'action' => 'timeline'
      );

      $routes['tweet'] = array(
        'route' => '/tweet',
        'controller' => 'appController',
        'action' => 'tweet'
      );

      $routes['quem_seguir'] = array(
        'route' => '/quem_seguir',
        'controller' => 'appController',
        'action' => 'quemSeguir'
      );

      $routes['acao'] = array(
        'route' => '/acao',
        'controller' => 'appController',
        'action' => 'acao'
      );

      $routes['remover_tweet'] = array(
        'route' => '/remover_tweet',
        'controller' => 'appController',
        'action' => 'removerTweet'
      );

      $this->setRoutes($routes);
    }
  }
?>