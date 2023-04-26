@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a href="{{ route('house.create') }}">
                    <button type="submit">
                        Dodaj nowy domek
                    </button>
                </a>
                <div class="card-header">{{ __('Domki') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Domki') }}
                    </br>
                    @foreach($houses as $house)
                        {{ $house->id }} | 
                        {{ $house->name }} |
                        {{ $house->description }} |
                        {{ $house->number_of_rooms }} |
                        {{ $house->price }} |
                        {{ $house->id_owner }} |
                        <a href="{{ route('house.edit', $house->id) }}">
                            <button type="submit">
                                Edytuj
                            </button>
                        </a>
                        <a href="{{ route('house.delete', $house->id) }}">
                            <button type="submit">
                                Usuń
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
