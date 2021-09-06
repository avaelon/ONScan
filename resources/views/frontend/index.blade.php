@extends('frontend.layouts.main.master')
@section('meta-data')
<title>Beecade</title>
<meta name="description" content="">
<meta name="keywords" content="">
@endsection
@push('styles')
<!-- REVOLUTION STYLE SHEETS -->
<link href="{{asset('frontend/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
<!-- ADD-ONS CSS FILES -->
<link href="{{asset('frontend/revolution/css/revolution.addon.particles.css')}}" rel="stylesheet" type="text/css">
<!-- index style -->
<link href="{{asset('frontend/separate-css/index.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="home_page_2" data-source="gallery" style="background:transparent;padding:0px;">
    <div id="rev_slider_11_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
        <ul>
            <li data-index="rs-27" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="img/home_page_2/100x50_6e762-home-page-2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <img src="{{ asset('frontend/img/6e762-home-page-2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina="">
                <div class="tp-caption rev_group" id="slide-27-layer-5" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="[&apos;565&apos;,&apos;496&apos;,&apos;420&apos;,&apos;305&apos;]" data-height="[&apos;430&apos;,&apos;411&apos;,&apos;355&apos;,&apos;300&apos;]" data-whitespace="nowrap" data-type="group" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 565px; max-width: 565px; max-width: 430px; max-width: 430px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                    <div class="tp-caption" id="slide-27-layer-2" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 12px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 4px;font-family:Montserrat;text-transform:uppercase;">Let&#x2019;s go on a journey </div>
                    <div class="tp-caption" id="slide-27-layer-1" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;50&apos;,&apos;50&apos;,&apos;45&apos;,&apos;45&apos;]" data-fontsize="[&apos;80&apos;,&apos;60&apos;,&apos;50&apos;,&apos;40&apos;]" data-lineheight="[&apos;88&apos;,&apos;80&apos;,&apos;68&apos;,&apos;55&apos;]" data-width="[&apos;543&apos;,&apos;474&apos;,&apos;400&apos;,&apos;300&apos;]" data-height="[&apos;265&apos;,&apos;241&apos;,&apos;none&apos;,&apos;none&apos;]" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;split&quot;:&quot;chars&quot;,&quot;splitdelay&quot;:0.05,&quot;speed&quot;:1500,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"  style="z-index: 7; min-width: 543px; max-width: 543px; max-width: 265px; max-width: 265px; white-space: normal;  line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family: 'Roboto', sans-serif;text-transform:uppercase;font-style: normal;">Paradise is in the eye of the beholder </div>
                    <div class="tp-caption rev-btn" id="slide-27-layer-6" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;365&apos;,&apos;340&apos;,&apos;287&apos;,&apos;235&apos;]" data-fontsize="[&apos;16&apos;,&apos;13&apos;,&apos;13&apos;,&apos;13&apos;]" data-lineheight="[&apos;16&apos;,&apos;13&apos;,&apos;13&apos;,&apos;13&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+990&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;500&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:linear-gradient(90deg, rgba(116,0,186,1) 0%, rgba(15,90,224,1) 100%);bs:solid;bw:0 0 0 0;&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[20,21,21,21]" data-paddingright="[38,38,38,38]" data-paddingbottom="[19,21,21,21]" data-paddingleft="[42,42,42,42]" style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 16px; font-weight: 400; color: #ffffff; letter-spacing: ;font-family:Montserrat;background:linear-gradient(90deg, rgba(15,90,224,1) 0%, rgba(116,0,186,1) 100%);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><span style="text-transform: uppercase;font-weight: 500">About Us</span> <span style="text-transform: uppercase;font-weight: 500"> <i class="fas fa-angle-right"></i> </span> </div>
                </div>
            </li>
            <li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1500" data-thumb="img/home_page_2/100x50_6e762-home-page-2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <img src="{{ asset('frontend/img/6e762-home-page-2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina="">
                <div class="tp-caption rev_group" id="slide-100-layer-5" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;,&apos;middle&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="[&apos;565&apos;,&apos;496&apos;,&apos;420&apos;,&apos;305&apos;]" data-height="[&apos;430&apos;,&apos;411&apos;,&apos;355&apos;,&apos;300&apos;]" data-whitespace="nowrap" data-type="group" data-responsive_offset="on" data-responsive="off" data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:300,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 565px; max-width: 565px; max-width: 430px; max-width: 430px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff; letter-spacing: 0px;">
                    <div class="tp-caption" id="slide-100-layer-2" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 12px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 4px;font-family:Montserrat;text-transform:uppercase;">We are Awesome </div>
                    <div class="tp-caption" id="slide-100-layer-1" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;50&apos;,&apos;50&apos;,&apos;45&apos;,&apos;45&apos;]" data-fontsize="[&apos;80&apos;,&apos;60&apos;,&apos;50&apos;,&apos;40&apos;]" data-lineheight="[&apos;88&apos;,&apos;80&apos;,&apos;68&apos;,&apos;55&apos;]" data-width="[&apos;543&apos;,&apos;474&apos;,&apos;400&apos;,&apos;300&apos;]" data-height="[&apos;265&apos;,&apos;241&apos;,&apos;none&apos;,&apos;none&apos;]" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+0&quot;,&quot;split&quot;:&quot;chars&quot;,&quot;splitdelay&quot;:0.05,&quot;speed&quot;:1500,&quot;split_direction&quot;:&quot;forward&quot;,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power4.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;rZ:0deg;sX:0.7;sY:0.7;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0;y:0;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Back.easeIn&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 543px; max-width: 543px; max-width: 265px; max-width: 265px; white-space: normal;  line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family: 'Roboto', sans-serif;text-transform:uppercase;font-style: normal;">Engaging, purposeful &amp; Creative </div>
                    <div class="tp-caption rev-btn" id="slide-100-layer-6" data-x="[&apos;center&apos;,&apos;center&apos;,&apos;center&apos;,&apos;center&apos;]" data-hoffset="[&apos;0&apos;,&apos;0&apos;,&apos;0&apos;,&apos;0&apos;]" data-y="[&apos;top&apos;,&apos;top&apos;,&apos;top&apos;,&apos;top&apos;]" data-voffset="[&apos;365&apos;,&apos;340&apos;,&apos;287&apos;,&apos;235&apos;]" data-fontsize="[&apos;16&apos;,&apos;13&apos;,&apos;13&apos;,&apos;13&apos;]" data-lineheight="[&apos;16&apos;,&apos;13&apos;,&apos;13&apos;,&apos;13&apos;]" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="off" data-responsive="off" data-frames="[{&quot;delay&quot;:&quot;+990&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;frame&quot;:&quot;hover&quot;,&quot;speed&quot;:&quot;500&quot;,&quot;ease&quot;:&quot;Linear.easeNone&quot;,&quot;to&quot;:&quot;o:1;rX:0;rY:0;rZ:0;z:0;&quot;,&quot;style&quot;:&quot;c:rgb(255,255,255);bg:linear-gradient(90deg, rgba(116,0,186,1) 0%, rgba(15,90,224,1) 100%);bs:solid;bw:0 0 0 0;&quot;}]" data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]" data-textalign="[&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;,&apos;inherit&apos;]" data-paddingtop="[20,21,21,21]" data-paddingright="[38,38,38,38]" data-paddingbottom="[19,21,21,21]" data-paddingleft="[42,42,42,42]" style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 16px; font-weight: 400; color: #ffffff; letter-spacing: ;font-family:Montserrat;background:linear-gradient(90deg, rgba(15,90,224,1) 0%, rgba(116,0,186,1) 100%);border-color:rgba(0,0,0,1);border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><span style="text-transform: uppercase;font-weight: 500">Portfolio</span> <span style="text-transform: uppercase;font-weight: 500"> <i class="fas fa-angle-right"></i> </span> </div>
                </div>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
