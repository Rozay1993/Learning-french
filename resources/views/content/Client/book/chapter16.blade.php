@extends('layouts/contentNavbarLayout')

@section('title', 'The proportion')

@section('vendor-style')
<style>
    td {
        padding: 10px;
    }

    td p {
        margin-bottom: 0px;
    }

    tr td:last-child {
        text-align: start;
    }
</style>
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')
<x-page-header first="TextBook" :second="$chapter"></x-page-header>
<div class="card">
    <div class="card-body fs-4">
        <h2 class="text-center text-uppercase text-primary">The proportion</h2>
        <div class="mt-5">
            <p>
                Several expressions are used to express proportion in French:
            </p>
            <p>
                _ the majority, the totality, the quasi-totality, the half, the quarter, the third, a minority. These
                expressions can be followed by the preposition "de" or not. In this case, the complement is implied.
            </p>
            <p class="text-center"><span class="text-danger">La moitié de</span> la classe ne viendra pas aujourd’hui.
            </p>
            <p class="text-center">or</p>
            <p class="text-center"><span class="text-danger">La moitié</span> ne viendra pas aujourd’hui.</p>
        </div>
        <div class="mt-5">
            <p>
                The verb that follows can be agreed in either the singular or plural form. When you want to emphasize
                the whole, the verb should be in the singular.
            </p>
            <p class="text-center">
                <span class="text-danger">La majorité</span> des Français n’est pas d’accord avec cette réforme.
            </p>
        </div>
        <div class="mt-5">
            <p>
                _ a dozen, a hundred, a thousand, a million
            </p>
            <p class="text-center">
                <span class="text-danger">Un millier</span> de personnes se sont rassemblées pour protester contre la
                fermeture de l’entreprise.
            </p>
        </div>
        <div class="mt-5">
            <p>
                _ Most, two thirds, three quarters
            </p>
            <p>
                Note: When "la plupart" is used alone, the verb is always in the plural, whereas when it is used with a
                complement, the verb is based on the complement.
            </p>
            <p class="text-center"><span class="text-danger">La plupart</span> sont arrivés en retard.</p>
            <p class="text-center"><span class="text-danger">La plupart</span> des étudiants sont en grève.</p>
            <p class="text-center"><span class="text-danger">La plupart</span> du travail a été fait par des bénévoles.</p>
        </div>
        <div class="mt-5">
            <p>_ one out of two / three, etc.</p>
            <p class="text-center"><span class=text-danger>Un</span> Français <span class=text-danger>sur deux</span> est en surpoids</p>
        </div>
    </div>
</div>
@endsection