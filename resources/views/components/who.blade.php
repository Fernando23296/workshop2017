@if (Auth::guard('web')->check())
	<p class="text-sucess">
		Has ingresado como <strong> USUARIO </strong>
	</p>
@else
	<p class="text-danger">
		Has salido como <strong> USUARIO</strong>
	</p>

@endif

@if (Auth::guard('admin')->check())
	<p class="text-sucess">
		Has ingresado como <strong> ADMINISTRADOR </strong>
	</p>
@else
	<p class="text-danger">
		Has salido como <strong> ADMINISTRADOR</strong>
	</p>

@endif
