@extends('backend.layouts.dashboard.master')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/vendors/whether-icon.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 xl-100 box-col-12">
            <div class="card">
                <div class="cal-date-widget card-body">
                    <div class="row">
                        <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                            <div class="cal-info text-center">
                                <h2>{{ date("l") }}</h2>
                                <div class="d-inline-block mt-2"><span class="b-r-dark pe-3">{{ date("M") }}, <span class="ps-3">{{ date("Y") }}</span></div>
                                <p class="mt-4 f-16 text-muted">“ Opportunity is missed by most people because it is dressed in overalls and looks like work. ”</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                            <div class="cal-datepicker">
                                <div class="datepicker-here float-sm-end" data-language="en">           </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
            <div class="card">
                <div class="mobile-clock-widget" style="height: 300px">
                    <div class="bg-svg">
                        <svg class="climacon climacon_cloudLightningMoon" id="cloudLightningMoon" version="1.1" viewBox="15 15 70 70">
                            <clippath id="moonCloudFillClipfill11">
                                <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                            </clippath>
                            <clippath id="cloudFillClipfill19">
                                <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                            </clippath>
                            <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoon">
                                <g clip-path="url(#cloudFillClip)">
                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                                    </g>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                                    <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div>
                        <ul class="clock" id="clock">
                            <li class="hour" id="hour"></li>
                            <li class="min" id="min"></li>
                            <li class="sec" id="sec"></li>
                        </ul>
                        <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span id="year">, </span></div>
                        <div>
                            <p class="m-0 f-14 text-light">{{ $location->cityName }}, {{ $location->countryName }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
            <div class="card">
                <div class="weather-widget-two" style="height: 300px;">
                    <div class="card-body">
                        <div class="media">
                            @include('backend.partials.weather-logo')
                            <!-- cloudDrizzleMoonAlt-->
                            <div class="media-body align-self-center text-white">
                                <h4 class="m-0 f-w-600 num">{{ round(($currentWeather['forecast']['temp'] -32) * (5/9)) }}°C  /  {{ $currentWeather['forecast']['temp'] }}°F </h4>
                                <p class="m-0 f-14">{{ $location->cityName }}, {{ $location->countryName }}</p>
                            </div>
                        </div>
                        <div class="top-bg-whether">
                            <svg class="climacon climacon_cloudHailAltFill" id="cloudHailAltFill" version="1.1" viewBox="15 15 70 70">
                                <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltFill">
                                    <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                            <circle cx="42" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                            <circle cx="49.999" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                            <circle cx="57.998" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                            <circle cx="42" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                            <circle cx="49.999" cy="65.498" r="2"></circle>
                                        </g>
                                        <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                            <circle cx="57.998" cy="65.498" r="2"></circle>
                                        </g>
                                    </g>
                                    <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                        <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                                        <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="bottom-whetherinfo">
                            <div class="row">
                                <div class="col-6"><i data-feather="cloud-drizzle"></i></div>
                                <div class="col-6">
                                    <div class="whether-content" style="top:100px;">
                                       <span>Condition</span>
                                       <h4 class="num mb-0">{{ $currentWeather['condition']['name'] }}</h4>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <img src="{{ asset('backend/images/dashboard/humidity.svg') }}" alt="" width="30" style="color:#bfbcca ">
                        </div>
                        <div class="media-body"><span class="m-0 d-block">Humidity</span>
                            <h6 class="mb-0 d-inline">{{ $currentWeather['forecast']['humidity'] }}</h6><h6 class="mb-0 d-inline">%</h6>
                            <img class="icon-bg"  src="{{ asset('backend/images/dashboard/humidity.svg') }}" alt="" style="color:#bfbcca     ">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-success b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <svg class="climacon climacon_wind" id="wind" version="1.1" viewBox="15 15 70 70">                          <g class="climacon_iconWrap climacon_iconWrap-wind">                            <g class="climacon_wrapperComponent climacon_componentWrap-wind">                              <path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"></path>                              <path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"></path>                            </g>                          </g>                        </svg>                        <!-- wind-->
                        </div>
                        <div class="media-body"><span class="m-0 d-block">Wind</span>
                            <h6 class="mb-0 d-inline">{{ $currentWeather['wind']['speed'] }}</h6> <b class="mb-0  d-inline"> Km/h</b>
                                <svg class="climacon climacon_wind icon-bg" id="wind" version="1.1" viewBox="15 15 70 70">                          <g class="climacon_iconWrap climacon_iconWrap-wind">                            <g class="climacon_wrapperComponent climacon_componentWrap-wind">                              <path class="climacon_component climacon_component-stroke climacon_component-wind climacon_component-wind_curl" d="M65.999,52L65.999,52h-3c-1.104,0-2-0.895-2-1.999c0-1.104,0.896-2,2-2h3c1.104,0,2-0.896,2-1.999c0-1.105-0.896-2-2-2s-2-0.896-2-2s0.896-2,2-2c0.138,0,0.271,0.014,0.401,0.041c3.121,0.211,5.597,2.783,5.597,5.959C71.997,49.314,69.312,52,65.999,52z"></path>                              <path class="climacon_component climacon_component-stroke climacon_component-wind" d="M55.999,48.001h-2h-6.998H34.002c-1.104,0-1.999,0.896-1.999,2c0,1.104,0.895,1.999,1.999,1.999h2h3.999h3h4h3h3.998h2c3.313,0,6,2.688,6,6c0,3.176-2.476,5.748-5.597,5.959C56.271,63.986,56.139,64,55.999,64c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2s2-0.896,2-2s-0.896-2-2-2h-2h-3.998h-3h-4h-3h-3.999h-2c-3.313,0-5.999-2.686-5.999-5.999c0-3.175,2.475-5.747,5.596-5.959c0.131-0.026,0.266-0.04,0.403-0.04l0,0h12.999h6.998h2c1.104,0,2-0.896,2-2s-0.896-2-2-2s-2-0.895-2-2c0-1.104,0.896-2,2-2c0.14,0,0.272,0.015,0.403,0.041c3.121,0.211,5.597,2.783,5.597,5.959C61.999,45.314,59.312,48.001,55.999,48.001z"></path>                            </g>                          </g>                        </svg>                        <!-- wind-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <svg class="climacon climacon_sunrise" id="sunrise" version="1.1" viewBox="15 15 70 70">                          <g class="climacon_iconWrap climacon_iconWrap-sunrise">                            <g class="climacon_componentWrap climacon_componentWrap-sunrise">                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M32.003,54h-4c-1.104,0-2,0.896-2,2s0.896,2,2,2h4c1.104,0,2-0.896,2-2S33.106,54,32.003,54z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M38.688,41.859l-2.828-2.828c-0.781-0.78-2.047-0.78-2.828,0c-0.781,0.781-0.781,2.047,0,2.828l2.828,2.828c0.781,0.781,2.047,0.781,2.828,0C39.469,43.906,39.469,42.641,38.688,41.859z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.001,40.002c1.104,0,1.999-0.896,1.999-2v-3.999c0-1.104-0.896-2-1.999-2c-1.105,0-2,0.896-2,2v3.999C48.001,39.106,48.896,40.002,50.001,40.002z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M66.969,39.031c-0.779-0.78-2.048-0.78-2.828,0l-2.828,2.828c-0.779,0.781-0.779,2.047,0,2.828c0.781,0.781,2.049,0.781,2.828,0l2.828-2.828C67.749,41.078,67.749,39.812,66.969,39.031z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M71.997,54h-3.999c-1.104,0-1.999,0.896-1.999,2s0.896,2,1.999,2h3.999c1.104,0,2-0.896,2-2S73.104,54,71.997,54z"></path>                              </g>                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M50.001,44.002c-6.627,0-11.999,5.371-11.999,11.998c0,1.404,0.254,2.747,0.697,3.999h4.381c-0.683-1.177-1.079-2.54-1.079-3.999c0-4.418,3.582-7.999,8-7.999c4.417,0,7.998,3.581,7.998,7.999c0,1.459-0.396,2.822-1.078,3.999h4.381c0.443-1.252,0.697-2.595,0.697-3.999C61.999,49.373,56.627,44.002,50.001,44.002z"></path>                              </g>                              <g class="climacon_wrapperComponent climacon_wrapperComponent-arrow">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_arrow climacon_component-stroke_arrow-up" d="M50.001,63.046c0.552,0,0.999-0.447,0.999-1v-3.827l2.536,2.535c0.39,0.391,1.022,0.391,1.414,0c0.39-0.391,0.39-1.023,0-1.414l-4.242-4.242c-0.391-0.391-1.024-0.391-1.414,0l-4.242,4.242c-0.391,0.391-0.391,1.023,0,1.414c0.391,0.391,1.023,0.391,1.414,0l2.535-2.535v3.827C49.001,62.599,49.448,63.046,50.001,63.046z"></path>                              </g>                              <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M59.999,63.999H40.001c-1.104,0-1.999,0.896-1.999,2s0.896,1.999,1.999,1.999h19.998c1.104,0,2-0.895,2-1.999S61.104,63.999,59.999,63.999z"></path>                              </g>                            </g>                          </g>                        </svg>
                        </div>
                        <div class="media-body"><span class="m-0">Sun Rise</span>
                            <h6 class="mb-0 sunrise"></h6>
                                <svg class="climacon climacon_sunrise icon-bg" id="sunrise" version="1.1" viewBox="15 15 70 70">                          <g class="climacon_iconWrap climacon_iconWrap-sunrise">                            <g class="climacon_componentWrap climacon_componentWrap-sunrise">                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M32.003,54h-4c-1.104,0-2,0.896-2,2s0.896,2,2,2h4c1.104,0,2-0.896,2-2S33.106,54,32.003,54z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M38.688,41.859l-2.828-2.828c-0.781-0.78-2.047-0.78-2.828,0c-0.781,0.781-0.781,2.047,0,2.828l2.828,2.828c0.781,0.781,2.047,0.781,2.828,0C39.469,43.906,39.469,42.641,38.688,41.859z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.001,40.002c1.104,0,1.999-0.896,1.999-2v-3.999c0-1.104-0.896-2-1.999-2c-1.105,0-2,0.896-2,2v3.999C48.001,39.106,48.896,40.002,50.001,40.002z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M66.969,39.031c-0.779-0.78-2.048-0.78-2.828,0l-2.828,2.828c-0.779,0.781-0.779,2.047,0,2.828c0.781,0.781,2.049,0.781,2.828,0l2.828-2.828C67.749,41.078,67.749,39.812,66.969,39.031z"></path>                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M71.997,54h-3.999c-1.104,0-1.999,0.896-1.999,2s0.896,2,1.999,2h3.999c1.104,0,2-0.896,2-2S73.104,54,71.997,54z"></path>                              </g>                              <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M50.001,44.002c-6.627,0-11.999,5.371-11.999,11.998c0,1.404,0.254,2.747,0.697,3.999h4.381c-0.683-1.177-1.079-2.54-1.079-3.999c0-4.418,3.582-7.999,8-7.999c4.417,0,7.998,3.581,7.998,7.999c0,1.459-0.396,2.822-1.078,3.999h4.381c0.443-1.252,0.697-2.595,0.697-3.999C61.999,49.373,56.627,44.002,50.001,44.002z"></path>                              </g>                              <g class="climacon_wrapperComponent climacon_wrapperComponent-arrow">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_arrow climacon_component-stroke_arrow-up" d="M50.001,63.046c0.552,0,0.999-0.447,0.999-1v-3.827l2.536,2.535c0.39,0.391,1.022,0.391,1.414,0c0.39-0.391,0.39-1.023,0-1.414l-4.242-4.242c-0.391-0.391-1.024-0.391-1.414,0l-4.242,4.242c-0.391,0.391-0.391,1.023,0,1.414c0.391,0.391,1.023,0.391,1.414,0l2.535-2.535v3.827C49.001,62.599,49.448,63.046,50.001,63.046z"></path>                              </g>                              <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M59.999,63.999H40.001c-1.104,0-1.999,0.896-1.999,2s0.896,1.999,1.999,1.999h19.998c1.104,0,2-0.895,2-1.999S61.104,63.999,59.999,63.999z"></path>                              </g>                            </g>                          </g>                        </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                                                    <svg class="climacon climacon_sunsetAlt" id="sunsetAltfill" version="1.1" viewBox="15 15 70 70">                          <clipPath id="sunriseClipfill">                            <rect x="15" y="15" width="70" height="45"></rect>                          </clipPath>                          <g class="climacon_iconWrap climacon_iconWrap-sunsetAlt">                            <g clip-path="url(#sunriseClip)">                              <g class="climacon_componentWrap climacon_componentWrap-sunsetAlt">                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M71.997,74.002h-3.999c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h3.999c1.104,0,2,0.895,2,2C73.997,73.105,73.104,74.002,71.997,74.002z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M64.141,60.689c-0.781,0.78-2.048,0.78-2.828,0c-0.779-0.781-0.779-2.047,0-2.828l2.828-2.828c0.78-0.78,2.047-0.78,2.828,0c0.78,0.781,0.78,2.047,0,2.828L64.141,60.689z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M50,56.003c-1.104,0-1.999-0.896-1.999-2v-3.999c0-1.104,0.896-2,1.999-2s2,0.896,2,2v3.999C52,55.107,51.104,56.003,50,56.003z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M35.86,60.689l-2.828-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.78,2.047-0.78,2.828,0l2.828,2.828c0.78,0.781,0.78,2.047,0,2.828C37.907,61.47,36.641,61.47,35.86,60.689z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M34.002,72.002c0,1.104-0.896,2-1.999,2h-4c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h4C33.106,70.002,34.002,70.896,34.002,72.002z"></path>                                </g>                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.302,76h-4.381c0.683-1.176,1.078-2.539,1.078-3.998c0-4.418-3.581-8-7.999-8c-4.417,0-7.999,3.582-7.999,8c0,1.459,0.396,2.822,1.079,3.998h-4.381c-0.444-1.252-0.698-2.594-0.698-3.998c0-6.627,5.373-11.999,11.999-11.999c6.627,0,11.999,5.371,11.999,11.999C61.999,73.406,61.745,74.748,61.302,76z"></path>                                </g>                              </g>                            </g>                            <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M40.001,63.998h19.998c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H40.001c-1.104,0-2-0.895-2-2C38.001,64.895,38.897,63.998,40.001,63.998z"></path>                            </g>                          </g>                        </svg>
                        </div>
                        <div class="media-body"><span class="m-0">Sunset</span>
                            <h6 class="mb-0 sunset"></h6>
                                                    <svg class="climacon climacon_sunsetAlt icon-bg" id="sunsetAltfill" version="1.1" viewBox="15 15 70 70">                          <clipPath id="sunriseClipfill">                            <rect x="15" y="15" width="70" height="45"></rect>                          </clipPath>                          <g class="climacon_iconWrap climacon_iconWrap-sunsetAlt">                            <g clip-path="url(#sunriseClip)">                              <g class="climacon_componentWrap climacon_componentWrap-sunsetAlt">                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M71.997,74.002h-3.999c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h3.999c1.104,0,2,0.895,2,2C73.997,73.105,73.104,74.002,71.997,74.002z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M64.141,60.689c-0.781,0.78-2.048,0.78-2.828,0c-0.779-0.781-0.779-2.047,0-2.828l2.828-2.828c0.78-0.78,2.047-0.78,2.828,0c0.78,0.781,0.78,2.047,0,2.828L64.141,60.689z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M50,56.003c-1.104,0-1.999-0.896-1.999-2v-3.999c0-1.104,0.896-2,1.999-2s2,0.896,2,2v3.999C52,55.107,51.104,56.003,50,56.003z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M35.86,60.689l-2.828-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.78,2.047-0.78,2.828,0l2.828,2.828c0.78,0.781,0.78,2.047,0,2.828C37.907,61.47,36.641,61.47,35.86,60.689z"></path>                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M34.002,72.002c0,1.104-0.896,2-1.999,2h-4c-1.104,0-2-0.896-2-2c0-1.105,0.896-2,2-2h4C33.106,70.002,34.002,70.896,34.002,72.002z"></path>                                </g>                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody">                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.302,76h-4.381c0.683-1.176,1.078-2.539,1.078-3.998c0-4.418-3.581-8-7.999-8c-4.417,0-7.999,3.582-7.999,8c0,1.459,0.396,2.822,1.079,3.998h-4.381c-0.444-1.252-0.698-2.594-0.698-3.998c0-6.627,5.373-11.999,11.999-11.999c6.627,0,11.999,5.371,11.999,11.999C61.999,73.406,61.745,74.748,61.302,76z"></path>                                </g>                              </g>                            </g>                            <g class="climacon_wrapperComponent climacon_wrapperComponent-horizonLine">                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_horizonLine" d="M40.001,63.998h19.998c1.104,0,2,0.896,2,2c0,1.105-0.896,2-2,2H40.001c-1.104,0-2-0.895-2-2C38.001,64.895,38.897,63.998,40.001,63.998z"></path>                            </g>                          </g>                        </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
    @endsection

    @section('script')
    <script src="{{asset('backend/js/dashboard/default.js')}}"></script>
    <script src="{{asset('backend/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('backend/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('backend/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backend/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('backend/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('backend/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('backend/js/datepicker/date-picker/datepicker.js')}}"></script>
    <script src="{{asset('backend/js/datepicker/date-picker/datepicker.en.js')}}"></script>
    <script src="{{asset('backend/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <script src="{{asset('backend/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('backend/js/general-widget.js')}}"></script>
    <script src="{{asset('backend/js/height-equal.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>

    <script>
        var sunrise = '{{$currentWeather["datetime"]["timestamp_sunrise"] }}';
        var sunrise = moment.unix(sunrise).format('hh:mm A');
        var sunset = '{{$currentWeather["datetime"]["timestamp_sunset"] }}';
        var sunset = moment.unix(sunset).format('hh:mm A');

    $( document ).ready(function() {

        $('.sunrise').html(sunrise)
        $('.sunset').html(sunset)
});
    </script>

    @endsection
