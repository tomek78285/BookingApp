@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Opinie domków') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Oceny') }}
                    </br>
                    @foreach($opinions as $opinion)
                        {{ $opinion->id }} | 
                        {{ $opinion->rating }} |
                        {{ $opinion->description }} |
                        {{ $opinion->house->name }} |
                        {{ $opinion->user->name }} |
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
