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
                <div class="card-header" id="headerSpotlight">Contato</div>

	                <div class="card-body" id="bodyContainer">
	                	<center>
	                		<div class="col-md-8">

	                			<form action="/contact" method="POST">
	                				{{ csrf_field() }}

	                				<label style="font-size: 24px;">Fale Conosco</label>

		                			<input type="text" name="nome" class="form-control" placeholder="Nome" required>

		                			<br/>

		                			<input type="text" name="email" class="form-control" placeholder="Email" required>

		                			<br/>

		                			<label style="font-size: 18px;">Sua Mensagem</label>

		                			<textarea rows="5" cols="50" name="msg" class="form-control" required></textarea>

		                			<br/>

		                			<input type="submit" name="enviarMensagem" value="Enviar Mensagem" class="btn" id="buttonSendRecipe">

		                		</form>

	                		</div>
	            		</center>
	               	</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
