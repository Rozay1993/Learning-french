@extends('layouts/contentNavbarLayout')

@section('title', 'ADJECTIVES')

@section('vendor-style')
<style>
    th, td {
        font-size: 1.25rem !important;
        text-align: center;
    }
    th{
        font-weight: bold;
    }
    td p {
        margin-bottom: 5px;
    }

    td p:last-child {
        margin-bottom: 0
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
        <h2 class="text-center text-uppercase text-primary">ADJECTIVES</h2>

        <h3 class="text-center text-uppercase">Forming the feminine</h3>
        <section class="mt-3">
            <h3>
                General rule: An <span class="text-danger">-e</span> is added to the masculine form
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive">
                    <table class="table-bordered w-100">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Masculin</strong>
                                    <p>Grand</p>
                                    <p>Petit</p>
                                    <p>Blond</p>
                                    <p>Brun</p>
                                </td>
                                <td>
                                    <strong>Féminin</strong>
                                    <p>Grande</p>
                                    <p>Petite</p>
                                    <p>Blonde</p>
                                    <p>Brune</p>
                                </td>
                                <td>
                                    <strong>Masculin</strong>
                                    <p>Vert</p>
                                    <p>Intelligent</p>
                                    <p>Américain</p>
                                    <p class="invisible">dd</p>
                                </td>
                                <td>
                                    <strong>Féminin</strong>
                                    <p>Verte</p>
                                    <p>Intelligente</p>
                                    <p>Américaine</p>
                                    <p class="invisible">dd</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives ending in -e in the masculine remain invariable
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive">
                    <table class="table-bordered w-100">
                        <thead>
                            <tr>
                                <th>Masculin</th>
                                <th>Féminin</th>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jeune</td>
                                <td>Jeune</td>
                                <td>Sympathique</td>
                                <td>Sympathique</td>
                            </tr>
                            <tr>
                                <td>Rouge</td>
                                <td>Rouge</td>
                                <td>Célibataire</td>
                                <td>Célibataire</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Masculine adjectives ending in -é follow the general rule
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <thead>
                            <tr>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marié</td>
                                <td>Mariée</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives ending in -en add -ne
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive">
                    <table class="table-bordered w-100">
                        <thead>
                            <tr>
                                <th>Masculin</th>
                                <th>Féminin</th>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Italien</td>
                                <td>Italienne</td>
                                <td>Parisien</td>
                                <td>Parisienne</td>
                            </tr>
                            <tr>
                                <td>Ancien</td>
                                <td>Ancienne</td>
                                <td>Européen</td>
                                <td>Européenne</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives ending in -el add -le
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <thead>
                            <tr>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Traditionnel</td>
                                <td>Traditionnelle</td>
                            </tr>
                            <tr>
                                <td>Exceptionnel</td>
                                <td>Exceptionnelle</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives in -on also add -ne.
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <thead>
                            <tr>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bon</td>
                                <td>Bonne</td>
                            </tr>
                            <tr>
                                <td>Breton</td>
                                <td>Bretonne</td>
                            </tr>
                            <tr>
                                <td>Mignon</td>
                                <td>Mignonne</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives in -er change to -ère
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-100">
                        <thead>
                            <tr>
                                <th>Masculin</th>
                                <th>Fémini</th>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fier</td>
                                <td>Fière</td>
                                <td>Amer</td>
                                <td>Amère</td>
                            </tr>
                            <tr>
                                <td>Etranger</td>
                                <td>Etrangère</td>
                                <td>Premier</td>
                                <td>Première</td>
                            </tr>
                            <tr>
                                <td>Cher</td>
                                <td>Chère</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives in -eux / -eur change to – euse
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-100">
                        <tbody>
                            <tr>
                                <td>Masculin</td>
                                <td>Féminin</td>
                                <td>Masculin</td>
                                <td>Féminin</td>
                            </tr>
                            <tr>
                                <td>Heureux</td>
                                <td>Heureuse</td>
                                <td>Nerveux</td>
                                <td>Nerveuse</td>
                            </tr>
                            <tr>
                                <td>Rêveur</td>
                                <td>Rêveuse</td>
                                <td>Travailleur</td>
                                <td>Travailleuse</td>
                            </tr>
                            <tr>
                                <td>Sérieux</td>
                                <td>érieuse</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives in -teur change to - trice / -teuse
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <tbody>
                            <tr>
                                <td>Masculin</td>
                                <td>Féminin</td>
                            </tr>
                            <tr>
                                <td>Conservateur</td>
                                <td>Conservatrice</td>
                            </tr>
                            <tr>
                                <td>Observateur</td>
                                <td>Observatrice</td>
                            </tr>
                            <tr>
                                <td>Menteur</td>
                                <td>Menteuse</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives in -f change to -ve
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <tbody>
                            <tr>
                                <td>Masculin</td>
                                <td>Féminin</td>
                            </tr>
                            <tr>
                                <td>Sportif</td>
                                <td>Sportive</td>
                            </tr>
                            <tr>
                                <td>Actif</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>Neuf</td>
                                <td>Neuve</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives in -c change to -que
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <tbody>
                            <tr>
                                <td>Masculin</td>
                                <td>Féminin</td>
                            </tr>
                            <tr>
                                <td>Public</td>
                                <td>Publique</td>
                            </tr>
                            <tr>
                                <td>Turc</td>
                                <td>Turque</td>
                            </tr>
                            <tr>
                                <td>Grec</td>
                                <td>Grecque</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Irregular Adjectives
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-100">
                        <thead>
                            <tr>
                                <th>Masculin</th>
                                <th>Féminin</th>
                                <th>Masculin</th>
                                <th>Féminin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Beau</td>
                                <td>Belle</td>
                                <td>Blanc</td>
                                <td>Blanche</td>
                            </tr>
                            <tr>
                                <td>Gros</td>
                                <td>Grosse</td>
                                <td>Fou</td>
                                <td>Folle</td>
                            </tr>
                            <tr>
                                <td>Vieux</td>
                                <td>Vieille</td>
                                <td>Roux</td>
                                <td>Rousse</td>
                            </tr>
                            <tr>
                                <td>Gentil</td>
                                <td>Gentille</td>
                                <td>Long</td>
                                <td>Longue</td>
                            </tr>
                            <tr>
                                <td>Frais</td>
                                <td>Fraîche </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <div class="my-5"></div>
        <h3 class="text-center text-uppercase">Plural</h3>

        <section class="mt-3">
            <h3>
                The general rule: An -s is added to the singular form
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-100">
                        <thead>
                            <tr>
                                <th>Singulier</th>
                                <th>Pluriel</th>
                                <th>Singulier</th>
                                <th>Pluriel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Grand</td>
                                <td>Grands</td>
                                <td>Intelligente</td>
                                <td>Intelligents</td>
                            </tr>
                            <tr>
                                <td>Petit</td>
                                <td>Petits</td>
                                <td>Américain</td>
                                <td>Américains</td>
                            </tr>
                            <tr>
                                <td>Blonde</td>
                                <td>Blondes</td>
                                <td>Brune</td>
                                <td>Brunes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Adjectives ending in -s, or -x in the singular remain invariable
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-100">
                        <thead>
                            <tr>
                                <th>Singulier</th>
                                <th>Pluriel</th>
                                <th>Singulier</th>
                                <th>Pluriel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Français</td>
                                <td>Français</td>
                                <td>Bas</td>
                                <td>Bas</td>
                            </tr>
                            <tr>
                                <td>Roux</td>
                                <td>Roux</td>
                                <td>Sérieux</td>
                                <td>Sérieux</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Singular adjectives ending in -eau take an -x in the plural
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <thead>
                            <tr>
                                <th>Singulier</th>
                                <th>Pluriel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nouveau</td>
                                <td>Nouveaux</td>
                            </tr>
                            <tr>
                                <td>Beau</td>
                                <td>Beaux</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="mt-3">
            <h3>
                Singular adjectives ending in -al take an -x in the plural.
            </h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 table-responsive d-flex justify-content-center">
                    <table class="table-bordered w-50">
                        <thead>
                            <tr>
                                <th>Singulier</th>
                                <th>Pluriel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Original</td>
                                <td>Originaux</td>
                            </tr>
                            <tr>
                                <td>Sentimental</td>
                                <td>Sentimentaux</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <div class="my-5"></div>
        <h3 class="text-center text-uppercase">Adjectives</h3>
        <section class="mt-3">
            <div class="">
                <h4>Most adjectives are placed after the noun they qualify.</h4>
                <h5>
                    Une voiture rouge - un drapeau français - un livre intéressant - des activités difficiles - un
                    paysage magnifique - un gâteau délicieux – une voiture allemande
                </h5>
            </div>
            <div class="">
                <h4>Some of the most common adjectives are placed before the noun: </h4>
                <div class="fs-5 mt-3 p-2" style="border: double 5px black">
                    grand, gros, petit, long, beau, joli, bon, mauvais, jeune, vieux, nouveau, ancien, prochain, dernier...
                </div>
                <h5 class="mt-3">Une petite fille - une grande maison - une jolie femme - un jeune homme</h5>
            </div>
        </section>
    </div>
</div>
@endsection