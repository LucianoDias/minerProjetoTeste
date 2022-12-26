@extends('layouts.app')

@section('content')
<h1 class="mb-3 mb-4 mt-4"><fieldset><legend>Dashboard .</legend></fieldset></h1>
    <div class="bg-light p-5 rounded">
        @auth
        <h3>Dashboard</h3>
        <p class="lead">Estamos em construção dos grafícos da dashboard.</p>
       
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection