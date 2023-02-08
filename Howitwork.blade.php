@extends('layouts.app')
@section('content')
    @include('includes_file.header')

    <main>
        <?php $sectionContent = \App\Models\HowitWorkContent::first() ?>

        <?php
            $explode = explode(' ', $sectionContent->youtube_url);
            if (isset($explode[3])) {
                $video = str_replace('"', '', $explode[3]);

            } else {
                $video = 'src=""';

            }
        ?>

        <?php $sectionHolder = \App\Models\HowItWork::first() ?>

        {{--        @dd($sectionHolder->header)--}}
        @if($sectionHolder != null)
            @if($sectionHolder->header == null &&$sectionHolder->text == null && $sectionHolder->photo == null)
            @else
                @if(isset($explode[3]))
                <section class="section section__big-bottom-indent">
                @else
                <section class="section">
                @endif
                    <div class="section_holder">
                        <div class="intro">
                            <div class="intro_content">
                                <h1>{{$sectionHolder->header}}</h1>
                                <div class="intro_text">
                                    <p>{{$sectionHolder->text}}</p>
                                </div>
                            </div>

                            <img src="{{asset('/uploads/'.$sectionHolder->photo)}}" alt="" class="intro_image">
                        </div>
                    </div>
                    @endif
                    @endif

                </section>

                <section class="section section__dark section__video">
                    <div class="section_holder">
                        
                        @if(isset($explode[3]))
                            <div class="section_video">

                                    <div class="app_video-wrapper">
                                        <iframe width="560" height="315" {{ $video}} title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            @else

                            
                            @endif
                        <h2>
                            {{$sectionContent->header}}
                            <div class="bright"> {{$sectionContent->SubHeader}}</div>
                        </h2>
                    </div>
                </div>

                    <div class="steps">
                        <div class="steps_slider">
                                                <?php $sectionHolderaaasd = \App\Models\HowitWorkContentPhotos::get() ?>
                                               @foreach($sectionHolderaaasd as $sectionHolderaaasda)

                            <div class="steps_slide">
                                <div class="step">
                                    <img src="{{asset('uploads/'.$sectionHolderaaasda->photo)}}" alt="" class="step_icon">
                                    <button class="step_title">
                                        <div class="step_title-icon"></div>
                                                                        {{$sectionHolderaaasda->text_header}}
                                    </button>
                                    <p class="step_description">{{$sectionHolderaaasda->text}}</p>
                                </div>
                            </div>
                                                    @endforeach

                       
                        </div>
                    </div>
                </section>

                <section class="section section__grey">
                    <div class="section_holder">
                        <div class="themes">
                            <?php $sectionHolderheader = \App\Models\HowitWorkContentOneHeader::get() ?>

                            @foreach($sectionHolderheader as $sectionHolderheaders)

                                <h1 class="themes_title">
                                    {{$sectionHolderheaders->header}}
                                    <br>
                                    {{$sectionHolderheaders->SubHeader}}
                                </h1>
                            @endforeach
                            <?php $sectionHolderheaderaaas = \App\Models\HowitWorkTwoContent::get() ?>

                            @foreach($sectionHolderheaderaaas as $asdd)
 
                                <div class="themes_columns">
                                    <div class="themes_buttons">
                                        <button class="themes_button active" data-tab="1">
                                            <span class="themes_button-title">{{$asdd->project_management}}</span>
                                            <span class="themes_button-subtitle">{{$asdd->project_management_text}}</span>
                                        </button>
                                        <button class="themes_button" data-tab="2">
                                            <span class="themes_button-title">{{$asdd->technology}}</span>
                                            <span class="themes_button-subtitle">{{$asdd->technology_text}}</span>
                                        </button>
                                        <button class="themes_button" data-tab="3">
                                            <span class="themes_button-title">{{$asdd->compliance}}</span>
                                            <span class="themes_button-subtitle">{{$asdd->compliance_text}}</span>
                                        </button>
                                        <button class="themes_button" data-tab="4">
                                            <span class="themes_button-title">{{$asdd->transportation_provider_network}}</span>
                                            <span class="themes_button-subtitle">{{$asdd->transportation_provider_network_text}}</span>
                                        </button>
                                        <button class="themes_button" data-tab="5">
                                            <span class="themes_button-title">{{$asdd->customer_service_support}}</span>
                                            <span class="themes_button-subtitle">{{$asdd->customer_service_support_text}}</span>
                                        </button>
                                    </div>
                                    <div class="themes_holder">
                                        <?php $sectionHolderheaderphoto = \App\Models\HowitWorkTwoContentPhoto::get() ?>
{{--                                        @dd($sectionHolderheaderphoto)--}}

                                        <img src="{{asset('uploads/'.$sectionHolderheaderphoto[0]->photo)}}" data-tab="1" alt=""
                                             class="themes_image active">
                                        <img src="{{asset('uploads/'.$sectionHolderheaderphoto[1]->photo)}}" data-tab="2" alt="" class="themes_image">
                                        <img src="{{asset('uploads/'.$sectionHolderheaderphoto[2]->photo)}}" data-tab="3" alt="" class="themes_image">
                                        <img src="{{asset('uploads/'.$sectionHolderheaderphoto[3]->photo)}}" data-tab="4" alt="" class="themes_image">
                                        <img src="{{asset('uploads/'.$sectionHolderheaderphoto[4]->photo)}}" data-tab="5" alt="" class="themes_image">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>

                <section class="section">
                    <?php $ManagingOperation = \App\Models\ManagingOperations::get(); ?>
                    <?php $ManagingOperationHeaders = \App\Models\MeanagingOperationHeaders::get(); ?>

                    @foreach($sectionHolderheader as $sectionHolderheaders)

                        <div class="section_holder">
                            <h2>
{{--                                @dd($ManagingOperationHeaders[0])--}}
                                {{$ManagingOperationHeaders[0]->title}}
                            </h2>
                            @endforeach
                            <div class="operations">
                                <div class="operations_columns">
{{--                                    <span class="operations_title">1. {{$ManagingOperation[0]->serve_plan}}</span>--}}
{{--                                    <span class="operations_title">2. {{$ManagingOperation[1]->serve_plan}}</span>--}}
{{--                                    <span class="operations_title">3. {{$ManagingOperation[2]->serve_plan}}</span>--}}
                                    <span class="operations_title">1. {{$ManagingOperationHeaders[1]->title}}</span>
                                    <span class="operations_title">2. {{$ManagingOperationHeaders[2]->title}}</span>
                                    <span class="operations_title">3. {{$ManagingOperationHeaders[3]->title}}</span>
                                    <div class="operations_column">
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[0]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[0]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[0]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="operations_column">
                                        <div>
                                            <div class="operation">
                                                <img src=" {{asset('uploads/'.$ManagingOperation[1]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[1]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[1]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[2]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[2]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[2]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[3]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[3]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[3]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="operations_column">
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[4]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[4]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[4]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[5]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[5]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[5]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[6]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[6]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[6]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="operations_columns">
                                    <span class="operations_title">4. {{$ManagingOperationHeaders[4]->title}}</span>
                                    <span class="operations_title">5. {{$ManagingOperationHeaders[5]->title}}</span>
                                    <span class="operations_title">6. {{$ManagingOperationHeaders[6]->title}}</span>
                                    <div class="operations_column">
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[7]->photo)}} " alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[7]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[7]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="operations_column">
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[8]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[8]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[8]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[9]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[9]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[9]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[10]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[10]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[10]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="operations_column">
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[11]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[11]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[11]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[12]->photo)}}" alt=""
                                                     class="operation_icon">
                                                <div>
                                                    <span class="operation_title">{{$ManagingOperation[12]->list_requirements}}</span>
                                                    <span>{{$ManagingOperation[12]->list_requirements_content}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>

                                            <div>
                                                <div class="operation">
                                                    <img src="{{asset('uploads/'.$ManagingOperation[12]->photo)}}" alt=""
                                                         class="operation_icon">
                                                    <div>
                                                        <span class="operation_title">{{$ManagingOperation[13]->list_requirements}}</span>
                                                        <span>{{$ManagingOperation[13]->list_requirements_content}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
    </main>

    <div class="fade"></div>
        <div class="cookies" bis_skin_checked="1">
        <div class="cookies_text" bis_skin_checked="1">
            <p>We use cookies to improve your experience on our website. By browsing this website, you agree to our <a target="_blank" href="{{route('Policy')}}" bis_skin_checked="1">use of cookies</a>.</p>
        </div>
        <button class="cookies_button">Ok</button>
    </div>



    @include('includes_file.footer')
@endsection


