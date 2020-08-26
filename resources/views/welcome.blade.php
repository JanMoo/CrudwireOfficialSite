@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <H1 class="display-1 text-center mt-5 title">Crudwire</H1>
            <h3 class="text-center mt-3">a user crud <strong>interface</strong> extending standard laravel authentication</h3>
            <h3 class="text-center mt-1">Cooked up with livewire</h3>
            <h3 class="text-center mt-1">and a dash of turbolinks.js</h3>
        </div>
    </div>
    @livewire('content')
</div>
@endsection

