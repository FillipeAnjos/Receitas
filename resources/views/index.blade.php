@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Site de Receitas</h2>
            <img src="{{ URL::asset('/imagens/tortaMorango.png') }}" class="img-fluid">
            <!-- 
                Site Modelo --- https://cybercook.com.br/
                Index.php
            -->
        </div>
        <br/>

        <div class="col-md-12">
            <br/>
            <h4>Destaques</h4>
            <div class="container">
              <div class="row">
                <div class="col-sm">
                  <div class="card">
                    <div class="card-header" id="headerSpotlight">{{ strtoupper($receita[0]->categoria) }} - {{ $receita[0]->nome }}</div>
                    <div class="card-body">

                        <img src="{{ $receita[0]->img }}" id="imageSpotlight">

                    </div>

                    <center>
                        <div class="heartIconAndText">
                            <img src="{{ URL::asset('/icons/png/iconsAvulsos/heart-icon.png') }}" id="heartIcon" alt="Favorito">
                            <span class="textIconFavorito">{{ $receita[0]->favorito }}</span>
                        </div>
                    </center>

                  </div>
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-header" id="headerSpotlight">{{ strtoupper($receita[1]->categoria) }} - {{ $receita[1]->nome }}</div>
                    <div class="card-body">

                        <img src="{{ $receita[1]->img }}" id="imageSpotlight">

                    </div>

                    <center>
                        <div class="heartIconAndText">
                            <img src="{{ URL::asset('/icons/png/iconsAvulsos/heart-icon.png') }}" id="heartIcon" alt="Favorito">
                            <span class="textIconFavorito">{{ $receita[1]->favorito }}</span>
                        </div>
                    </center>

                  </div>
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-header" id="headerSpotlight">{{ strtoupper($receita[2]->categoria) }} - {{ $receita[2]->nome }}</div>
                    <div class="card-body">

                        <img src="{{ $receita[2]->img }}" id="imageSpotlight">

                    </div>

                    <center>
                        <div class="heartIconAndText">
                            <img src="{{ URL::asset('/icons/png/iconsAvulsos/heart-icon.png') }}" id="heartIcon" alt="Favorito">
                            <span class="textIconFavorito">{{ $receita[2]->favorito }}</span>
                        </div>
                    </center>

                  </div>
                </div>
                <div class="col-sm">
                  <div class="card">
                    <div class="card-header" id="headerSpotlight">{{ strtoupper($receita[3]->categoria) }} - {{ $receita[3]->nome }}</div>
                    <div class="card-body">

                        <img src="{{ $receita[3]->img }}" id="imageSpotlight">

                    </div>

                    <center>
                        <div class="heartIconAndText">
                            <img src="{{ URL::asset('/icons/png/iconsAvulsos/heart-icon.png') }}" id="heartIcon" alt="Favorito">
                            <span class="textIconFavorito">{{ $receita[3]->favorito }}</span>
                        </div>
                    </center>

                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-md-12">
            <br/>
            <div class="card">
                <div class="card-header">...</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ... ... ...
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
