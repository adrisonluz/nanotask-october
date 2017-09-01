<?php namespace AdrisonLuz\NanoTask\Models;

use Model;

/**
 * Model
 */
class Task extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    public $attachMany = [
        'anexos' => ['System\Models\File']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'adrisonluz_nanotask_tasks';

    // Retorna todas os usuários
    public function getResponsaveisOptions(){
        $responsaveis[0] = 'Automático';

        return $responsaveis;
    }

    // Retorna todas os usuários
    public function getAtribuidosOptions(){
        $atribuidos[0] = 'Automático';

        return $atribuidos;
    }
}