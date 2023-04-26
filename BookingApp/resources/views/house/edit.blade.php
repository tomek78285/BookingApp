@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style>{{__('Edytuj domek')}}</div>
                    <div class="card-body">
                    <form action="{{ route('house.update', $house->id) }}" method="POST" id="houseForm" name="sendHouse">
                    {{ csrf_field() }}    
                        <div class="form-group row">
                            <label for="name_House" class="col-md-4 col-form-label text-md-right">{{ __('Nazwa') }}</label>

                            <div class="col-md-6">
                                <input id="name_House" type="text" class="form-control" name="name_House" value="{{ $house->name }}" required autocomplete="name_House" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description_House" class="col-md-4 col-form-label text-md-right">{{ __('Opis') }}</label>

                            <div class="col-md-6">
                                <input id="description_House" type="text" class="form-control" name="description_House" value="{{ $house->description }}" required autocomplete="description_House" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address_House" class="col-md-4 col-form-label text-md-right">{{ __('Adres') }}</label>

                            <div class="col-md-6">
                                <input id="address_House" type="text" class="form-control" name="address_House" value="{{ $house->address }}" required autocomplete="address_House" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rooms_House" class="col-md-4 col-form-label text-md-right">{{ __('Liczba pokoi') }}</label>

                            <div class="col-md-6">
                                <input id="rooms_House" type="number" class="form-control" name="rooms_House" value="{{ $house->number_of_rooms }}" required autocomplete="rooms_House" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Cena') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control" name="price" value="{{ $house->price }}" required autocomplete="price" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div>
                                    <button type="submit"  class="btn btn-success">Zapisz</button>
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
