@extends('layouts/contentNavbarLayout')

@section('title', 'Homophones – Part 2')

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
    <div class="card-body fs-4">
        <h2 class="text-center text-uppercase text-primary">Homophones – Part 2</h2>

        <h3 class="text-center">
            ce , se or ceux ? ces or ses ? c'est or s'est ? sois or soit ?...
        </h3>

        <div class="mt-5">
            <h4>- How to recognize <span class="text-danger">ce</span> , <span class="text-danger">se</span> or <span
                    class="text-danger">ceux</span> ?</h4>
            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">ce : I can replace it with <span class="text-danger">ces</span>. The demonstrative
                determiner is used to designate an animal, an object...</h4>

            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">
                se : I can replace it with
                <span class="text-danger">me</span> or
                <span class="text-danger">te</span>.
                It is the reflexive personal pronoun used with pronominal verbs:
                <span class="text-danger">se</span> laver,
                <span class="text-danger">se</span> lever...
            </h4>

            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">
                ceux : I can replace it with
                <span class="text-danger">celui</span>
                . It is a demonstrative determiner.
            </h4>
        </div>

        <div class="mt-5">
            <h4>
                - How to recognize
                <span class="text-danger">ces</span> ,
                <span class="text-danger">ses</span> ,
                <span class="text-danger">c'est</span> ,
                <span class="text-danger">s'est</span> ,
                <span class="text-danger">sais</span> ,
                <span class="text-danger">sait</span> ?
            </h4>
            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">
                ces : I can replace it with 
                <span class="text-danger">les</span>. The demonstrative determiner is used to designate an animal, an object...
            </h4>

            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">
                ses : I can replace it with 
                <span class="text-danger">son</span>. It is a possessive determinant which is used to show ownership.
            </h4>

            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">
                c'est : I can replace it with 
                <span class="text-danger">c'était</span>. It is a demonstrative pronoun ce + être
            </h4>

            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">
                s'est : I can replace it with 
                <span class="text-danger">je</span> me suis. It is the reflexive personal pronoun se + être
            </h4>

            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">sais : I can replace it with 
                <span class="text-danger">savais</span>. It is the verb savoir</h4>

            <h4 class="text-decoration-underline">Example</h4>
            <h4 class="ms-5 ps-5">sait : I can replace it with 
                <span class="text-danger">savait</span>. C'est le verbe savoir</h4>
        </div>
    </div>
</div>
@endsection