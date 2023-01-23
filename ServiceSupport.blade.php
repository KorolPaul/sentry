@extends('layouts.app')
@section('content')
    @include('includes_file.header')

    <main>
        <?php $sectionHolder = \App\Models\ServiceHeader::first() ?>
        @if($sectionHolder != null)
            @if($sectionHolder->header == null &&$sectionHolder->text == null && $sectionHolder->photo == null)

                @else
        <section class="section">
            <div class="section_holder">
                <div class="intro">
                    <div class="intro_content">
                        <h1> {{$sectionHolder->header}}
{{--                            Service &&nbsp;Support--}}
                        </h1>
                        <div class="intro_text">
                            <p>
                                {{$sectionHolder->text}}
{{--                                Sentry’s Integrated omnichannel call center system allows tracking phone calls to provide better and faster service.--}}
                            </p>
                        </div>
                    </div>
                    <img src="{{asset('uploads/'.$sectionHolder->photo)}}" alt="" class="intro_image">
                </div>
            </div>
        </section>
                @endif
            @endif

            <?php $sectionDark = \App\Models\ServiceContentTwo::OrderBy('id', 'desc')->get() ?>
            @if(!$sectionDark->isEmpty())
        <section class="section section__dark">
            <div class="section_holder">
                <?php $getHeader = \App\Models\ServiceContentTwo::where('GeneralHeader','!=' ,null)->orderBy('updated_at', 'desc')->first() ?>
                <h2>
                    {{$getHeader->GeneralHeader}}
{{--                    Customer oriented and well-trained--}}
                </h2>

                <ul class="checklist">
                    @foreach($sectionDark as $dark)
                    <li class="checklist_item">
                        <h3 class="checklist_title">
                        {{$dark->textOne}}
{{--                            Call-center--}}
                        </h3>
                        {{$dark->text}}
{{--                        The Call Center staff is trained for passenger assistance with well-thought and pre-written day to day operation policies.--}}
                    </li>
                    @endforeach
{{--                    <li class="checklist_item">--}}
{{--                        <h3 class="checklist_title">Drivers</h3>--}}
{{--                        The drivers are also impeccably prepared to deal with any kind of passengers: they have access to a training website with all the detailed information and presentations to learn and do exams after--}}
{{--                    </li>--}}
                </ul>
                    <br>

            </div>
        </section>
            @endif

        <section class="section section__grey">
            <img class="section_bg" src="src/img/city-small.svg" alt="">

            <?php $sectionHolder =  \App\Models\ServiceContnentThree::first() ?>
            @if($sectionHolder != null)
            <div class="section_holder">
                <h2>
                {{$sectionHolder->header}}
{{--                    Support in numbers--}}
                </h2>
                <div class="support_mobile">
                    <img class="support_image" src="src/img/support-numbers-mobile.svg" alt="">

