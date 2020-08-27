@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <H1 class="display-1 text-center mt-5 title">Crudwire</H1>
            <h3 class="text-center mt-3">a Laravel package, to create an interface to perform CRUD operations on users.</h3>
            <h3 class="text-center mt-1">Cooked up with Livewire</h3>
            <h3 class="text-center mt-1">and a dash of Turbolinks.js</h3>
        </div>
    </div>
    @livewire('content')
</div>
@endsection

