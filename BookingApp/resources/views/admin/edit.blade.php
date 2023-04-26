@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style>{{__('Przypisz rolę')}}</div>
                    <div class="card-body">
                    <form action="{{ route('admin.update', $user->id) }}" method="POST" id="admin-Form" name="sendAdmin">
                        @csrf    
                        <div class="form-group row">
                            <label for="answer" class="col-md-4 col-form-label text-md-right">{{ __('Odpowiedź') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="answer" value="{{ $user->name }}" required autocomplete="answer" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Administrator') }}</label>

                            <div class="col-md-1">
                                <input id="role" type="radio" class="form-control" name="role" value="admin">
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Użytkownik') }}</label>

                            <div class="col-md-1">
                                <input id="role" type="radio" class="form-control" name="role" value="user">
                            </div>
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
