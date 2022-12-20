@extends('layouts/contentNavbarLayout')

@section('title', 'The gender of common nouns')

@section('vendor-style')
<style>
    td, th{
        text-align: center;
    }
    td p{
        margin-bottom: 5px;
    }
    td p:last-child{
        margin-bottom: 0
    }
    td{
        font-size: 20px
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
        <h2 class="text-center text-uppercase text-primary">The gender of common nouns</h2>
        <h3>
            Is the word feminine or Masculinee?
        </h3>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="table-responsive h-100">
                    <table class="table-bordered w-100 h-100">
                        <thead>
                            <tr>
                                <th class="fs-4 fw-bold">Masculine</th>
                                <th class="fs-4 fw-bold">Exceptions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>-ago</p>
                                    <p>le garage</p>
                                </td>
                                <td>
                                    <p>la page, la plage</p>
                                    <p>la cage, l’image</p>
                                    <p>la nage, la rage</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ail</p>
                                    <p>le travail</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-al</p>
                                    <p>le journal</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ant</p>
                                    <p>le restaurant</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-aire</p>
                                    <p>le dictionnaire</p>
                                </td>
                                <td>
                                    <p>l’affaire</p>
                                    <p>la grammaire </p>
                                    <p>la paire</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-eau</p>
                                    <p>le tableau</p>
                                </td>
                                <td>
                                    <p>l'eau</p>
                                    <p>la peau</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-amme</p>
                                    <p>le programme</p>
                                </td>
                                <td>
                                    <p>la flamme</p>
                                    <p>la gamme</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-et</p>
                                    <p>le jaradinet</p>
                                </td>
                                <td>
                                    la forêt
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ier</p>
                                    <p>le papier</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-isme</p>
                                    <p>le communisme</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ment</p>
                                    <p>le gouvernement</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-oir</p>
                                    <p>le miroir</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ain</p>
                                    <p>le refrain, le copain</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-eu</p>
                                    <p>l’aveu</p>
                                    <p>le neveu</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ège</p>
                                    <p>le siège, le manège</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-at</p>
                                    <p>le chat, le plat</p>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12 col-md-6 mt-3 mt-md-0">
                <div class="table-responsive">
                    <table class="table-bordered w-100">
                        <thead>
                            <tr>
                                <th class="fs-4 fw-bold">Feminine</th>
                                <th class="fs-4 fw-bold">Exceptions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>ade </p>
                                    <p>la parade</p>
                                    <p>la sérénade</p>
                                </td>
                                <td>
                                    <p>le stade</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-aille</p>
                                    <p>la bataille</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-able</p>
                                    <p>la table</p>
                                </td>
                                <td>
                                    <p>le câble, le cartable </p>
                                    <p>le diable, l’érable</p>
                                    <p>le portable, le sable</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-sion -tion </p>
                                    <p>la télévision</p>
                                    <p>la conversation</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-aine -eine</p>
                                    <p>la douzaine </p>
                                    <p>la peine</p>
                                </td>
                                <td>
                                    <p>le domaine</p>
                                    <p>le capitaine</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ée</p>
                                    <p>une allée</p>
                                </td>
                                <td>
                                    <p>le colisée, le lycée</p>
                                    <p>le musée</p>
                                    <p>le trophée</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-esse</p>
                                    <p>la promesse</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ette</p>
                                    <p>la cigarette</p>
                                </td>
                                <td>
                                    le squelette
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-té</p>
                                    <p>la liberté</p>
                                </td>
                                <td>
                                    <p>l’été, le karaté</p>
                                    <p>le pâté, le comité</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ice</p>
                                    <p>la justice</p>
                                </td>
                                <td>
                                    <p>l’exercice</p>
                                    <p>le sacrifice</p>
                                    <p>le service</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-tude</p>
                                    <p>la solitude</p>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-oire</p>
                                    <p>l’histoire</p>
                                    <p>la poire</p>
                                </td>
                                <td>
                                    <p>le conservatoire</p>
                                    <p>le laboratoire</p>
                                    <p>le pourboire</p>
                                    <p>l’interrogatoire</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-çon</p>
                                    <p>la leçon</p>
                                </td>
                                <td>
                                    <p>le garçon</p>
                                    <p>le caleçon</p>
                                    <p>le glaçon</p>
                                    <p>le soupçon</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-eur</p>
                                    <p>l’odeur</p>
                                    <p>la sueur</p>
                                </td>
                                <td>
                                    <p>le bonheur</p>
                                    <p>le haut-parleur</p>
                                    <p>l’honneur</p>
                                    <p>le tailleur</p>
                                    <p>le malheur</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ance  -ence</p>
                                    <p>la connaissance</p>
                                    <p>la science</p>
                                </td>
                                <td>le silence</td>
                            </tr>
                            <tr>
                                <td>
                                    <p>-ie</p>
                                    <p>la partie</p>
                                    <p>la vie</p>
                                </td>
                                <td>
                                    <p>l’incendie</p>
                                    <p>le parapluie</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection