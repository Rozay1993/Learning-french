@extends('layouts/contentNavbarLayout')

@section('title', 'The PRESENT tense of the verbs ÊTRE and AVOIR')

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
    .right-list li{
        grid-template-columns: 1fr 0;
    }
    .left-list li{
        /* grid-template-columns: 0; */
    }

    .right-list li::after,
    .left-list li::before {
        content: "";
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
    .img-height{
        height: calc(100% - 12px);
        margin-top: 6px;
    }
    .h-33{
        height: 28%;
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
        <h2 class="text-center text-uppercase text-primary">The PRESENT tense of the verbs ÊTRE and AVOIR</h2>

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
                                <p>je suis </p>
                                <p>tu es </p>
                                <p>il est </p>
                                <p class="mt-3">nous sommes </p>
                                <p>vous êtes</p>
                                <p>ils sont </p>
                            </td>
                            <td>
                                <p>j'ai </p>
                                <p>tu as </p>
                                <p>il a </p>
                                <p class="mt-3">nous avons </p>
                                <p>vous avez </p>
                                <p>ils ont</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3>1. Link the verbs ETRE and AVOIR with the corresponding pronouns</h3>

            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-center">
                        <h4>être</h4>
                    </div>
                    <div class="row justify-content-between position-relative fs-5">
                        <div class="col-4 text-end">
                            <ul class="right-list">
                                <li>elle</li>
                                <li>nous</li>
                                <li>ils</li>
                                <li>tu</li>
                                <li>je</li>
                                <li>Vous</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="left-list">
                                <li>suis</li>
                                <li>êtes</li>
                                <li>es</li>
                                <li>sommes</li>
                                <li>sont</li>
                                <li>est</li>
                            </ul>
                        </div>
                        <div class="position-absolute h-100 w-50 top-50 start-50 translate-middle">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/21_answer1.png')}}" alt="21_answer1">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="text-center">
                        <h4>avoir</h4>
                    </div>
                    <div class="row justify-content-between position-relative fs-5">
                        <div class="col-4 text-end">
                            <ul class="right-list">
                                <li>nous</li>
                                <li>j’</li>
                                <li>vous</li>
                                <li>il</li>
                                <li>tu</li>
                                <li>elles</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="left-list">
                                <li>ai</li>
                                <li>avons</li>
                                <li>a</li>
                                <li>avez</li>
                                <li>ont</li>
                                <li>OS</li>
                            </ul>
                        </div>
                        <div class="position-absolute h-33 w-50 top-0 start-50 translate-middle-x">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/21_answer2.png')}}" alt="21_answer1">
                        </div>
                        <div class="position-absolute h-33 w-50 top-50 start-50 translate-middle">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/21_answer2.png')}}" alt="21_answer1">
                        </div>
                        <div class="position-absolute h-33 w-50 bottom-0 start-50 translate-middle-x">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/21_answer2.png')}}" alt="21_answer1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3>2. Underline the verbs and indicate if it is the verb être or avoir :</h3>

            <div class="mt-5">
                <table class="borderless w-100">
                    <colgroup>
                        <col style="width: 80%">
                        <col style="width: 10%">
                        <col style="width: 10%">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td>- Nous sommes ò la bibliothèque.</td>
                            <td>→</td>
                            <td>être</td>
                        </tr>
                        <tr>
                            <td>- Je n'ai pas encore de montre.</td>
                            <td>→</td>
                            <td class="text-danger">avoir</td>
                        </tr>
                        <tr>
                            <td>- Avez-vous faim ?</td>
                            <td>→</td>
                            <td class="text-danger">avoir</td>
                        </tr>
                        <tr>
                            <td>- Il est malade depuis trois jours.</td>
                            <td>→</td>
                            <td class="text-danger">être</td>
                        </tr>
                        <tr>
                            <td>- Vous êtes en vacances ò la montagne.</td>
                            <td>→</td>
                            <td class="text-danger">être</td>
                        </tr>
                        <tr>
                            <td>- Nathalie est plus rapide que Françoise.</td>
                            <td>→</td>
                            <td class="text-danger">être</td>
                        </tr>
                        <tr>
                            <td>- As-tu assez de pain pour ton repas ?</td>
                            <td>→</td>
                            <td class="text-danger">avoir</td>
                        </tr>
                        <tr>
                            <td>- A la rentrée, les élèves ont un nouveau cartable.</td>
                            <td>→</td>
                            <td class="text-danger">avoir</td>
                        </tr>
                        <tr>
                            <td>- Je suis le plus petit de la classe.</td>
                            <td>→</td>
                            <td class="text-danger">être</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection