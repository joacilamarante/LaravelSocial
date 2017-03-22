@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   <p>Dados do usuário</p>
                   <p>Nome: {{ $user->name }}</p>
                   <p>E-mail: {{ $user->email }}</p>
                   <p>GitHub: {{ $user->github }}</p>
                   <p>Facebook: {{ $user->facebook }}</p>
                   <br>
                   @if($user->github)
                        <a class="btn btn-default">Conectado com GitHub</a>
                   @else 
                        <a href="{{ url('/entrar/github') }}" class="btn btn-success">Entrar com GitHub</a>
                   @endif

                   @if($user->facebook)
                        <a class="btn btn-default">Conectado com Facebook</a>
                   @else 
                        <a href="{{ url('/entrar/facebook') }}"  class="btn btn-primary">Entrar com Facebook</a>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
