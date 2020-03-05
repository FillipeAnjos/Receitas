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
          <strong>Sucesso! </strong> {{ Session::pull('RecipeSuccess', 'default') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif

    @if(Session::has('RecipeError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error! </strong> {{ Session::pull('RecipeError', 'default') }}
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

  @if(Session::has('ContactSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Sucesso! </strong> {{ Session::pull('ContactSuccess', 'default') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif

    @if(Session::has('ContactError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error! </strong> {{ Session::pull('ContactError', 'default') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif

