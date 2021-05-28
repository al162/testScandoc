<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ScanDoc') }}
        </h2>
    </x-slot>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
			@if($paths)
			    <!-- @foreach ($paths as $file)<img src={{ $file }} style="height: 15vw; min-height: 100px;">@endforeach<br><br> -->

			    @foreach ($paths as $file)
			        {{ $file }}<br>
			    @endforeach<br><br>    
			    Cantidad de páginas: {{ count($paths) }}

			@endif <br>
			<form method="POST" enctype="multipart/form-data">
			    @csrf
			    
			    <input type="file" name="image[]" multiple>
			    <button type="submit">Subir</button><br>
			    @if ($errors->any())
			        @foreach ($errors->all() as $error) {{ $error }} @endforeach
			    @endif
			</form>
			@if($paths)
			<a href="{{ route('destroy') }}"><button type="submit">Borrar</button></a> 
			@endif
        </div>
    </div>
</div>


</x-app-layout>