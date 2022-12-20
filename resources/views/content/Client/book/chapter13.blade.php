@extends('layouts/contentNavbarLayout')

@section('title', 'INDEFINITES')

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
    <div class="card-body">
        <h2 class="text-center text-uppercase text-primary">INDEFINITES</h2>
        <div class="mt-5">
            <p class="fs-4 mb-0">
                <span class = "text-danger">Indefinite pronouns</span> and <span class = "text-danger">adverbs</span> are used to give information in an imprecise and indeterminate way. They
                can have a positive or negative meaning and can refer to a whole or a single element.
            </p>
            <p class="fs-4 mb-0">Positive pronouns and adverbs can give indeterminate information about a person:</p>
            <p class="fs-4 mb-0">_ on a single element: everyone, someone, anyone</p>
            <p class="fs-4 mb-0">_ on a set: all, everyone, others</p>

            <p class="fs-4 text-center fst-italic mt-4"><span class = "text-danger">Quelqu’un</span> sait où sont mes clés ?</p>
            <p class="fs-4 text-center fst-italic mt-4"><span class = "text-danger">N’importe qui</span> peut le faire !</p>

            <p class="fs-4 mb-0">on an object or an idea:</p>
            <p class="fs-4 mb-0">_ on a single element: something, anything, any / which</p>
            <p class="fs-4 mb-0">_ on a set: all, all, all, others</p>

            <p class="fs-4 text-center fst-italic mt-4">Ne fais pas <span class = "text-danger">n’importe quoi</span> !</p>
            <p class="fs-4 mb-0">on a place:</p>
            <p class="fs-4 mb-0">_ on a single element: somewhere, anywhere, elsewhere</p>
            <p class="fs-4 mb-0">_ on a set: everywhere</p>

            <p class="fs-4 text-center fst-italic mt-4">Elle est tellement belle que <span class = "text-danger">partout</span> où elle va, tout le monde la
                regarde.</p>

            <p class="fs-4 mb-0">Negative pronouns and adverbs can give indeterminate information about a person:</p>
            <p class="fs-4 mb-0">ne… personne / personne ne…</p>
            <p class="fs-4 mb-0">ne… aucun(e) / aucun(e) ne…</p>
            <p class="fs-4 text-center fst-italic mt-4"><span class = "text-danger">Personne ne</span> m’a averti !</p>

            <p class="fs-4 mb-0">on an object or an idea: ne… rien / rien ne…, ne… aucun(e)</p>
            <p class="fs-4 text-center fst-italic mt-4"><span class = "text-danger">Rien ne</span> m’arrêtera !</p>
            <p class="fs-4 mb-0">on a place : ne… nulle part</p>
            <p class="fs-4 text-center fst-italic mt-4">Ça ne mène <span class = "text-danger">nulle part</span> !</p>

            <p class="fs-4 mb-0"><span class = "text-danger">Les adjectifs indéfinis</span> se joignent au nom pour indiquer soit :</p>
            <p class="fs-4 mb-0">_ une indétermination sur l’identité : certain(e)s, n’importe quel(le)s</p>
            <p class="fs-4 text-center fst-italic mt-4"><span class = "text-danger">Certaines</span> personnes pensent tout le contraire.</p>
            <p class="fs-4 mb-0">_ une quantité : aucun(e), nul(le), chaque, divers(es), plusieurs, quelques, tout(e) /
                tous / toutes</p>
            <p class="fs-4 text-center fst-italic mt-4"><span class = "text-danger">Aucun</span> employé n’aura accès à ce dossier : il est confidentiel.</p>
            <p class="fs-4 mb-0">_ une similitude ou une différence : même(s), autre(s), différent(e)s</p>
            <p class="fs-4 text-center fst-italic mt-4">Je n’ai pas changé, je suis toujours la <span class = "text-danger">même.</span></p>
        </div>
    </div>
</div>
@endsection