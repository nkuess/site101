@extends('layout.welcome')
@section('galery')
    <section class="container">
        <div class="row">
            <div id="slideshow" class="col-sm-12">
                <p class="display-2">Galerie media</p>
                <div class="module    slider clearfix">
                    <div class="modcontent clearfix">


                        <div id="myCarousel" class="carousel slide" style="margin:0;">
                            <!-- Carousel items -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="active item">

                                    <img src="{{ asset('images/energie-rinnovabili-e1448712964122-1024x683.jpg') }}"
                                        alt="" title="" />
                                    {{-- information pour la caption --}}
                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/Agriculture_Biologique_2016a.jpg') }}" alt="" title="" />

                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/agriculture-bio-sn-arton218.jpg') }}" alt="" title="" />

                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/bus_biogaz_transport.jpg') }}" alt="" title="" />

                                </div>
                            </div><!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
                        </div>

                        <script>
                            //<![CDATA[    					
                            jQuery(document).ready(function($) {
                                $('.carousel').carousel({
                                    interval: 6000,
                                    pause: 'hover'
                                })

                                //Enable swiping...
                                $(".carousel-inner").swipe({
                                    //Generic swipe handler for all directions
                                    swipeLeft: function(event, direction, distance, duration, fingerCount) {
                                        $(this).parent().carousel('prev');
                                    },
                                    swipeRight: function() {
                                        $(this).parent().carousel('next');
                                    },
                                    //Default is 75px, set to 0 for demo so any distance triggers swipe
                                    threshold: 0
                                });
                            });

                            //]]>	
                        </script>
                    </div>
                </div>

               {{--  <div class="module  blank clearfix">
                </div>

                <div class="module   clearfix">
                    <div class="modcontent clearfix">

                        {{-- clearfin docs 


                    </div>
                </div> 
                --}}

            </div>
        </div>
    </section>

@endsection