{{--                    <div class="support_mobile-item">--}}
{{--                        <span class="support_mobile-value">100%</span>--}}
{{--                        <span>Сomplete support of CMS requirements for call handling</span>--}}
{{--                    </div>--}}
{{--                    <div class="support_mobile-item">--}}
{{--                        <span class="support_mobile-value">ZERO</span>--}}
{{--                        <span>Blockage</span>--}}
{{--                    </div>--}}
{{--                    <div class="support_mobile-item">--}}
{{--                        <span class="support_mobile-value">1 DAY</span>--}}
{{--                        <span>Time within requested callbacks are completed of the original request</span>--}}
{{--                    </div>--}}
{{--                    <div class="support_mobile-item">--}}
{{--                        <span class="support_mobile-value">100%</span>--}}
{{--                        <span>Of all incoming member calls will be acknowledged within 20 seconds (4 rings)</span>--}}
{{--                    </div>--}}
{{--                    <div class="support_mobile-item">--}}
{{--                        <span class="support_mobile-value">100%</span>--}}
{{--                        <span>Availability of Spanish and English live agents</span>--}}
{{--                    </div>--}}
{{--                    <div class="support_mobile-item">--}}
{{--                        <span class="support_mobile-value">100%</span>--}}
{{--                        <span>Availability of additional language lines for all other languages</span>--}}
{{--                    </div>--}}
{{--                    <div class="support_mobile-item">--}}
{{--                        <span class="support_mobile-value">24/7</span>--}}
{{--                        <span>Customer support metrics are closely monitored to meet the expectations of the client's need</span>--}}
{{--                    </div>--}}
                </div>
                <div class="support_desktop">
                    <img src="{{asset('uploads/'.$sectionHolder->photo)}}" alt="">
                </div>
            </div>
                @endif
        </section>

            <?php $support = \App\Models\ServiceContentFor::first() ?>

        <section class="section">
            @if($support != null)
            <div class="section_holder">
                <h2>
                    {{$support->header}}
{{--                    Ready to help at any moment--}}
                </h2>
                <div class="support">
                    <div class="support_columns">
                        <div class="support_column">
                            <img src="{{asset('uploads/'.$support->photoOne)}}" alt="" class="support_icon">
                            <h3 class="support_title">
{{--                                Customer Support--}}
                            {{$support->preheaderOne}}
                            </h3>
                            <span class="support_item">
{{--                                Call supervisors--}}
                            {{$support->textOne}}
                            </span>
                            <span class="support_item">
{{--                                Customer service reps--}}
                            {{$support->textTwo}}
                            </span>
                        </div>
                        <div class="support_column">
                            <img src="{{asset('uploads/'.$support->photoTwo)}}" alt="" class="support_icon">
                            <h3 class="support_title">
{{--                                Quality Assurance--}}
                            {{$support->preheadeTwo}}
                            </h3>
                            <span class="support_item">
{{--                                Complaint specialists--}}
                            {{$support->textOneTwo}}
                            </span>
                            <span class="support_item">
{{--                                Real-time monitoring--}}
                                {{$support->textTwoTwo}}
                            </span>
                        </div>
                        <div class="support_column">
                            <img src="{{asset('uploads/'.$support->photoThree)}}" alt="" class="support_icon">
                            <h3 class="support_title">
{{--                            --}}{{----}}{{--    Network Oversight--}}
                           {{$support->preheadeThree}}
                            </h3>
                            <span class="support_item">
{{--                                Relationship managers--}}
                          {{$support->textOneTwoThree}}
                            </span>
                            <span class="support_item">
{{--                                Trip dispatchers--}}
                    {{$support->textTwoTwoThree}}
                            </span>
                        </div>
                    </div>
                    @endif
                    <?php $SupportColumns = \App\Models\ServiceContentHighlights::first() ?>
                    @if($SupportColumns != null)
                    <h2 class="support_columns-title">
{{--                        Highlights--}}
                    {{$SupportColumns->header}}
                    </h2>
                    <div class="support_grid">
                        @if($SupportColumns->textOne == null)

                            @else
                            <span class="support_item">
{{--                                Live trips monitoring team--}}
{{$SupportColumns->textOne}}
                            </span>
                        @endif
                        @if($SupportColumns->textTwo == null)
                            @else
                                <span class="support_item">{{$SupportColumns->textTwo }}    </span>
                            @endif
                            @if($SupportColumns->textThree == null)
                            @else    <span class="support_item">{{$SupportColumns->textThree}} </span>
                            @endif
                            @if($SupportColumns->textFor == null)
                                @else
                        <span class="support_item">{{$SupportColumns->textFor}}</span>
                            @endif
                            @if($SupportColumns->textFive == null)

                                @else

                                <span class="support_item">{{$SupportColumns->textFive}}</span>
                            @endif
                            @if($SupportColumns->textSix == null)

                                @else

                                <span class="support_item">{{$SupportColumns->textSix}}</span>
                            @endif
                            @if($SupportColumns->textSeven == null)

                                @else

                                <span class="support_item">{{$SupportColumns->textSeven}}</span>
                            @endif

                            @if($SupportColumns->textEight == null)

                                @else

                                <span class="support_item">{{$SupportColumns->textEight }}</span>
                            @endif
                    </div>
                        @endif

                </div>
            </div>
        </section>


    </main>
    <div class="cookies" bis_skin_checked="1">
        <div class="cookies_text" bis_skin_checked="1">
            <p>We use cookies to improve your experience on our website. By browsing this website, you agree to our <a target="_blank" href="{{route('Policy')}}" bis_skin_checked="1">use of cookies</a>.</p>
        </div>
        <button class="cookies_button">Ok</button>
    </div>


    @include('includes_file.footer')

    <div class="fade"></div>
@endsection

