<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'produto', 'valor', 'comissao', 'vendedor_id'
    ];

    public function getValorAttribute()
    {
        setlocale(LC_MONETARY, "pt_BR.UTF-8");
        return number_format($this->attributes['valor'], '2', ',', '.');
    }

    public function getComissaoAttribute()
    {
        setlocale(LC_MONETARY, "pt_BR.UTF-8");
        return number_format($this->attributes['comissao'], '2', ',', '.');
    }

}
