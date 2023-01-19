@extends('layouts.app')
@section('content')
    @include('includes_file.header')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        $('.cookies_button').click(function(){
            var value = "true";
            localStorage.setItem("accept", value);
            $('.cookies').hide()
        });
        var value = localStorage.getItem("accept");

        if(value == 'true'){
            $('.cookies').hide()
        }else{
            $('.cookies').show()
        }
    </script>

    @if(session('true'))
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('.nice-select').css('display', 'none');
            $('.swal2-select').css('display', 'none');
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your message  delivered',
                showConfirmButton: false,
                timer: 2000
            })
            setTimeout(function() {
                location.reload();
            }, 2000);
        </script>
        <style>
            .nice-select{
                display: none !important;
            }
            .swal2-select{
                display: none !important;
            }
        </style>

    @endif

    @foreach($contact as $contacts)

        <main>
            <section class="section section__small-bottom-indent">
                <div class="contacts">
                    <img class="contacts_bg" src="src/img/city-small.svg" alt="">
                    <div class="section_holder">
                        <h1 class="contacts_title">{{$contacts->contact_us}}</h1>
                        <div class="contacts_info">
                            <div class="contacts_info-column">
                                <span class="contacts_info-title">{{$contacts->get_in_touch}}</span>
                                <p>{{$contacts->get_in_touch_text}}</p>
                            </div>
                            <div class="contacts_info-column">
                                <span class="contacts_info-title">{{$contacts->working_hours}}</span>
                                <p>
                                    {{$contacts->working_hours_text}}
                                    <br>
{{--                                    Sunday 9AM to 5PM--}}
                                </p>
                            </div>
                            <div class="contacts_info-column">
                                <span class="contacts_info-title">{{$contacts->noc_hours}}</span>
                                <p>
                                    {{$contacts->noc_hours_text}}
                                    <br>
                                    365 days a year
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section__no-indent">
                <div class="section_holder">
                    <div class="map">
                        <div class="map_holder">
                            <iframe width='100%' height='100%' src="https://api.mapbox.com/styles/v1/anna-golubeva/clbqcyoq3000u15pnry107gt5.html?title=false&access_token=pk.eyJ1IjoiYW5uYS1nb2x1YmV2YSIsImEiOiJja3d3amwzOG4wNDByMm5sYW1yNGh2OXJiIn0.Krs4AfkVyobEvYXCCSyWUg&zoomwheel=false#13.83/40.83661/-73.90726" title="Sentry Map" style="border:none;"></iframe>
                        </div>
                        <div class="map_info">
                            <div class="map_info-item">
                                <h3 class="map_info-title">{{$contacts->adress}}</h3>
                                <a class="map_info-text" href="#">{{$contacts->adress_text}}</a>
                            </div>
                            <div class="map_info-item">
                                <h3 class="map_info-title">{{$contacts->call}}</h3>
                                <a class="map_info-text" href={{'tel:'.$contacts->call_number}}>{{$contacts->call_number}}</a>
                            </div>
                            <div class="map_info-item">
                                <h3 class="map_info-title">{{$contacts->email}}</h3>
                                <a class="map_info-text" href={{'mailto:'.$contacts->email_text}}>{{$contacts->email_text}}</a>
                            </div>
                            <div class="map_info-item">
                                <h3 class="map_info-title">{{$contacts->social_media}}</h3>
                                <div class="social">
                                    @if($contacts->facebook_url != null)
                                    <a target="_blank" href={{$contacts->facebook_url}} class="social_link">
                                        <img class="social_image" src="src/img/social/fb.svg" alt="">
                                    </a>
                                    @endif
                                    @if($contacts->linkdine_url != null)
                                    <a target="_blank" href={{$contacts->linkdine_url}} class="social_link">
                                        <img class="social_image" src="src/img/social/ln.svg" alt="">
                                    </a>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @if($errors->isEMpty())

                @else
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    // Handler for .ready() called.
                    $('html, body').animate({
                        scrollTop: $('#scrolrwerl').offset().top
                    }, 'slow');
                });

            </script>
            @endif
            <div id="scrolrwerl"></div>
            <section class="section">
                <div class="section_holder">
                    <h2>Message Us</h2>
                    <form class="form" action="{{route('contact.store')}}" method="post">
                        @csrf

                        <style>
                            .alertss{
                                font-size: xx-small;
                                color: red;
                                padding: 4px;
                            }
                        </style>
                        <div class="form_row">
                            <div class="form_item">
                                <label for="name">Name</label>
                                <input name="name" type="text" id="name" value="{{old('name')}}">
                                @error('name')
                                <style>
                                    #name{
                                        border: 1px solid red;
                                    }
                                </style>
                                <div class="alertss alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form_item">
                                <label for="surname">Surname</label>
                                <input name="surname" type="text" id="surname" value="{{old('surname')}}">
                                @error('surname')
                                <style>
                                    #surname{
                                        border: 1px solid red;
                                    }
                                </style>
                                <div class="alertss alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form_row">
                            <?php $Category  = \App\Models\FormCategory::OrderBy('id','desc')->get() ?>
                            <div class="form_item">
                                <label for="name">Company category</label>
                                <select name="category_name">
                                    @foreach($Category as $cat)
                                    <option value="{{$cat->category_name}}">{{$cat->category_name}} </option>
                                    @endforeach
                                </select>
                                @error('category_name')
                                <style>
                                    #tel{
                                        border: 1px solid red;
                                    }
                                </style>
                                <div class="alertss alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form_item">
                                <label for="surname">Company</label>
                                <input name="company" type="text" id="Company" value="{{old('company')}}">
                                @error('company')
                                <style>
                                    #Company{
                                        border: 1px solid red;
                                    }
                                </style>
                                <div class="alertss alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form_row">
                            <div class="form_item">
                                <label for="email">E-mail</label>
                                <input name="email" type="email" id="email" value="{{old('email')}}">
                                @error('email')
                                <style>
                                    #email{
                                        border: 1px solid red;
                                    }
                                </style>
                                <div class="alertss alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form_item">
                                <label for="tel">Phone</label>
                                <input value="{{old('number')}}" name="number" id="tel" type="number" style="    color: #222;
    background: rgba(0, 0, 0, 0);
    border: 1px solid #9ca3af;
    border-radius: 8px;
    box-sizing: border-box;
    font: 400 16px Montserrat, helvetica, monospace;
                        height: 56px;
                        line-height: 34px;
                        padding: 0 0 0 20px;
                        width: 100%;
                        transition: .2s ease-in border-color;">
                                @error('number')
                                <style>
                                    #tel{
                                        border: 1px solid red !important;
                                    }
                                </style>
                                <div class="alertss alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form_row ">
                            <div class="form_item form_item__center">
                                <input type="submit" value="Submit Message">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>

    @endforeach
    <div class="cookies" bis_skin_checked="1">
        <div class="cookies_text" bis_skin_checked="1">
            <p>We use cookies to improve your experience on our website. By browsing this website, you agree to our <a target="_blank" href="{{route('Policy')}}" bis_skin_checked="1">use of cookies</a>.</p>
        </div>
        <button class="cookies_button">Accept all Cookies</button>
    </div>


    @include('includes_file.footer')
    <div class="fade"></div>
@endsection


