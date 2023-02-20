<?php $footer = \App\Models\Footer::first() ?>
@if($footer != null)
<footer  class="footer">
    <div class="footer_holder">
        <div class="footer_left">
            <a href="/" class="footer_logo">
                <img class="footer_logo" src="{{asset('uploads/'.$footer->logo)}}" alt="">
            </a>
        </div>
        <div class="footer_right">
            <div class="footer_menu">
                <div class="footer_column">
                    <span class="footer_column-title">{{$footer->contact_us}}</span>
                    <a class="footer_link" href={{'tel:'.$footer->number}}>
                        <img src="{{asset("src/img/menu-phone.svg")}}" alt="" class="footer_link-icon">
                        {{$footer->number}}
                    </a>
                    <a class="footer_link" href={{'mailto:'.$footer->email}}>
                        <img src="{{asset("src/img/menu-email.svg")}}" alt="" class="footer_link-icon">
                        {{$footer->email}}
                    </a>
                    <a   href="http://maps.google.com/?q=1200   {{$footer->address}}"
                         class="footer_link" >
                        <img src="{{asset("src/img/menu-adress.svg")}}" alt="" class="footer_link-icon">
                     {{$footer->address}}
{{--                        1401 Webster Ave, Bronx, NY 10456--}}
                    </a>
                    <div class="footer_social">
                        @if($footer->facebook_links != null)
                        <a target="_blank" href={{$footer->facebook_links}} class="footer_social-link">
                            <img class="footer_social-image" src="{{asset("src/img/social/fb.svg")}}" alt="">
                        </a>
                        @endif
                        @if($footer->linkdine_link != null)
                        <a target="_blank" href={{$footer->linkdine_link}} class="footer_social-link">
                            <img class="footer_social-image" src="{{asset("src/img/social/ln.svg")}}" alt="">
                        </a>
                            @endif
                    </div>
                </div>
                <?php $header = \App\Models\Header::first() ?>
                @if($header != null)
                <div class="footer_column">
                    <span class="footer_column-title">{{$footer->site_map}}</span>
                    <a class="footer_link" href="{{route('Howitwork')}}">{{$header->how_it_works}}</a>
                    <a class="footer_link" href="{{route('software')}}">{{$header->software_facilities}}</a>
                    <a class="footer_link" href="{{route('ServiceSupport')}}">{{$header->service_support}}</a>
                    <a class="footer_link" href="{{route('contact')}}">{{$header->contacts}}</a>
                </div>
                @endif
                <div class="footer_column">
                    <span class="footer_column-title">{{$footer->legal_info}}</span>
                    <a class="footer_link" href="https://novabackend.justcode.am/policy#Terms-of-use">Terms of use</a>
                    <a class="footer_link" href="{{route('Policy')}}">{{$footer->privacy_policy}}</a>
                </div>
            </div>
        </div>
    </div>
    <p style="color: white" class="footer_copyright">
        {{$footer->COPYRIGHT}}
    </p>
    <div class="footer_bottom-links">
        <a target="_blank" href="{{route('Policy')}}" class="footer_bottom-link">{{$footer->privacy_policy}}</a>
    </div>
</footer>

@endif

