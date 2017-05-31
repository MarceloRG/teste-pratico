<?php

namespace App\Http\Controllers;


use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    private $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'produto' => 'required',
            'valor' => 'required'
        ]);
        $input = $this->prepareFields($request);
        $result = $this->venda->create($input);
        return redirect()->back();
    }

    public function prepareFields(Request $request)
    {
        $input = $request->all();
        if ($input['valor']) {
            $result = (8.5 / 100) * $input['valor'];
            $input['comissao'] = $result;
            return $input;
        }
        return $input;
    }
}
