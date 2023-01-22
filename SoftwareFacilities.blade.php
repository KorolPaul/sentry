@extends('layouts.app')
@section('content')
    @include('includes_file.header')

    <?php $Header = \App\Models\SoftwareHeader::first();   ?>
    <main>
        @if($Header != null)
            @if($Header->header == null && $Header->text == null && $Header->photo == null)

            @else
                <section class="section">
                    <div class="section_holder">
                        <div class="intro">
                            <div class="intro_content">
                                <h1>{{$Header->header}}
                                    {{--                            //Software &&nbsp;Facilities--}}
                                </h1>
                                <div class="intro_text">
                                    <p>
                                        {{--                                Sentry has developed several owned apps and platforms to ease up the processes for the clients, partners, and staff.--}}
                                        {{$Header->text}}
                                    </p>
                                </div>
                            </div>
                            {{--                    <img src="src/img/software-and-facilities.svg" alt="" class="intro_image">--}}
                            <img src="{{asset('/uploads/'.$Header->photo)}}" alt="" class="intro_image">
                        </div>
                    </div>
                </section>
            @endif
        @endif

        <section class="section">
            <div class="app">
                <div class="app_holder">
                    <?php $appSection = \App\Models\SoftwareContentTwo::first() ?>
                    @if($appSection != null)

                        @if($appSection->header == null && $appSection->textOne == null && $appSection->textTwo == null && $appSection->textThree == null && $appSection->button == null)

                        @else
                            <div class="app_section">
                                <h2 class="app_section-title">{{$appSection->header}}
                                    {{--                            Non-emergency Medical Transportation Web Portal--}}

                                </h2>
                                <div class="app_section-content">
                                    <p> {{$appSection->textOne}}
                                        {{--                                Sentry is a full-service broker focused on the management of Non-Emergency Medical Transportation.--}}
                                    </p>
                                    <p>{{$appSection->textTwo}}
                                        {{--                                We provide our clients and partners with proprietary technologies and transparent reports to maintain industry-leading service quality.--}}

                                    </p>
                                    <p>
                                        {{$appSection->textThree}}
                                        {{--                                Sentry’s software platform seamlessly connects healthcare members and providers, insurance companies, NEMT transportation providers, and drivers.--}}
                                    </p>
                                    @if(isset($appSection->url))
                                        <a target="_blank" href="{{$appSection->url}}" class="button">
                                            {{$appSection->button}}
                                            {{--                                Sing Up--}}
                                        </a>
                                    @else
                                        <a href="#" class="button">
                                            {{$appSection->button}}
                                            {{--                                Sing Up--}}
                                        </a>
                                    @endif
                                    {{--                            <a href="{{$appSection->url}}" class="button">--}}
                                    {{--                                {{$appSection->button}}--}}
                                    {{--                                Sing Up--}}
                                    {{--                            </a>--}}
                                </div>
                            </div>

                            <?php   $explode = explode(' ', $appSection->iframe);
                            //       unset($explode[3]);

                            if (isset($explode[3])) {
                                $video = str_replace('"', '', $explode[3]);
                            } else {
                                $video = 'src=""';
                            }
                            ?>
                            @if(isset($explode[3]))
                                <div class="app_video">
                                    <div class="app_video-wrapper">
                                        <iframe width="560" height="315" {{ $video}} title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        {{--                            <iframe width="560" height="315" src="https://www.youtube.com/embed/V5da2rLyYCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                    </div>
                                </div>
                            @else

                            @endif
                        @endif
                    @endif
                    <?php $AppSection = \App\Models\SoftwareContentThree::first() ?>
                    {{--                        @dd($AppSection)--}}
                    @if($AppSection != null)
                        @if($AppSection->header == null && $AppSection->textOne == null && $AppSection->textTwo == null && $AppSection->AppStoreUrl == null && $AppSection->GooglePayUrl == null)

                        @else
                            <div class="app_section">
                                <h2 class="app_section-title">{{$AppSection->header}}
                                    {{--                            Driver Mobile App--}}
                                </h2>
                                <div class="app_section-content">
                                    <p>
                                        {{$AppSection->textOne}}
                                        {{--                                Sentry Driver Mobile App eases up the communication with drivers. They receive notifications with all the info about each ride every time it is dispatched to them.--}}
                                    </p>
                                    <p>
                                        {{$AppSection->textTwo}}
                                        {{--                                                                            Drivers use the same app to contact the passengers and find out about booking changes or special requests, while fleet providers use the same app to control drivers performance.
                                        --}}
                                    </p>
                                    <div class="app_section-links app_section-links__desktop">
                                        @if($AppSection->AppStoreUrl && $AppSection->GooglePayUrl == null)
                                            <a target="_blank" href={{$AppSection->AppStoreUrl}} class="app-link">
                                                <img src="src/img/appstore.svg" alt=""/>
                                            </a>
                                        @endif
                                        @if($AppSection->GooglePayUrl && $AppSection->AppStoreUrl == null)
                                            <a target="_blank" href={{$AppSection->GooglePayUrl}} class="app-link">
                                                <img src="src/img/googleplay.svg" alt=""/>
                                            </a>
                                        @endif
                                        @if($AppSection->GooglePayUrl && $AppSection->AppStoreUrl)
                                            <a target="_blank" href={{$AppSection->GooglePayUrl}} class="app-link">
                                                <img src="src/img/googleplay.svg" alt=""/>
                                            </a>
                                            <a  target="_blank" href={{$AppSection->AppStoreUrl}} class="app-link">
                                                <img src="src/img/appstore.svg" alt=""/>
                                            </a>
                                        @endif
                                        @if(!$AppSection->GooglePayUrl && !$AppSection->AppStoreUrl)
                                            <p>coming soon . . .</p>
                                        @endif
                                        {{--                                <a href={{$AppSection->AppStoreUrl}} class="app-link">--}}
                                        {{--                                    <img src="src/img/appstore.svg" alt="" />--}}
                                        {{--                                </a>--}}
                                        {{--                                <a href={{$AppSection->GooglePayUrl}} class="app-link">--}}
                                        {{--                                    <img src="src/img/googleplay.svg" alt="" />--}}
                                        {{--                                </a>--}}
                                    </div>
                                </div>
                            </div>
                        @endif
                            <div class="app_section-links app_section-links__mobile">
                                <a target="_blank" href="{{$AppSection->AppStoreUrl}}" class="app-link">
                                    <img src="src/img/appstore.svg" alt=""/>
                                </a>
                                <a target="_blank" href="{{$AppSection->GooglePayUrl}}" class="app-link">
                                    <img src="src/img/googleplay.svg" alt=""/>
                                </a>
                            </div>
                    @endif
                </div>
                <?php $AppScreens = \App\Models\SoftwareContentAppOne::first() ?>
                @if($AppScreens != null)
                    @if($AppScreens->imageOne == null && $AppScreens->imageTwo == null && $AppScreens->imageThree == null && $AppScreens->imageFor == null)

                    @else
                        <div class="app_screens">
                            <img src="src/img/app-road-1.svg" alt="" class="app_screens-bg">
                            <div class="app_holder">
                                <div class="app_screens-wrapper">
                                    <div>
                                        <img src="{{asset('uploads/'.$AppScreens->imageOne)}}" alt=""
                                             class="app_screen">
                                    </div>
                                    <div>
                                        <img src="{{asset('uploads/'.$AppScreens->imageTwo)}}" alt=""
                                             class="app_screen">
                                    </div>
                                    <div>
                                        <img src="{{asset('uploads/'.$AppScreens->imageThree)}}" alt=""
                                             class="app_screen">
                                    </div>
                                    <div>
                                        <img src="{{asset('uploads/'.$AppScreens->imageFor)}}" alt=""
                                             class="app_screen">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif



                <?php $appHolder = \App\Models\SoftwareContentFor::first(); ?>

                @if($appHolder != null)
                    @if($appHolder->header == null && $appHolder->text == null && $appHolder->AppUrl == null && $appHolder->GoogleUrl ==null)

                    @else
                        <div class="app_holder">
                            <div class="app_section">
                                <h2 class="app_section-title">
                                    {{$appHolder->header}}
                                    {{--                            Dispatch and Routing Software--}}
                                </h2>

                                <div class="app_section-content">
                                    <p>
                                    {{$appHolder->text}}


                                    {{--                                The platform includes automatizing dispatch and routing tools for drivers with all real-time information about passengers’ requests. It is created to optimize fleet usage. The Driver Mobile App is a vital part of the Dispatch and Routing Software.</p>--}}
                                    <div class="app_section-links ">
                                        <a target="_blank" href="{{$appHolder->AppUrl}}" class="button">{{$appHolder->button}}</a>

                                        {{--                                        <a href={{$appHolder->AppUrl}} class="app-link">--}}
{{--                                            <img src="src/img/appstore.svg" alt=""/>--}}
{{--                                        </a>--}}
{{--                                        <a href={{$appHolder->GoogleUrl}} class="app-link">--}}
{{--                                            <img src="src/img/googleplay.svg" alt=""/>--}}
{{--                                        </a>--}}
{{--                                        @dd($appHolder)--}}

{{--                                        @if($appHolder->AppUrl && $appHolder->GoogleUrl == null)--}}
{{--                                            <a href={{$appHolder->AppStoreUrl}} class="app-link">--}}
{{--                                                <img src="src/img/appstore.svg" alt=""/>--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                        @if($appHolder->GoogleUrl && $appHolder->AppUrl == null)--}}
{{--                                            <a href={{$appHolder->GoogleUrl}} class="app-link">--}}
{{--                                                <img src="src/img/googleplay.svg" alt=""/>--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                        @if($appHolder->GoogleUrl && $appHolder->AppUrl)--}}
{{--                                            <a href={{$appHolder->GoogleUrl}} class="app-link">--}}
{{--                                                <img src="src/img/googleplay.svg" alt=""/>--}}
{{--                                            </a>--}}
{{--                                            <a href={{$appHolder->AppUrl}} class="app-link">--}}
{{--                                                <img src="src/img/appstore.svg" alt=""/>--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                        @if(!$appHolder->GoogleUrl && !$appHolder->AppUrl)--}}
{{--                                            <p>coming soon . . .</p>--}}
{{--                                        @endif--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                <?php $app_slider_wrapper = \App\Models\SoftwareContentSlider::OrderBy('id', 'desc')->get()?>

                @if(!$app_slider_wrapper->isEmpty())
                    <div class="app_slider-wrapper">
                        <div class="app_slider">
                            @foreach($app_slider_wrapper as $photo)
                                <div class="app_slide">
                                    <img src="{{asset('uploads/'.$photo->photo)}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif


                <?php $AppHolder = \App\Models\SoftwareContentSix::first() ?>

                @if($AppHolder != null)
                    @if($AppHolder->header == null && $AppHolder->textOne == null && $AppHolder->textTwo == null && $AppHolder->AppUrl == null && $AppHolder->GoogleUrl == null)

                    @else

                        <div class="app_holder">
                            <div class="app_section">
                                <h2 class="app_section-title">
                                    {{--                            Sentry Passenger Application--}}
                                    {{$AppHolder->header}}
                                </h2>
                                <div class="app_section-content">
                                    <p>
                                        {{--                                Sentry Passenger Application allows users to request their preferred transportation providers, contact drivers and the support team, track their cars on the map and book new rides. </p>--}}
                                        {{$AppHolder->textOne}}
                                    </p>
                                    <p>
                                        {{--                                The app is white labeled: health plans can customize the way it looks, add their logo, and use it to communicate with their members.--}}
                                        {{$AppHolder->textTwo}}
                                    </p>
                                    <div class="app_section-links app_section-links__desktop">
                                        @if($AppHolder->AppUrl != null)
                                        <a target="_blank" href="{{$AppHolder->AppUrl}}" class="app-link">
                                            <img src="src/img/appstore.svg" alt=""/>
                                        </a>
                                        @endif
                                        @if($AppHolder->GoogleUrl != null)
                                        <a target="_blank" href="{{$AppHolder->GoogleUrl}}" class="app-link">
                                            <img src="src/img/googleplay.svg" alt=""/>
                                        </a>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                <?php $AppScreenss = \App\Models\SoftwareContentAppTwo::first() ?>
                @if($AppScreenss != null)
                    @if($AppScreenss->photo == null && $AppScreenss->photoOne == null && $AppScreenss->photoTwo == null && $AppScreenss->photoThree == null && $AppScreenss->photoFor == null)

                    @else
                        <div class="app_screens">
                            <img src="src/img/app-road-2.svg" alt="" class="app_screens-bg">
                            <div class="app_holder">
                                <div class="app_screens-wrapper">
                                    <div>
                                        <img src="{{asset('uploads/'.$AppScreenss->photo)}}" alt="" class="app_screen">
                                    </div>
                                    <div>
                                        <img src=" {{asset('uploads/'.$AppScreenss->photoTwo)}}" alt=""
                                             class="app_screen">
                                    </div>
                                    <div>
                                        <img src="{{asset('uploads/'.$AppScreenss->photoThree)}}" alt=""
                                             class="app_screen">
                                    </div>
                                    <div>
                                        <img src="{{asset('uploads/'.$AppScreenss->photoFor)}}" alt=""
                                             class="app_screen">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif


                <div class="app_section-links app_section-links__mobile">
                    @if($AppHolder->AppUrl != null)
                    <a href="{{$AppHolder->AppUrl}}" class="app-link">
                        <img src="src/img/appstore.svg" alt=""/>
                    </a>
                    @endif
                    @if($AppHolder->GoogleUrl != null)
                    <a href="{{$AppHolder->GoogleUrl}}" class="app-link">
                        <img src="src/img/googleplay.svg" alt=""/>
                    </a>
                        @endif
                </div>
            </div>
        </section>
    </main>

    <div class="cookies" bis_skin_checked="1">
        <div class="cookies_text" bis_skin_checked="1">
            <p>We use cookies to improve your experience on our website. By browsing this website, you agree to our <a target="_blank" href="{{route('Policy')}}" bis_skin_checked="1">use of cookies</a>.</p>
        </div>
        <button class="cookies_button">Accept all Cookies</button>
    </div>

    @include('includes_file.footer')

    <div class="fade"></div>



@endsection

