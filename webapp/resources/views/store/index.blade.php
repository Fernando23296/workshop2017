<h1>Listado de tiendas</h1>
@foreach($stores as $store)
	<h3>{{ $store->nombre }}</h3>
	<img src="{{ $store -> imagen }}" alt="">
@endforeach