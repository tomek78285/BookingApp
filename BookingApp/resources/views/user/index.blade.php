@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Panel użytkownika!') }}
                    </br>
                    @foreach($users as $user) 
                        Nazwa: {{ $user->name }} |
                        E-mail: {{ $user->email }} |
                        Rola: {{ $user->role }} |
                        <a href="{{ route('user.edit', $user->id) }}">
                            <button type="submit">
                                Edytuj
                            </button>
                        </a>
                        </br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
