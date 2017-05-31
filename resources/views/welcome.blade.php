<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <!-- Styles -->
</head>
<body>
<div class="container">
{!! Form::open(['route' => ['venda.store']]) !!}
{!! Form::hidden('vendedor_id', $vendedor->id) !!}
<!-- Produto FORM INPUT -->
    <div class="col-md-9">
        <div class="form-group">
            {!! Form::label('produto', 'Produto:') !!}
            {!! Form::text('produto', null, ['class' => 'form-control']) !!}
            @if ($errors->has('produto')) <span class="has-error"><p
                        class="help-block">{{ $errors->first('produto') }}</p></span> @endif
        </div>
    </div>
    <div class="col-md-3">
        <!-- Valor FORM INPUT -->
        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::number('valor', null, ['class' => 'form-control']) !!}
            @if ($errors->has('valor')) <span class="has-error"><p
                        class="help-block">{{ $errors->first('valor') }}</p></span> @endif
        </div>
    </div>
    <div class="text-center">
        {!! Form::submit('Adicionar Venda', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    <hr>
    <div class="panel panel-primary">
        <div class="panel-heading">Vendedor: {{$vendedor->nome}}<br> Email: {{$vendedor->email}}</div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Comissão</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vendedor->venda as $venda)
                    <tr>
                        <td scope="row">{{$venda->produto}}</td>
                        <td>R$ {{$venda->valor}}</td>
                        <td>R$ {{$venda->comissao}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
