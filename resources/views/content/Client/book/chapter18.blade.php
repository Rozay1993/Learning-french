@extends('layouts/contentNavbarLayout')

@section('title', 'HOMOPHONES')

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
        <h2 class="text-center text-uppercase text-primary">HOMOPHONES</h2>

        <h3 class="text-center">
            a or à ? , ou or où ? , on or ont ? , son or sont ? on or on n' ?
        </h3>

        <div class="mt-5">
            <h4>- How to recognize <span class="text-danger">a</span> and <span class="text-danger">à</span>?</h4>
            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">a : I can replace it with <span class="text-danger">avait</span>. It is the verb <span
                    class="text-danger">avoir</span>.</h4>

            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">
                à : I can't replace it with
                <span class="text-danger">avait</span>.
                It is an <span class="text-danger">invariable preposition</span>.
            </h4>
        </div>

        <div class="mt-5">
            <h4>- How to recognize <span class="text-danger">ou</span> and <span class="text-danger">où</span> ?</h4>
            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">
                ou : I can replace it with
                <span class="text-danger">ou bien</span>.
                It is <span class="text-danger">a coordinating conjunction</span>.
            </h4>

            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">
                où : I can't replace it with ou bien. It is an <span class="text-danger">adverb of location</span>.
            </h4>
        </div>

        <div class="mt-5">
            <h4>
                - How to recognize
                <span class="text-danger">ont</span> and
                <span class="text-danger">on</span> ?
            </h4>

            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">ont : I can replace it with
                <span class="text-danger">avaient</span>.
                It is the verb
                <span class="text-danger">avoir</span>.
            </h4>

            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">on : I can replace it with
                <span class="text-danger">il</span>. It is a
                <span class="text-danger">personal pronoun</span>.
            </h4>
        </div>

        <div class="mt-5">
            <h4>- How to recognize
                <span class="text-danger">sont</span> and
                <span class="text-danger">son</span> ?
            </h4>
            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">sont : I can replace it with
                <span class="text-danger">étaient</span>. It is the verb
                <span class="text-danger">être</span>.
            </h4>


            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">son : I can replace it with
                <span class="text-danger">mon</span> or
                <span class="text-danger">ton</span>. It is a
                <span class="text-danger">determiner</span>.
            </h4>
        </div>

        <div class="mt-5">
            <h4>
                - How to recognize
                <span class="text-danger">on</span> and
                <span class="text-danger">on n’</span> ?
            </h4>
            <h4 class="text-decoration-underline">Example :</h4>
            <h4 class="ms-5 ps-5">
                when the subject of a verb, beginning with a vowel, is the indefinite pronoun
                <span class="text-danger">on</span>, it
                must be replaced by
                <span class="text-danger">il</span> to know whether to write the negation n'
            </h4>
        </div>
    </div>
</div>
@endsection