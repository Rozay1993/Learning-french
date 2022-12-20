@extends('layouts/contentNavbarLayout')

@section('title', 'Learning-French || Past, Present, Future')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')
<x-page-header first="TextBook" :second="$chapter"></x-page-header>
<div class="card">
    <div class="card-body">
        <h2 class="text-center text-uppercase text-primary">Past, Present, Future</h2>
        <div class="row mt-5">
            <div class="col-4">
                <h3 class="text-uppercase text-center">past</h3>
            </div>
            <div class="col-4">
                <h3 class="text-uppercase text-center">present</h3>
            </div>
            <div class="col-4">
                <h3 class="text-uppercase text-center">future</h3>
            </div>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-10">
                <img src="{{asset('assets/img/other/arrow.png')}}" alt="arrow" class="w-100">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-4">
                <h3>Hier</h3>
            </div>
            <div class="col-4">
                <h3>En ce moment</h3>
            </div>
            <div class="col-4">
                <h3 class="text-center">Demain</h3>
            </div>
        </div>
        <div class="row align-items-center text-center mt-5">
            <div class="col-4">
                <h3>PASSE</h3>
            </div>
            <div class="col-4">
                <h3>PRÉSENT</h3>
            </div>
            <div class="col-4">
                <h3>FUTUR</h3>
            </div>
            <div class="col-4">
                <h4>Je travaillais</h4>
                <h5>(imparfait)</h5>
                <h4>J'ai travaillé</h4>
                <h5>(passé composé)</h5>
            </div>
            <div class="col-4">
                <h4>Je travaille</h4>
                <h5>(présent)</h5>
            </div>
            <div class="col-4">
                <h4>Je travaillerai</h4>
                <h5>(futur)</h5>
            </div>
        </div>

        <div class="row align-items-center text-center mt-5">
            <div class="col-4">
                <h3>hier</h3>
            </div>
            <div class="col-4">
                <h3>aujourd'hui</h3>
            </div>
            <div class="col-4">
                <h3>demain</h3>
            </div>
            <div class="col-4">
                <h4>Avant...</h4>
                <h4>L'année dernière...</h4>
                <h4>Jeudi dernier...</h4>
                <h4>Auparavant...</h4>
            </div>
            <div class="col-4">
                <h4>Maintenant...</h4>
                <h4>En ce moment...</h4>
                <h4>Actuellement...</h4>
            </div>
            <div class="col-4">
                <h4>Plus tard...</h4>
                <h4>Le mois prochain...</h4>
                <h4>Mardi prochain...</h4>
                <h4>Tout à I’heure...</h4>
            </div>
        </div>
    </div>
</div>
@endsection