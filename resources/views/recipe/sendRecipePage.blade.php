@extends('layouts.app')

@section('content')
<div class="container">

	<!-- 
        -----------------------------------------------------------------------------------
        ---------------------------- Mensagem de Validação !!! ----------------------------
        ----------------------------------------------------------------------------------- 
    -->

	@if(isset($errors) && count($errors) > 0)

		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			@foreach($errors->all() as $error )
			 	{{ $error }}
			  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    		<span aria-hidden="true">&times;</span>
			  	</button>
			  	<br/>
			@endforeach
		</div>

	@endif

	@if(Session::has('RecipeSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sucesso! </strong> {{ Session::get('RecipeSuccess') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif

    @if(Session::has('RecipeError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error! </strong> {{ Session::get('RecipeSuccess') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif

	<!-- 
        -----------------------------------------------------------------------------------
        -----------------------------------------------------------------------------------
        ----------------------------------------------------------------------------------- 
    -->

    <div class="row justify-content-center">

    	<div class="col-md-12">
            <img src="{{ URL::asset('/imagens/tortaMorango.png') }}" class="img-fluid">
        </div>

        <div class="col-md-12">
        	<br/>
            <div class="card">
				<form action="/sendRecipe" method="POST">
					{{ csrf_field() }}
					
	                <div class="card-header" id="headerSpotlight">Enviar Receita !!!</div>
						<div id="headerGray">
	                		<center>Detalhes</center>
	                	</div>
	                <div class="card-body" id="bodyContainer">
	                    
	                    <center>
		                	<div class="col-md-8">

		                		<input type="text" name="title" class="form-control" placeholder="Título" value="{{ old('title') }}">

		                		<br/>

			                	<select name="category" class="form-control">
			                		<option value="">Informe a Categoria</option>
			                		<option value="Bolo">Bolos</option>
			                		<option value="Torta">Tortas</option>
			                		<option value="Carne">Carnes</option>
			                		<option value="Massa">Massas</option>
			                		<option value="Bebida">Bebidas</option>
			                		<option value="Doce">Doces e Sobremesas</option>
			                		<option value="Caldo">Caldos</option>
			                		<option value="Peixe">Peixes e Frutos do Mar</option>
			                		<option value="Ave">Aves</option>
			                		<option value="Fitness">Fitness</option>
			                	</select>

		                		<br/>

							  	<div class="row">
							    	<div class="col-sm">
							    		<label>Tempo de Preparo</label>
							      		<input type="text" name="tempPreparation" class="form-control" placeholder="Minutos" value="{{ old('tempPreparation') }}">
							    	</div>
							    
							    	<div class="col-sm">
							    		<label>Quantidade</label>
							      		<input type="text" name="amount" class="form-control" placeholder="Porções" value="{{ old('amount') }}">
							    	</div>
							  	</div>

							  	<br/>

							  	<label>Essa receita é de microondas?</label>
							  	<select name="microondas" class="form-control">
							  		<option value="">Selecione</option>
							  		<option value="n">Não</option>
							  		<option value="s">Sim</option>
							  	</select>

			                	
		                	</div>

		                </center>

	                </div>
	                
	                	<div id="headerGray">
	                		<center>Ingredientes</center>
	                	</div>

	                <div class="card-body" id="bodyContainer">

	                	<center>
		                	<div class="col-md-8">

			                	<label>Nos informe com detalhes os ingredientes!</label>

			                	<textarea rows="5" cols="50" name="ingredients" class="form-control">{{ old('ingredients') }}</textarea>

		                	</div>
		                </center>

	                </div>

	                	<div id="headerGray">
	                		<center>Preparo</center>
	                	</div>

	                <div class="card-body" id="bodyContainer">

	                	<center>
		                	<div class="col-md-8">

			                	<label>Nos informe com detalhes a forma de preparo!</label>

			                	<textarea rows="5" cols="50" name="preparation" class="form-control" >{{ old('preparation') }}</textarea>

		                	</div>
		        
	            			<br/>   		
	              			
	                		<input type="submit" name="enviarReceita" value="Enviar Receita" class="btn" id="buttonSendRecipe">
	                	</center>
					</div>
	           
				</form>
            </div>
        </div>
    </div>
</div>
@endsection
