@extends('layouts/contentNavbarLayout')

@section('title', 'The future tense of the verbs ETRE and AVOIR – Exercises')

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
        /* content: "*"; */
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

    .space {
        width: 100px;
        border-bottom: solid 2px #566a7f;
        display: inline-block;
    }

    .list h4 {
        padding-left: 2rem;
    }

    .list h4::before {
        content: "→";
        margin-right: 1rem;
    }

    .img-height{
        height: calc(100% - 12px);
        margin-top: 6px;
    }

    .h-33{
        height: 28%;
    }

    .start-34{
        left:34%
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
        <h2 class="text-center text-uppercase text-primary">The future tense of the verbs ETRE and AVOIR – Exercises
        </h2>

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
                                <p>je serai</p>
                                <p>tu seras</p>
                                <p>il sera</p>
                                <p class="mt-3">nous serons</p>
                                <p>vous serez</p>
                                <p>ils seront</p>
                            </td>
                            <td>
                                <p>j’aurai</p>
                                <p>tu auras</p>
                                <p>il auro</p>
                                <p class="mt-3">nous aurons</p>
                                <p>vous aurez</p>
                                <p>ils auront</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3>1. Link pronouns to verbs être and avoir </h3>

            <div class="row">
                <div class="col-12 col-md-6">
                    {{-- <div class="text-center">
                        <h4>être</h4>
                    </div> --}}
                    <div class="row justify-content-between align-items-center fs-5 position-relative">
                        <div class="col-2 text-end">
                            <ul class="right-list">
                                <li>Tu</li>
                                <li>Je</li>
                                <li>On</li>
                                <li>Vous</li>
                                <li>Ils</li>
                                <li>Nous</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="left-list">
                                <li>serai le premier.</li>
                                <li>seras en retard.</li>
                                <li>serez en avance.</li>
                                <li>sera en vacances.</li>
                                <li>serons sages.</li>
                                <li>seront au cinéma.</li>
                            </ul>
                        </div>
                        <div class="position-absolute h-33 w-50 top-0 start-34 translate-middle-x">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/25_answer2.png')}}" alt="21_answer1">
                        </div>
                        <div class="position-absolute h-33 w-50 top-50 start-34 translate-middle">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/25_answer2.png')}}" alt="21_answer1">
                        </div>
                        <div class="position-absolute h-33 w-50 bottom-0 start-34 translate-middle-x">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/25_answer2.png')}}" alt="21_answer1">
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    {{-- <div class="text-center">
                        <h4>avoir</h4>
                    </div> --}}
                    <div class="row justify-content-between align-items-center fs-5 position-relative">
                        <div class="col-2 text-end">
                            <ul class="right-list">
                                <li>Nous</li>
                                <li>II</li>
                                <li>Tu</li>
                                <li>Elles</li>
                                <li>J’</li>
                                <li>Vous</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="left-list">
                                <li>aurai de I’espoir.</li>
                                <li>aurez froid.</li>
                                <li>auront les clés.</li>
                                <li>auras trop chaud.</li>
                                <li>aurons faim.</li>
                                <li>aura peur.</li>
                            </ul>
                        </div>
                        <div class="position-absolute h-100 w-50 top-50 start-34 translate-middle">
                            <img class = "w-100 img-height" src="{{asset('assets/img/other/25_answer1.png')}}" alt="21_answer1">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3>2. Complete the following sentences with être or avoir in the future tense:</h3>

            <div class="mt-5 list">
                <h4>
                    Valérie 
                    <span class="text-danger">sera</span> contente quand Daniel 
                    <span class="text-danger">aura</span> la moyenne.
                </h4>
                <h4>
                    J'
                    <span class="text-danger">aurai</span> un nouveau costume quand je 
                    <span class="text-danger">serai</span> grand.
                </h4>
                <h4>
                    Nous 
                    <span class="text-danger">serons</span> riches quand les poules 
                    <span class="text-danger">auront</span> des dents.
                </h4>
                <h4>
                    Tu 
                    <span class="text-danger">auras</span> 10 ans bientôt, alors tu 
                    <span class="text-danger">seras</span> grand.
                </h4>
                <h4>
                    Quand ils 
                    <span class="text-danger">auront</span> faim, il 
                    <span class="text-danger">sera</span> trop tard.
                </h4>
                <h4>
                    Vous 
                    <span class="text-danger">aurez</span> le temps quand vous 
                    <span class="text-danger">serez</span> en vacances.
                </h4>
                <h4>
                    Les gagnants 
                    <span class="text-danger">auront</span> de la chance car 
                    <span class="text-danger">seront</span> peu nombreux.
                </h4>
                <h4>
                    On 
                    <span class="text-danger">sera</span> les meilleurs quand nous 
                    <span class="text-danger">aurons</span> les nouveaux vélos.
                </h4>
                <h4>
                    Bientôt, elles 
                    
                    <span class="text-danger">auront</span> des cadeaux et 
                    <span class="text-danger">seront</span> heureuses.
                </h4>
            </div>
        </div>
    </div>
</div>
@endsection