<section>
    <div class="bg__style overlay__gradient all-light lazyload" data-bg="img/1920_174_1.jpg" data-brk-library="component__call_to_action">
        <div class="container">
            <div class="cfa__wrapper cfa__hot pt-50 pb-50 pl-20 pr-20">
                <div><span class="font__family-open-sans font__size-13 font__weight-bold hot-panel">
                        HOT!
                    </span></div>
                <h4 class="font__family-montserrat font__size-25 font__weight-bold text-uppercase">
                    CALL FOR ACTION
                    <span class="font__weight-ultralight">
                        BLOCK HEADING TITLE GOES HERE
                    </span>
                </h4>
                <a href="#" class="btn btn-inside-out btn-lg btn-inside-out-invert border-radius-30 font__family-open-sans font__weight-bold btn-min-width-200" data-brk-library="component__button">
                    <span class="before">buy now</span><span class="text">Purchase</span><span class="after">buy now</span>
                </a>
            </div>
        </div>
        <div class="brk-abs-overlay brk-base-bg-gradient-14 opacity-87"></div>
    </div>
</section>


@endsection

@push('scripts')
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.actions.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.carousel.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.kenburn.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.migration.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.navigation.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.parallax.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.slideanims.min.js')}}" defer></script>
<script src="{{asset('frontend/vendor/revslider/js/extensions/revolution.extension.video.min.js')}}" defer></script>
<!-- END REVOLUTION SLIDER -->
<script>
    var revapi11,
        tpj;
    (function() {
        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
        else onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("on" == "on") tpj.noConflict();
            }
            if (tpj("#rev_slider_11_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_11_1");
            } else {
                revapi11 = tpj("#rev_slider_11_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "vendor/revslider/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "custom",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 10,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1230, 992, 768, 576],
                    gridheight: [960, 768, 960, 720],
                    lazyType: "none",
                    minHeight: "720",
                    parallax: {
                        type: "mouse",
                        origo: "enterpoint",
                        speed: 400,
                        speedbg: 0,
                        speedls: 0,
                        levels: [4, 6, 8, 10, 12, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "on",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }; /* END OF revapi call */
        }; /* END OF ON LOAD FUNCTION */
    }()); /* END OF WRAPPING FUNCTION */
</script>

@endpush
