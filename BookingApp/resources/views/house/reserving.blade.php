@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style>{{__('Zarezerwuj domek')}}</div>
                    <div class="card-body">
                    <form action="{{ route('house.reserve', ['house' => $house->id]) }}" method="POST" id="houseRateForm" name="sendHouse">
                    {{ csrf_field() }} 
                        <div class="form-group row">
                            <label for="since" class="col-md-4 col-form-label text-md-right">{{ __('Od') }}</label>

                            <div class="col-md-6">
                                <input id="since" type="date" class="form-control" name="since" required autocomplete="since" autofocus>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="to" class="col-md-4 col-form-label text-md-right">{{ __('Do') }}</label>

                            <div class="col-md-6">
                                <input id="to" type="date" class="form-control" name="to" required autocomplete="to" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numberPeople" class="col-md-4 col-form-label text-md-right">{{ __('Liczba osób') }}</label>

                            <div class="col-md-6">
                                <input id="numberPeople" type="number" class="form-control" name="numberPeople" required autocomplete="numberPeople" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div>
                                    <button type="submit"  class="btn btn-success">Zarezerwuj</button>
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
