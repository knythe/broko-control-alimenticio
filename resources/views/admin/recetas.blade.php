<!--LLamas a las normativas de la plantilla template-->
@extends('template')

@section('title','Recetas')

@push('css')

@endpush

@section('content')
<!--Contenido-->
<div class="container-xl">

    <h1 class="app-page-title">Recetas</h1>
    @livewire('create-receta-component')
</div><!--//container-fluid-->
@endsection

@push('js')

@endpush