@extends('layouts.app')

@section('content')
<div class="container">
	@include('mensagens/mensagens')
    <div class="row justify-content-center">

    	<div class="col-md-12">
    		<!--<img src="{{ URL::asset('/imagens/folder/tortaMorango.png') }}" class="img-fluid">-->
            <img src="{{ $folder }}" class="img-fluid">
    	</div>

        <div class="col-md-12">
        	<br/>
            <div class="card">
                <div class="card-header" id="headerSpotlight">BOLOS</div>

                <div class="card-body">
                    
                	<div class="card">
                		<div class="card-header" id="headerSpotlight">Receitas</div>
                		<br/>
                		@foreach($bolos as $bolo) 
	                		<div class="container">
							  <div class="row">
							    <div class="col-sm">
							      	<img src="{{ $bolo->img }}" class="img-fluid" id="imgFooterCategory">
							    </div>
							    <div class="col-6">
							      	<br/><br/>	
			                        <div class="heartIconAndText">
										{{ $bolo->categoria }}<br/>
						      			{{ $bolo->nome }}<br/>
				                        <img src="{{ URL::asset('/icons/png/iconsAvulsos/heart-icon.png') }}" id="heartIcon" alt="Favorito">
				                        <span class="textIconFavorito">{{ $bolo->favorito }}</span>
				                    </div>
							    </div>
							    <div class="col-sm">
							      	<br/><br/><h1> </h1>	
							      	<a href="" class="btn btn-sm btn-primary" title="Deseja visualizar essa receita: {{ $bolo->categoria }} - {{ $bolo->nome }}">Visualize aqui!</a>
							    </div>
							  </div>
							</div>
							<hr>
						@endforeach

						{!! $bolos->links() !!}<!-- Paginação LARAVEL  -->

                	</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
