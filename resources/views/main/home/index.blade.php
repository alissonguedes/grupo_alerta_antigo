@section('teste')

<<<<<<< HEAD
<div>
	aslifasdf
	asdfasff

=======
@section('main')

<div class="dsvy-slider-area">

    <!-- START Slider Demo 2 REVOLUTION SLIDER 6.3.5 -->
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_1_1" style="" data-version="6.3.5">
            <rs-slides>

                @foreach($banners as $slide )
                <!--início conjunto slide-->
                <rs-slide data-key="rs-1" data-title="Slide" data-thumb="{{ asset($slide->imagem) }}" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                    <img src="{{ asset($slide->imagem) }}" title="slider-02-a" width="1920" height="950" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                    <rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-rsp_ch="on" data-xy="xo:681px,681px,370px,220px;yo:474px,474px,243px,240px;" data-text="s:70,70,50,30;l:80,80,55,34;fw:700;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:10;font-family:Barlow Condensed;text-transform:uppercase;">
                        Sua segurança
                    </rs-layer>
                    <rs-layer id="slider-1-slide-1-layer-8" data-type="text" data-color="rgba(255, 255, 255, 0)" data-bsh="c:rgba(0,0,0,0.5);" data-rsp_ch="on" data-xy="xo:677px,677px,370px,220px;yo:395px,395px,186px,200px;" data-text="w:normal;s:70,70,50,30;l:75,75,50,30;ls:3px,3px,2px,2px;fw:900;" data-border="bor:6px,6px,6px,6px;" data-frame_0="y:-50,-50,-31,-19;" data-frame_1="st:630;sp:1000;sR:630;" data-frame_999="o:0;st:w;sR:7370;" style="z-index:11;background-color:rgba(255,255,255,0);font-family:Barlow Condensed;text-transform:uppercase;color:transparent !important;-webkit-text-stroke:1px rgba(255, 255, 255,1) !important;">
                        FORÇA ALERTA
                    </rs-layer>
                    <rs-layer id="slider-1-slide-1-layer-11" data-type="text" data-color="rgba(255, 255, 255, 0.02)" data-rsp_ch="on" data-xy="x:r;y:m;yo:-10px,-10px,-6px,-3px;" data-text="w:normal;s:300,300,189,116;l:300,300,189,116;fw:900;" data-basealign="slide" data-frame_999="o:0;st:w;sR:8700;" data-loop_999="x:30px;sp:5000;yym:t;" style="z-index:8;font-family:Barlow Condensed;text-transform:uppercase;">
                    </rs-layer>
                    <rs-layer id="slider-1-slide-1-layer-12" data-type="text" data-rsp_ch="on" data-xy="xo:50px,50px,31px,19px;yo:50px,50px,31px,19px;" data-text="w:normal;s:20,20,12,7;l:25,25,15,9;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:12;font-family:Roboto;">
                    </rs-layer>
                    <rs-layer id="slider-1-slide-1-layer-15" data-type="text" data-rsp_ch="on" data-xy="xo:681px,680px,370px,328px;yo:570px,565px,309px,242px;" data-text="s:70,70,50,30;l:74,74,55,30;fw:700;" data-padding="r:10,10,6,4;l:10,10,6,4;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:9;background-color:#e10000;font-family:Barlow Condensed;text-transform:uppercase;">
                        profissional
                    </rs-layer>
                    <rs-layer id="slider-1-slide-1-layer-16" class="rev-btn" data-type="button" data-color="#000000" data-rsp_ch="on" data-xy="xo:688px,688px,370px,228px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:55,55,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2150;sp:1000;sR:2150;" data-frame_999="o:0;st:w;sR:5850;" data-frame_hover="c:#fff;bgc:#e10000;bor:0px,0px,0px,0px;" style="z-index:14;background-color:rgba(255,255,255,1);font-family:Barlow;text-transform:uppercase;">
                        Saiba mais
                    </rs-layer>
                    <rs-layer id="slider-1-slide-1-layer-18" class="rev-btn" data-type="button" data-rsp_ch="on" data-xy="xo:858px,858px,512px,315px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:51,51,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2530;sp:1000;sR:2530;" data-frame_999="o:0;st:w;sR:5470;" data-frame_hover="c:#fff;bgc:#e10000;boc:#e10000;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;" style="z-index:13;background-color:rgba(255,255,255,0);font-family:Barlow;text-transform:uppercase;">
                        CONTRATE
                    </rs-layer>
                </rs-slide>
                <!--fim conjunto slide-->
                @endforeach


                {{-- <!--início conjunto slide-->
                <rs-slide data-key="rs-2" data-title="Slide" data-thumb="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/slider-03-a.jpg') }}" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                    <img src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/slider-03-a.jpg') }}" title="slider-02-a" width="1920" height="950" data-bg="p:center top;" class="rev-slidebg" data-no-retina>

                    <rs-layer id="slider-1-slide-2-layer-0" data-type="text" data-rsp_ch="on" data-xy="xo:681px,681px,370px,220px;yo:474px,474px,243px,240px;" data-text="s:70,70,50,30;l:80,80,55,34;fw:700;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:10;font-family:Barlow Condensed;text-transform:uppercase;">MONITORAMENTO
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-8" data-type="text" data-color="rgba(255, 255, 255, 0)" data-bsh="c:rgba(0,0,0,0.5);" data-rsp_ch="on" data-xy="xo:677px,677px,370px,220px;yo:395px,395px,186px,200px;" data-text="w:normal;s:70,70,50,30;l:75,75,50,30;ls:3px,3px,2px,2px;fw:900;" data-border="bor:6px,6px,6px,6px;" data-frame_0="y:-50,-50,-31,-19;" data-frame_1="st:630;sp:1000;sR:630;" data-frame_999="o:0;st:w;sR:7370;" style="z-index:11;background-color:rgba(255,255,255,0);font-family:Barlow Condensed;text-transform:uppercase;color:transparent !important;-webkit-text-stroke:1px rgba(255, 255, 255,1) !important;">ALERTA ELETRÔNICA
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-11" data-type="text" data-color="rgba(255, 255, 255, 0.02)" data-rsp_ch="on" data-xy="x:r;y:m;yo:-10px,-10px,-6px,-3px;" data-text="w:normal;s:300,300,189,116;l:300,300,189,116;fw:900;" data-basealign="slide" data-frame_999="o:0;st:w;sR:8700;" data-loop_999="x:30px;sp:5000;yym:t;" style="z-index:8;font-family:Barlow Condensed;text-transform:uppercase;">
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-12" data-type="text" data-rsp_ch="on" data-xy="xo:50px,50px,31px,19px;yo:50px,50px,31px,19px;" data-text="w:normal;s:20,20,12,7;l:25,25,15,9;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:12;font-family:Roboto;">
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-15" data-type="text" data-rsp_ch="on" data-xy="xo:681px,680px,370px,328px;yo:570px,565px,309px,242px;" data-text="s:70,70,50,30;l:74,74,55,30;fw:700;" data-padding="r:10,10,6,4;l:10,10,6,4;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:9;background-color:#e10000;font-family:Barlow Condensed;text-transform:uppercase;">24 HORAS
                    </rs-layer>

                    <rs-layer id="slider-1-slide-2-layer-16" class="rev-btn" data-type="button" data-color="#000000" data-rsp_ch="on" data-xy="xo:688px,688px,370px,228px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:55,55,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2150;sp:1000;sR:2150;" data-frame_999="o:0;st:w;sR:5850;" data-frame_hover="c:#fff;bgc:#e10000;bor:0px,0px,0px,0px;" style="z-index:14;background-color:rgba(255,255,255,1);font-family:Barlow;text-transform:uppercase;">Saiba mais
                    </rs-layer>


                    <rs-layer id="slider-1-slide-2-layer-18" class="rev-btn" data-type="button" data-rsp_ch="on" data-xy="xo:858px,858px,512px,315px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:51,51,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2530;sp:1000;sR:2530;" data-frame_999="o:0;st:w;sR:5470;" data-frame_hover="c:#fff;bgc:#e10000;boc:#e10000;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;" style="z-index:13;background-color:rgba(255,255,255,0);font-family:Barlow;text-transform:uppercase;">CONTRATE
                    </rs-layer>
                </rs-slide>
                <!--fim conjunto slide-->


                <!--início conjunto slide-->
                <rs-slide data-key="rs-3" data-title="Slide" data-thumb="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/slider-01-a.jpg') }}" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                    <img src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/slider-01-a.jpg') }}" title="slider-04-a" width="1920" height="950" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                    <rs-layer id="slider-1-slide-3-layer-0" data-type="text" data-rsp_ch="on" data-xy="xo:681px,681px,370px,220px;yo:474px,474px,243px,240px;" data-text="s:70,70,50,30;l:80,80,55,34;fw:700;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:10;font-family:Barlow Condensed;text-transform:uppercase;">PROFISSIONAIS
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-8" data-type="text" data-color="rgba(255, 255, 255, 0)" data-bsh="c:rgba(0,0,0,0.5);" data-rsp_ch="on" data-xy="xo:677px,677px,370px,220px;yo:395px,395px,186px,200px;" data-text="w:normal;s:70,70,50,30;l:75,75,50,30;ls:3px,3px,2px,2px;fw:900;" data-border="bor:6px,6px,6px,6px;" data-frame_0="y:-50,-50,-31,-19;" data-frame_1="st:630;sp:1000;sR:630;" data-frame_999="o:0;st:w;sR:7370;" style="z-index:11;background-color:rgba(255,255,255,0);font-family:Barlow Condensed;text-transform:uppercase;color:transparent !important;-webkit-text-stroke:1px rgba(255, 255, 255,1) !important;">ALERTA SERVIÇOS
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-11" data-type="text" data-color="rgba(255, 255, 255, 0.02)" data-rsp_ch="on" data-xy="x:r;y:m;yo:-10px,-10px,-6px,-3px;" data-text="w:normal;s:300,300,189,116;l:300,300,189,116;fw:900;" data-basealign="slide" data-frame_999="o:0;st:w;sR:8700;" data-loop_999="x:30px;sp:5000;yym:t;" style="z-index:8;font-family:Barlow Condensed;text-transform:uppercase;">
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-12" data-type="text" data-rsp_ch="on" data-xy="xo:50px,50px,31px,19px;yo:50px,50px,31px,19px;" data-text="w:normal;s:20,20,12,7;l:25,25,15,9;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:12;font-family:Roboto;">
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-15" data-type="text" data-rsp_ch="on" data-xy="xo:681px,680px,370px,328px;yo:570px,565px,309px,242px;" data-text="s:70,70,50,30;l:74,74,55,30;fw:700;" data-padding="r:10,10,6,4;l:10,10,6,4;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:9;background-color:#e10000;font-family:Barlow Condensed;text-transform:uppercase;">PREPARADOS
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-16" class="rev-btn" data-type="button" data-color="#000000" data-rsp_ch="on" data-xy="xo:688px,688px,370px,228px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:55,55,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2150;sp:1000;sR:2150;" data-frame_999="o:0;st:w;sR:5850;" data-frame_hover="c:#fff;bgc:#e10000;bor:0px,0px,0px,0px;" style="z-index:14;background-color:rgba(255,255,255,1);font-family:Barlow;text-transform:uppercase;">Saiba mais
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-18" class="rev-btn" data-type="button" data-rsp_ch="on" data-xy="xo:858px,858px,512px,315px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:51,51,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2530;sp:1000;sR:2530;" data-frame_999="o:0;st:w;sR:5470;" data-frame_hover="c:#fff;bgc:#e10000;boc:#e10000;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;" style="z-index:13;background-color:rgba(255,255,255,0);font-family:Barlow;text-transform:uppercase;">CONTRATE
                    </rs-layer>
                </rs-slide>
                <!--fim conjunto slide-->

                <!--início conjunto slide-->
                <rs-slide data-key="rs-4" data-title="Slide" data-thumb="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/slider-04-a.jpg') }}" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                    <img src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/slider-04-a.jpg') }}" title="slider-04-a" width="1920" height="950" data-bg="p:center top;" class="rev-slidebg" data-no-retina>
                    <rs-layer id="slider-1-slide-3-layer-0" data-type="text" data-rsp_ch="on" data-xy="xo:681px,681px,370px,220px;yo:474px,474px,243px,240px;" data-text="s:70,70,50,30;l:80,80,55,34;fw:700;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:10;font-family:Barlow Condensed;text-transform:uppercase;">SUA CONSTRUÇÃO EM
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-8" data-type="text" data-color="rgba(255, 255, 255, 0)" data-bsh="c:rgba(0,0,0,0.5);" data-rsp_ch="on" data-xy="xo:677px,677px,370px,220px;yo:395px,395px,186px,200px;" data-text="w:normal;s:70,70,50,30;l:75,75,50,30;ls:3px,3px,2px,2px;fw:900;" data-border="bor:6px,6px,6px,6px;" data-frame_0="y:-50,-50,-31,-19;" data-frame_1="st:630;sp:1000;sR:630;" data-frame_999="o:0;st:w;sR:7370;" style="z-index:11;background-color:rgba(255,255,255,0);font-family:Barlow Condensed;text-transform:uppercase;color:transparent !important;-webkit-text-stroke:1px rgba(255, 255, 255,1) !important;">ALERTA CONSTRUTORA
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-11" data-type="text" data-color="rgba(255, 255, 255, 0.02)" data-rsp_ch="on" data-xy="x:r;y:m;yo:-10px,-10px,-6px,-3px;" data-text="w:normal;s:300,300,189,116;l:300,300,189,116;fw:900;" data-basealign="slide" data-frame_999="o:0;st:w;sR:8700;" data-loop_999="x:30px;sp:5000;yym:t;" style="z-index:8;font-family:Barlow Condensed;text-transform:uppercase;">
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-12" data-type="text" data-rsp_ch="on" data-xy="xo:50px,50px,31px,19px;yo:50px,50px,31px,19px;" data-text="w:normal;s:20,20,12,7;l:25,25,15,9;" data-frame_999="o:0;st:w;sR:8700;" style="z-index:12;font-family:Roboto;">
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-15" data-type="text" data-rsp_ch="on" data-xy="xo:681px,680px,370px,328px;yo:570px,565px,309px,242px;" data-text="s:70,70,50,30;l:74,74,55,30;fw:700;" data-padding="r:10,10,6,4;l:10,10,6,4;" data-frame_0="x:-50,-50,-31,-19;" data-frame_1="st:1190;sp:1000;sR:1190;" data-frame_999="o:0;st:w;sR:6810;" style="z-index:9;background-color:#e10000;font-family:Barlow Condensed;text-transform:uppercase;">ÓTIMAS MÃOS
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-16" class="rev-btn" data-type="button" data-color="#000000" data-rsp_ch="on" data-xy="xo:688px,688px,370px,228px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:55,55,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2150;sp:1000;sR:2150;" data-frame_999="o:0;st:w;sR:5850;" data-frame_hover="c:#fff;bgc:#e10000;bor:0px,0px,0px,0px;" style="z-index:14;background-color:rgba(255,255,255,1);font-family:Barlow;text-transform:uppercase;">Saiba mais
                    </rs-layer>
                    <rs-layer id="slider-1-slide-3-layer-18" class="rev-btn" data-type="button" data-rsp_ch="on" data-xy="xo:858px,858px,512px,315px;yo:667px,667px,371px,228px;" data-text="w:normal;s:13,13,13,8;l:51,51,50,30;ls:1px,1px,1px,0px;fw:700;" data-dim="minh:0px,0px,none,none;" data-vbility="t,t,t,f" data-padding="r:40,40,25,15;l:40,40,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;" data-frame_0="y:50,50,31,19;" data-frame_1="st:2530;sp:1000;sR:2530;" data-frame_999="o:0;st:w;sR:5470;" data-frame_hover="c:#fff;bgc:#e10000;boc:#e10000;bor:0px,0px,0px,0px;bos:solid;bow:2px,2px,2px,2px;" style="z-index:13;background-color:rgba(255,255,255,0);font-family:Barlow;text-transform:uppercase;">CONTRATE
                    </rs-layer>
                </rs-slide>
                <!--fim conjunto slide--> --}}


            </rs-slides>
        </rs-module>
        <script>
            setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1240,778,480],el:[950,950,500,400],gw:[1230,1230,778,480],gh:[950,950,500,400],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
					var	revapi1,
						tpj;
					function revinit_revslider11() {
					jQuery(function() {
						tpj = jQuery;
						revapi1 = tpj("#rev_slider_1_1");
						if(revapi1==undefined || revapi1.revolution == undefined){
							revslider_showDoubleJqueryError("rev_slider_1_1");
						}else{
							revapi1.revolution({
								sliderLayout:"fullwidth",
								visibilityLevels:"1240,1240,778,480",
								gridwidth:"1230,1230,778,480",
								gridheight:"950,950,500,400",
								spinner:"spinner0",
								perspective:600,
								perspectiveType:"local",
								editorheight:"950,768,500,400",
								responsiveLevels:"1240,1240,778,480",
								progressBar:{disableProgressBar:true},
								navigation: {
									mouseScrollNavigation:false,
									onHoverStop:false,
									bullets: {
										enable:true,
										tmp:"",
										style:"hermes",
										hide_onmobile:true,
										hide_under:"1025px",
										h_align:"right",
										v_align:"center",
										h_offset:30,
										v_offset:0,
										direction:"vertical"
									}
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}

					});
					} // End of RevInitScript
					var once_revslider11 = false;
					if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider11 ) { once_revslider11 = true; revinit_revslider11();}});} else {once_revslider11 = true; revinit_revslider11();}
        </script>
        <script>
            var htmlDivCss = unescape("%23rev_slider_1_1_wrapper%20.hermes.tp-bullets%20%7B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.hermes%20.tp-bullet%20%7B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%20%20width%3A16px%3B%0A%20%20%20%20height%3A16px%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20box-shadow%3A%20inset%200%200%200%202px%20%23ffffff%3B%0A%20%20%20%20-webkit-transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%7D%0A%0A%23rev_slider_1_1_wrapper%20.hermes%20.tp-bullet%3Ahover%20%7B%0A%09%20%20background-color%3A%20rgba%280%2C0%2C0%2C0.21%29%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hermes%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%27%20%27%3B%0A%20%20position%3A%20absolute%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background-color%3A%20%23ffffff%3B%0A%20%20box-shadow%3A%200%200%201px%20%23ffffff%3B%0A%20%20-webkit-transition%3A%20height%200.3s%20ease%3B%0A%20%20transition%3A%20height%200.3s%20ease%3B%0A%7D%0A%23rev_slider_1_1_wrapper%20.hermes%20.tp-bullet.selected%3Aafter%20%7B%0A%20%20height%3A100%25%3B%0A%7D%0A%0A");
						var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
						if(htmlDiv) {
							htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
						}else{
							var htmlDiv = document.createElement('div');
							htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
							document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
						}
        </script>
        <script>
            var htmlDivCss = unescape("%0A%0A");
						var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
						if(htmlDiv) {
							htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
						}else{
							var htmlDiv = document.createElement('div');
							htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
							document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
						}
        </script>
    </rs-module-wrap>
    <!-- END REVOLUTION SLIDER -->
