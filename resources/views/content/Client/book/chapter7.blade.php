@extends('layouts/contentNavbarLayout')

@section('title', 'Building a Sentence')

@section('vendor-style')
    <style>
        td{
            padding: 10px
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
        <h2 class="text-center text-uppercase text-primary">Building a Sentence</h2>
        <div class="mt-5">
            <h4>- Punctuation helps to understand a text. It can change the meaning of a sentence</h4>
            <h4>- The main punctuation marks are</h4>
        </div>
        <div class="table-responsive">
            <table class="table-bordered w-100 fs-5">
                <tbody>
                    <tr>
                        <td>le point</td>
                        <td>.</td>
                        <td>Major break</td>
                    </tr>
                    <tr>
                        <td>La virgule</td>
                        <td>,</td>
                        <td>Short break</td>
                    </tr>
                    <tr>
                        <td>Le point-virgule</td>
                        <td>;</td>
                        <td>Intermediate break</td>
                    </tr>
                    <tr>
                        <td>Le point d'interrogation</td>
                        <td>?</td>
                        <td>It ends an interrogative sentence.</td>
                    </tr>
                    <tr>
                        <td>Le point d’exclamation</td>
                        <td>!</td>
                        <td>It ends an exclamatory sentence.</td>
                    </tr>
                    <tr>
                        <td>Les deux points</td>
                        <td>:</td>
                        <td>They announce an enumeration.</td>
                    </tr>
                    <tr>
                        <td>Les points de suspension</td>
                        <td>…</td>
                        <td>They abbreviate a sentence.</td>
                    </tr>
                    <tr>
                        <td>Les guillemets</td>
                        <td>«	»</td>
                        <td>They frame a quote, a dialogue.</td>
                    </tr>
                    <tr>
                        <td>Le tiret</td>
                        <td>-</td>
                        <td>It is used in dialogues.</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-5">
            <h3>- Negative form</h3>
            <h4>All types of sentences can be in the affirmative or negative form.</h4>
            <h4 class="text-decoration-underline">Examples:</h4>
            <div class="">
                <h4>- Phrase déclarative</h4>
                <h4 class="text-center">J'aime les épinards.	/	Je n'aime pas les épinards.</h4>
                <h4>- Phrase interrogative</h4>
                <h4 class="text-center">Aimes-tu les épinards ?	/	N'aimes-tu pas les épinards ?</h4>
                <h4>-	Phrase exclamative</h4>
                <h4 class="text-center">C'est bon !	/	Ce n'est pas bon !</h4>
                <h4>- Phrase impérative</h4>
                <h4 class="text-center">Approche !	/	N’approche pas !</h4>
            </div>
        </div>

        <div class="mt-5">
            <h4>
                <strong>- There are different negations composed of two words: </strong>
                ne (ou n’) ... pas, ne (ou n’) plus, ne (ou n’) ... jamais, ne (ou n’) ... rien
            </h4>
            <h4 class="text-decoration-underline">
                Examples:
            </h4>
            <div class="text-center">
                <h4>Je ne mange pos de fruits.</h4>
                <h4>Tu ne manges jamais de fruits.</h4>
                <h4>II ne mange plus de fruits.</h4>
            </div>
        </div>

        <div class="mt-5">
            <h4>
                <strong>- Generally, the negation frames the verb, but for compound forms, the negation frames the auxiliary.</strong>
            </h4>
            <h4 class="text-decoration-underline">
                Examples:
            </h4>
            <div class="text-center">
                <h4>Je n'ai pas mangé de fruits. </h4>
                <h4>Tu n'as jamais mangé de fruits. </h4>
                <h4>Elle n'a guère mangé de fruits.</h4>
            </div>
        </div>
    </div>
</div>
@endsection