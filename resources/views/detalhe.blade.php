@extends('layouts.template')

@section('content')

<div class="container mt-5">

<h1>Detalhe do produto</h1>
<hr>
<div class="row mb-5">
    <div class="col-md-6 col-12 d-flex align-items-center">
        <div>
            <p> <strong>Nome:</strong> <span> {{ $produto['pro_nome'] }}</span></p>
            <p> <strong>Descrição:</strong> <span> {{ $produto['pro_descricao'] }}</span></p>
            <p> <strong>Preço:</strong> <span> R$ {{ $produto['pro_preco'] }}</span></p>
        
            <a href="{{route('index')}}" class="btn btn-outline-dark">Voltar</a>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <img class="w-100" src="{{asset('upload_fotos_produtos/' . $produto['pro_url'])}}" alt="">
    </div>
</div>
@endsection
