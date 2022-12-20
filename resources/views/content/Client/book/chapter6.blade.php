@extends('layouts/contentNavbarLayout')

@section('title', 'Conjugation')

@section('vendor-style')
<style>
    td p {
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
        <h2 class="text-center text-uppercase text-primary">Conjugation</h2>
        <h3 class="text-center">
            Présent, imparfait, passé composé, futur simple et passé simple :
        </h3>
        <div class="table-responsive">
            <table class="table-bordered w-100 text-center fs-5">
                <thead>
                    <tr>
                        <th class="fw-bold p-2">VERBES</th>
                        <th class="fw-bold p-2">Présent</th>
                        <th class="fw-bold p-2">Imparfait</th>
                        <th class="fw-bold p-2">Passé composé</th>
                        <th class="fw-bold p-2">Futur simple</th>
                        <th class="fw-bold p-2">Passé simple</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2">
                            être
                        </td>
                        <td class="p-2">
                            <p>je suis tu es il est</p>
                            <p>nous sommes vous êtes ils sont</p>
                        </td>
                        <td class="p-2">
                            <p>j'étais tu étais il était</p>
                            <p>nous étions vous étiez ils étaient</p>
                        </td>
                        <td class="p-2">
                            <p>j'ai été tu as été il a été</p>
                            <p>nous avons été vous avez été ils ont été</p>
                        </td>
                        <td class="p-2">
                            <p>je serai tu seras il sera</p>
                            <p>nous serons vous serez ils seront</p>
                        </td>
                        <td class="p-2">
                            <p>je fus tu fus il fut</p>
                            <p>nous fûmes vous fûtes ils furent</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            avoir
                        </td>
                        <td class="p-2">
                            <p>j'ai tu as il a</p>
                            <p>nous avons VOUS avez ils ont</p>
                        </td>
                        <td class="p-2">
                            <p>j'avais tu avais il avait</p>
                            <p>nous avions VOUS aviez ils avaient</p>
                        </td>
                        <td class="p-2">
                            <p>j'ai eu tu as eu il a eu</p>
                            <p>nous avons eu VOUS avez eu</p>
                        </td>
                        <td class="p-2">
                            <p>ils ont eu j'aurai tu auras il aura</p>
                            <p>nous aurons vous aurez ils auront</p>
                        </td>
                        <td class="p-2">
                            <p>j'eus tu eus il eut</p>
                            <p>nous eûmes vous eûtes ils eurent</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            aimer
                        </td>
                        <td class="p-2">
                            <p>j'aime tu aimes il aime </p>
                            <p>nous aimons vous aimez ils aiment</p>
                        </td>
                        <td class="p-2">
                            <p>j'aimais Tu aimais il aimait </p>
                            <p>nous aimions vous aimiez ils aimaient</p>
                        </td>
                        <td class="p-2">
                            <p>j'ai aimé tu as aimé il a aimé </p>
                            <p>nous avons aimé vous avez aimé ils ont aimé</p>
                        </td>
                        <td class="p-2">
                            <p>j’aimerai Tu aimeras il aimera </p>
                            <p>nous aimerons vous aimerez ils aimeront</p>
                        </td>
                        <td class="p-2">
                            <p>j’aimai Tu aimas il aima </p>
                            <p>nous aimâmes vous aimâtes ils aimèrent</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            finir
                        </td>
                        <td class="p-2">
                            <p>je finis tu finis il finit </p>
                            <p>nous finissons vous finissez ils finissent</p>
                        </td>
                        <td class="p-2">
                            <p>je finissais tu finissais il finissait</p>
                            <p>nous finissions vous finissiez ils finissaient</p>
                        </td>
                        <td class="p-2">
                            <p>j'ai fini tu as fini il a fini</p>
                            <p>nous avons fini vous avez fini ils ont fini</p>
                        </td>
                        <td class="p-2">
                            <p>je finirai tu finiras il finira </p>
                            <p>nous finirons vous finirez ils finiront</p>
                        </td>
                        <td class="p-2">
                            <p>je finis tu finis il finit </p>
                            <p>nous finîmes vous finîtes ils finirent</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            aller
                        </td>
                        <td class="p-2">
                            <p>je vais tu vas il va</p>
                            <p>nous allons vous allez ils vont</p>
                        </td>
                        <td class="p-2">
                            <p>j'allais tu allais il allait</p>
                            <p>nous allions vous alliez ils allaient</p>
                        </td>
                        <td class="p-2">
                            <p>je suis allé(e) tu es allé(e) il est allé</p>
                            <p>nous sommes allé(e)s vous êtes allé(e)s ils sont allés</p>
                        </td>
                        <td class="p-2">    
                            <p>je suis allé(e) tu es allé(e) il est allé</p>
                            <p>nous sommes allé(e)s vous êtes allé(e)s ils sont allés</p>
                        </td>
                        <td class="p-2">
                            <p>j’allai tu allas il alla</p>
                            <p>nous allâmes vous allâtes ils allèrent</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">
                            foire
                        </td>
                        <td class="p-2">
                            <p>je fais tu fais il fait </p>
                            <p>nous faisons vous faites ils font</p>
                        </td>
                        <td class="p-2">
                            <p>je faisais tu faisais il faisait </p>
                            <p>nous faisions vous faisiez ils faisaient</p>
                        </td>
                        <td class="p-2">
                            <p>j’ai fait tu as fait  il a fait </p>
                            <p>nous avons fait vous avez fait ils ont fait</p>
                        </td>
                        <td class="p-2">
                            <p>je ferai tu feras il fera</p>
                            <p>nous ferons vous ferez ils feront</p>
                        </td>
                        <td class="p-2">
                            <p>je ferai tu feras il feram</p>
                            <p>nous ferons vous ferez ils ferontm</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection