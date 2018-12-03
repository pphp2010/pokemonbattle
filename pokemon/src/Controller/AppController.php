<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Player',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'authenticate' => [
                'Form' => [
                'userModel' => 'Users',
                  'fields' => [
                    'username' => 'username',
                    'password' => 'password'
                  ]
                ]
            ],
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['login','add','index']);
    }
}
