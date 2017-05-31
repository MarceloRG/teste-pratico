<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
        'nome', 'email'
    ];

    public function venda()
    {
        return $this->hasMany(Venda::class);
    }
}
