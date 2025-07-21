<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    /**
     * @var string
     * Nome da tabela no banco de dados.
     * Como não segue o padrão do Laravel, informamos manualmente.
     */
    protected $table = 'produtos'; // nome da tabela

    /**
     * @var string
     * Nome da chave primária da tabela.
     * O padrão do Laravel é 'id', mas no banco é 'pro_id'.
     */
    protected $primaryKey = 'pro_id'; // nome da chave primaria


    /**
     * @var array
     * Define os campos que podem ser preenchidos em massa (mass assignment).
     * Permite uso de create() e update() com esses campos.
     */
    protected $fillable = [
        'pro_nome',
        'pro_descricao',
        'pro_preco',
        'pro_url',
        'pro_ativo',
        'usu_id',
    ];

    /**
     * @var bool
     * Informa se a tabela possui os campos created_at e updated_at.
     * Como não existem, definimos como false.
     */
    public $timestamps = false;

    /**
     * Relacionamento com usuário (dono do produto).
     * Um produto pertence a um único usuário (belongsTo - pertence a).
     * Parâmetros:
     *  - Model relacionado (Usuarios::class)
     *  - Nome da chave estrangeira na tabela produtos (usu_id)
     *  - Nome da chave primária na tabela usuarios (usu_id)
     */
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usu_id', 'usu_id');
    }
}
