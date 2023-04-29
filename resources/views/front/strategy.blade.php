@extends('front.master')
@section('title', 'Web Development -' . config('app.name'))
@section('content')
@if (app()->currentLocale() == 'ar')
<style>
    .our-project .container .projects .project .text p {
        text-align: justify;
    }
</style>
<div class="header"
style="background:  url('{{asset('siteassets/images/background-sub/stratigy-ar.svg')}}') no-repeat center center / cover">
</div>
@endif
@if (app()->currentLocale() == 'en')
<div class="header"
style="background:  url('{{asset('siteassets/images/background-sub/stratigy-en.svg')}}') no-repeat center center / cover">
</div>
@endif
@php
    use App\Models\Service;
    use App\Models\Work;
    use App\Models\Solution;
@endphp

<style>
    .our-project .container .projects .project .text p {
        margin-top: 30px !important
    }
</style>

        <!-- Our Project -->
        <section class="our-project">
            <div class="container">
                <div class="text ">
                    <h2 class="title wow animate__animated animate__backInLeft">
                        {{__('site.Three steps')}}
                    </h2>
                    <!-- <p class="p-section">
                        {{__("site.stratigy_page_title")}}
                    </p> -->
                </div>
                <div class="projects">
                    <div class="project project1">
                        <embed style="width: 300px; height:300px" src="{{ asset('siteassets/images/design.svg') }}" alt="image project">
                        <div class="text">
                            <h1>{{__("site.stratigy_1_title")}}</h1>
                            <div class="line"></div>
                            <p>{{__("site.stratigy_1")}}</p>
                        </div>
                    </div>
                    <div class="project project2">
                        <embed style="width: 300px; height:300px" src="{{ asset('siteassets/images/build.svg') }}" alt="image project">
                        <div class="text">
                            <h1>{{__("site.stratigy_2_title")}}</h1>
                            <div class="line"></div>
                            <p>{{__("site.stratigy_2")}}</p>
                        </div>
                    </div>
                    <div class="project project1">
                        <embed style="width: 300px; height:300px" src="{{ asset('siteassets/images/run.svg') }}" alt="image project">
                        <div class="text">
                            <h1>{{__("site.stratigy_3_title")}}</h1>
                            <div class="line"></div>
                            <p>{{__("site.stratigy_3")}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@stop
