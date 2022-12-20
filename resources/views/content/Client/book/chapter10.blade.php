@extends('layouts/contentNavbarLayout')

@section('title', 'Pronouns')

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
        <h2 class="text-center text-uppercase text-primary">Pronouns</h2>
        <div class="row mt-5">
            <div class="col-12 col-sm-6">
                <div class="">
                    <h3><strong>Qui ?</strong></h3>
                    <h4>Préposition + qui ?</h4>
                    <h4 class="ms-4">To speak about someone</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Que ?</strong></h3>
                    <h4 class="ms-4">To speak about something</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Quoi ?</strong></h3>
                    <h4>Préposition + quoi ?</h4>
                    <h4 class="ms-4">To speak about a thing, a situation</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Comment ?</strong></h3>
                    <h4 class="ms-4">To ask the way, the means</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Quand ?</strong></h3>
                    <h4 class="ms-4">To speak about a moment</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Pourquoi ?</strong></h3>
                    <h4 class="ms-4">To ask the reason for a situation, for a decision</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Où ?</strong></h3>
                    <h4 class="ms-4">To speak about a place</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Combien ?</strong></h3>
                    <h4 class="ms-4">To speak about a quantity, a number</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Quel</strong>(le-s)</h3>
                    <h4>Préposition + quel(le-s) ?</h4>
                    <h4 class="ms-4">choice, several possibilities</h4>
                </div>
                <div class="mt-5">
                    <h3><strong>Est-ce que ?</strong> (inversion du sujet « c'est que »)</h3>
                    <h4 class="ms-4">A question whose answer is « oui » or « non »</h4>
                </div>

                <div class="mt-5">
                    <h3><strong>Interrogatif + est-ce que ?</strong> (formal, polite)</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 mt-5 mt-sm-0">
                <div class="">
                    <h4>Qui est là ?</h4>
                    <h4>À qui tu parles et de qui tu parles?</h4>
                    <h4>Tu vas chez qui et avec qui ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Que se passe-t-il? Que manges-tu ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Tu manges quoi ?</h4>
                    <h4>À quoi tu penses ?</h4>
                    <h4>De quoi tu os peur ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Comment peux-tu me faire ça ?</h4>
                    <h4>Comment tu viens demain ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Tu es né quand ?</h4>
                    <h4>Quand viens-tu me voir ?</h4>
                    <h4>Depuis quand il est parti ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Pourquoi tu es en retard ?</h4>
                    <h4>Pourquoi tu es végétarien ?</h4>
                </div>

                <div class="mt-5">
                    <h4>D'où tu viens?</h4>
                    <h4>Où se trouve lo château ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Combien ça coûte ?</h4>
                    <h4>Combien vous dépensez par mois ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Quel est ton animal préféré ?</h4>
                    <h4>De quelle ville tu viens ?</h4>
                </div>


                <div class="mt-5">
                    <h4>Est-ce qu'il reste du fromage dans le frigo ?</h4>
                    <h4>Est-ce que tu as bien dormi ?</h4>
                </div>

                <div class="mt-5">
                    <h4>Qu'est-ce que tu fais ?</h4> 
                    <h4>Où est-ce que tu vas ?</h4>
                    <h4>Où est-ce que c'est ?</h4>
                    <h4>Pourquoi est-ce qu'il est là ?</h4>
                    <h4>Combien est-ce que ça coûte ?</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection