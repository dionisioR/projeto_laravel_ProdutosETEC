<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Usamos Authenticatable para permitir que esse model funcione com o sistema de autenticação do Laravel
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuarios extends Authenticatable
{

    /**
     * @var string
     * Nome da tabela no banco de dados.
     * Como o nome não segue a convenção padrão do Laravel (plural e snake_case),
     * precisamos informar manualmente.
     */
    protected $table = 'usuarios'; // nome da tabela

    /**
     * @var string
     * Nome da chave primária da tabela.
     * O padrão do Laravel é 'id', mas no banco é 'usu_id'.
     */
    protected $primaryKey = 'usu_id'; // nome da chave primaria

    /**
     * @var array
     * Define quais atributos podem ser atribuídos em massa (mass assignment).
     * Ou seja, ao usar create() ou fill(), só esses campos serão preenchidos.
     */
    protected $fillable = [
        'usu_nome',
        'usu_email',
        'usu_senha',
    ];


    /**
     * @var bool
     * Define se a tabela possui os campos created_at e updated_at.
     * Como a sua tabela não tem, definimos como false.
     */
    public $timestamps = false;


    /**
     * @var array
     * Oculta campos sensíveis quando o model for convertido para array ou JSON.
     * Evita expor a senha em respostas da API ou no debug.
     */
    // protected $hidden = [
    //     'usu_senha',
    // ];


    /**
     * Relacionamento com produtos.
     * Um usuário pode ter vários produtos (hasMany).
     * Parâmetros:
     *  - Model relacionado (Produtos::class)
     *  - Nome da chave estrangeira na tabela produtos (usu_id)
     *  - Nome da chave primária local (usu_id)
     */
    // Relacionamento com produtos
    public function produtos()
    {
        return $this->hasMany(Produtos::class, 'usu_id', 'usu_id');
    }
}
