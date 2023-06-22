@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Opinie o domku') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>{{ __('Od naszych klientów:') }}</h5>
                    <ul>
                        @foreach($opinions as $opinion)
                            
                            <li>
                                Ocena domku: {{ $opinion->rating }} 
                            </li>
                            
                            <li>
                            Komentarz: {{ $opinion->description }}
                            </li>
                            <li></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
