@extends('layouts/contentNavbarLayout')

@section('title', 'The Comparative')

@section('vendor-style')
<style>
    td {
        padding: 10px;
    }

    td p {
        margin-bottom: 0px;
    }

    tr td:last-child {
        text-align: start;
    }

    .list {
        margin: 0;
        padding: 0;
        list-style: none;
        display: grid;
        gap: 1rem;
    }

    .list li {
        display: grid;
        grid-template-columns: 0 1fr;
        gap: 1.75em;
        align-items: start;
        font-size: 1.5rem;
        line-height: 1.25;
    }

    ul li::before {
        content: attr(data-icon);
        /* Make slightly larger than the li font-size
        but smaller than the li gap */
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
        <h2 class="text-center text-uppercase text-primary">The Comparative</h2>

        <div class="mt-5">
            <h3 class="fw-bold">! The Comparative</h3>
            <div class="table-responsive">
                <table class="table-bordered w-100">
                    <tbody>
                        <tr>
                            <td>With an adjective </td>
                            <td>Cet article est </td>
                            <td>plus/moins/aussi </td>
                            <td>cher </td>
                            <td>que l’autre.</td>
                        </tr>
                        <tr>
                            <td>With an adverb </td>
                            <td>Cet artisan travaille </td>
                            <td>plus/moins/aussi </td>
                            <td>sérieusement </td>
                            <td>que celui-ci.</td>
                        </tr>
                        <tr>
                            <td>With a name/brand </td>
                            <td>Tesla a </td>
                            <td>plus de/moins de autant de </td>
                            <td>clients </td>
                            <td>que Mercedes.</td>
                        </tr>
                        <tr>
                            <td>With a verb </td>
                            <td>Dell produit </td>
                            <td>plus/moins/autant </td>
                            <td></td>
                            <td>que IBM.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3 class="fw-bold">Notes :</h3>
            <ul class="list">
                <li data-icon="👉">
                    The comparisons of "bon" and "mauvais" are irregular: C’est une bonne entreprise, mais l’autre est
                    meilleure ! Nos résultats de cette année sont pires que ceux de l’année dernière.
                </li>
                <li data-icon="👉">
                    The comparison of "bien" is irregular. Elle travaille bien, mais l'autre travaille mieux!
                </li>
                <li data-icon="👉">
                    To express a numerical quantity: Elle a 3 succursales de plus/de moins que son concurrent.
                </li>
            </ul>
        </div>

        <div class="mt-5">
            <h3 class="fw-bold">! The superlative</h3>
            <div class="row justify-content-evenly">
                <div class="col-12 col-md-9">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <tr>
                                <td>avec un adjectif </td>
                                <td>C'est le salon le plus/le moins intéressant de l’année</td>
                            </tr>
                            <tr>
                                <td>avec un adverbe </td>
                                <td>C'est l’artisan qui travaille le plus/le moins sérieusement de la foire.</td>
                            </tr>
                            <tr>
                                <td>avec un nom </td>
                                <td>C'est le commercial qui a le plus de/le moins de talent.</td>
                            </tr>
                            <tr>
                                <td>avec un verbe </td>
                                <td>C'est elle qui produit le plus/le moins.</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3 class="fw-bold">Notes :</h3>
            <div class="mt-5">
                <p>
                    The superlatives of 'bon' and 'mauvais' are irregular: C’est une bonne entreprise, mais ce n’est pas
                    la meilleure ! C’est la pire de toutes !
                </p>
                <ul class="list">
                    <li data-icon="👉">
                        The superlative of 'bien' is irregular. Ce modèle se vend bien, mais ce n’est pas celui qui se vend le mieux !
                    </li>
                    <li data-icon="👉">
                        The relative superlative : C’est l’une des dix meilleures entreprises du pays.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection