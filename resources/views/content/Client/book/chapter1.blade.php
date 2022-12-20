@extends('layouts/contentNavbarLayout')

@section('title', 'Articles')

@section('vendor-style')
    <style>
        td, th{
            font-size: 20px !important           
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
        <h2 class="text-center text-uppercase text-primary">Articles</h2>
        <p class="fs-3">
            The indefinite and definite articles are placed before the noun and take the gender and number of the noun
            they determine.
        </p>
        <p class="fs-5">
            The indefinite articles
        </p>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="table-resposive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Masculine</th>
                                <th>Feminine</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">Singular</th>
                                <td><span class="text-danger">Un</span> mot</td>
                                <td><span class="text-danger">Une</span> classe</td>
                            </tr>
                            <tr>
                                <td><span class="text-danger">Un</span> livre</td>
                                <td><span class="text-danger">Une</span> maison</td>
                            </tr>
                            <tr>
                                <th rowspan="2">Plural</th>
                                <td><span class="text-danger">Des</span> mots</td>
                                <td><span class="text-danger">Des</span> classes</td>
                            </tr>
                            <tr>
                                <td><span class="text-danger">Des</span> livres</td>
                                <td><span class="text-danger">Des</span> maisons</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 mt-5">
                <h3>
                    They are used to introduce a person or thing for the first time.
                </h3>
                <h5>
                    The definite articles*
                </h5>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <div class="table-resposive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Masculine</th>
                                <th>Feminine</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th rowspan="2">Singular</th>
                                <td><span class="text-danger">Le</span> garçon</td>
                                <td><span class="text-danger">Une</span> fille</td>
                            </tr>
                            <tr>
                                <td><span class="text-danger">Le</span> frère</td>
                                <td><span class="text-danger">Une</span> sœur</td>
                            </tr>
                            <tr>
                                <th rowspan="2">Plural</th>
                                <td><span class="text-danger">Les</span> garçons</td>
                                <td><span class="text-danger">Les</span> filles</td>
                            </tr>
                            <tr>
                                <td><span class="text-danger">Les</span> frères</td>
                                <td><span class="text-danger">Les</span> sœurs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h3>
                * <span class="text-danger">Le</span> and <span class="text-danger">La</span> become <span
                    class="text-danger">l'</span> (the apostrophe) before a vowel or a silent h.
            </h3>
            <h3>
                <span class="text-decoration-underline">Example :</span><span class="text-danger"> l’</span>oncle
            </h3>
            <h3>
                They have a general value or a specific value.
            </h3>
            <h3>
                Valeur générale : <span class="fst-italic fw-light">La mer est bleue.</span>
            </h3>
            <h3>
                Valeur spécifique : <span class="fst-italic fw-light">Le père de Charlotte.</span>
            </h3>
            <h3>
                In the masculine, the article is used to determine whether the noun is singular or plural.
            </h3>
            <h3>
                The pronunciation of « le frère » is different from « les frères ».
            </h3>
            <h3>
                The linkage is made with indefinite articles « un » and « des » and the definite article "les" when the
                word that follows begins with a vowel or a silent h:
            </h3>
        </div>
        <div class="text-center mt-5">
            <h3>
                <strong class="fst-italic">Un</strong> avion
            </h3>
            <h3>
                <strong class="fst-italic">des</strong> avions
            </h3>
            <h3>
                <strong class="fst-italic">les</strong> avions
            </h3>
        </div>
        <div class="mt-5">
            <h3>
                In a sentence in the affirmative form, if the verb is followed by an indefinite article, the latter is
                deleted in the negative form and replaced by the preposition « de ».
            </h3>
        </div>
        <div class="text-center mt-5">
            <h3>
                J’ai <strong class="fst-italic">une</strong> voiture.
            </h3>
            <h3>
                Je n’ai <strong class="fst-italic">pas de</strong> voiture.
            </h3>
            <h3>
                Il a <strong class="fst-italic">un</strong> vélo.
            </h3>
            <h3>
                Il n’a <strong class="fst-italic">pas de</strong> vélo.
            </h3>
            <h3>
                Tu as <strong class="fst-italic">des</strong> enfants.
            </h3>
            <h3>
                Tu as <strong class="fst-italic">des</strong> enfants.
            </h3>
        </div>
        <h3 class="mt-5">
            In the negative form, definite articles are not deleted. 
        </h3>
        <div class="text-center mt-5">
            <h3>J’aime <strong class= "fst-italic">le</strong> chocolat.</h3>
            <h3>Je n’aime <strong class= "fst-italic">pas le</strong> chocolat.</h3>
            <h3>J’aime <strong class= "fst-italic">la</strong> confiture.</h3>
            <h3>Je n’aime <strong class= "fst-italic">pas la</strong> confiture.</h3>
            <h3>J’aime <strong class= "fst-italic">l’</strong>eau.</h3>
            <h3>Je n’aime <strong class= "fst-italic">pas l’</strong>eau.</h3>
            <h3>J’aime <strong class= "fst-italic">les</strong> fraises.</h3>
            <h3>Je n’aime <strong class= "fst-italic">pas les</strong> fraises.</h3>
        </div>
    </div>
</div>
@endsection