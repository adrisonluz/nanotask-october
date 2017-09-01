<?php namespace AdrisonLuz\NanoTask\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Tasks extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'nanotasks_geral', 
        'nanotasks_tasks' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AdrisonLuz.NanoTask', 'geral', 'tasks');
    }
}