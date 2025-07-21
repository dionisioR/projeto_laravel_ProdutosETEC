@extends('layouts.template')

@section('content')

  <div class="container">
        <h2 class="pt-5 mt-3">OS MELHORES PRODUTOS</h2>
        <hr class="pb-1">
        <div class="row">
            @foreach ($produtos as $produto)
            <div class="col-md-4 col-lg-3 col-6 my-3">
                <a href='{{route('detalhe', $produto['pro_id'])}}' class="text-decoration-none">
                <div class="card-h" style="background-image: url('{{asset('upload_fotos_produtos/' . $produto['pro_url'])}}');">
                    <div class="card-h-container">
                        <div class="text-center">
                            <h5 class="">{{ $produto['pro_nome'] }} <i class="bi bi-eye"></i></h5>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>



        {{-- ------------------------------------------------------ --}}
        <h2 class="pt-5 mt-3">OS MELHORES PRODUTOS</h2>
        <hr class="pb-1">
        <div class="row">
            @foreach ($produtos as $produto)
            <div class="col-md-4 col-lg-3 col-6 my-3">
                <div class="card">
                    <img src="{{asset('upload_fotos_produtos/' . $produto['pro_url'])}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto['pro_nome'] }}</h5>
                        <p class="card-text">{{ $produto['pro_descricao'] }}</p>
                        <p class="card-text">{{ $produto['pro_preco'] }}</p>
                        <a href="{{route('detalhe', $produto['pro_id'])}}" class="btn btn-outline-dark"><i class="bi bi-eye me-2"></i> Saiba mais</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>    
@endsection