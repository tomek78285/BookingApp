@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style>{{__('Oceń domek')}}</div>
                    <div class="card-body">
                    <form action="{{ route('house.rate', 1) }}" method="POST" id="houseRateForm" name="sendHouse">
                    {{ csrf_field() }} 
                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Ocena') }}</label>

                            <div class="col-md-6">
                                <input id="rating" type="number" class="form-control" name="rating" " required autocomplete="rating" autofocus>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Komentarz') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" " required autocomplete="description" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div>
                                    <button type="submit"  class="btn btn-success">Dodaj</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
