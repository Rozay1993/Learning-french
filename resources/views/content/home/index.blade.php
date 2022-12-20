@extends('layouts/contentNavbarLayout')

@section('title', 'Learning-French || Home')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <p class="h1">
            Where do I go from here?
        </p>
        <p class="h3">
            If you have gotten this far, here is your logical next step: you need “language immersion”, in a guided
            orderly manner, and the ‘FRENCH LIBRARY’ series helps.
        </p>
        <div class="row align-items-center justify-content-evenly mt-5">
            <div class="col-12 col-md-5">
                <div class="row justify-content-evenly">
                    <div class="col-sm-8 col-md-12 col-xxl-10">
                        <img src="{{asset('assets/img/other/phone.png')}}" alt="phone" class="home-phone-img" />
                    </div>
                </div>
            </div>
            <div class="my-4 d-md-none"></div>
            <div class="col-12 col-md-5">
                <p class="fs-4">
                    These are "Read to me!" fully illustrated story books that have English and the language that you
                    are learning. And it has voice, I mean each page is read out to you and you learn the correct way to
                    say it just like natives.
                </p>
                <div class="my-4"></div>
                <p class="fs-4">
                    These are "Read to me!" fully illustrated story books that have English and the language that you
                    are learning. And it has voice, I mean each page is read out to you and you learn the correct way to
                    say it just like natives.
                </p>
            </div>
        </div>
        <div class="mt-5">
            <p class="fs-4">
                And as you read thru these 70 books one by one, and you continue to watch, listen, and read, even
                without trying you will learn new words. To learn a new language, you have to keep it fun and
                interesting. And that is exactly what these dual language library apps are for. Download today and
                actually start enjoying the language, instead of just learning it.
            </p>
            <p class="fs-4">
                Download the FRENCH LIBRARY APP today on <a href="https://reader.us.com/french"
                    target="_blank">https://reader.us.com/french</a> You do require an android phone to
                use this app.
            </p>
            <p class="fs-4">
                If you prefer the printed versions, you can find them here on amazon.com for world-wide shipping:
                <a href="https://www.amazon.com/dp/B09YHNGNDZ?binding=paperback&amp;ref=dbs_dp_rwt_sb_pc_tpbk"
                    target="_blank">https://www.amazon.com/dp/B09YHNGNDZ?binding=paperback&amp;ref=dbs_dp_rwt_sb_pc_tpbk</a>
                The learning will come by itself. Just give it time.
            </p>
        </div>
    </div>
</div>
@endsection