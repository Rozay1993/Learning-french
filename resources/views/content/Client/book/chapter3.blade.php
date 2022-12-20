@extends('layouts/contentNavbarLayout')

@section('title', 'Possessive Articles')

@section('vendor-style')
<style>
    th, td{
        font-size: 1.25rem !important
    }
    td,th {
        text-align: center;
    }

    td p {
        margin-bottom: 5px;
    }

    td p:last-child {
        margin-bottom: 0
    }
    tr td:first-child{
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
    <div class="card-body">
        <h2 class="text-center text-uppercase text-primary">Possessive Articles</h2>
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th></th>
                        <th>JE</th>
                        <th>TU</th>
                        <th>IL/ELLE</th>
                        <th>NOUS</th>
                        <th>VOUS</th>
                        <th>ILS/ELLES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>masculine H </td>
                        <td>mon </td>
                        <td>ton </td>
                        <td>son </td>
                        <td>notre</td>
                        <td>votre</td>
                        <td>leur</td>
                    </tr>
                    <tr>
                        <td>feminine</td>
                        <td>ma</td>
                        <td>ta</td>
                        <td>sa</td>
                        <td>notre</td>
                        <td>votre</td>
                        <td>leur</td>
                    </tr>
                    <tr>
                        <td>feminine + vowel H</td>
                        <td>mon</td>
                        <td>ton</td>
                        <td>son</td>
                        <td>notre</td>
                        <td>votre</td>
                        <td>leur</td>
                    </tr>
                    <tr>
                        <td>plural H </td>
                        <td>mes </td>
                        <td>tes </td>
                        <td>ses </td>
                        <td>nos </td>
                        <td>VOS</td>
                        <td>leurs</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="my-5 px-3">
            <p class="fs-4 mb-0 text-underline">Use</p>
            <p class="fs-4">To say who things belong to.</p>
        </div>
        <div class="mt-3 px-3">
            <p class="fs-3">Examples :</p>
            <p class="fs-3">J'ai un sac. C'est mon sac. </p>
            <p class="fs-3">Elle a une voiture. C'est sa voiture.</p>
            <p class="fs-3">Il a une moto. C'est sa moto.</p>
            <p class="fs-3">Il a beaucoup de jouets. Ce sont ses jouets. </p>
            <p class="fs-3">Tu as trois enfants. Ce sont tes enfants.</p>
            <p class="fs-3">Vous avez une jolie maison. C'est votre maison. </p>
            <p class="fs-3">Nous avons quatre stylos. Ce sont nos stylos. </p>
            <p class="fs-3">Elles ont des bouteilles. Ce sont leurs bouteilles. </p>
            <p class="fs-3">Elles ont une bouteille. C'est leur bouteille.</p>
        </div>
    </div>
</div>
@endsection