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

                    {{ __('Panel administratora!') }}
                    </br>
                    @foreach($users as $user)
                        {{ $user->id }} | 
                        {{ $user->name }} |
                        {{ $user->email }} |
                        {{ $user->role }} |
                        <a href="{{ route('admin.delete', $user->id) }}">
                            <button type="submit">
                                Usuń
                            </button>
                        </a>
                        <a href="{{ route('admin.edit', $user->id) }}">
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
