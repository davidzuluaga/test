<?php
namespace Drupal\test_user\controller;

use Drupal\Core\Controller\ControllerBase;

class UserController extends ControllerBase {
    

    /**
     *
     * {@inheritdoc}
     */
    public function __construct()
    {
    }

    /**
     *
     * {@inheritdoc}
     */
    public static function create(ContainerInterface $container)
    {
        return new static();
    }


    public function listUsers() {
        
    }

    public function exportUsers() {

    }

    public function importUsers() {

    }

}