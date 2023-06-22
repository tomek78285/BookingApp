@extends('layouts.app')

@section('content')

<section>
    
<div class="container center">
    <h2>Rezerwacja</h2>
    <div class="row mb-3">
        <div class="col">
            <label for="formGroupExampleInput" class="form-label">Imię</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="col">
            <label for="formGroupExampleInput" class="form-label">Nazwisko</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="formGroupExampleInput" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="col">
            <label for="formGroupExampleInput" class="form-label">Telefon kontaktowy</label>
            <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="formGroupExampleInput" class="form-label">Podaj datę przyjazdu</label>
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="dd-mm-rrrr">
        </div>
        <div class="col">
            <label for="formGroupExampleInput" class="form-label">Podaj datę wyjazdu</label>
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="dd-mm-rrrr">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="validationDefault04" class="form-label">Liczba dorosłych</label>
            <select class="form-select" id="validationDefault04" required="">
            <option selected="" disabled="" value="">Nie wybrano</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select>
        </div>
        <div class="col">
            <label for="validationDefault04" class="form-label">Liczba dzieci</label>
            <select class="form-select" id="validationDefault04" required="">
            <option selected="" disabled="" value="">Nie wybrano</option>
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            </select>
            </div>
        </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label" for="textAreaExample">Informacje dodatkowe</label>
            <textarea class="form-control" id="textAreaExample" ></textarea>
        </div>
    </div>        
    <div class="row mb-3">
        <div class="col">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
            <label class="form-check-label" for="invalidCheck2">
                Potwierdzam zapoznanie się z regulaminem
            </label>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
        <button class="btn btn-primary" type="submit">Prześlij</button>
        </div>
    </div>
</div>
</section>






@endsection