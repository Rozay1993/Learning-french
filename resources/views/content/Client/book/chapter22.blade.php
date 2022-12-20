@extends('layouts/contentNavbarLayout')

@section('title', 'The PRESENT PERFECT of the verbs ÊTRE and AVOIR')

@section('vendor-style')
<style>
    td p {
        margin-bottom: 0;
    }

    .right-list,
    .left-list {
        margin: 0;
        padding: 0;
        list-style: none;
        display: grid;
        gap: 1rem;
    }

    .left-list {
        margin-left: 1.75em;
    }

    .right-list li,
    .left-list li {
        display: grid;
        /* align-items: center; */
        gap: 1.75em;
        /* font-size: 1.5rem; */
        line-height: 1.25;
        position: relative;
    }

    .right-list li {
        grid-template-columns: 1fr 0;
    }

    .left-list li {
        /* grid-template-columns: 0; */
    }

    .right-list li::after,
    .left-list li::before {
        content: "*";
        /* Make slightly larger than the li font-size
        but smaller than the li gap */
        position: absolute;
    }

    .right-list li::after {
        top: 8px;
        right: 0px;
    }

    .left-list li::before {
        top: 8px;
        left: -1.6em;
    }
    .space{
        width: 100px;
        border-bottom: solid 2px #566a7f;
        display: inline-block;
    }
    .list h4{
        padding-left: 2rem;
    }
    .list h4::before{
        content: "→";
        margin-right: 1rem;
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
        <h2 class="text-center text-uppercase text-primary">The PRESENT PERFECT of the verbs ÊTRE and AVOIR</h2>

        <div class="mt-5 row justify-content-evenly">
            <div class="col-12 col-md-6 table-responsive">
                <table class="table-bordered text-center w-100">
                    <colgroup>
                        <col style="width: 50%">
                        <col style="width: 50%">
                    </colgroup>
                    <thead>
                        <tr>
                            <td>ÊTRE</td>
                            <td>AVOIR</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>j'étais</p>
                                <p>tu étais</p>
                                <p>il était</p>
                                <p class="mt-3">nous étions</p>
                                <p>vous êtes</p>
                                <p>ils étaient</p>
                            </td>
                            <td>
                                <p>j'avais</p>
                                <p>tu avais</p>
                                <p>il avait</p>
                                <p class="mt-3">nous avons</p>
                                <p>vous avez</p>
                                <p>ils avaient</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3>1. Link pronouns to verbs être and avoir :</h3>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-center">
                        <h4>être</h4>
                    </div>
                    <div class="row justify-content-between align-items-center fs-5">
                        <div class="col-5 col-md-4 text-end">
                            <ul class="right-list">
                                <li>Tu</li>
                                <li>J'</li>
                                <li>On</li>
                                <li>Nous</li>
                                <li>Ils</li>
                                <li>Nous</li>
                                <li>Elle</li>
                            </ul>
                        </div>
                        <div class="col-5 col-md-4">
                            <ul class="left-list">
                                <li>étions</li>
                                <li>étais</li>
                                <li>étaient</li>
                                <li>étiez</li>
                                <li>était</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="text-center">
                        <h4>avoir</h4>
                    </div>
                    <div class="row justify-content-between align-items-center fs-5">
                        <div class="col-4 text-end">
                            <ul class="right-list">
                                <li>Elle</li>
                                <li>Tu</li>
                                <li>Nous</li>
                                <li>Elles</li>
                                <li>Il</li>
                                <li>Vous</li>
                                <li>J'</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="left-list">
                                <li>avais</li>
                                <li>avait</li>
                                <li>avions</li>
                                <li>aviez</li>
                                <li>avaient</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3>2. Complete the following sentences with être or avoir in the present perfect tense</h3>

            <div class="mt-5 list">
                <h4>Quand j’ <span class="space"></span>, je n’ <span class="space"></span>pas beaucoup de jouets.</h4>
                <h4>Nous <span class="space"></span>très faim quand nous <span class="space"></span>sur le chemin.</h4>
                <h4>Vous <span class="space"></span>le temps quand vous <span class="space"></span>jeunes.</h4>
                <h4>On <span class="space"></span>stupide, on <span class="space"></span>tout le temps envie de rire.</h4>
                <h4>Quand tu <span class="space"></span>mon âge, tu <span class="space"></span>déjà très grand.</h4>
                <h4>Daniel <span class="space"></span>des billes quand il <span class="space"></span>petit.</h4>
                <h4>Les filles <span class="space"></span>très belles car elles <span class="space"></span>de jolies robes.</h4>
                <h4>Quand vous <span class="space"></span>trop chaud. j’ <span class="space"></span>sous la douche.</h4>
                <h4>Nous <span class="space"></span>trop petits et Valérie n’<span class="space"></span> pas 4 ans.</h4>
            </div>
        </div>
    </div>
</div>
@endsection