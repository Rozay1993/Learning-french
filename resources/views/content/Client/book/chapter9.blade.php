@extends('layouts/contentNavbarLayout')

@section('title', 'Pronouns')

@section('vendor-style')
<style>
    th,
    td {
        padding: 15px 0px;
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
        <h2 class="text-center text-uppercase text-primary">Pronouns</h2>

        <div class="mt-5">
            <h3>The pronoun represents a noun from which it inherits the functions (subject, attribute, complement). A
                pronoun can replace a noun, but it can also replace an adjective, a proposition, a part or the whole of
                a sentence.</h3>
            <h3>Pronouns are classified into six categories according to the information they represent: personal,
                demonstrative, possessive, relative, interrogative and indefinite.</h3>
        </div>

        <div class="mt-5">
            <h3>
                • Personals:
            </h3>
            <div class="table-responsive">
                <table class="table-bordered w-100 text-center fs-5">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Singular</td>
                            <td>Plural</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1st person</td>
                            <td>je, me, moi</td>
                            <td>nous</td>
                        </tr>
                        <tr>
                            <td>2nd person</td>
                            <td>tu, te, toi</td>
                            <td>VOUS</td>
                        </tr>
                        <tr>
                            <td>3rd person</td>
                            <td>il, elle, lui, le, lo, se, soi, en, y</td>
                            <td>ils, elles, eux, les, leur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3>
                • Demonstratives:
            </h3>
            <div class="table-responsive">
                <table class="table-bordered w-100 text-center">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Singular</td>
                            <td>Plural</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Masculine</td>
                            <td>celui, celui-ci, celui-là</td>
                            <td>ceux, ceux-ci, ceux-là</td>
                        </tr>
                        <tr>
                            <td>Feminine</td>
                            <td>celle, celle-ci, celle-là</td>
                            <td>celles, celles-ci, celles-là</td>
                        </tr>
                        <tr>
                            <td>Neutral</td>
                            <td>ça, ce, ceci, cela</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3>
                • Possessives:
            </h3>
            <div class="table-responsive">
                <table class="table-bordered w-100 text-center">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Singular</td>
                            <td>Plural</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                Masculin
                            </td>
                            <td>
                                le mien, le tien, le sien, le nôtre, le
                                vôtre, le leur
                            </td>
                            <td>
                                les miens, les tiens, les siens, les
                                nôtres, les vôtres, les leurs
                            </td>
                        </tr>
                        <tr>

                            <td>
                                Féminin
                            </td>
                            <td>
                                lo mienne, lo tienne, lo sienne, lo
                                nôtre, lo vôtre, lo leur
                            </td>
                            <td>
                                les miennes, les tiennes, les
                                siennes, les nôtres, les vôtres, les leurs
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3>
                • Interrogatives:
            </h3>
            <div class="table-responsive">
                <table class="table-bordered w-100 text-center">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Singular</td>
                            <td>Plural</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                Masculin
                            </td>
                            <td>
                                lequel, duquel, auquel	
                            </td>
                            <td>
                                lesquels, desquels, auxquels
                            </td>
                        </tr>
                        <tr>

                            <td>
                                Féminin
                            </td>
                            <td>laquelle, de laquelle, è laquelle</td>
                            <td>lesquelles, desquelles, auxquelles</td>
                        </tr>
                        <tr>
                            <td>
                                Relatives invariables
                            </td>
                            <td colspan="2">
                                qui, que, quoi, dont, où
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-5">
            <h3>
                • Indefinites:
            </h3>
            <div class="table-responsive">
                <table class="table-bordered w-100 text-center">
                    <thead>
                        <tr>
                            <td></td>
                            <td>Singular</td>
                            <td>Plural</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                Masculin
                            </td>
                            <td>
                                lequel, duquel, auquel	
                            </td>
                            <td>
                                lesquels, desquels, auxquels
                            </td>
                        </tr>
                        <tr>

                            <td>
                                Féminin
                            </td>
                            <td>
                                laquelle, de laquelle, è laquelle	
                            </td>
                            <td>
                                lesquelles, desquelles, auxquelles
                            </td>
                        </tr>
                        <tr>
                            <td>
                                interrogatives invariables                                
                            </td>
                            <td colspan="2">
                                qui, que, quoi
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection