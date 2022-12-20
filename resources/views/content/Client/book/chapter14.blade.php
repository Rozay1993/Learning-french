@extends('layouts/contentNavbarLayout')

@section('title', 'Prepositions')

@section('vendor-style')
<style>
    td p {
        margin-bottom: 0px;
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
        <h2 class="text-center text-uppercase text-primary">Prepositions</h2>
        <div class="mt-5 fs-4">
            <p>A preposition is an invariable word that links terms together. </p>
            <p>It is used in particular to mark a relationship de/d’:</p>
        </div>
        <div class="">
            <p>1. <span class="text-danger">lieu</span> (à, chez, dans, derrière, devant, en, entre, jusqu'à, sous,
                vers, ...)</p>
            <p class="ms-5 ps-5">ex : Notre maison se trouve derrière l'église.</p>
            <p>Rappe! : à + localité (ville, village, ...)</p>
            <p class="ms-5 ps-5">ex : Lucie habite â Genève.</p>
            <p class="ms-5 ps-5">en + pays féminin (= pays dont le nom se termine par la lettre "-e". le Mexique)</p>
            <p class="ms-5 ps-5">ex : J'ai des amis en France et en ltalie.</p>
            <p class="ms-5 ps-5">au + pays masculin singulier</p>
            <p class="ms-5 ps-5">ex : Luc se trouve en ce moment-méme au Sénégal.</p>
            <p class="ms-5 ps-5">aux + pays masculin pluriel</p>
            <p class="ms-5 ps-5">ex : Nous avons passé nos vacances aux Pays-Bas.</p>
        </div>
        <div class="mt-5">
            <p>2. <span class="text-danger">temps</span> (à, après, avant, depuis, vers, dès, pendant, dans, en, pour,
                durant, ...)</p>
            <p class="ms-5 ps-5">ex : Vous êtes arrivés avant le début de la cérémonie.</p>
        </div>
        <div class="mt-5">
            <p>3. <span class="text-danger">cause </span> (â cause de, de, par, étant donné, grâce â, ...)</p>
            <p class="ms-5 ps-5">ex : Grâce â la générosité des donateurs, nous avons pu aider de nombreuses familles.
            </p>
        </div>
        <div class="mt-5">
            <p>4. <span class="text-danger">but</span> (afin de, dans le but de, en vue de, pour, ...)</p>
            <p class="ms-5 ps-5">ex : Vous devez impérativement travailler plus afin de réussir vos examens.</p>
        </div>
        <div class="mt-5">
            <p>5. <span class="text-danger">opposition </span> (à, après, avant, depuis, vers, dès, pendant, dans, en,
                pour, durant, ...)</p>
            <p class="ms-5 ps-5">ex : Nous sommes allés nous promener malgré le mauvais temps.</p>
        </div>
        <div class="mt-5">
            <p>6. mais aussi : l'origine, la matière, ...</p>
            <p class="ms-5 ps-5">ex : Nous sommes allés nous promener malgré le mauvais temps.</p>
        </div>

        <div class="mt-5 ">
            <p>Some verbs require a preposition. Examples include:</p>
        </div>

        <div class="mt-5">
            <div class="row justify-content-evenly">
                <div class="col-12 col-md-3">
                    <p class="text-center">à</p>
                    <p class="mt-4">
                        apprendre à faire qc
                        arriver à faire qc
                        s'attendre à qc / à faire
                        qc chercher à faire qc commencer à faire qc continuer à faire qc
                        se décider à faire qc s'habituer à qc / à faire qc hésiter à faire qc s'intéresser à
                        se préparer à faire qc obliger à faire qc réfléchir à qc recommencer à faire qc réussir à faire
                        qc tenir à qc / à faire qc
                    </p>
                </div>
                <div class="col-12 col-md-3">
                    <p class="text-center">de</p>
                    <p class="mt-4">
                        accepter de faire qc avoir peur de faire qc (s’) arrêter de faire qc choisir de faire qc
                        conseiller de faire qc continuer de faire qc décider de faire qc s'excuser de faire qc finir de
                        faire qc essayer de faire qc oublier de faire qc offrir de faire qc
                        (se) permettre de faire qc promettre de faire qc refuser de faire qc proposer de faire qc
                    </p>
                </div>
                <div class="col-12 col-md-3">
                    <div>
                        <p class="text-center">contre</p>
                        <p class="mt-4">
                            s'appuyer contre qc / qn s'asseoir contre qc s'assurer contre qc
                            se battre contre qc / qn
                            être en colère contre qc / qn voter contre qc / qn
                        </p>
                    </div>
                    <div class="mt-5">
                        <p class="text-center">dans</p>
                        <p class="mt-4">
                            chercher dans qc courir dans qc entrer dans qc lire dans qc regarder dans qc
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection