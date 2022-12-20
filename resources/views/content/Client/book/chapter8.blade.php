@extends('layouts/contentNavbarLayout')

@section('title', 'DEMONSTRATIVES')

@section('vendor-style')
<style>
    th,
    td {
        padding: 15px 0;
        font-size: 1.25rem;
    }

    td p {
        margin-bottom: 0;
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
        <h2 class="text-center text-uppercase text-primary">DEMONSTRATIVES</h2>
        <div class="mt-5">
            <h3>
                <strong>Demonstrative adjectives </strong>are used to designate something or someone or to repeat a name
                already mentioned.
            </h3>

            <div class="row justify-content-evenly">
                <div class="col-12 col-md-8 table-responsive">
                    <table class="table-bordered text-center w-100">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Singulier</td>
                                <td>
                                    <p>ce</p>
                                    <p>cet (+ voyelle, « h » muet)</p>
                                </td>
                                <td>cette</td>
                            </tr>
                            <tr>
                                <td>Pluriel</td>
                                <td>ces</td>
                                <td>ces</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h3>
                <strong>Demonstrative pronouns </strong>are mostly used with -ci and -là, alternating with the adjective
                (to avoid repetition).
            </h3>

            <div class="row justify-content-evenly">
                <div class="col-12 col-md-8 table-responsive">
                    <table class="table-bordered text-center w-100 fs-5">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Masculin</th>
                                <th>Féminin</th>
                                <th>Neutre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Singulier</td>
                                <td>
                                    <p>celui</p>
                                    <p>celui-ci</p>
                                    <p>celui-là</p>
                                </td>
                                <td>
                                    <p>celui</p>
                                    <p>celui-ci</p>
                                    <p>celui-là</p>
                                </td>
                                <td>
                                    <p>ce</p>
                                    <p>ceci</p>
                                    <p>cela (ça)</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Pluriel</td>
                                <td>
                                    <p>ceux</p>
                                    <p>ceux-ci</p>
                                    <p>ceux-là</p>
                                </td>
                                <td>
                                    <p>celles</p>
                                    <p>celles-ci</p>
                                    <p>celles-là</p>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3 class="fw-bold text-decoration-underline">
                Celui, celle, ceux, celles
            </h3>
            <h4>→ These forms are never used alone, they are always followed by a complement either :</h4>
            <h4>- <strong>a noun</strong> (common or proper) preceded by the preposition de or the determiners du, de la, des:</h4>

            <h4 class="text-center">Tu as vu le nouveau magasin ? Lequel ? Celui du boulanger.</h4>
            <h4 class="text-center">Où sont les gants ? Lesquels ? Ceux des enfants.</h4>

            <h4>- <strong>an infinitive</strong> or an adverb followed by the preposition de:</h4>
            <h4 class="text-center">Quel est son principal défaut ? Celui d'être toujours en retard.</h4>
            <h4 class="text-center">Tu as lu le journal ? Lequel ? Celui d'aujourd'hui.</h4>

            <h4>- <strong>a verb</strong> introduced by a relative pronoun: </h4>
            <h4 class="text-center">Quelles chaussures voulez-vous ? Celles qui sont en vitrine et qui sont noires.</h4>
            <h4 class="text-center">Je n'ai pas aimé ce film. Quel film ? Celui que j'ai vu hier.</h4>
            <h4 class="text-center">Quelle est la ville que tu préfères ? Celle où j'ai passé toute mon enfance.</h4>
        </div>
    </div>
</div>
@endsection