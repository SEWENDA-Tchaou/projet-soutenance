@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-light">{{ __('Bienvenue à Knowledgey Technology') }}</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success " role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <span class="text-danger">
                    {{ __(' Vous êtes connect!') }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<button> <a href="{{route('formulaire')}}">Formulaire d'inscription</a></button>
@endsection
