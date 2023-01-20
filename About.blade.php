@extends('layouts.app')
@section('content')
    @include('includes_file.header')
    <main>
        <section class="section">
            <div class="section_holder">
                <div class="intro">
                    <div class="intro_content">
                        <?php $aboutheader = \App\Models\Aboutheader::first() ?>
                        <h1>{{$aboutheader->header}}</h1>
                        <div class="intro_text">
                            <p>{{$aboutheader->text}}</p>
                        </div>
                    </div>
                    <img src="{{asset('uploads/'.$aboutheader->photo)}}" alt="" class="intro_image">
                </div>
            </div>
        </section>
        <section class="section section__dark">
            <div class="section_holder">
                <div class="stats">
                    <?php $Sentryinnumbers = \App\Models\Sentryinnumbers::first() ?>
                    <h2>{{$Sentryinnumbers->header}}</h2>
                    <div class="stats_items">
                        <div class="stats_item">
                            <span class="stats_item-value">{{$Sentryinnumbers->date}}</span>
                            <span class="stats_item-title">{{$Sentryinnumbers->date_text}}</span>
                        </div>
                        <div class="stats_item">
                            <span class="stats_item-value">{{$Sentryinnumbers->over}}</span>
                            <span class="stats_item-title">{{$Sentryinnumbers->transportation}} </span>
                        </div>
                        <div class="stats_item">
                            <span class="stats_item-value">{{$Sentryinnumbers->over_number}}</span>
                            <span class="stats_item-title">{{$Sentryinnumbers->dispatch}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section__bright">
            <div class="section_holder">
                <div class="transportation-stats">
                    <h2 class="transportation-stats_title">
                        <?php $Ttransportation = \App\Models\Transportation::get() ?>
        {{$Ttransportation[0]->header}}
                        <span>{{$Ttransportation[0]->description}} </span>
                    </h2>
                    <div class="transportation-stats_cards">

                        <div>
                            <div class="transportation-stats_card">
                                <img src="{{asset('uploads/'.$Ttransportation[0]->photo)}}" alt=""
                                     class="transportation-stats_card-image">
                                <span class="transportation-stats_card-title"> {{$Ttransportation[0]->text}}</span>
                            </div>
                        </div>
                        <div>
                            <div class="transportation-stats_card">
                                <img src="{{asset('uploads/'.$Ttransportation[1]->photo)}}" alt=""
                                     class="transportation-stats_card-image">
                                <span class="transportation-stats_card-title">{{$Ttransportation[1]->text}}</span>
                            </div>
                        </div>
                        <div>
                            <div class="transportation-stats_card">
                                <img src="{{asset('uploads/'.$Ttransportation[2]->photo)}}" alt=""
                                     class="transportation-stats_card-image">
                                <span class="transportation-stats_card-title">{{$Ttransportation[2]->text}}</span>
                            </div>
                        </div>
                        <div>
                            <div class="transportation-stats_card">
                                <img src="{{asset('uploads/'.$Ttransportation[3]->photo)}}" alt=""
                                     class="transportation-stats_card-image">
                                <span class="transportation-stats_card-title">{{$Ttransportation[3]->text}} </span>
                            </div>
                        </div>
                        <div>
                            <div class="transportation-stats_card">
                                <img src="{{asset('uploads/'.$Ttransportation[4]->photo)}}" alt=""
                                     class="transportation-stats_card-image">
                                <span class="transportation-stats_card-title">{{$Ttransportation[4]->text}}</span>
                            </div>
                        </div>
                        <div>
                            <div class="transportation-stats_card">
                                <img src="{{asset('uploads/'.$Ttransportation[5]->photo)}}" alt=""
                                     class="transportation-stats_card-image">
                                <span class="transportation-stats_card-title">{{$Ttransportation[5]->text}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section_holder">
                <div class="ny-map">
                    <div class="ny-map_content">
                        <?php $Country = \App\Models\Country::first() ?>
                        <h3>{{$Country->about_us}}</h3>
                        <ul>
                            <li>{{$Country->location}}</li>
                            <li>{{$Country->location_two}}</li>
                        </ul>
                    </div>
                    <img src="{{asset('uploads/'.$Country->photo)}}" alt="" class="ny-map_image">
                </div>
            </div>
        </section>
        <section class="section section__no-top-indent">
            <div class="section_holder">
                <?php $Ourteam = \App\Models\Ourteam::where('ceo','Ceo')->orderBy('sort', 'ASC')->OrderBy('created_at','DESC')->get() ?>

                <h1 class="bright">{{$Ourteam[0]->our_team}}</h1>

                <div class="team">
                    @foreach($Ourteam as $OUE)
                    <div class="team_item team_item__big">
                        <div class="team_image-wrapper">
                            <img src="{{asset('uploads/'.$OUE->photo)}}" alt="" class="team_image">
                        </div>
                        <div>
                            <span class="team_name">
                                {{$OUE->name}}
                            </span>
                            <span class="team_position">
                                {{$OUE->role}}
                            </span>
                        </div>
                    </div>
                    @endforeach
                    <?php $Ourteam2 = \App\Models\Ourteam::where("ceo", null)->orderBy('sort', 'ASC')->OrderBy('created_at','DESC')->get() ?>
                @foreach($Ourteam2 as $Ourteams)
                        <div class="team_item">
                            <div class="team_image-wrapper">
                                <img src="{{asset('uploads/'.$Ourteams->photo)}}" alt="" class="team_image">
                            </div>
                            <div>
                            <span class="team_name">
                                {{$Ourteams->name}}
                            </span>
                                <span class="team_position">
                                {{$Ourteams->role}}
                            </span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="section section__no-top-indent">
            <?php $Joinus = \App\Models\Joinus::OrderBY('date_of_create','DESC')->get() ?>
            <div class="section_holder">
                <h1>{{$Joinus->last()->header}}</h1>
                <div class="vacancies">
                    @foreach($Joinus as $Joinus1)
                        <?php
                        $date = $Joinus1->date_of_create;
                        $createDate = new DateTime($date);
                        $strip = $createDate->format('Y-m-d');
                        ?>
                        <div class="vacancy">
                            <h3 class="vacancy_title">{{$Joinus1->one_text}}</h3>
                            <div class="vacancy_meta">
                                <div class="vacancy_tags">
                                    {{$Joinus1->two_text}}
                                </div>
                                <span class="vacancy_date">{{$strip}}</span>
                            </div>
                            <p class="vacancy_subtitle">{{$Joinus1->third_text}}</p>
                            <div class="vacancy_text">
                                {!! $Joinus1->four_text !!}
                                <div class="vacancy_buttons">
                                    <button class="vacancy_back">Back</button>
                                    <button class="vacancy_apply js-popup-link" data-popup="apply" data-id="{{$Joinus1->id}}">Apply Now</button>
                                </div>

                            </div>
                            <button class="vacancy_more">Read more</button>
                            <div class="fade" data-popup="apply">
                                <div class="fade_back"></div>
                                <div class="popup">
                                    <div class="popup_content">
                                        <h2>Application</h2>
                                        <form action="" method="post" class="form feedback-form" id="feedback-form"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="form_row">
                                                <div class="form_item">
                                                    <input type="hidden"  id="ibs" name="ids" value="{{$Joinus1->id}}">
                                                    <label for="name">*First name</label>
                                                    <input name="name" type="text" id="name" >
                                                </div>
                                                <div class="form_item">
                                                    <label for="surname">*Last name</label>
                                                    <input name="surname" type="text" id="surname" >
                                                </div>
                                            </div>
                                            <div class="form_row">
                                                <div class="form_item">
                                                    <label for="tel">*Phone</label>
                                                    <input name="phone" type="number" id="tel" >
                                                    <style>
                                                        #tel{
                                                            color: #222;
                                                            background: #fff;
                                                            border: 1px
                                                            solid  #9ca3af;
                                                            border-radius: 8px;

                                                            box-sizing: border-box;
                                                            font: 400 16px             "Montserrat",helvetica,monospace;
                                                            height: 56px;

                                                            line-height: 34px;
                                                            padding: 0 0 0 20px;
                                                            width: 100%;
                                                            transition: .2s ease-in border-color;
                                                        }
                                                    </style>
                                                </div>
                                                <div class="form_item">
                                                    <label for="email">*E-mail</label>
                                                    <input name="email" type="email" id="email">
                                                </div>
                                            </div>
                                            <div class="form_row">
                                                <div class="form_item">
                                                    <label for="ln">LinkedIn page</label>
                                                    <input name="ln" type="text" id="ln">
                                                </div>
                                                <div class="form_item">
                                                    <label for="resume">*Resume</label>
                                                    <div class="file-input">
                                                        <div id="file-name"> </div>
                                                        <div  class="file-input_icon"></div>
                                                        <span class="file-input_name">Attach file</span>
                                                        <input name="resume" type="file" id="resume"  accept=".doc,.docx,.xls,.xlsx,.ppt,.pptx,.pdf">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form_row">
                                                <div class="form_item">
                                                    <label for="ln">Cover letter (Optional)</label>
                                                    <textarea name="cover"></textarea>
                                                </div>
                                            </div>
                                            <div class="form_row">
                                                <div class="form_item">
                                                    <input type="checkbox" name="agree" id="agree">
                                                    <label for="agree" id="LabelAgree">
                                                        Our <a target="_blank" href="{{route('Policy')}}">privacy policy</a> is intended to inform you of the type of
                                                        personal information collected from you, how it is used, and what steps are taken to
                                                        ensure that your personal information is kept confidential and safe.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form_row">
                                                <div class="form_item form_item__right">
                                                    <input type="submit" value="Send">
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                        <script>
                            $('.vacancy_apply').click(function () {
                                var dataId = $(this).attr("data-id");
                                $("#ibs").val(dataId);
                            })
                        </script>

                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            $("input[name='name']").on("keyup", function() {
                                if ($("input[name='name']").val() === "") {
                                    $("input[name='name']").css("border", "1px solid red");
                                }else{
                                    $(this).css("border", "1px solid black");
                                }
                            });
                            $("input[name='surname']").on("keyup", function() {
                                if($("input[name='surname']").val() === ""){
                                    $("input[name='surname']").css("border", "1px solid red");
                                }else{
                                    $(this).css("border", "1px solid black");
                                }
                            });
                            $("input[name='phone']").on("keyup", function() {
                                if($("input[name='phone']").val() === ""){
                                    $("input[name='phone']").css("border", "1px solid red");
                                }else{
                                    $(this).css("border", "1px solid black");
                                }
                            });
                            $("input[name='email']").on("keyup", function() {
                                if($("input[name='email']").val() === ""){
                                    $("input[name='email']").css("border", "1px solid red");
                                }else{
                                $(this).css("border", "1px solid black");
                            }});
                            //
                            // $("input[name='ln']").on("keyup", function() {
                            //     if($("input[name='ln']").val() === ""){
                            //         $("input[name='ln']").css("border", "1px solid red");
                            //     }else{
                            //
                            //         $(this).css("border", "1px solid black");
                            //     }
                            // });

                            // $("textarea[name='cover']").on("keyup", function() {
                            //     if($("textarea[name='cover']").val() === ""){
                            //         $("textarea[name='cover']").css("border", "1px solid red");
                            //     }else{
                            //
                            //         $(this).css("border", "1px solid black");
                            //     }
                            // });
                            $("#LabelAgree").on("click", function() {
                                $('#LabelAgree').css('border','0px solid red')
                            });
                            $("input[name='resume']").on('change', function () {
                                var file = this.files[0];
                                if (file.size > 10485760) {  //10485760 bytes = 10MB
                                    alert("File size should be less than 10MB!");
                                }else{
                                    var file = this.files[0];
                                    $("#file-name").text(file.name);
                                    $(".file-input_name").hide();
                                    $(".file-input").css("border", "1px dashed #9ca3af");
                                }
                            })

                            $(".feedback-form").submit(function(event){
                                event.preventDefault();
                                if ($("input[name='name']").val() === "") {
                                    $("input[name='name']").css("border", "1px solid red");
                                }
                                if($("input[name='surname']").val() === ""){
                                    $("input[name='surname']").css("border", "1px solid red");
                                }
                                if($("input[name='phone']").val() === ""){
                                    $("input[name='phone']").css("border", "1px solid red");
                                }
                                if($("input[name='email']").val() === ""){
                                    $("input[name='email']").css("border", "1px solid red");
                                }
                                // if($("input[name='ln']").val() === ""){
                                //     $("input[name='ln']").css("border", "1px solid red");
                                // }

                                if($("input[name='resume']").val() === ""){
                                    $(".file-input").css("border", "1px solid red");
                                }

                                if($('#agree').is(':checked')){

                                }else{
                                    $('#LabelAgree').css('border','1px solid red')
                                }




                                if( $('#agree').is(':checked') && $("input[name='resume']").val() != "" &&
                               $("input[name='email']").val() != "" && $("input[name='phone']").val() != ""
                                    && $("input[name='surname']").val() != "" && $("input[name='name']").val() != ""
                                ) {

                                    let timerInterval
                                    Swal.fire({
                                        title: 'Please wait',
                                        html: ' <b></b> ',
                                        // timer: 10000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                                b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                    }).then((result) => {
                                        /* Read more about handling dismissals below */

                                    })

                                    var formData = new FormData();
                                    formData.append("name", $("input[name='name']").val());
                                    formData.append("surname", $("input[name='surname']").val());
                                    formData.append("phone", $("input[name='phone']").val());
                                    formData.append("email", $("input[name='email']").val());
                                    formData.append("ln", $("input[name='ln']").val());
                                    formData.append("jobId", $("input[name='ids']").val());
                                    formData.append("cover", $("textarea[name='cover']").val());
                                    formData.append("resume",$("input[name='resume']")[0].files[0]);

                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        },
                                        type: "POST",
                                        url: '/joinus',
                                        data: formData,
                                        processData: false,  // tell jQuery not to process the data
                                        contentType: false,  // tell jQuery not to set contentType
                                        success: function(response) {
                                            $('.swal2-backdrop-show').hide()
                                            Swal.fire({
                                                position: 'center',
                                                icon: 'success',
                                                title: 'Your message  delivered',
                                                showConfirmButton: false,
                                                timer: 3000
                                            })
                                            setTimeout(function(){
                                                location.reload();
                                            }, 3000);


                                        }
                                    });
                                }
                            });
                        </script>
            </div>
        </section>
        <section class="section section__no-top-indent">
            <div class="section_holder">
                <?php $Press = \App\Models\Press::get() ?>
                <h1>Press</h1>
                    <div class="press">
                        @foreach($Press as $item)

                        <a target="_blank" href="{{$item->Url}}" class="press_card">
                        <div class="press_card-top">
                            <img src="{{asset('uploads/'.$item->photo)}}" alt="" class="press_image">
                            <h5 class="press_card-title">{{$item->header}}</h5>
                        </div>
                        <div class="press_card-bottom">
                            <img src="{{asset('uploads/'.$item->photo2)}}" alt="" class="press_card-logo">
                            <span class="press_card-source">{{$item->footer_text}}</span>
                        </div>

                        </a>
                        @endforeach
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



@endsection
