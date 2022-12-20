@extends('layouts/contentNavbarLayout')

@section('title', 'NEGATION')

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
        <h2 class="text-center text-uppercase text-primary">NEGATION</h2>
        <div class="mt-5">
            <h4>It consists of 2 parts: ne (n’) .................+ another section</h4>
            <h4>The "ne" sometimes disappears in speech but is mandatory in writing. </h4>
            <h4 class="text-decoration-underline">Negative forms and their placement:</h4>
        </div>

        <div class="mt-5 table-responsive">
            <table class="table-bordered fs-5 text-center w-100">
                <thead>
                    <tr>
                        <td></td>
                        <td colspan="4">Examples</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Forms</td>
                        <td>Simple time</td>
                        <td>Verb + infinitive</td>
                        <td>Past tense</td>
                        <td>Imperative</td>
                    </tr>
                    <tr>
                        <td>ne...pas (de) </td>
                        <td>
                            <p>je ne mange pas</p>
                            <p>je ne bois pas d'alcool</p>
                        </td>
                        <td>je ne veux pas manger</td>
                        <td>je n'ai pas mangé </td>
                        <td>Ne mange pas !</td>
                    </tr>
                    <tr>
                        <td>
                            <p>ne ...pas </p>
                            <p>encore (de) </p>
                        </td>
                        <td>
                            <p>je ne dors pas encore </p>
                            <p>je n'ai pas encore d'enfants </p>
                        </td>
                        <td>
                            i1 ne veut pas encore partir
                        </td>
                        <td>
                            i1 n'est pas encore parti
                        </td>
                        <td>
                            Ne pars pas encore !
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ne ... plus (de)
                        </td>
                        <td>
                            <p>je ne fume plus</p>
                            <p>je ne mange plus de viande</p>
                        </td>
                        <td>
                            je ne vais plus fumer
                        </td>
                        <td>
                            je n'ai plus fumé
                        </td>
                        <td>
                            Ne fume plus!
                        </td>
                    </tr>
                    <tr>
                        <td>
                            ne ... jamais (de)
                        </td>
                        <td>
                            <p>je ne sors jamais</p>
                            <p>je ne bois jamais de café</p>
                        </td>
                        <td>
                            je ne peux jamais voyager
                        </td>
                        <td>
                            je n'ai jamais skié
                        </td>
                        <td>
                            Ne bois jamais avant de conduire !
                        </td>
                    </tr>
                    <tr>
                        <td>ne ... rien</td>
                        <td>je ne fais rien</td>
                        <td>je ne veux rien faire</td>
                        <td>je n'ai rien fait</td>
                        <td>Ne faites rien !</td>
                    </tr>
                    <tr>
                        <td>ne ... personne </td>
                        <td>je ne vois personne </td>
                        <td>je ne veux voir personne </td>
                        <td>je n'ai vu personne </td>
                        <td>Ne vois personne !</td>
                    </tr>
                    <tr>
                        <td>ne ... aucun(e) </td>
                        <td>je n'ai aucun ami </td>
                        <td>je ne peux voir aucun client </td>
                        <td>je n'ai vu aucun client </td>
                        <td>Ne voyez aucun client !</td>
                    </tr>
                    <tr>
                        <td>ne ... nulle part </td>
                        <td>je ne vais nulle part </td>
                        <td>je ne veux aller nulle part </td>
                        <td>je ne suis allé nulle part </td>
                        <td>Ne va nulle part !</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5 fs-4">
            <span class="text-decoration-underline">Note:</span> The expression ne ... que is not a negation but a
            restriction synonymous with "seulement".
            <p class="fst-italic">Example : Je n'ai qu'un frère — j’ai seulement un frère ; il n'a bu qu'un café — il a seulement bu un café,
            etc.</p>
        </div>
    </div>
</div>
@endsection