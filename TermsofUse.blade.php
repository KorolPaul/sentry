@extends('layouts.app')
<style>
    .header {
        padding-left: 0;
        padding-right: 0;
        /* justify-content: center; */
        /* display: flex; */
        padding: 50px 0;
        margin: auto;
    }
    .advantages_description {
        width: 100% ;
        order: 3;
        font-size: 15px;
        line-height: 161%;
        margin: auto;

    }

</style>
@include('includes_file.header')
@section('content')
    <div  class="advantages_item js-animation">
        <?php $Termsofuse = \App\Models\Tearmsofuse::first() ?>
{{--        @dd($Termsofuse)--}}
        <div class="advantages_description">
            <h3 class="advantages_title"> </h3>
            <p>
                {!! $Termsofuse->context !!}
            </p>
        </div>
    </div>    <div class="cookies" bis_skin_checked="1">
        <div class="cookies_text" bis_skin_checked="1">
            <p>We use cookies to improve your experience on our website. By browsing this website, you agree to our <a target="_blank" href="{{route('Policy')}}" bis_skin_checked="1">use of cookies</a>.</p>
        </div>
        <button class="cookies_button">Ok</button>
    </div>


    @include('includes_file.footer')
@endsection

