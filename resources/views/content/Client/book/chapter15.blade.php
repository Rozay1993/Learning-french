@extends('layouts/contentNavbarLayout')

@section('title', 'Relatives pronouns')

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
        <h2 class="text-center text-uppercase text-primary">Relatives pronouns</h2>
        <div class="mt-5 fs-4">
            <p>The use of relative pronouns varies according to the function they have, and the nature of the antecedent
                (animated or non-animated):</p>
        </div>

        <div class="table-responsive fs-5">
            <table class="table-bordered text-center w-100">
                <colgroup>
                    <col>
                    <col style="width: 40%">
                    <col style="width: 40%">
                </colgroup>
                <thead>
                    <tr class="">
                        <th>antecedent</th>
                        <th>form used</th>
                        <th>example</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>sujet</td>
                        <td>animated and non-animated: QUI</td>
                        <td>
                            <p>Le garçon qui joue là-bas est mon neveu.</p>
                            <p>La chaise qui est là est cassée.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>C.O.D.</td>
                        <td>animated and non-animated: QUE</td>
                        <td>
                            <p>L'homme que j'aime s'appelle Jo.</p>
                            <p>La pomme que je mange est délicieuse.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>complément de lieu</p>
                            <p>complément de temps</p>
                        </td>
                        <td>
                            <p>OÙ, D'OÙ</p>
                            <p>OÙ</p>
                        </td>
                        <td>
                            <p>La maison où je suis né date de 1849. </p>
                            <p>Le pays d'où tu viens est magnifique. </p>
                            <p>Le jour où c'est arrivé, j’étais en Angleterre.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>C.O.I. avec « de » seul</td>
                        <td>animated and non-animated: DONT</td>
                        <td>
                            <p>nom + de (appartenance)</p>
                            <p>Ceux dont le salaire est bas sont mécontents.</p>
                            <p>verbe + de</p>
                            <p>Le tableau dont je parle a été peint par Monet.</p>
                            <p>adjectif + de</p>
                            <p>Les exploits dont il est fier sont nombreux.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>C.O.I. avec préposition + « de » (sauf lieu de provenance)</td>
                        <td class="text-start">
                            <p>animated : À CÔTÉ DE QUI</p>
                            <p>animated and non-animated:</p>
                            <p class="text-center">EN FACE DUQUEL</p>
                            <p class="text-center">À CAUSE DE LAQUELLE</p>
                            <p class="text-center">EN RAISON DESQUELS</p>
                            <p class="text-center">EN FONCTION DESQUELLES</p>
                            <p>Non-animated : phrase, ce, qch, rien ...</p>
                            <p class="text-center">EN FONCTION DE QUOI</p>
                        </td>
                        <td>
                            <p>La femme en face de qui je suis assis me regarde bizarrement.</p>
                            <p>Le bâtiment à côté duquel il habite est étroit.</p>
                            <p>C'est ce en fonction de quoi il faut réfléchir.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            C.O.I. avec « à »
                        </td>
                        <td class="text-start">
                            <p>animated : À QUI</p>
                            <p>animated and non-animated:</p>
                            <p class="text-center">GRÂCE AUQUEL</p>
                            <p class="text-center">À LAQUELLE </p>
                            <p class="text-center">AUXQUELS </p>
                            <p class="text-center">AUXQUELLES</p>
                            <p>Non-animated : phrase, ce, qch, rien ...</p>
                            <p class="text-center">A QUOI</p>
                        </td>
                        <td>
                            <p>Tu es celui à qui je penserai toute ma vie.</p>
                            <p>C'est la méthode grâce à laquelle nous avons résolu ce problème.</p>
                            <p>C'est ce à quoi je m'attendais.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            complément avec une autre préposition
                        </td>
                        <td class="text-start">
                            <p>animated : PAR QUI</p>
                            <p>animated and non-animated:</p>
                            <p class="text-center">AVEC LEQUEL</p>
                            <p class="text-center">CONTRE LÄQUELLE</p>
                            <p class="text-center">ENTRE LESQUELS</p>
                            <p class="text-center">PARMI LESQUELLES</p>
                            <p>Non-animated : phrase, ce, qch, rien</p>
                            <p class="text-center">PAR QUOI</p>
                        </td>
                        <td>
                            <p>C'est l'homme par qui le scandale arrive.</p>
                            <p>C'est la raison pour laquelle il est venu.</p>
                            <p>C'est ce par quoi il faut commencer.</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection