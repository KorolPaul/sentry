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
                            <svg class="intro_image" xmlns="http://www.w3.org/2000/svg" width="445" height="446"
                                 viewBox="0 0 445 446" fill="none">
                                <defs>
                                    <linearGradient id="Gradient-0" x1="190.9" y1="218.1" x2="178.1" y2="265.3"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                    <linearGradient id="Gradient-1" x1="162.3" y1="216.6" x2="155.7" y2="194.7"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                    <linearGradient id="Gradient-2" x1="109.2" y1="474.2" x2="179.2" y2="348.2"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                    <linearGradient id="Gradient-3" x1="188.8" y1="380.6" x2="82.9" y2="415.6"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                    <linearGradient id="Gradient-4" x1="166.4" y1="236.4" x2="221" y2="236.4"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                    <linearGradient id="Gradient-5" x1="205" y1="223.1" x2="198.3" y2="248"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                    <linearGradient id="Gradient-6" x1="174.3" y1="179.1" x2="136.2" y2="203.7"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                    <linearGradient id="Gradient-7" x1="169" y1="170.8" x2="130.9" y2="195.4"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#febbba"/>
                                        <stop offset="1" stop-color="#ff928e"/>
                                    </linearGradient>
                                </defs>
                                <path d="M391.2 383.3c-9.1 9.6-17.7 15.8-24.5 20.6c-79.8 57.5-174.3 40.8-194.4 36.7c-29.6-6.1-86.9-17.7-128.4-66.6c-62.7-74-52.9-190.5-4.3-267.4c8.9-14.1 55.9-92.2 151.4-104.7c57.8-7.6 125.1 7.7 173.9 48.7c102.4 86.1 95.1 259.9 26.3 332.7Z"
                                      fill="#eef5f9" transform="translate(221.2,223) translate(-221.2,-223)"/>
                                <path d="M31.1 21.7c-1.6 66-6.9 293.4-4.4 374c.3 8.5 7.1 15.4 15.7 15.7c42.1 1.4 163.4 4.9 232.4 2c14.3-0.7 25.8-12.3 26.1-26.7c1.4-69.2 4.6-263.9-2.9-353c-0.9-10.7-9.3-19.2-20-20.3c-45.9-4.6-167.9-15.8-227.4-11.9c-10.8 .6-19.2 9.5-19.5 20.2Z"
                                      fill="#222" transform="translate(164.4,207.6) translate(-164.4,-207.6)"
                                      style="isolation: isolate;"/>
                                <path d="M48.3 42.2c-2.3 54-9.6 233.7-7.3 300.1c.3 9.7 8 17.6 17.7 18.1c39.8 2.4 142.1 7.5 200.6 2.8c10.5-0.8 18.8-9.3 19.3-19.9c3-55.1 11.5-222.4 9.3-288.1c-0.4-10.4-8.5-19-18.9-19.9c-43.1-3.9-153.9-13.1-203.6-10.4c-9.3 .5-16.7 8-17.1 17.3Z"
                                      fill="#fbfbfb" transform="translate(164.4,194.8) translate(-164.4,-194.8)"/>
                                <path opacity=".5"
                                      d="M135.3 13c0 2 1.6 3.6 3.6 3.8c10 .5 38 2 50.6 2.7c2.4 .1 4.4-2.1 3.9-4.5l-0.1-0.4c-0.3-1.7-1.7-2.9-3.3-3.1c-8.5-0.8-34.1-2.9-51-2.3c-2.1 0-3.7 1.7-3.7 3.8Z"
                                      fill="#fbfbfb" transform="translate(164.4,14.3) translate(-164.4,-14.3)"/>
                                <path opacity=".73"
                                      d="M287.1 146.4l-47.6-0.6c-2.6 0-4.8-2.2-4.8-4.9c-0.2-43.9-0.4-103.1-0.1-108.7c0 .3-9-0.6-9-0.6c-0.2 2.8 0-1.2 0 4.8c-0.1 3.4-0.1 8.3-0.1 14.5c0 10.4 0 24.8 0 42.8c.1 30.5 .2 61.2 .2 61.5v3.4c.1 3.3 2.7 5.9 5.9 5.9h10.3c1.7 0 3.2 1.5 3.2 3.3v55.9c0 3.6-3 6.6-6.7 6.6h-25.5c-2.9 0-5.4-1.8-6.4-4.5l-19.7-54.5c-1.1-3.2-4.1-5.3-7.4-5.3h-23.8c-2 0-3.5-1.9-3.1-3.8l30.4-133.7l-12.5-0.9l-29 130.8c-1 4.4-4.9 7.6-9.5 7.6h-8.8c-3.2 0-5.8-2.6-5.8-5.9c0-11.8 .1-29.1 .1-46.3c0-18 0-32.3 0-42.7c0-20.8 .7-44.7 .3-46.1c0 0-5.9-0.1-5.9-0.2c.2 4.2 .8 87.8 .7 135.7c0 3.1-2.5 5.5-5.5 5.5h-8.3c-3.5 0-6.5-2.6-7-6.1c-5.2-39.3-17.6-133.4-17.9-135.5c-5.8 .1-11 .4-13.7 1.6c0 0 13.8 103.8 20.1 151.9c.5 3.9 3.9 6.9 7.9 6.9h36.9c3.3 0 5.5 3.3 4.3 6.3l-26 62.4c-1.5 3.6-5 5.9-8.9 5.9h-53.3l-0.3 18.8h56.4c4.7 0 8.9-2.8 10.7-7.1l33.5-80.6c1.5-3.5 4.9-5.7 8.7-5.7h25.3c3 0 5.7 1.9 6.7 4.7l13 36.1c.9 2.3-0.8 4.7-3.3 4.7h-36.1c-1.7 0-3.2 1.5-3.2 3.3v130.3h4.8v-117.5c0-3.3 2.8-6.1 6.2-6.1h31.1c3.5 0 6.7 2.2 7.9 5.6l38.7 107.3l7.2-11.2l-35-97.2c-0.8-2.2 .8-4.5 3.2-4.5h33.1c3.5 0 6.3-2.8 6.3-6.3v-64c0-3 2.4-5.5 5.4-5.5l25.7 .3v-18.4Z"
                                      fill="#e9edf2" transform="translate(163.9,194.1) translate(-163.9,-194.1)"/>
                                <g id="_a0"
                                   transform="translate(249.7,138.9) translate(0,0) rotate(4) scale(0,0) translate(-36.7,-106.9)"
                                   style="isolation: isolate;">
                                    <path d="M250.1 102.8c19.7 0 35.6-15.9 35.6-35.7c0-19.7-15.9-35.7-35.6-35.7c-19.7 0-35.7 16-35.7 35.7c0 19.8 16 35.7 35.7 35.7Z"
                                          fill="#ef6238" transform="translate(36.8,36.3) translate(-250.1,-67.1)"/>
                                    <path d="M285.7 63.8h-35.6h-35.7c0 0-2.8 20.5 29 74.8c1.4 2.4 3.9 4.1 6.7 4.1c2.7 0 5.3-1.9 6.7-4.2c31.8-54.3 28.9-74.7 28.9-74.7Z"
                                          fill="#ef6238" transform="translate(36.7,72.5) translate(-250.1,-103.3)"/>
                                    <path d="M250.9 144.3v.3h-0.8c-3.1 0-6-1.8-7.6-4.4c-18.6-31.8-25.4-51.9-27.8-63.1c-0.7-2.6-1.1-5.1-1.3-7.7c-0.2-2.7 0-3.8 0-3.9l.1-0.6c1.4-19.2 17.4-34.1 36.6-34.1c19.5 0 35.5 15.1 36.6 34.5c.1 .2 .1 .9 .1 1.9v.2c0 3.5-0.5 6.9-1.5 10.3c-2.5 11.2-8.9 31.1-27.2 62.3c-1.6 2.7-4.5 4.3-7.2 4.3Zm-35.5-77.8c0 0 0 1.5 .1 2.6v.1c.1 2.4 .5 4.9 1.2 7.3v.1c2.4 11.1 9.1 30.9 27.6 62.4c1.2 2 3.8 3.3 6.2 3.3l.4 1v-1c1.1 0 4.7-1.3 5.9-3.3c18.1-31 25.3-50.7 27.5-61.8v-0.1c.5-3.1 1-6.4 1-9.7l-0.5-0.2c0-1-0.1-1.6-0.1-1.7v-0.1c-1-18.2-16.2-32.5-34.6-32.5c-18.3 0-33.5 14.3-34.5 32.7l-0.1 .9h-0.1Z"
                                          fill="#fff" transform="translate(36.7,56.9) translate(-250.1,-87.7)"/>
                                    <path opacity=".8"
                                          d="M264.8 81.6c8-8 8-21.1 0-29.2c-8.1-8-21.1-8-29.2 0c-8 8.1-8 21.2 0 29.2c8.1 8.1 21.1 8.1 29.2 0Z"
                                          fill="#fff" transform="translate(36.9,36.2) translate(-250.2,-67)"/>
                                    <path d="M250.2 88.8c-12 0-21.7-9.8-21.7-21.8c0-12 9.7-21.8 21.7-21.8c12 0 21.7 9.8 21.7 21.8c0 12-9.7 21.8-21.7 21.8Zm0-41.3c-10.7 0-19.4 8.8-19.4 19.5c0 10.7 8.7 19.5 19.4 19.5c10.7 0 19.4-8.8 19.4-19.5c0-10.7-8.7-19.5-19.4-19.5Z"
                                          fill="#ef6238" transform="translate(36.9,36.2) translate(-250.2,-67)"/>
                                    <path d="M229.6 42.8c-0.1 0-0.2 0-0.3-0.1c-0.1-0.1-0.1-0.4 .1-0.5c5.8-5 13.1-7.7 20.8-7.7c.2 0 .3 .2 .3 .3c0 .2-0.1 .4-0.3 .4c-7.5 0-14.7 2.7-20.4 7.6c0 0-0.1 0-0.2 0Z"
                                          fill="#fff" transform="translate(26.6,7.9) translate(-239.9,-38.7)"/>
                                    <path d="M218.6 66.9c-0.2 0-0.4-0.2-0.4-0.4c0-6 1.7-11.8 4.8-16.8c.1-0.2 .3-0.2 .5-0.1c.1 0 .2 .3 .1 .4c-3.1 5-4.7 10.7-4.7 16.5c0 .2-0.1 .4-0.3 .4Z"
                                          fill="#fff" transform="translate(7.6,27.4) translate(-220.9,-58.2)"/>
                                </g>
                                <path d="M226 389.6c0-8.4-6.8-15.2-15.2-15.2h-6.8c-8.4 0-15.2 6.8-15.2 15.2v40.6c0 8.4 6.8 15.2 15.2 15.2h6.8c8.4 0 15.2-6.8 15.2-15.2v-40.6Z"
                                      fill="#222" transform="translate(207.4,409.9) translate(-207.4,-409.9)"/>
                                <path d="M435.4 389.6c0-8.4-6.8-15.2-15.2-15.2h-6.7c-8.4 0-15.2 6.8-15.2 15.2v40.6c0 8.4 6.8 15.2 15.2 15.2h6.7c8.4 0 15.2-6.8 15.2-15.2v-40.6Z"
                                      fill="#222" transform="translate(416.8,409.9) translate(-416.8,-409.9)"/>
                                <path d="M209 313.4c-0.5-0.1-1.1-0.5-1.1-1v-3.1c0-3-1.4-5.8-4.1-7.1c-3.5-1.8-7.4-1.8-10.9-0.2l-6.2 3c-3 1.5-4.7 4.6-4.7 8v2.4c0 4.4 3 8.1 7.3 8.7l26.5 3.6l3.1-12.1l-9.9-2.2Z"
                                      fill="#d45834" transform="translate(200.4,314.2) translate(-200.4,-314.2)"/>
                                <path d="M416.6 313.4c.5-0.1 .8-0.5 .8-1v-3.1c0-3 1.7-5.8 4.4-7.1c3.4-1.8 7.5-1.8 11-0.2l6.8 3c3.1 1.5 5.4 4.6 5.4 8v2.4c0 4.4-3.6 8.1-7.9 8.7l-26.8 3.6l-3.3-12.1l9.6-2.2Z"
                                      fill="#d45834" transform="translate(426,314.2) translate(-426,-314.2)"/>
                                <path d="M436 340.2c-3.8-13-23.7-25.1-23.7-25.1c0 0-16.7-51.3-34.7-51.3c-14.4 0-49.1 0-62.2 0c0 0-1.9 0-5.1 0c-13.2 0-47.9 0-62.3 0c-18 0-34.7 51.3-34.7 51.3c0 0-19.9 12.1-23.7 25.1c-2.9 9.5 3.3 46.3 6.7 65.2c1.3 6.6 7.6 11.8 14.9 11.8h99.1h5.1h99c7.4 0 13.6-5.2 14.9-11.8c3.4-18.9 9.5-55.6 6.7-65.2Z"
                                      fill="#ef6238" transform="translate(312.8,340.5) translate(-312.8,-340.5)"/>
                                <path d="M433.5 394.8c-1.1-1.3-2.8-2.4-4.6-2.4h-232.2c-1.8 0-3.5 1.1-4.6 2.3c-1.2 1.3-1.6 3.1-1.2 4.7l3.8 15.5c.6 2.5 3 4.6 5.8 4.6h224.4c2.7 0 5.1-2 5.7-4.4l4-15.5c.5-1.6 0-3.6-1.1-4.8Z"
                                      fill="#d45834" transform="translate(312.8,405.9) translate(-312.8,-405.9)"/>
                                <path d="M250.1 371.5c0 0-5.8-17.4-13.1-18.9c-7.3-1.5-38.1-7.9-38.7-2.6c-0.7 5.4-6.9 23.8 11.5 25.6c18.4 1.7 43.2 3.1 40.3-4.1Z"
                                      fill="#fbfbfb" transform="translate(223.5,362.4) translate(-223.5,-362.4)"/>
                                <path d="M375.5 371.5c0 0 5.8-17.4 13.1-18.9c7.2-1.5 38.1-7.9 38.7-2.6c.6 5.4 6.8 23.8-11.6 25.6c-18.4 1.7-43.2 3.1-40.2-4.1Z"
                                      fill="#fbfbfb" transform="translate(402,362.4) translate(-402,-362.4)"/>
                                <path d="M371.3 356.4c-0.6-0.9-1.6-1.8-2.7-1.8h-111.7c-1.1 0-2.2 .9-2.7 1.9c-0.6 .9-0.6 2.3-0.1 3.3l6.3 12.2c2.3 4.4 6.9 7.4 11.8 7.4h82.1c5.3 0 10.1-3.3 12.3-8.2l5-11.5c.4-1 .3-2.4-0.3-3.3Z"
                                      fill="#d45834" transform="translate(312.8,367) translate(-312.8,-367)"/>
                                <path d="M401.8 319.5c-0.8 1.1-2 1.9-3.3 1.9h-171.4c-1.3 0-2.6-0.9-3.3-2c-0.7-1.1-0.8-2.6-0.2-3.8c3.8-8.2 11.1-23.5 15.2-32c.2-0.4 .4-0.8 .7-1.1c1.9-3.2 5.4-5.1 9.2-5.1h129.6c3.8 0 7.3 1.9 9.2 5.1c.3 .5 .6 .9 .8 1.4l13.8 31.8c.5 1.2 .4 2.6-0.3 3.8Z"
                                      fill="#222" transform="translate(312.8,299.4) translate(-312.8,-299.4)"/>
                                <path d="M387.5 282.5c-9 1.8-35.7 6.3-76 6.3c-40.5 0-64.3-4.6-72.1-6.4c2-3.1 5.5-5 9.3-5h129.6c3.8 0 7.3 2 9.2 5.1Z"
                                      fill="#222" transform="translate(313.5,283.1) translate(-313.5,-283.1)"/>
                                <path id="Road" d="M2.6 2.3" stroke="#ef6238" stroke-linecap="round" stroke-width="8"
                                      stroke-linejoin="round" transform="translate(65.4,33.7)"/>
                                <g opacity=".63" transform="translate(312,336.7) translate(-312,-336.7)">
                                    <path d="M247.3 347.9c-0.2 0-0.3-0.1-0.4-0.2l-22.2-21.1c-0.3-0.2-0.3-0.6-0.1-0.9c.3-0.2 .7-0.3 .9 0l22.2 21c.3 .3 .3 .7 .1 .9c-0.1 .2-0.3 .3-0.5 .3Z"
                                          fill="#fff" transform="translate(236.2,336.7) translate(-236.2,-336.7)"/>
                                    <path d="M376.6 347.9c-0.2 0-0.3-0.1-0.4-0.3c-0.3-0.2-0.3-0.6 0-0.9l22.2-21c.3-0.3 .7-0.3 .9 0c.3 .3 .3 .7 0 .9l-22.2 21.1c-0.2 .1-0.3 .2-0.5 .2Z"
                                          fill="#fff" transform="translate(387.7,336.7) translate(-387.7,-336.7)"/>
                                </g>
                                <path id="_a1"
                                      d="M104.6 250c3.4-5.7 4.3-10.8 3.2-17.4c-1.6-10.9-0.3-23 6.6-32c6.6-8.5 18.4-9.3 25.7-16.9c0 0 .2-0.3 .4-0.6c1.9-2.9 2.8-6.2 3-9.6c.7-21.4 16.2-21.1 23.6-17.1c11.6 6.4 9.1 18.4 9.1 18.4c-3.3 3.5-14.9-3.9-14.9-3.9l-4.8 7.7c1.3 .6 2.8 1.3 4.4 2.1c10.9 5.4 12.1 47.3 6 54.1c-6.2 6.7-7.3 13.1-1.1 24.1c6.2 11 2.6 25.3-30.4 37.2c-5.4 1.9-13.4 2.1-18.7 0c-11.6-4.7-18-18.6-18.3-30.5c-0.2-6 3.2-10.7 6.2-15.6Z"
                                      fill="#222" transform="translate(137.4,226) translate(-137.4,-226)"/>
                                <path id="_a2"
                                      d="M113.1 236.3c0 0-0.1-0.1-0.1-0.1c-1.3-15.2 3.3-25.2 7.4-30.9c5.2-7.2 11.3-10.3 14.1-11.1c6.1-1.5 8.9-8.7 8.9-8.8c.1 0 .1-0.1 .2-0.1c.1 .1 .1 .2 .1 .2c-0.1 .1-3 7.4-9.2 9c-3.5 .9-9.4 4.7-13.9 10.9c-4 5.7-8.7 15.6-7.3 30.7c0 .1-0.1 .2-0.2 .2Z"
                                      fill="#fff" transform="translate(128.2,210.8) translate(-128.2,-210.8)"/>
                                <path id="_a3"
                                      d="M118.5 289.6c0 0 0 0 0 0c-0.1-0.1-13.3-5.3-13-19.9c0-0.1 0-0.2 .1-0.2c.1 0 .1 .1 .1 .2c-0.2 14.4 12.7 19.6 12.9 19.6c0 .1 .1 .1 0 .2c0 .1 0 .1-0.1 .1Z"
                                      fill="#fff" transform="translate(112,279.6) translate(-112,-279.6)"/>
                                <path d="M198.8 236.1c0 0-14.3 17.2-28.8 3.2l-5.6 12.9c0 0 21.1 16.4 37.1-9.3l-2.7-6.8Z"
                                      fill="url(#Gradient-0)" transform="translate(183,246.7) translate(-183,-246.7)"/>
                                <path d="M163.4 204.2c-4-1.2-15.6-3.4-26.6 6.8c-1.8 1.7-2.6 4.3-1.9 6.8c2.9 10.9 10.7 43.1 3.9 57c0 0 12.1 13.3 25.2 2.6c0 0 5.9-25.8 13.6-37.1c5.4-7.8-8.5-29.3-12-34.5c-0.5-0.8-1.3-1.3-2.2-1.6Z"
                                      fill="#ef6238" transform="translate(156.7,242.3) translate(-156.7,-242.3)"/>
                                <path d="M157.2 183.4c0 0-8 15.7-9.4 22.9c0 0 6.1 3.8 12.8-0.3c0 0 2.8-16.4 4.1-19.2l-7.5-3.4Z"
                                      fill="url(#Gradient-1)"
                                      transform="translate(156.3,195.7) translate(-156.3,-195.7)"/>
                                <path d="M179.4 331.5c-0.1 1.2 2 10.4 3.1 15.4c.4 2 .1 4.1-0.9 5.8l-38.6 65.2c-0.5 .7-0.9 1.6-1.1 2.5c-0.7 3-2.1 10.5-1.4 17.3l2 4.2l-8.6-2l-1.9-23.2l2.5-1.5c2.1-1.3 3.7-3.2 4.7-5.5c3.5-8.5 12.1-30.2 14.4-40.7c2.5-12 15.8-21.7 15.8-21.7l-2.3-5.5l12.3-10.3Z"
                                      fill="url(#Gradient-2)"
                                      transform="translate(157.3,386.7) translate(-157.3,-386.7)"/>
                                <path d="M124.3 431.9c0 0 4.7-7.4 5.2-10.3c.5-2.9 2.1-7.9 5-6.4c0 0 1.3 14 .8 19.5c-0.4 5.5 6.2 5.3 6.2 5.3c0 0 1.9 .2 3.2 1.6c.9 .9 .3 2.5-1 2.6c-2.2 .1-5.7 .2-9.3-0.5c-1.3-0.3-2.2-1.4-2.3-2.6l-0.9-16.2l-5.9 7.5l-1-0.5Z"
                                      fill="#222" transform="translate(134.7,429.6) translate(-134.7,-429.6)"/>
                                <path d="M156.3 341.9c0 0-1.4 58.2-1.6 66.5c-0.2 8.3 1.3 26.6 9.6 32.1l-3.6 2.6c0 0-4.5-3.8-8.9-11.2c-4.9-8.2-6.4-9.8-6.4-9.8l1.6-3.3c.7-1.5 .9-3.2 .6-4.8c-1.8-8.6-7.8-37.5-9.4-43.7c-1.9-7.3-2-17.1 4.6-25.4c6.7-8.1 13.5-3 13.5-3Z"
                                      fill="url(#Gradient-3)"
                                      transform="translate(150.7,391.7) translate(-150.7,-391.7)"/>
                                <path d="M148.6 445.8c-0.2 0-0.5-0.2-0.5-0.5c-0.3-1.9-1.4-9.7-2.3-11.7c-1.1-2.3-4.6-12 0-12.9c0 0 11.4 16.7 13.5 19c2.2 2.2 5 .8 5 .8c0 0 2.1 .6 3.8 2.7c.7 .9 0 2.4-1.2 2.4l-7.7 .1c-2.3 0-4.3-1.4-5.1-3.4c-1.4-3.4-3.7-8.4-6.4-10.6l1.4 13.5c.1 .3-0.2 .6-0.5 .6Z"
                                      fill="#222" transform="translate(155.9,433.3) translate(-155.9,-433.3)"/>
                                <path d="M165.8 271.1c0 0-1.7 5.6 .9 14.7l16.6 57.7c.2 .9-0.3 1.8-1.2 2.2c-4.9 1.7-21.1 6.8-43.3 5.2c-1.1 0-2-0.8-2.3-1.9c-1.4-6.6-6.4-29.1-7.4-33.7c-3.9-17.6-7.7-34.3 11.5-45.8c8.8 3.9 16.5 3.8 25.2 1.6Z"
                                      fill="#ef6238" transform="translate(154.6,310.4) translate(-154.6,-310.4)"/>
                                <path id="hand"
                                      d="M145.9 218.8c0 0-3.3 47.6 27.4 23.7c0 0 4.5-4.3 7.8-4.8c1.7-0.3 3.7-0.4 5.2-0.6c.6 0 .9 .9 .4 1.2c-1.1 .8-2.4 1.6-3.6 1.7c-2.3 .2 .1 1.9-2.4 6.4c-2.5 4.4-6.1 2.7-6.1 2.7c0 0-35.2 36.1-42.2-26.8c-0.2-11.7 11-11.1 13.5-3.5Z"
                                      fill="url(#Gradient-4)"
                                      transform="translate(159.7,236.4) translate(-159.7,-236.4)"/>
                                <path id="_a4"
                                      d="M207.7 224.2l-13.8-1.8c-1.6-0.2-3.4 1-4.4 3.1l-9.7 23.7c-1.8 3.6-0.7 8.2 2.1 8.7l11.1 1.3c1 .2 2.1-0.6 2.8-2l13-29.1c.8-1.7 .2-3.7-1.1-3.9Z"
                                      fill="#222"
                                      transform="translate(194,240.8) translate(0,0) translate(-194,-240.8)"/>
                                <path id="_a5"
                                      d="M201.1 244.8c0 0 7-10.3 6.2-11.5c-0.8-1.3-7-3.1-8.5-3.5c-1.4-0.4-4.1 8.8 2.3 15Z"
                                      fill="url(#Gradient-5)"
                                      transform="translate(202.2,237.3) translate(0,0) translate(-202.2,-237.3)"/>
                                <path id="_a6"
                                      d="M175.2 174.5c0 0 1.5 26.5-9.6 26.9c-11.1 .3-12.2-18.5-12.2-18.5c0 0 3.3-11.9 8.6-13.3c5.3-1.3 13.2 4.9 13.2 4.9Z"
                                      fill="url(#Gradient-6)"
                                      transform="translate(164.4,185.4) translate(0,0) translate(-164.4,-185.4)"/>
                                <path id="_a7"
                                      d="M172 166.4c0 0 5 5.2 4.2 8.4c-0.9 3.2-11.8-0.1-14.5-1.7l-9 9.6c0 0 .3-14.2 6.5-18.6c6.2-4.3 12.8 2.3 12.8 2.3Z"
                                      fill="#222" transform="translate(164.5,172.7) translate(-164.5,-172.7)"/>
                                <path id="_a8" d="M156.8 183.2c0 0-1.4-9.1-5.8-6.5c-4.4 2.5 .3 9.5 3.8 9.1l2-2.6Z"
                                      fill="url(#Gradient-7)" transform="translate(153,181) translate(-153,-181)"/>
                                <script><![CDATA[/*
                                    window.KeyshapeJS = function () {
                                        function r(a) {
                                            return "undefined" !== typeof a
                                        }

                                        function u(a, b) {
                                            return a && 0 === a.indexOf(b)
                                        }

                                        function X(a) {
                                            var b = {}, c;
                                            for (c in a) b[c] = a[c];
                                            return b
                                        }

                                        function F(a) {
                                            if (!isFinite(a)) throw Error("Non-finite value");
                                        }

                                        function Y(a) {
                                            if (14 >= a) return 16;
                                            var b = Z[a];
                                            b || (b = r(ka[a]) ? 0 | (a.toLowerCase().indexOf("color") === a.length - 5 ? 48 : 0) : 1);
                                            return b
                                        }

                                        function N(a) {
                                            return 0 <= a ? Math.pow(a, 1 / 3) : -Math.pow(-a, 1 / 3)
                                        }

                                        function la(a, b, c, d) {
                                            if (0 === a) return 0 === b ? b = -d / c : (a = Math.sqrt(c * c - 4 * b * d), d = (-c + a) /
                                                (2 * b), 0 <= d && 1 >= d ? b = d : (d = (-c - a) / (2 * b), b = 0 <= d && 1 >= d ? d : 0)), b;
                                            var e = c / a - b * b / (a * a) / 3;
                                            c = b * b * b / (a * a * a) / 13.5 - b * c / (a * a) / 3 + d / a;
                                            var f = c * c / 4 + e * e * e / 27;
                                            b = -b / (3 * a);
                                            if (0 >= f) {
                                                if (0 === e && 0 === c) return -N(d / a);
                                                a = Math.sqrt(c * c / 4 - f);
                                                d = Math.acos(-c / 2 / a);
                                                c = Math.cos(d / 3);
                                                d = Math.sqrt(3) * Math.sin(d / 3);
                                                a = N(a);
                                                e = 2 * a * c + b;
                                                if (0 <= e && 1 >= e) return e;
                                                e = -a * (c + d) + b;
                                                if (0 <= e && 1 >= e) return e;
                                                e = a * (d - c) + b;
                                                if (0 <= e && 1 >= e) return e
                                            } else {
                                                a = N(-c / 2 + Math.sqrt(f));
                                                c = N(-c / 2 - Math.sqrt(f));
                                                d = a + c + b;
                                                if (0 <= d && 1 >= d) return d;
                                                d = -(a + c) / 2 + b;
                                                if (0 <= d && 1 >= d) return d
                                            }
                                            return 0
                                        }

                                        function ma(a, b) {
                                            if (48 === a && "number" === typeof b) return "rgba(" + (b >>> 24) + "," + (b >>> 16 & 255) + "," + (b >>> 8 & 255) + "," + (b & 255) / 255 + ")";
                                            if (64 === a) return b = b.map(function (f) {
                                                return f + "px"
                                            }), b.join(",");
                                            if (96 === a) {
                                                for (var c = "", d = b.length, e = 0; e < d; e += 2) c += b[e], c += b[e + 1].join(",");
                                                return c
                                            }
                                            if (80 === a) {
                                                if (0 === b[0]) return "none";
                                                c = "";
                                                d = b.length;
                                                for (e = 0; e < d;) c += aa[b[e]], 1 === b[e] ? c += "(" + b[e + 1] + ") " : 5 === b[e] ? (c += "(" + b[e + 1] + "px " + b[e + 2] + "px " + b[e + 3] + "px rgba(" + (b[e + 4] >>> 24) + "," + (b[e + 4] >> 16 & 255) + "," + (b[e + 4] >> 8 & 255) + "," + (b[e +
                                                4] & 255) / 255 + ")) ", e += 3) : c = 2 === b[e] ? c + ("(" + b[e + 1] + "px) ") : 7 === b[e] ? c + ("(" + b[e + 1] + "deg) ") : c + ("(" + (0 > b[e + 1] ? 0 : b[e + 1]) + ") "), e += 2;
                                                return c
                                            }
                                            return 32 === a ? b + "px" : b
                                        }

                                        function B(a) {
                                            return 0 >= a ? 0 : 255 <= a ? 255 : a
                                        }

                                        function na(a, b, c, d) {
                                            if (16 === a || 32 === a) return (c - b) * d + b;
                                            if (0 === a) return .5 > d ? b : c;
                                            if (112 === a) return 0 >= d ? b : 1 <= d ? c : "visible";
                                            if (48 === a) {
                                                if ("number" === typeof b && "number" === typeof c) {
                                                    a = 1 - d;
                                                    var e = a * (b >>> 16 & 255) + d * (c >>> 16 & 255),
                                                        f = a * (b >>> 8 & 255) + d * (c >>> 8 & 255),
                                                        m = a * (b & 255) + d * (c & 255);
                                                    return B(a * (b >>> 24) + d * (c >>> 24)) <<
                                                        24 | B(e) << 16 | B(f) << 8 | B(m)
                                                }
                                                return .5 > d ? b : c
                                            }
                                            if (64 === a) {
                                                0 === b.length && (b = [0]);
                                                0 === c.length && (c = [0]);
                                                a = b.length;
                                                b.length !== c.length && (a = b.length * c.length);
                                                e = [];
                                                for (f = 0; f < a; ++f) m = b[f % b.length], m = (c[f % c.length] - m) * d + m, 0 > m && (m = 0), e.push(m);
                                                return e
                                            }
                                            if (96 === a) {
                                                if (b.length !== c.length) return .5 > d ? b : c;
                                                a = b.length;
                                                e = [];
                                                for (f = 0; f < a; f += 2) {
                                                    if (b[f] !== c[f]) return .5 > d ? b : c;
                                                    e[f] = b[f];
                                                    e[f + 1] = [];
                                                    for (m = 0; m < b[f + 1].length; ++m) e[f + 1].push((c[f + 1][m] - b[f + 1][m]) * d + b[f + 1][m])
                                                }
                                                return e
                                            }
                                            if (80 === a) {
                                                a = b.length;
                                                if (a !== c.length) return .5 >
                                                d ? b : c;
                                                e = [];
                                                for (f = 0; f < a;) {
                                                    if (b[f] !== c[f] || 1 === b[f]) return .5 > d ? b : c;
                                                    e[f] = b[f];
                                                    e[f + 1] = (c[f + 1] - b[f + 1]) * d + b[f + 1];
                                                    if (5 === b[f]) {
                                                        e[f + 2] = (c[f + 2] - b[f + 2]) * d + b[f + 2];
                                                        e[f + 3] = (c[f + 3] - b[f + 3]) * d + b[f + 3];
                                                        m = 1 - d;
                                                        var k = b[f + 4], h = c[f + 4],
                                                            g = m * (k >>> 24) + d * (h >>> 24),
                                                            n = m * (k >> 8 & 255) + d * (h >> 8 & 255),
                                                            p = m * (k & 255) + d * (h & 255);
                                                        e[f + 4] = (B(m * (k >> 16 & 255) + d * (h >> 16 & 255)) << 16 | B(n) << 8 | B(p)) + 16777216 * (B(g) | 0);
                                                        f += 3
                                                    }
                                                    f += 2
                                                }
                                                return e
                                            }
                                            return 0
                                        }

                                        function ba(a, b) {
                                            a:{
                                                var c = a + b[2];
                                                for (var d = b[4].length, e = 0; e < d; ++e) if (c < b[4][e]) {
                                                    c = e;
                                                    break a
                                                }
                                                c = d - 1
                                            }
                                            d = b[2];
                                            e = b[4][c -
                                            1] - d;
                                            d = (a - e) / (b[4][c] - d - e);
                                            if (b[6] && b[6].length > c - 1) if (e = b[6][c - 1], 1 === e[0]) if (0 >= d) d = 0; else if (1 <= d) d = 1; else {
                                                var f = e[1], m = e[3];
                                                d = la(3 * f - 3 * m + 1, -6 * f + 3 * m, 3 * f, -d);
                                                d = 3 * d * (1 - d) * (1 - d) * e[2] + 3 * d * d * (1 - d) * e[4] + d * d * d
                                            } else 2 === e[0] ? (e = e[1], d = Math.ceil(d * e) / e) : 3 === e[0] && (e = e[1], d = Math.floor(d * e) / e);
                                            return na(b[1] & 240, b[5][c - 1], b[5][c], d)
                                        }

                                        function O() {
                                            C || (z = (new Date).getTime() + ca)
                                        }

                                        function U(a) {
                                            if (a || !J) {
                                                for (var b = !1, c = 0; c < D.length; ++c) D[c].O(a) && (b = !0);
                                                if (a) for (; 0 < K.length;) if (a = K.shift(), c = a[0], 1 === a[1]) c.onfinish &&
                                                (c.onfinish(), b = !0), c.N(); else if (2 === a[1] && c.onloop) c.onloop();
                                                return b
                                            }
                                        }

                                        function da() {
                                            O();
                                            U(!0) && !C ? (J = !0, P(da)) : J = !1
                                        }

                                        function Q() {
                                            J || (J = !0, P(da))
                                        }

                                        function ea(a, b) {
                                            var c = [];
                                            a.split(b).forEach(function (d) {
                                                c.push(parseFloat(d))
                                            });
                                            return c
                                        }

                                        function G(a) {
                                            -1 === a.indexOf(",") && (a = a.replace(" ", ","));
                                            return ea(a, ",")
                                        }

                                        function fa(a) {
                                            a._ks || (a._ks = {});
                                            if (!a._ks.transform) {
                                                for (var b = a._ks.transform = [], c = 0; 14 >= c; ++c) b[c] = 0;
                                                b[10] = 1;
                                                b[11] = 1;
                                                if (a = a.getAttribute("transform")) {
                                                    a = a.trim().split(") ");
                                                    for (c = a.length -
                                                        2; 0 <= c; --c) if (u(a[c], "translate(")) {
                                                        for (var d = 0; d < c; d++) a.shift();
                                                        break
                                                    }
                                                    c = a.shift();
                                                    u(c, "translate(") && (c = G(c.substring(10)), b[1] = c[0], b[2] = r(c[1]) ? c[1] : 0, c = a.shift());
                                                    u(c, "rotate(") && (c = G(c.substring(7)), b[6] = c[0], c = a.shift());
                                                    u(c, "skewX(") && (c = G(c.substring(6)), b[7] = c[0], c = a.shift());
                                                    u(c, "skewY(") && (c = G(c.substring(6)), b[8] = c[0], c = a.shift());
                                                    u(c, "scale(") && (c = G(c.substring(6)), b[10] = c[0], b[11] = r(c[1]) ? c[1] : c[0], c = a.shift());
                                                    u(c, "translate(") && (c = G(c.substring(10)), b[13] = c[0], b[14] = r(c[1]) ? c[1] :
                                                        0)
                                                }
                                            }
                                        }

                                        function ha(a) {
                                            this.m = a;
                                            this.I = [];
                                            this.G = [];
                                            this.D = 0;
                                            this.B = this.g = this.i = null;
                                            this.o = this.j = this.l = 0;
                                            this.h = 1;
                                            this.s = this.K = this.A = !1
                                        }

                                        function H(a, b, c) {
                                            b = a[b];
                                            void 0 === b && (b = a[c]);
                                            return b
                                        }

                                        function oa(a) {
                                            return Array.isArray(a) ? a : u(a, "cubic-bezier(") ? (a = a.substring(13, a.length - 1).split(","), [1, parseFloat(a[0]), parseFloat(a[1]), parseFloat(a[2]), parseFloat(a[3])]) : u(a, "steps(") ? (a = a.substring(6, a.length - 1).split(","), [a[1] && "start" === a[1].trim() ? 2 : 3, parseFloat(a[0])]) : [0]
                                        }

                                        function pa(a) {
                                            a = a.trim();
                                            return u(a, "#") ? (parseInt(a.substring(1), 16) << 8) + 255 : u(a, "rgba(") ? (a = a.substring(5, a.length - 1), a = a.split(","), (parseInt(a[0], 10) << 24) + (parseInt(a[1], 10) << 16) + (parseInt(a[2], 10) << 8) + 255 * parseFloat(a[3]) << 0) : a
                                        }

                                        function ia(a) {
                                            !1 === a.s && (D.push(a), a.s = !0, !1 !== a.m.autoplay && a.play());
                                            return this
                                        }

                                        function V(a) {
                                            if (!0 === a.s) {
                                                a._cancel();
                                                var b = D.indexOf(a);
                                                -1 < b && D.splice(b, 1);
                                                b = K.indexOf(a);
                                                -1 < b && K.splice(b, 1);
                                                a.s = !1
                                            }
                                            return this
                                        }

                                        var W = Error("Not in timeline list"),
                                            ja = "mpath posX posY    rotate skewX skewY  scaleX scaleY  anchorX anchorY".split(" "),
                                            qa = " translate translate    rotate skewX skewY  scale scale  translate translate".split(" "),
                                            aa = "none url blur brightness contrast drop-shadow grayscale hue-rotate invert opacity saturate sepia".split(" "),
                                            P = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || null;
                                        P || (P = function (a) {
                                            window.setTimeout(a, 16)
                                        });
                                        var ra = /apple/i.test(navigator.vendor), Z = {
                                                d: 97,
                                                fill: 48,
                                                fillOpacity: 16,
                                                filter: 80,
                                                height: 33,
                                                opacity: 16,
                                                offsetDistance: 33,
                                                stroke: 48,
                                                strokeDasharray: 64,
                                                strokeDashoffset: 32,
                                                strokeOpacity: 16,
                                                strokeWidth: 32,
                                                transform: 1,
                                                visibility: 113,
                                                width: 33
                                            }, ka = window.getComputedStyle(document.documentElement), J = !1,
                                            z = (new Date).getTime(), C, ca = 0, D = [], K = [];
                                        ha.prototype = {
                                            J: function (a) {
                                                var b = 0;
                                                if (null !== this.i) {
                                                    var c = this.u();
                                                    0 < this.h && null !== c && c >= this.j ? this.o ? (this.i = z - this.l / this.h, this.o--, b = 2) : (b = 1, a ? this.g = c : this.g = this.B ? Math.max(this.B, this.j) : this.j) : 0 > this.h && null !== c && c <= this.l ? this.o && Infinity !== this.j ?
                                                        (this.i = z - this.j / this.h, this.o--, b = 2) : (this.o = 0, b = 1, a ? this.g = c : this.g = this.B ? Math.min(this.B, this.l) : this.l) : null !== c && 0 !== this.h && (a && null !== this.g && (this.i = z - this.g / this.h), this.g = null)
                                                }
                                                this.B = this.u();
                                                return b
                                            }, O: function (a) {
                                                a && (this.A && (this.A = !1, null === this.i && (0 !== this.h && null !== this.g ? (this.i = z - this.g / this.h, this.g = null) : this.i = z)), null === this.g && null !== this.i && (a = this.J(!1), 0 !== a && K.push([this, a])));
                                                a = this.u();
                                                if (null === a) return !1;
                                                for (var b = this.I, c = this.G, d = 0; d < b.length; ++d) {
                                                    for (var e = b[d],
                                                             f = !1, m = 0; m < c[d].length; ++m) {
                                                        var k = c[d][m], h = k[0];
                                                        if (null !== h) {
                                                            var g = k[2];
                                                            var n = k[4].length, p = k[4][n - 1] - g;
                                                            g = 0 === p ? k[5][n - 1] : a < g ? !k[9] || k[9][0] & 1 ? k[5][0] : k[9][1] : a >= g + k[3] ? !k[9] || k[9][0] & 2 ? 0 === k[3] % p ? k[5][n - 1] : ba(k[3] % p, k) : k[9][1] : ba((a - g) % p, k);
                                                            0 === h ? (e._ks.mpath = k[8], e._ks.transform[h] = g, f = !0) : 14 >= h ? (e._ks.transform[h] = g, f = !0) : (g = ma(k[1] & 240, g), k[1] & 1 ? e.setAttribute(h, g) : e.style[h] = g)
                                                        }
                                                    }
                                                    if (f) {
                                                        f = e;
                                                        fa(f);
                                                        m = f._ks.transform;
                                                        k = "";
                                                        if (h = f._ks.mpath) n = m[0], 0 > n && (n = 0), 100 < n && (n = 100), n = n * h[2] / 100, g = h[1].getPointAtLength(n),
                                                            k = "translate(" + g.x + "," + g.y + ") ", h[0] && (.5 > n ? (n = g, g = h[1].getPointAtLength(.5)) : n = h[1].getPointAtLength(n - .5), k += "rotate(" + 180 * Math.atan2(g.y - n.y, g.x - n.x) / Math.PI + ") ");
                                                        for (h = 1; h < m.length; ++h) g = m[h], g !== (10 === h || 11 === h ? 1 : 0) && (k += " " + qa[h] + "(", k = 2 >= h ? k + (1 === h ? g + ",0" : "0," + g) : 13 <= h ? k + (13 === h ? g + ",0" : "0," + g) : 10 <= h ? k + (10 === h ? g + ",1" : "1," + g) : k + g, k += ")");
                                                        f.setAttribute("transform", k)
                                                    }
                                                    ra && e.setAttribute("opacity", e.getAttribute("opacity"))
                                                }
                                                return "running" === this.v()
                                            }, N: function () {
                                                !1 !== this.m.autoremove && "finished" ===
                                                this.v() && V(this)
                                            }, H: function () {
                                                if (!this.K) {
                                                    this.K = !0;
                                                    for (var a = this.I, b = this.G, c = 0; c < a.length; ++c) for (var d = a[c], e = 0; e < b[c].length; ++e) 14 >= b[c][e][0] && fa(d)
                                                }
                                            }, C: function (a) {
                                                if ("number" === typeof a) return [a, 0];
                                                if (!r(this.m.markers) || !r(this.m.markers[a])) throw Error("Invalid marker: " + a);
                                                a = this.m.markers[a];
                                                return r(a.time) ? [+a.time, +(a.dur || 0)] : [+a, 0]
                                            }, play: function (a) {
                                                r(a) && null !== a && (a = this.C(a)[0], F(a), 0 > this.h && a < this.l && (a = this.l), 0 < this.h && a > this.j && (a = this.j), this.F(a, !0));
                                                if (!this.s) throw W;
                                                a = this.u();
                                                if (0 < this.h && (null === a || a >= this.j || a < this.l)) this.g = this.l; else if (0 > this.h && (null === a || a <= this.l || a > this.j)) {
                                                    if (Infinity === this.j) throw Error("Cannot seek to Infinity");
                                                    this.g = this.j
                                                } else 0 === this.h && null === a && (this.g = this.l);
                                                if (null === this.g) return this;
                                                this.i = null;
                                                this.A = !0;
                                                this.H();
                                                Q();
                                                return this
                                            }, pause: function (a) {
                                                if (!this.s) throw W;
                                                r(a) && (a = this.C(a)[0], F(a));
                                                if ("paused" !== this.v()) {
                                                    O();
                                                    var b = this.u();
                                                    if (null === b) if (0 <= this.h) this.g = this.l; else {
                                                        if (Infinity === this.j) throw Error("Cannot seek to Infinity");
                                                        this.g = this.j
                                                    }
                                                    null !== this.i && null === this.g && (this.g = b);
                                                    this.i = null;
                                                    this.A = !1;
                                                    this.J(!1);
                                                    this.H();
                                                    Q()
                                                }
                                                r(a) && this.F(a, !0);
                                                return this
                                            }, range: function (a, b) {
                                                if (0 === arguments.length) return {"in": this.l, out: this.j};
                                                var c = this.C(a)[0], d = this.D;
                                                r(b) && (d = this.C(b)[0]);
                                                F(c);
                                                if (0 > c || 0 > d || c >= d || isNaN(d)) throw Error("Invalid range");
                                                var e = this.v();
                                                this.l = c;
                                                this.j = d;
                                                "finished" === e && "running" === this.v() && this.play();
                                                return this
                                            }, loop: function (a) {
                                                if (!r(a)) return {count: this.o};
                                                this.o = !0 === a ? Infinity : Math.floor(a);
                                                if (0 > this.o || isNaN(this.o)) this.o = 0;
                                                return this
                                            }, u: function () {
                                                return null !== this.g ? this.g : null === this.i ? null : (z - this.i) * this.h
                                            }, F: function (a, b) {
                                                b && O();
                                                null !== a && (this.H(), null !== this.g || null === this.i || 0 === this.h ? (this.g = a, U(!1)) : this.i = z - a / this.h, this.s || (this.i = null), this.B = null, this.J(!0), Q())
                                            }, L: function () {
                                                return this.u()
                                            }, time: function (a) {
                                                if (r(a)) {
                                                    if (!this.s) throw W;
                                                    a = this.C(a)[0];
                                                    F(a);
                                                    this.F(a, !0);
                                                    return this
                                                }
                                                return this.L()
                                            }, v: function () {
                                                var a = this.u();
                                                return this.A ? "running" : null === a ? "idle" :
                                                    null === this.i ? "paused" : 0 < this.h && a >= this.j || 0 > this.h && a <= this.l ? "finished" : "running"
                                            }, state: function () {
                                                return this.v()
                                            }, duration: function () {
                                                return this.D
                                            }, M: function (a) {
                                                F(a);
                                                O();
                                                var b = this.u();
                                                this.h = a;
                                                null !== b && this.F(b, !1)
                                            }, rate: function (a) {
                                                return r(a) ? (this.M(a), this) : this.h
                                            }, markers: function (a) {
                                                return r(a) ? (this.m.markers = X(a), this) : r(this.m.markers) ? this.m.markers : {}
                                            }, marker: function (a) {
                                                return r(this.m.markers) ? this.m.markers[a] : void 0
                                            }, _cancel: function () {
                                                if (!this.s || "idle" === this.v()) return this;
                                                this.i = this.g = null;
                                                this.A = !1;
                                                return this
                                            }
                                        };
                                        return {
                                            version: "1.2.1", animate: function () {
                                                var a = {};
                                                1 === arguments.length % 2 && (a = X(arguments[arguments.length - 1]));
                                                a = new ha(a);
                                                for (var b = arguments, c = 0, d = 0; d < b.length - 1; d += 2) {
                                                    var e = b[d];
                                                    var f = e instanceof Element ? e : document.getElementById(e.substring(1));
                                                    if (!f) throw Error("Invalid target: " + e);
                                                    e = f;
                                                    f = b[d + 1];
                                                    e._ks || (e._ks = {});
                                                    for (var m = [], k = 0; k < f.length; ++k) {
                                                        var h = f[k], g = H(h, "p", "property");
                                                        if ("string" !== typeof g || -1 !== g.indexOf("-") || "" === g || !(0 < Z[g] || 0 <= ja.indexOf(g))) throw Error("Invalid property: " +
                                                            g);
                                                        var n = ja.indexOf(g);
                                                        "" !== g && 0 <= n && (g = n);
                                                        n = Y(g);
                                                        var p = H(h, "t", "times");
                                                        if (!p || 2 > p.length) throw Error("Not enough times");
                                                        p = p.slice();
                                                        if (!isFinite(p[0]) || 0 > p[0]) throw Error("Invalid time: " + p[0]);
                                                        for (var w = 1; w < p.length; ++w) if (!isFinite(p[w]) || 0 > p[w] || p[w] < p[w - 1]) throw Error("Invalid time: " + p[w]);
                                                        w = p[0];
                                                        var R = p[p.length - 1] - w, S = h.iterations || 0;
                                                        1 > S && (S = 1);
                                                        R *= S;
                                                        c < R + w && (c = R + w);
                                                        var I = H(h, "v", "values");
                                                        if (!I || I.length !== p.length) throw Error("Values do not match times");
                                                        I = I.slice();
                                                        for (var x = g, l = I, L = Y(x) &
                                                            240, q = 0; q < l.length; ++q) if (96 === L) {
                                                            for (var E = l[q].substring(6, l[q].length - 2).match(/[A-DF-Za-df-z][-+0-9eE., ]*/ig), M = [], t = 0; t < E.length; ++t) {
                                                                M.push(E[t][0]);
                                                                for (var v = 1 < E[t].trim().length ? E[t].substring(1).split(",") : [], A = 0; A < v.length; ++A) v[A] = parseFloat(v[A]);
                                                                M.push(v)
                                                            }
                                                            l[q] = M
                                                        } else if (48 === L) u(l[q], "#") ? (E = 9 === l[q].length, l[q] = parseInt(l[q].substring(1), 16), E || (l[q] = 256 * l[q] | 255)) : u(l[q], "url(") || "none" === l[q] || (console.warn("unsupported color: " + l[q]), l[q] = 0); else if (80 === L) {
                                                            E = l;
                                                            M = q;
                                                            t = l[q];
                                                            if ("none" ===
                                                                t) t = [0]; else {
                                                                v = [];
                                                                for (var y = t.indexOf("("); 0 < y;) if (A = aa.indexOf(t.substring(0, y)), 0 <= A) {
                                                                    v.push(A);
                                                                    var T = t.indexOf(") ");
                                                                    0 > T && (T = t.length - 1);
                                                                    y = t.substring(y + 1, T).split(" ");
                                                                    5 === A ? (v.push(parseFloat(y[0])), v.push(parseFloat(y[1])), v.push(parseFloat(y[2])), v.push(pa(y[3]))) : 1 === A ? v.push(y[0]) : v.push(parseFloat(y[0]));
                                                                    t = t.substring(T + 1).trim();
                                                                    y = t.indexOf("(")
                                                                } else break;
                                                                t = v
                                                            }
                                                            E[M] = t
                                                        } else 64 === L ? "none" !== l[q] ? /^[0-9 .]*$/.test(l[q]) ? l[q] = ea(l[q], " ") : (console.warn("unsupported value: " + l[q]), l[q] = [0]) :
                                                            l[q] = [0] : 32 === L ? (F(l[q]), l[q] = parseFloat(l[q])) : 0 === x && (l[q] = parseFloat(l[q]));
                                                        x = H(h, "e", "easing");
                                                        l = p.length;
                                                        for (x || (x = []); x.length < l;) x.push([1, 0, 0, .58, 1]);
                                                        for (l = 0; l < x.length; ++l) x[l] = oa(x[l]);
                                                        n = [g, n, w, R, p, I, x, S];
                                                        p = H(h, "mp", "motionPath");
                                                        r(p) && 0 === g && (n[8] = [], n[8][0] = h.motionRotate, g = document.createElementNS("http://www.w3.org/2000/svg", "path"), p || (p = "M0,0"), g.setAttribute("d", p), n[8][1] = g, n[8][2] = g.getTotalLength());
                                                        h = H(h, "f", "fill");
                                                        r(h) && (n[9] = h.slice());
                                                        m.push(n)
                                                    }
                                                    0 < m.length && (a.I.push(e), a.G.push(m))
                                                }
                                                a.D =
                                                    c;
                                                a.l = 0;
                                                a.j = a.D;
                                                ia(a);
                                                return a
                                            }, add: ia, remove: V, removeAll: function () {
                                                for (var a = D.length - 1; 0 <= a; --a) V(D[a]);
                                                return this
                                            }, timelines: function () {
                                                return D.slice()
                                            }, globalPlay: function () {
                                                C && (ca = C - (new Date).getTime(), C = void 0, Q());
                                                return this
                                            }, globalPause: function () {
                                                C || (C = z, U(!1));
                                                return this
                                            }, globalState: function () {
                                                return C ? "paused" : "running"
                                            }
                                        }
                                    }();
                                    ]]></script>
                                <script><![CDATA[
                                    if (KeyshapeJS.version.indexOf('1.') != 0) throw Error('Expected KeyshapeJS v1.*.*');
                                    window.ks = document.ks = KeyshapeJS;
                                    (function (ks) {
                                        var tl = ks.animate("#_a0", [{
                                                p: 'mpath',
                                                t: [3100, 3200, 3300],
                                                v: ['0%', '50%', '100%'],
                                                e: [[1, .4, 0, 1, 1], [1, .4, 0, 1, 1], [0]],
                                                mp: "M249.7,138.9L249.7,131L249.7,138.9"
                                            }, {
                                                p: 'rotate',
                                                t: [1800, 2100, 2400, 2700, 3300],
                                                v: [4, -4, 6, -0.5, 0],
                                                e: [[1, .4, 0, .6, 1], [1, .5, 0, .6, 1], [1, .4, 0, .3, 1], [1, .1, -1, .5, 1.3], [0]]
                                            }, {
                                                p: 'scaleX',
                                                t: [1800, 2100, 2400, 2600, 3300, 3500],
                                                v: [0, 1.1, 1, 1, 1, 0],
                                                e: [[1, .4, 0, .6, 1], [1, .4, 0, 1, 1], [1, .4, 0, 1, 1], [1, 0, 0, .6, 1], [1, .4, 0, .6, 1], [0]]
                                            }, {
                                                p: 'scaleY',
                                                t: [1800, 2100, 2400, 2600, 3300, 3500],
                                                v: [0, 1.1, 1, 1, 1, 0],
                                                e: [[1, .4, 0, .6, 1], [1, .4, 0, 1, 1], [1, .4, 0, 1, 1], [1, 0, 0, .6, 1], [1, .4, 0, .6, 1], [0]]
                                            }],
                                            "#Road", [{p: 'opacity', t: [3200, 3300], v: [1, 0], e: [[0], [0]]}, {
                                                p: 'd',
                                                t: [0, 500, 900, 1300, 1600, 2000, 2800, 2900, 3000, 3100, 3200, 3300],
                                                v: ["path('M2.6,2.3L2.6,2.3L2.6,2.3L2.6,2.3L2.6,2.3L2.6,2.3')", "path('M2.6,2.3L22.7,141.2L22.7,141.2L22.7,141.2L22.7,141.2L22.7,141.2')", "path('M2.6,2.3L22.7,141.2L115.6,141.2L115.6,141.2L115.6,141.2L115.6,141.2')", "path('M2.6,2.3L22.7,141.2L116.6,141.2L141.6,202.3L141.6,202.3L141.6,202.3')", "path('M2.6,2.3L22.7,141.2L116.6,141.2L141.6,202.3L184.6,202.3L184.6,202.3')", "path('M2.6,2.3L22.7,141.2L116.6,141.2L141.6,202.3L183.6,202.3L183.6,122.3')", "path('M2.6,2.3L22.7,141.2L116.6,141.2L141.6,202.3L183.6,202.3L183.6,122.3')", "path('M22.7,141.2L22.7,141.2L116.6,141.2L141.6,202.3L183.6,202.3L183.6,122.3')", "path('M116.6,141.2L116.6,141.2L116.6,141.2L141.6,202.3L183.6,202.3L183.6,122.3')", "path('M141.6,202.3L141.6,202.3L141.6,202.3L141.6,202.3L183.6,202.3L183.6,122.3')", "path('M183.6,202.3L183.6,202.3L183.6,202.3L183.6,202.3L183.6,202.3L183.6,122.3')", "path('M183.6,122.3L183.6,122.3L183.6,122.3L183.6,122.3L183.6,122.3L183.6,122.3')"],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0], [1, .4, 0, 1, 1], [1, .4, 0, 1, 1], [1, .4, 0, 1, 1], [1, .4, 0, 1, 1], [1, .4, 0, 1, 1], [0]]
                                            }],
                                            "#_a1", [{
                                                p: 'rotate',
                                                t: [700, 1800, 4000],
                                                v: [0, 3, 0],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]]
                                            }],
                                            "#_a2", [{
                                                p: 'rotate',
                                                t: [700, 1800, 4000],
                                                v: [0, 3, 0],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]]
                                            }],
                                            "#_a3", [{
                                                p: 'rotate',
                                                t: [700, 1800, 4000],
                                                v: [0, 3, 0],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]]
                                            }],
                                            "#hand", [{
                                                p: 'd',
                                                t: [0, 300, 600, 1300, 2200],
                                                v: ["path('M145.9,218.8C145.9,218.8,142.6,266.4,173.3,242.5C173.3,242.5,177.8,238.2,181.1,237.7C182.8,237.4,184.8,237.3,186.3,237.1C186.9,237.1,187.2,238,186.7,238.3C185.6,239.1,184.3,239.9,183.1,240C180.8,240.2,183.2,241.9,180.7,246.4C178.2,250.8,174.6,249.1,174.6,249.1C174.6,249.1,139.4,285.2,132.4,222.3C132.2,210.6,143.4,211.2,145.9,218.8Z')", "path('M145.9,218.8C145.9,218.8,136.9,264.4,167.6,240.5C167.6,240.5,172.1,236.2,175.4,235.7C177.1,235.4,179.1,235.3,180.6,235.2C181.2,235.1,181.5,236,181,236.4C179.9,237.1,178.6,237.9,177.4,238C175.1,238.3,177.5,240,175,244.4C172.5,248.8,168.9,247.2,168.9,247.2C168.9,247.2,139.4,285.2,132.4,222.3C132.2,210.6,143.4,211.2,145.9,218.8Z')", "path('M145.9,218.8C145.9,218.8,142.6,266.4,173.3,242.5C173.3,242.5,177.8,238.2,181.1,237.7C182.8,237.4,184.8,237.3,186.3,237.1C186.9,237.1,187.2,238,186.7,238.3C185.6,239.1,184.3,239.9,183.1,240C180.8,240.2,183.2,241.9,180.7,246.4C178.2,250.8,174.6,249.1,174.6,249.1C174.6,249.1,139.4,285.2,132.4,222.3C132.2,210.6,143.4,211.2,145.9,218.8Z')", "path('M145.9,218.8C145.9,218.8,136.9,264.4,167.6,240.5C167.6,240.5,172.1,236.2,175.4,235.7C177.1,235.4,179.1,235.3,180.6,235.2C181.2,235.1,181.5,236,181,236.4C179.9,237.1,178.6,237.9,177.4,238C175.1,238.3,177.5,240,175,244.4C172.5,248.8,168.9,247.2,168.9,247.2C168.9,247.2,139.4,285.2,132.4,222.3C132.2,210.6,143.4,211.2,145.9,218.8Z')", "path('M145.9,218.8C145.9,218.8,142.6,266.4,173.3,242.5C173.3,242.5,177.8,238.2,181.1,237.7C182.8,237.4,184.8,237.3,186.3,237.1C186.9,237.1,187.2,238,186.7,238.3C185.6,239.1,184.3,239.9,183.1,240C180.8,240.2,183.2,241.9,180.7,246.4C178.2,250.8,174.6,249.1,174.6,249.1C174.6,249.1,139.4,285.2,132.4,222.3C132.2,210.6,143.4,211.2,145.9,218.8Z')"],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]]
                                            }],
                                            "#_a4", [{
                                                p: 'mpath',
                                                t: [0, 300, 600, 1300, 2200],
                                                v: ['0%', '25%', '50%', '75%', '100%'],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]],
                                                mp: "M194,240.8L195.1,234.8L194,240.8L195.1,234.8L194,240.8"
                                            }],
                                            "#_a5", [{
                                                p: 'mpath',
                                                t: [0, 300, 600, 1300, 2200],
                                                v: ['0%', '25%', '50%', '75%', '100%'],
                                                e: [[1, 0, 0, .6, 1], [1, .4, 0, .6, 1], [1, 0, 0, .6, 1], [1, .4, 0, .6, 1], [0]],
                                                mp: "M202.2,237.3L203.3,231.2L202.2,237.3L203.3,231.2L202.2,237.3"
                                            }],
                                            "#_a6", [{
                                                p: 'mpath',
                                                t: [700, 1800, 4000],
                                                v: ['0%', '50%', '100%'],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]],
                                                mp: "M164.4,185.4L165.4,184.4L164.4,185.4"
                                            }, {
                                                p: 'rotate',
                                                t: [700, 1800, 4000],
                                                v: [0, 10, 0],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]]
                                            }],
                                            "#_a7", [{
                                                p: 'rotate',
                                                t: [700, 1800, 4000],
                                                v: [0, 3, 0],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]]
                                            }],
                                            "#_a8", [{
                                                p: 'rotate',
                                                t: [700, 1800, 4000],
                                                v: [0, 3, 0],
                                                e: [[1, 0, 0, .6, 1], [1, 0, 0, .6, 1], [0]]
                                            }],
                                            {autoremove: false}).range(0, 4000).loop(true);
                                        if (document.location.search.substr(1).split('&').indexOf('global=paused') >= 0) ks.globalPause();
                                    })(KeyshapeJS);
                                    ]]></script>
                            </svg>

{{--                    <img src="src/img/how-it-works.svg" alt="" class="intro_image">--}}
                        </div>
                    </div>
                    @endif
                    @endif

                </section>

                <section class="section section__dark section__video">
                    <div class="section_holder">
                        
                        @if(isset($explode[3]))
                        <div class="section_video">

{{--                                <div class="app_video">--}}
                                    <div class="app_video-wrapper">
                                        <iframe width="560" height="315" {{ $video}} title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        {{--                            <iframe width="560" height="315" src="https://www.youtube.com/embed/V5da2rLyYCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                    </div>
{{--                                </div>--}}
                            @else

                            
                            </div>
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
                                                    <span>{{$ManagingOperation[2]->list_requirements}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="operation">
                                                <img src="{{asset('uploads/'.$ManagingOperation[3]->photo)}}" alt=""
                                                     class="operation_icon">
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


