@extends('layouts/contentNavbarLayout')

@section('title', 'TONIC PRONOUNS')

@section('vendor-style')
<style>
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
        <h2 class="text-center text-uppercase text-primary">TONIC PRONOUNS</h2>
        <div class="mt-5">
            <h3>FORMS</h3>
            <div class="row justify-content-evenly">
                <div class="col-11 col-md-6">
                    <div class="table-responsive ">
                        <table class="table-bordered text-center fs-4 w-100">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>SINGULAR</th>
                                    <th>PLURAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="my-4"></div></td>
                                    <td><div class="my-4"></div></td>
                                    <td><div class="my-4"></div></td>
                                </tr>
                                <tr>
                                    <td>1st Person</td>
                                    <td>Moi </td>
                                    <td>Nous</td>
                                </tr>
                                
                                <tr>
                                    <td><div class="my-4"></div></td>
                                    <td><div class="my-4"></div></td>
                                    <td><div class="my-4"></div></td>
                                </tr>
                                <tr>
                                    <td>2nd Person</td>
                                    <td>Toi</td>
                                    <td>Vous</td>
                                </tr>
                                <tr>
                                    <td><div class="my-4"></div></td>
                                    <td><div class="my-4"></div></td>
                                    <td><div class="my-4"></div></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4>Masculine</h4>
                                        <h4 class="ms-3">3rd Person</h4>
                                        <h4>Feminine </h4>
                                    </td>
                                    <td>
                                        <h4>Lui</h4>
                                        <h4>Elle </h4>
                                    </td>
                                    <td>
                                        <h4>Eux</h4>
                                        <h4>Elles</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3>USERS</h3>
            <div>
                <h4>Tonic personal pronouns are independent words.</h4>
                <ul class="fs-4">
                    <li>
                        <strong>This pronoun is used to reinforce a pronoun or a noun.</strong>
                        <p class = "fst-italic">Moi, je m’appelle Juan et toi, comment tu t’appelles ? Et vous, qu’est-ce que vous feriez â sa place ?</p>
                        <p class = "fst-italic">Lui est espagnol/ mais il parle français couramment.</p>
                    </li>
                    <li>
                        <strong>It is used after a preposition:</strong>
                        <p class = "fst-italic">Pierre vient au cinéma avec nous mais je préfère y aller sans lui.</p>
                        <p class = "fst-italic">Ce vase est pour moi ? Merci, je /’apporterai chez moi.</p>
                    </li>
                    <li>
                        <strong>It is used after C'est (Ce sont):</strong>
                        <p class = "fst-italic">C’est toi ou moi le gagnant ?</p>
                        <p class = "fst-italic">Ce n'est pas toi qui as fait la rédaction.</p>
                        <p class = "fst-italic">Ce sont toujours eux qui arrivent en retard.</p>
                    </li>
                    <li>
                        <strong>It is used to avoid repetition of the sentence:</strong>
                        <p class = "fst-italic">Ils mangent autant de glaces que toi ( = que tu manges de glaces)</p>
                        <p class = "fst-italic">Je suis vraiment content de partir en vacances, et toi ?( = tu es content de partir en vacances ?)</p>
                        <p class = "fst-italic">Vous allez au théâtre ce soir ?</p>
                        <div class="ms-5">
                            <p class = "fst-italic">Pas nous. ( = nous n’allons pas au théâtre)</p>
                            <p class = "fst-italic">Nous aussi (= nous allons au théâtre)</p>
                        </div>
                    </li>
                    <li>
                        <strong>The adjective "même" is used to reinforce the pronoun:</strong>
                        <p class = "fst-italic">Les enfants ont fait eux-mêmes leurs devoirs.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection