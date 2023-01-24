@extends('layouts.app')
@section('content')
    @include('includes_file.header')
    <main>
    <?php $sectionHolder = \App\Models\HowItWork::first() ?>
        {{--        @dd($sectionHolder->header)--}}
        @if($sectionHolder != null)
            @if($sectionHolder->header == null &&$sectionHolder->text == null && $sectionHolder->photo == null)
            @else
                <section class="section">
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
                    {{--            @dd($sectionHolderaaasd)--}}

                    <div class="section_holder">
                        <?php $sectionContent = \App\Models\HowitWorkContent::get() ?>
{{--                        @dd($sectionContent[0]->header)--}}
                        <h2>
                            {{$sectionContent[0]->header}}
{{--                            Every trip follows these--}}
                            <div class="bright"></div>
                        </h2>
                        <div class="steps">
                            <div class="steps_slider">
                                <?php $sectionHolderaaasd = \App\Models\HowitWorkContentPhotos::get() ?>
                                @foreach($sectionHolderaaasd as $sectionHolderaaasda)
                                    <div class="steps_slide">
                                        <div class="step">
                                            <img src="{{asset('uploads/'.$sectionHolderaaasda->photo)}}" alt=""
                                                 class="step_icon">
                                            <button class="step_title">
                                                <div class="step_title-icon"></div>
                                                Reservation
                                            </button>
                                            <p class="step_description">{{$sectionHolderaaasda->text}}</p>
                                        </div>
                                    </div>
                                @endforeach
                                {{--                        <div class="steps_slide">--}}
                                {{--                            <div class="step">--}}
                                {{--                                <img src="src/img/steps/step-2.svg" alt="" class="step_icon">--}}
                                {{--                                <button class="step_title">--}}
                                {{--                                    <div class="step_title-icon"></div>--}}
                                {{--                                    Confirmation--}}
                                {{--                                </button>--}}
                                {{--                                <p class="step_description">Sentry’s dedicated support team reviews & confirms specific trip details, ensuring the reservation information is accurate, meets the passenger's needs, & is cost-effective</p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                        <div class="steps_slide">--}}
                                {{--                            <div class="step">--}}
                                {{--                                <img src="src/img/steps/step-3.svg" alt="" class="step_icon">--}}
                                {{--                                <button class="step_title">--}}
                                {{--                                    <div class="step_title-icon"></div>--}}
                                {{--                                    Choosing a provider--}}
                                {{--                                </button>--}}
                                {{--                                <p class="step_description">Routers & dispatchers, utilizing experience & analytics, determine what transportation provider across Sentry’s network is optimal</p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                        <div class="steps_slide">--}}
                                {{--                            <div class="step">--}}
                                {{--                                <img src="src/img/steps/step-4.svg" alt="" class="step_icon">--}}
                                {{--                                <button class="step_title">--}}
                                {{--                                    <div class="step_title-icon"></div>--}}
                                {{--                                    Assignment--}}
                                {{--                                </button>--}}
                                {{--                                <p class="step_description">The designated transportation provider assigns a credentialed vehicle/driver to the trip’s pickup location</p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                        <div class="steps_slide">--}}
                                {{--                            <div class="step">--}}
                                {{--                                <img src="src/img/steps/step-5.svg" alt="" class="step_icon">--}}
                                {{--                                <button class="step_title">--}}
                                {{--                                    <div class="step_title-icon"></div>--}}
                                {{--                                    All ready!--}}
                                {{--                                </button>--}}
                                {{--                                <p class="step_description">All information about the trip from the transportation provider instantly sent to Sentry’s system </p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                        <div class="steps_slide">--}}
                                {{--                            <div class="step">--}}
                                {{--                                <img src="src/img/steps/step-6.svg" alt="" class="step_icon">--}}
                                {{--                                <button class="step_title">--}}
                                {{--                                    <div class="step_title-icon"></div>--}}
                                {{--                                    Transportation--}}
                                {{--                                </button>--}}
                                {{--                                <p class="step_description">When the vehicle arrives, the passenger is notified, picked up, & brought to their destination</p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                        <div class="steps_slide">--}}
                                {{--                            <div class="step">--}}
                                {{--                                <img src="src/img/steps/step-7.svg" alt="" class="step_icon">--}}
                                {{--                                <button class="step_title">--}}
                                {{--                                    <div class="step_title-icon"></div>--}}
                                {{--                                    Trip monitoring--}}
                                {{--                                </button>--}}
                                {{--                                <p class="step_description">The trip is monitored by the Sentry team from beginning to end in real-time to ensure on-time, successful transportation service delivery</p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                                {{--                        <div class="steps_slide">--}}
                                {{--                            <div class="step">--}}
                                {{--                                <img src="src/img/steps/step-8.svg" alt="" class="step_icon">--}}
                                {{--                                <button class="step_title">--}}
                                {{--                                    <div class="step_title-icon"></div>--}}
                                {{--                                    Feedbacks--}}
                                {{--                                </button>--}}
                                {{--                                <p class="step_description">Sentry’s customer service contacts the passenger, driver, & facility to coordinate effective pick-ups, and drop-offs, & gather feedback</p>--}}
                                {{--                            </div>--}}
                                {{--                        </div>--}}
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section__grey">
                    <div class="section_holder">
                        <div class="themes">
                            <?php $sectionHolderheader = \App\Models\HowitWorkContentOneHeader::get() ?>

                            @foreach($sectionHolderheader as $sectionHolderheaders)
                                {{--                    @foreach()--}}
                                <h1 class="themes_title">
                                    {{$sectionHolderheaders->header}}
                                    <br>
                                    {{--                        5 Themes--}}
                                </h1>
                            @endforeach
                            <?php $sectionHolderheaderaaas = \App\Models\HowitWorkTwoContent::get() ?>

                            @foreach($sectionHolderheaderaaas as $asdd)
                                    <script>

                                    </script>
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
                                        <img src="src/img/themes/theme-1.svg" data-tab="1" alt=""
                                             class="themes_image active">
                                        <img src="src/img/themes/theme-2.svg" data-tab="2" alt="" class="themes_image">
                                        <img src="src/img/themes/theme-3.svg" data-tab="3" alt="" class="themes_image">
                                        <img src="src/img/themes/theme-4.svg" data-tab="4" alt="" class="themes_image">
                                        <img src="src/img/themes/theme-5.svg" data-tab="5" alt="" class="themes_image">
                                    </div>
                                </div>
                                    <script>
                                        const themesButtons = document.querySelectorAll('.themes_button');
                                        themesButtons.forEach(el => {

                                            el.addEventListener('click', (e) => {
                                                themesButtons.forEach(el => {
                                                    if (el !== e.target) {
                                                        el.classList.remove('active')
                                                    }
                                                });
                                                e.currentTarget.classList.add('active');

                                                const tab = e.currentTarget.dataset.tab || 1;

                                                document.querySelectorAll('.themes_image').forEach(el => {
                                                    if (el !== e.target) {
                                                        el.classList.remove('active')
                                                    }
                                                });
                                                document.querySelector(`.themes_image[data-tab="${tab}"]`).classList.add('active');
                                            });
                                        });

                                    </script>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="section">
                    <?php $ManagingOperation = \App\Models\ManagingOperations::get() ?>
                    {{--            @dd($ManagingOperation[0])--}}

                    <div class="section_holder">
                        <h2>
                            Managing Operations
                        </h2>
                        <div class="operations">
                            <div class="operations_columns">
                                <span class="operations_title">1. {{$ManagingOperation[0]->serve_plan}}</span>
                                <span class="operations_title">2. {{$ManagingOperation[1]->serve_plan}}</span>
                                <span class="operations_title">3.{{$ManagingOperation[2]->serve_plan}} </span>
                                <div class="operations_column">
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-1.svg" alt="" class="operation_icon">
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
                                            <img src="src/img/operations/operation-2.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[1]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[1]->list_requirements_content}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-3.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[2]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[2]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-4.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[3]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[3]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="operations_column">
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-5.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[4]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[4]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-6.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[5]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[5]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-7.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[6]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[6]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="operations_columns">
                                <span class="operations_title">4. {{$ManagingOperation[7]->serve_plan}}</span>
                                <span class="operations_title">5. {{$ManagingOperation[8]->serve_plan}}</span>
                                <span class="operations_title">6. {{$ManagingOperation[11]->serve_plan}}</span>
                                <div class="operations_column">
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-8.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[7]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[7]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="operations_column">
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-9.svg" alt="" class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[8]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[8]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-10.svg" alt=""
                                                 class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[9]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[9]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-11.svg" alt=""
                                                 class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[10]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[10]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="operations_column">
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-12.svg" alt=""
                                                 class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[11]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[11]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-13.svg" alt=""
                                                 class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[12]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[12]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="operation">
                                            <img src="src/img/operations/operation-14.svg" alt=""
                                                 class="operation_icon">
                                            <div>
                                                <span class="operation_title">{{$ManagingOperation[13]->list_requirements}}</span>
                                                <span>{{$ManagingOperation[13]->list_requirements}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    </main>

    <div class="cookies" bis_skin_checked="1">
        <div class="cookies_text" bis_skin_checked="1">
            <p>We use cookies to improve your experience on our website. By browsing this website, you agree to our <a target="_blank" href="{{route('Policy')}}" bis_skin_checked="1">use of cookies</a>.</p>
        </div>
        <button class="cookies_button">Ok</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </div>

    @include('includes_file.footer')
    <script>
        const stepTitleElements = document.querySelectorAll('.step_title');
        stepTitleElements.forEach(el => {

            el.addEventListener('click', (e) => {
                e.preventDefault();

                e.currentTarget.classList.toggle('opened');
            });
        });
    </script>
@endsection
<script src="{{asset('src/js/main.js')}} "></script>