</div>

<div class="site-content-contain ">
    <div class="site-content-wrap">
        <div id="content" class="site-content container">

            <div class="dsvy-header-search-form-wrapper">
                <div class="dsvy-search-close"><i class="dsvy-base-icon-cancel"></i></div>

            </div>
            <div id="primary" class="content-area ">
                <main id="main" class="site-main dsvy-page-content-wrapper">
                    <div id="post-12263" class="post-12263 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div data-elementor-type="wp-page" data-elementor-id="12263" class="elementor elementor-12263" data-elementor-settings="[]">
                                <div class="elementor-section-wrap">
                                    <div class="elementor-section elementor-top-section elementor-element elementor-element-101fc9ae dsvy-col-stretched-right dsvy-right-col-stretched-content-yes dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="101fc9ae" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-23b9ecba dsvy-bg-color-over-image" data-id="23b9ecba" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-section elementor-inner-section elementor-element elementor-element-16090c15 dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16090c15" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5d790f6f dsvy-bg-color-over-image" data-id="5d790f6f" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-1e360db3 dsvy-heaing-style-2  dsvy-align-left elementor-widget elementor-widget-dsvy_heading" data-id="1e360db3" data-element_type="widget" data-widget_type="dsvy_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="dsvy-heading-subheading left-align dsvy-reverse-heading-yes">
                                                                                <h4 class="dsvy-element-subtitle">

                                                                                    Quem nós somos

                                                                                </h4>
                                                                                <h2 class="dsvy-element-title">

                                                                                    OS MELHORES SERVIÇOS PARA VOCÊ E SUA EMPRESA

                                                                                </h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-37ab2b2f dsvy-bg-color-over-image" data-id="37ab2b2f" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-cf57d89 elementor-widget elementor-widget-text-editor" data-id="cf57d89" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>
                                                                                    Atuamos no mercado de segurança e serviços nos segmentos de Segurança Eletrônica, Segurança Patrimonial, Terceirização de mão de obra e Construção Civil, prestando serviços no âmbito público e privado. Nossa abrangência territorial são as cidades da região do Nordeste brasileiro.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-4060c82 dsvy-bg-color-yes dsvy-elementor-bg-color-white dsvy-ihbox-style-2-main dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4060c82" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-312c2867 dsvy-bg-color-over-image" data-id="312c2867" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-506ddf9b elementor-widget elementor-widget-dsvy_icon_heading" data-id="506ddf9b" data-element_type="widget" data-widget_type="dsvy_icon_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="dsvy-ihbox dsvy-ihbox-style-2">
                                                                                <div class="dsvy-ihbox-box">
                                                                                    <div class="dsvy-ihbox-headingicon">
                                                                                        <div class="dsvy-ihbox-icon">
                                                                                            <div class="dsvy-ihbox-icon-wrapper">

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dsvy-ihbox-box-number">01</div>
                                                                                        <div class="dsvy-ihbox-contents">
                                                                                            <h4 class="dsvy-element-heading">
                                                                                                Responde ao Ataque
                                                                                            </h4>
                                                                                            <h2 class="dsvy-element-title">
                                                                                                PERITO DE CONFIANÇA
                                                                                            </h2>
                                                                                            <div class="dsvy-heading-desc">Oferecemos as melhores soluções de segurança, incluindo serviços de guarda e patrulhas móveis</div>

                                                                                        </div><!-- .dsvy-ihbox-contents -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-21129547 dsvy-bg-color-over-image" data-id="21129547" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-7fddea5d elementor-widget elementor-widget-dsvy_icon_heading" data-id="7fddea5d" data-element_type="widget" data-widget_type="dsvy_icon_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="dsvy-ihbox dsvy-ihbox-style-2">
                                                                                <div class="dsvy-ihbox-box">
                                                                                    <div class="dsvy-ihbox-headingicon">
                                                                                        <div class="dsvy-ihbox-icon">
                                                                                            <div class="dsvy-ihbox-icon-wrapper">

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dsvy-ihbox-box-number">02</div>
                                                                                        <div class="dsvy-ihbox-contents">
                                                                                            <h4 class="dsvy-element-heading">
                                                                                                EXPLORE A TÉCNICA
                                                                                            </h4>
                                                                                            <h2 class="dsvy-element-title">
                                                                                                SEGURANÇA PESSOAL
                                                                                            </h2>

                                                                                            <div class="dsvy-heading-desc">Oferecemos as melhores soluções de segurança, incluindo serviços de guarda e patrulhas móveis</div>

                                                                                        </div><!-- .dsvy-ihbox-contents -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-30c84b35 dsvy-bg-color-over-image" data-id="30c84b35" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-54b7533e elementor-widget elementor-widget-dsvy_icon_heading" data-id="54b7533e" data-element_type="widget" data-widget_type="dsvy_icon_heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="dsvy-ihbox dsvy-ihbox-style-2">
                                                                                <div class="dsvy-ihbox-box">
                                                                                    <div class="dsvy-ihbox-headingicon">
                                                                                        <div class="dsvy-ihbox-icon">
                                                                                            <div class="dsvy-ihbox-icon-wrapper">

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dsvy-ihbox-box-number">03</div>
                                                                                        <div class="dsvy-ihbox-contents">
                                                                                            <h4 class="dsvy-element-heading">
                                                                                                EXPLORE OS RECURSOS
                                                                                            </h4>
                                                                                            <h2 class="dsvy-element-title">
                                                                                                Guarda Auto Motivado
                                                                                            </h2>
                                                                                            <div class="dsvy-heading-desc">Oferecemos as melhores soluções de segurança, incluindo serviços de guarda e patrulhas móveis</div>
                                                                                        </div><!-- .dsvy-ihbox-contents -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                </div>
                                            </div>

                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-28c0f7b7 dsvy-bg-color-yes dsvy-elementor-bg-color-globalcolor dsvy-text-color-white dsvy-bg-image-over-color" data-id="28c0f7b7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-154827cf elementor-widget elementor-widget-heading" data-id="154827cf" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">CONTRATE UM DOS NOSSOS <br>
                                                                SERVIÇOS!</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4c8befed elementor-widget elementor-widget-heading" data-id="4c8befed" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">0800-556-1700</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-602a9e24 dsvy-btn-color-white elementor-align-center dsvy-btn-style-flat dsvy-btn-shape-square elementor-widget elementor-widget-button" data-id="602a9e24" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="orcamento.php" role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">FAÇA UM ORÇAMENTO</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-section elementor-top-section elementor-element elementor-element-56041656 dsvy-bg-color-yes dsvy-elementor-bg-color-blackish elementor-section-stretched dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="56041656" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-441f655b dsvy-text-color-white dsvy-bg-color-over-image" data-id="441f655b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-338afac dsvy-heaing-style-2  elementor-widget elementor-widget-dsvy_service_element" data-id="338afac" data-element_type="widget" data-widget_type="dsvy_service_element.default">
                                                        <div class="elementor-widget-container">

                                                            <div class="designervily-element designervily-element-service dsvy-element-service-style-1 designervily-element-viewtype-carousel designervily-gap-30px" data-show="9" data-columns="3" data-loop="false" data-autoplay="false" data-center="false" data-nav="false" data-dots="true" data-autoplayspeed="1000" data-margin="30px">
                                                                <div class="designervily-element-inner">

                                                                    <div class="dsvy-ele-header-area">
                                                                        <div class="dsvy-heading-subheading center-align dsvy-reverse-heading-yes">
                                                                            <h4 class="dsvy-element-subtitle">

                                                                                O QUE NÓS FAZEMOS


                                                                            </h4>
                                                                            <h2 class="dsvy-element-title">

                                                                                NÍVEL SUPERIOR DE SERVIÇOS<br>PARA A SUA EMPRESA

                                                                            </h2>
                                                                        </div>

                                                                    </div>

                                                                    <div class="dsvy-element-posts-wrapper row multi-columns-row">

                                                                        <article class="dsvy-ele dsvy-ele-service dsvy-service-style-1 col-md-4 management  ">
                                                                            <div class="designervily-post-item">
                                                                                <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="img/capas/capa_alerta_eletronica.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                <div class="designervily-box-content">
                                                                                    <div class="dsvy-service-icon-wrapper" style="background:#e10000">
                                                                                        <img src="img/icon_eletronica.png">
                                                                                    </div>
                                                                                    <div class="designervily-box-content-inner">
                                                                                        <h3 class="dsvy-service-title"><a href="alerta_eletronica.php">Alerta Eletrônica</a></h3>
                                                                                        <div class="dsvy-service-content">
                                                                                            <p>Especificar, implementar e manter as soluções de segurança mais adequadas para cada um de nossos clientes, e contribuir ativamente para sua segurança, seu sucesso e bem estar.</p>
                                                                                        </div>
                                                                                        <div class="dsvy-service-btn">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="dsvy-ele dsvy-ele-service dsvy-service-style-1 col-md-4 personal  ">
                                                                            <div class="designervily-post-item">
                                                                                <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="img/capas/capa_alerta_servicos.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                <div class="designervily-box-content">
                                                                                    <div class="dsvy-service-icon-wrapper" style="background:#e10000">
                                                                                        <img src="img/icon_servicos.png">
                                                                                    </div>
                                                                                    <div class="designervily-box-content-inner">
                                                                                        <h3 class="dsvy-service-title"><a href="alerta_servicos.php">Alerta Serviços</a></h3>
                                                                                        <div class="dsvy-service-content">
                                                                                            <p>Disponibiliza profissionais aptos a executar as seguintes funções: porteiro, servente, auxiliar de serviços gerais, copeira, jardineiro, telefonista, motorista e outras atividades afins.</p>
                                                                                        </div>
                                                                                        <div class="dsvy-service-btn">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="dsvy-ele dsvy-ele-service dsvy-service-style-1 col-md-4 protection  ">
                                                                            <div class="designervily-post-item">
                                                                                <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="img/capas/capa_forca_alerta.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                <div class="designervily-box-content">
                                                                                    <div class="dsvy-service-icon-wrapper" style="background:#e10000">
                                                                                        <img src="img/icon_forcaalerta.png">
                                                                                    </div>
                                                                                    <div class="designervily-box-content-inner">
                                                                                        <h3 class="dsvy-service-title"><a href="forca_alerta.php">Força Alerta</a></h3>
                                                                                        <div class="dsvy-service-content">
                                                                                            <p>Nossos serviços são norteados nos padrões de controle e gestão operacional, fazendo com que a Força Alerta esteja posicionada como uma das melhores prestadoras de serviços do segmento.</p>
                                                                                        </div>
                                                                                        <div class="dsvy-service-btn">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="dsvy-ele dsvy-ele-service dsvy-service-style-1 col-md-4 security  ">
                                                                            <div class="designervily-post-item">
                                                                                <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="img/capas/capa_alerta_construtora.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                <div class="designervily-box-content">
                                                                                    <div class="dsvy-service-icon-wrapper" style="background:#e10000">
                                                                                        <img src="img/icon_alertaconst.png">
                                                                                    </div>
                                                                                    <div class="designervily-box-content-inner">
                                                                                        <h3 class="dsvy-service-title"><a href="alerta_construtora.php">Alerta Construtora</a></h3>
                                                                                        <div class="dsvy-service-content">
                                                                                            <p>Trabalhamos com comprometimento e velocidade na execução das obras, com excelente acabamento, baixa manutenção e maior flexibilidade nas plantas, gerando maior eficiência</p>
                                                                                        </div>
                                                                                        <div class="dsvy-service-btn">

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>



                                                                    </div>



                                                                </div><!-- .designervily-element-inner -->
                                                            </div><!-- .designervily-element -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-section elementor-top-section elementor-element elementor-element-ee98d29 dsvy-col-stretched-right dsvy-right-bg-50 dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ee98d29" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6681a5df dsvy-bg-color-over-image" data-id="6681a5df" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-67d483b1 dsvy-align-center dsvy-heaing-style-2  elementor-widget elementor-widget-dsvy_heading" data-id="67d483b1" data-element_type="widget" data-widget_type="dsvy_heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="dsvy-heading-subheading center-align dsvy-reverse-heading-yes">
                                                                <h4 class="dsvy-element-subtitle">

                                                                    NOSSA SEGURANÇA

                                                                </h4>
                                                                <h2 class="dsvy-element-title">

                                                                    SEGURANÇA PROFISSIONAL


                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-section elementor-inner-section elementor-element elementor-element-3cd27c31 dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3cd27c31" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6a8d36a dsvy-bg-color-yes dsvy-elementor-bg-color-globalcolor dsvy-vertical-text dsvy-bg-image-over-color" data-id="6a8d36a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-6c0bf031 elementor-widget elementor-widget-heading" data-id="6c0bf031" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2 class="elementor-heading-title elementor-size-default">Executamos mais de <span>400 trabalhos</span><br>
                                                                                com segurança todos os anos.</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-306f9810 dsvy-colum-gap-left-15 dsvy-bg-color-over-image" data-id="306f9810" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-371a7ca5 elementor-view-stacked dsvy-vertical-icon elementor-shape-circle elementor-widget elementor-widget-icon" data-id="371a7ca5" data-element_type="widget" data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <i aria-hidden="true" class="dsvy-digicop-icon dsvy-digicop-icon-policeman"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-584fcad7 dsvy-bg-color-yes dsvy-elementor-bg-color-white dsvy-bg-color-over-image" data-id="584fcad7" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-2bc3f493 elementor-widget elementor-widget-heading" data-id="2bc3f493" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2 class="elementor-heading-title elementor-size-default">Segurança integrada eficaz</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-4dc2415d elementor-widget elementor-widget-text-editor" data-id="4dc2415d" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-text-editor elementor-clearfix">
                                                                                <p>Obtenha a melhor segurança de um guarda-costas atencioso e profissional. Nossa solução é econômica e temos a certeza de que você e sua equipe de comando são parte contra uma tentativa.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1bc8106 elementor-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1bc8106" data-element_type="widget" data-widget_type="icon-list.default">
                                                                        <div class="elementor-widget-container">
                                                                            <ul class="elementor-icon-list-items">
                                                                                <li class="elementor-icon-list-item">
                                                                                    <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fas fa-square-full"></i> </span>
                                                                                    <span class="elementor-icon-list-text">Equipe de segurança experiente</span>
                                                                                </li>
                                                                                <li class="elementor-icon-list-item">
                                                                                    <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fas fa-square-full"></i> </span>
                                                                                    <span class="elementor-icon-list-text">Guarda de gerenciamento de patrulha móvel</span>
                                                                                </li>
                                                                                <li class="elementor-icon-list-item">
                                                                                    <span class="elementor-icon-list-icon">
                                                                                        <i aria-hidden="true" class="fas fa-square-full"></i> </span>
                                                                                    <span class="elementor-icon-list-text">Serviços de Segurança Individual</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-19aeb900 dsvy-btn-color-globalcolor dsvy-btn-style-flat dsvy-btn-shape-square elementor-widget elementor-widget-button" data-id="19aeb900" data-element_type="widget" data-widget_type="button.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-button-wrapper">
                                                                                <a href="forca_alerta.php" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                                                                                    <span class="elementor-button-content-wrapper">
                                                                                        <span class="elementor-button-text">SAIBA MAIS</span>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-section elementor-top-section elementor-element elementor-element-fd5f04d elementor-section-stretched dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fd5f04d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b5cfb6e dsvy-bg-color-over-image" data-id="3b5cfb6e" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-55726796 dsvy-lightbox-video elementor-view-default elementor-widget elementor-widget-icon" data-id="55726796" data-element_type="widget" data-widget_type="icon.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-wrapper">
                                                                <a class="elementor-icon" href="https://www.youtube.com/watch?v=incGuzEyEpw">
                                                                    <i aria-hidden="true" class="dsvy-digicop-icon dsvy-digicop-icon-null"></i> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-7a7af822 elementor-widget elementor-widget-heading" data-id="7a7af822" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">Assista nosso vídeo comercial</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-b2cd7be elementor-widget elementor-widget-heading" data-id="b2cd7be" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-heading-title elementor-size-default">Veja aqui as nossas propostas de serviços do Grupo.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-section elementor-top-section elementor-element elementor-element-3dfb0629 dsvy-bg-color-yes dsvy-elementor-bg-color-white dsvy-col-stretched-right dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3dfb0629" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-12acb29b dsvy-bg-color-yes dsvy-elementor-bg-color-globalcolor dsvy-text-color-white dsvy-bg-color-over-image" data-id="12acb29b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-element elementor-element-179367e1 dsvy-align-left elementor-widget elementor-widget-dsvy_heading" data-id="179367e1" data-element_type="widget" data-widget_type="dsvy_heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="dsvy-heading-subheading left-align dsvy-reverse-heading-yes">
                                                                <h4 class="dsvy-element-subtitle">



                                                                </h4>
                                                                <h2 class="dsvy-element-title">

                                                                    O QUE OS NOSSOS CLIENTES FALAM DE NÓS

                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2c478b96 dsvy-btn-color-white dsvy-btn-style-flat dsvy-btn-shape-square elementor-widget elementor-widget-button" data-id="2c478b96" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-352be331 dsvy-bg-color-yes dsvy-elementor-bg-color-light dsvy-testimonila-bg dsvy-bg-color-over-image" data-id="352be331" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-433d77b4 dsvy-align-left elementor-widget elementor-widget-dsvy_testimonial_element" data-id="433d77b4" data-element_type="widget" data-widget_type="dsvy_testimonial_element.default">
                                                        <div class="elementor-widget-container">

                                                            <div class="designervily-element designervily-element-testimonial dsvy-element-testimonial-style-2 designervily-element-viewtype-carousel designervily-gap-0px" data-show="3" data-columns="2" data-loop="false" data-autoplay="false" data-center="false" data-nav="true" data-dots="false" data-autoplayspeed="1000" data-margin="0px">
                                                                <div class="designervily-element-inner">

                                                                    <div class="dsvy-ele-header-area">
                                                                        <div class="dsvy-heading-subheading left-align ">
                                                                            <div class="dsvy-heading-desc">Oferecemos soluções de segurança e serviço de baixo custo para que nossos clientes estejam seguros e protegidos em qualquer situação.
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="dsvy-element-posts-wrapper row multi-columns-row">

                                                                        <article class="dsvy-ele dsvy-ele-testimonial dsvy-testimonial-style-2 col-md-6  dsvy-odd dsvy-col-odd">
                                                                            <div class="designervily-post-item">
                                                                                <div class="designervily-box-content">
                                                                                    <div class="designervily-box-desc">
                                                                                        <div class="designervily-box-star-ratings"><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i></div>
                                                                                        <blockquote class="designervily-testimonial-text">
                                                                                            <p>Como sempre dão uma ótima equipe de segurança e ajuda para ataques. Tem sido um conforto trabalhar com a criação do melhor especialista em estratégia da empresa.</p>
                                                                                        </blockquote>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="designervily-box-img d-flex">
                                                                                    <div class="dsvy-featured-wrapper"><img loading="lazy" width="150" height="150" src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2019/06/testimonial-01.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /></div>
                                                                                    <div class="designervily-box-author">
                                                                                        <h3 class="designervily-box-title">Eduardo Nogueira</h3>
                                                                                        <div class="designervily-testimonial-detail">CEO da CapsuleCorp</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="dsvy-ele dsvy-ele-testimonial dsvy-testimonial-style-2 col-md-6  dsvy-even dsvy-col-odd">
                                                                            <div class="designervily-post-item">
                                                                                <div class="designervily-box-content">
                                                                                    <div class="designervily-box-desc">
                                                                                        <div class="designervily-box-star-ratings"><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i></div>
                                                                                        <blockquote class="designervily-testimonial-text">
                                                                                            <p>Foi um prazer trabalhar com esse pessoal criando a estratégia da minha empresa e resolvendo meus problemas no momento. Esses caras são verdadeiros especialistas.</p>
                                                                                        </blockquote>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="designervily-box-img d-flex">
                                                                                    <div class="dsvy-featured-wrapper"><img loading="lazy" width="150" height="150" src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2019/06/testimonial-02.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /></div>
                                                                                    <div class="designervily-box-author">
                                                                                        <h3 class="designervily-box-title">Elena Rusconi</h3>
                                                                                        <div class="designervily-testimonial-detail">Admnistradora da Brascoin</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="dsvy-ele dsvy-ele-testimonial dsvy-testimonial-style-2 col-md-6  dsvy-odd dsvy-col-even">
                                                                            <div class="designervily-post-item">
                                                                                <div class="designervily-box-content">
                                                                                    <div class="designervily-box-desc">
                                                                                        <div class="designervily-box-star-ratings"><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i><i class="dsvy-base-icon-star dsvy-active"></i></div>
                                                                                        <blockquote class="designervily-testimonial-text">
                                                                                            <p>Os guardas são instalados; manter o sistema de segurança meu escritório e sua equipe de segurança funcionam muito bem. Eles estão dando ajuda de segurança quando eu preciso.</p>
                                                                                        </blockquote>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="designervily-box-img d-flex">
                                                                                    <div class="dsvy-featured-wrapper"><img loading="lazy" width="150" height="150" src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2019/06/testimonial-03.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" /></div>
                                                                                    <div class="designervily-box-author">
                                                                                        <h3 class="designervily-box-title">James Bond</h3>
                                                                                        <div class="designervily-testimonial-detail">Agent</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </div>



                                                                </div><!-- .designervily-element-inner -->
                                                            </div><!-- .designervily-element -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <br><br><br><br>
                                    <div class="elementor-section elementor-top-section elementor-element elementor-element-60e3e589 dsvy-col-stretched-right dsvy-text-color-white dsvy-bg-image-over-color elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="60e3e589" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-142ffea5 dsvy-bg-color-yes dsvy-elementor-bg-color-globalcolor dsvy-bg-image-over-color" data-id="142ffea5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-60f3b105 dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="60f3b105" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-47901e10 dsvy-bg-color-over-image" data-id="47901e10" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-5721f6cf elementor-widget elementor-widget-dsvy_fid_element" data-id="5721f6cf" data-element_type="widget" data-widget_type="dsvy_fid_element.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="designervily-ele designervily-ele-fid designervily-ele-fid-style-2 ">
                                                                                <div class="dsvy-fld-contents">
                                                                                    <h4 class="dsvy-fid-inner">
                                                                                        <span class="dsvy-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="1000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
                                                                                            1000 </span>
                                                                                        <span class="dsvy-fid-sub"><sup>+</sup></span>
                                                                                    </h4>
                                                                                    <h3 class="dsvy-fid-title"><span>Clientes<br></span></h3>
                                                                                </div><!-- .dsvy-fld-contents -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-394b079a dsvy-bg-color-over-image" data-id="394b079a" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-75d5afed elementor-widget elementor-widget-dsvy_fid_element" data-id="75d5afed" data-element_type="widget" data-widget_type="dsvy_fid_element.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="designervily-ele designervily-ele-fid designervily-ele-fid-style-2 ">
                                                                                <div class="dsvy-fld-contents">
                                                                                    <h4 class="dsvy-fid-inner">
                                                                                        <span class="dsvy-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="200" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
                                                                                            200 </span>
                                                                                        <span class="dsvy-fid-sub"><sup>+</sup></span>
                                                                                    </h4>
                                                                                    <h3 class="dsvy-fid-title"><span>Cidades presente<br></span></h3>
                                                                                </div><!-- .dsvy-fld-contents -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6739fda0 dsvy-bg-color-over-image" data-id="6739fda0" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-3e1c4229 elementor-widget elementor-widget-dsvy_fid_element" data-id="3e1c4229" data-element_type="widget" data-widget_type="dsvy_fid_element.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="designervily-ele designervily-ele-fid designervily-ele-fid-style-2 ">
                                                                                <div class="dsvy-fld-contents">
                                                                                    <h4 class="dsvy-fid-inner">
                                                                                        <span class="dsvy-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="10" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
                                                                                            10 </span>
                                                                                        <span class="dsvy-fid-sub"><sup>+</sup></span>
                                                                                    </h4>
                                                                                    <h3 class="dsvy-fid-title"><span>Estados Brasileiros<br></span></h3>
                                                                                </div><!-- .dsvy-fld-contents -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-320364a8 dsvy-bg-color-over-image" data-id="320364a8" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-61852e66 elementor-widget elementor-widget-dsvy_fid_element" data-id="61852e66" data-element_type="widget" data-widget_type="dsvy_fid_element.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="designervily-ele designervily-ele-fid designervily-ele-fid-style-2 ">
                                                                                <div class="dsvy-fld-contents">
                                                                                    <h4 class="dsvy-fid-inner">
                                                                                        <span class="dsvy-number-rotate" data-appear-animation="animateDigits" data-from="0" data-to="5000" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">
                                                                                            5000 </span>
                                                                                        <span class="dsvy-fid-sub"><sup>+</sup></span>
                                                                                    </h4>
                                                                                    <h3 class="dsvy-fid-title"><span>Colaboradores<br></span></h3>
                                                                                </div><!-- .dsvy-fld-contents -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-section elementor-top-section elementor-element elementor-element-2d3b8233 elementor-section-stretched dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d3b8233" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f03d5ec dsvy-bg-color-over-image" data-id="6f03d5ec" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-section elementor-inner-section elementor-element elementor-element-5cc996b6 dsvy-col-stretched-none dsvy-bg-color-over-image elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5cc996b6" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4b9b4a8b elementor-hidden-tablet dsvy-bg-color-over-image" data-id="4b9b4a8b" data-element_type="column">
                                                                <div class="elementor-widget-wrap">
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3acfc8ef dsvy-align-left dsvy-bg-color-over-image" data-id="3acfc8ef" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-156f026b dsvy-heaing-style-2  elementor-widget elementor-widget-dsvy_blog_element" data-id="156f026b" data-element_type="widget" data-widget_type="dsvy_blog_element.default">
                                                                        <div class="elementor-widget-container">

                                                                            <div class="designervily-element designervily-element-blog dsvy-element-blog-style-1 designervily-element-viewtype-carousel designervily-gap-15px" data-show="4" data-columns="2" data-loop="false" data-autoplay="false" data-center="false" data-nav="true" data-dots="false" data-autoplayspeed="1000" data-margin="15px">
                                                                                <div class="designervily-element-inner">

                                                                                    <div class="dsvy-ele-header-area">
                                                                                        <div class="dsvy-heading-subheading left-align dsvy-reverse-heading-yes">
                                                                                            <h4 class="dsvy-element-subtitle">

                                                                                                Atualizações

                                                                                            </h4>
                                                                                            <h2 class="dsvy-element-title">

                                                                                                Últimas Novidades

                                                                                            </h2>
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="dsvy-element-posts-wrapper row multi-columns-row">

                                                                                        <article class="dsvy-ele dsvy-ele-blog dsvy-blog-style-1 col-md-6 private-security dsvy-odd dsvy-col-odd">
                                                                                            <div class="post-item">
                                                                                                <div class="dsvy-featured-container">
                                                                                                    <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/blog-10-770x500.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                                </div>
                                                                                                <div class="designervily-box-content">
                                                                                                    <div class="dsvy-meta-container">

                                                                                                        <div class="dsvy-meta-date-wrapper dsvy-meta-line">
                                                                                                            <span>04 . Jul . 2020</span>
                                                                                                        </div>


                                                                                                    </div>
                                                                                                    <h3 class="dsvy-post-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
                                                                                                    <div class="designervily-box-desc">
                                                                                                        <div class="dsvy-read-more-link"><a href="#"><span>Leia mais</span></a></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </article>
                                                                                        <article class="dsvy-ele dsvy-ele-blog dsvy-blog-style-1 col-md-6 security-guards dsvy-even dsvy-col-odd">
                                                                                            <div class="post-item">
                                                                                                <div class="dsvy-featured-container">
                                                                                                    <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/blog-07-770x500.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                                </div>
                                                                                                <div class="designervily-box-content">
                                                                                                    <div class="dsvy-meta-container">

                                                                                                        <div class="dsvy-meta-date-wrapper dsvy-meta-line">
                                                                                                            <span>04 . Jul . 2020</span>
                                                                                                        </div>


                                                                                                    </div>
                                                                                                    <h3 class="dsvy-post-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
                                                                                                    <div class="designervily-box-desc">
                                                                                                        <div class="dsvy-read-more-link"><a href="#"><span>Leia mais</span></a></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </article>
                                                                                        <article class="dsvy-ele dsvy-ele-blog dsvy-blog-style-1 col-md-6 webcam-security dsvy-odd dsvy-col-even">
                                                                                            <div class="post-item">
                                                                                                <div class="dsvy-featured-container">
                                                                                                    <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/blog-03-770x500.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                                </div>
                                                                                                <div class="designervily-box-content">
                                                                                                    <div class="dsvy-meta-container">

                                                                                                        <div class="dsvy-meta-date-wrapper dsvy-meta-line">
                                                                                                            <span>04 . Jul . 2020</span>
                                                                                                        </div>


                                                                                                    </div>
                                                                                                    <h3 class="dsvy-post-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
                                                                                                    <div class="designervily-box-desc">
                                                                                                        <div class="dsvy-read-more-link"><a href="#"><span>Leia mais</span></a></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </article>
                                                                                        <article class="dsvy-ele dsvy-ele-blog dsvy-blog-style-1 col-md-6 personal-guard dsvy-even dsvy-col-even">
                                                                                            <div class="post-item">
                                                                                                <div class="dsvy-featured-container">
                                                                                                    <div class="dsvy-featured-wrapper"><img loading="lazy" width="770" height="500" src="{{ asset('assets/grupoalertaweb/wp-content/uploads/sites/3/2020/06/blog-11-770x500.jpg') }}" class="attachment-dsvy-img-770x500 size-dsvy-img-770x500 wp-post-image" alt="" /></div>
                                                                                                </div>
                                                                                                <div class="designervily-box-content">
                                                                                                    <div class="dsvy-meta-container">

                                                                                                        <div class="dsvy-meta-date-wrapper dsvy-meta-line">
                                                                                                            <span>11 . Jun . 2020</span>
                                                                                                        </div>


                                                                                                    </div>
                                                                                                    <h3 class="dsvy-post-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
                                                                                                    <div class="designervily-box-desc">
                                                                                                        <div class="dsvy-read-more-link"><a href="#"><span>Leia mais</span></a></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </article>
                                                                                    </div>



                                                                                </div><!-- .designervily-element-inner -->
                                                                            </div><!-- .designervily-element -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- .entry-content -->
                    </div><!-- #post-## -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- #content -->
    </div><!-- .site-content-wrap -->
>>>>>>> 5853bdbcf1310d51c22bc720caee952306ea3bdc
</div>
@endsection
