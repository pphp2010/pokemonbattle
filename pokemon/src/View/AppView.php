<?php
namespace App\View;

use Cake\View\View;
use BootstrapUI\View\UIView;

class AppView extends UIView
{
    public function initialize()
    {
        parent::initialize();
        $this->layout = 'default';
    }
}
