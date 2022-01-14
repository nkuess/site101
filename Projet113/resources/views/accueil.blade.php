@extends('layout.welcome')
@section('home_principal')
<section id="yt_slideshow" class="block">
    <div class="container">
        <div class="row">
            <div id="slideshow" class="col-sm-12">

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
                                    <div class="carousel-caption">
                                        <h4>

                                            Formations
                                        </h4>
                                        <p>Techniques et technologies liées aux sols</p>

                                        <div class="item-date">


                                        </div>
                                        <div class="item-hits"> </div>

                                    </div>
                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/Agriculture_Biologique_2016a.jpg') }}" alt=""
                                        title="" />
                                    <div class="carousel-caption">
                                        <h4>

                                            Sapphyre-RD au service du developpement
                                        </h4>
                                        <p>Bureau d'&eacute;tudes</p>

                                        <div class="item-date">


                                        </div>
                                        <div class="item-hits"> </div>

                                    </div>
                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/agriculture-bio-sn-arton218.jpg') }}" alt=""
                                        title="" />
                                    <div class="carousel-caption">
                                        <h4>

                                            ASTUCE 3
                                        </h4>
                                        <p>Titre 3</p>

                                        <div class="item-date">


                                        </div>
                                        <div class="item-hits"> </div>

                                    </div>
                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/bus_biogaz_transport.jpg') }}" alt=""
                                        title="" />
                                    <div class="carousel-caption">
                                        <h4>

                                            ASTUCE 4
                                        </h4>
                                        <p>TITRE 4</p>

                                        <div class="item-date">


                                        </div>
                                        <div class="item-hits"> </div>

                                    </div>
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

                <div class="module  blank clearfix">
                    <div class="modcontent clearfix">

                        <div class="wellcomesj">
                            <h1 data-scroll-reveal="enter top and move 100px over 0.7s">Bienvenue sur le site
                                Web de Sapphyre RD</h1>
                            <h2 data-scroll-reveal="enter top and move 50px over 0.5s, after 0.5s">
                                <p>
                                    SAPPHYRE RD est un groupe pluridisciplinaire regroupant des ingénieurs, des experts et techniciens africains 
                                    oeuvrant dans les différents secteurs de mobilisation et de gestion des Ressources Naturelles en intégrant singulièrement 
                                    la gestion de l'Environnement, l'énergie, le développement durable et social. 
                                </p>
                                <p>
                                    SAPPHYRE RD est un Bureau d'études, une agence d'exécution et d'appui, exerçant également comme Entreprise Spécialisée. 
                                    Cette triple option lui confère une synergie capable de comprendre et de résoudre au mieux les difficultés liées à la 
                                    transition" Etudes - Exécution" des projets en dégageant les répondants techniques et technologiques.
                                </p>
                            </h2>
                            <div class="clear" style="height: 30px;">&nbsp;</div>
                            <a href="{{asset('docs/Brochure_SRD.pdf')}}" class="button download"
                                data-scroll-reveal="enter right and move 50px over 0.5s, after 0.7s">
                                <span class="fa fa-download"></span> T&eacute;l&eacute;charger
                                la Plaquette</a>
                        </div>
                    </div>
                </div>

                <div class="module   clearfix">
                    <div class="modcontent clearfix">

                        {{--   --}}


                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<section id="content" class="   block">
    <div class="container">
        <div class="row">
            {{-- <div id="content_main" class="col-md-6">
                <div id="system-message-container">
                </div>

                <div id="yt_component">


                    <div class="blog blog-featured">

                        <h3 class="page-header">Blog</h3>


                        <div class="items-row cols-1 row-0 row">
                            <article class="item  col-sm-12">





                                <figure class="pull-left item-image">
                                    <a data-rel="prettyPhoto" title=""
                                        href="images/panneaux-polycristallin-monocristallin.html">
                                        <img src="{{ asset('images/thecogas/9db4913e0994e813f3adc03df6fac7b2.png') }}"
                                            alt="" /> </a>
                                    <div class="feature-info hidden-xs">
                                        <div class="create">

                                            30 novembre 2020 </div>
                                        <div class="createdby">

                                            SB2-4ALL </div>
                                    </div>
                                </figure>


                                <div class="article-text">
                                    <header class="article-header">
                                        <h2>
                                            <a
                                                href="medias/blog/721-quelle-est-la-difference-entre-un-panneau-solaire-monocristallin-et-polycristallin.html">
                                                Quelle est la différence entre un panneau solaire monocristallin
                                                et polycristallin?</a>
                                        </h2>
                                    </header>

                                    <aside class="article-aside">


                                        <dl class="article-info">
                                            <!--<dt class="article-info-term"></dt>-->



                                        </dl>

                                    </aside>

                                    <div class="article-intro">
                                        <p><span style="font-size: 12pt;">Un panneau solaire est un
                                                &eacute;quipement &eacute;lectronique qui utilise le rayonnement
                                                solaire pour produire de la chaleur ou de
                                                l&rsquo;&eacute;lectricit&eacute;. Ceux qui produisent de la
                                                chaleur sont des panneaux solaires thermiques alors que ceux qui
                                                produisent de l&rsquo;&eacute;lectricit&eacute; sont des
                                                panneaux solaires photovolta&iuml;ques. </span></p>
                                    </div>


                                    <a class="more"
                                        href="medias/blog/721-quelle-est-la-difference-entre-un-panneau-solaire-monocristallin-et-polycristallin.html">

                                        Lire la suite...</a>

                                    <div class="hits">
                                        Affichages : 184 </div>

                                    <div class="item-tags clearfix">
                                        <div class="tags">
                                            <span class="tag-213 tag-list0">
                                                <a href="component/tags/tag/213-panneau-solaire.html"
                                                    class="label label-info">
                                                    Panneaux solaires </a>
                                            </span>&nbsp;
                                            <span class="tag-209 tag-list1">
                                                <a href="component/tags/tag/209-solaire-photovoltaique.html"
                                                    class="label label-info">
                                                    Solaire photovoltaïque </a>
                                            </span>&nbsp;
                                        </div>
                                    </div>


                                </div>
                                <div class="jd-social-share icon_container button_circle hover_2">
                                    <ul>
                                        <li>
                                            <a class="popup facebook circle icon"
                                                href="http://www.facebook.com/sharer.php?u=https://bit.ly/3mtTFvY&amp;t=Quelle%20est%20la%20diff%c3%a9rence%20entre%20un%20panneau%20solaire%20monocristallin%20et%20polycristallin?">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="popup twitter circle icon"
                                                href="http://twitter.com/share?text=Quelle+est+la+diff%C3%A9rence+entre+un+panneau+solaire+monocristallin+et+polycristallin%3F&amp;url=https://bit.ly/3mtTFvY">

                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://bit.ly/3mtTFvY&amp;title=Quelle%20est%20la%20diff%c3%a9rence%20entre%20un%20panneau%20solaire%20monocristallin%20et%20polycristallin?"
                                                class="popup linkedin circle icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="popup whatsapp"
                                                href="https://api.whatsapp.com/send?text=Quelle+est+la+diff%C3%A9rence+entre+un+panneau+solaire+monocristallin+et+polycristallin%3F%20https%3A%2F%2Fbit.ly%2F3mtTFvY">

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>


                        </div>




                    </div>

                </div>
            </div> --}}
            
           
        </div>
    </div>

</section>
<section id="yt_spotlight2" class="block">
    <div class="container">
        <div class="row">
            <div id="bottom1" class="col-sm-12">

                <div class="module   clearfix">
                    <div class="modcontent clearfix">

                        <div class="item item1 col-sm-12">
                            <h1 class="item-title1">DOMAINE D'INTERVENTION</h1>
                        </div>
                        <p>&nbsp;</p>
                        <div class="item item1 col-sm-3" data-scroll-reveal="enter left move 0px wait 0.2s">
                            <div class="item-image"><a href="#"><img
                                        src="{{ asset('images/biogaz_cuisson.fw.png') }}" alt="" /></a></div>
                            <h3 class="item-title">MOBILISATION ET GESTION DES RESSOURCES NATURELLES</h3>
                            <div class="seperator">&nbsp;</div>
                            <div class="item-desc">&nbsp;</div>
                        </div>
                        <div class="item item2 col-sm-3" data-scroll-reveal="enter left move 0px wait 0.4s">
                            <div class="item-image"><a href="#"><img
                                        src="{{ asset('images/biogaz_chauffage.fw.png') }}" alt="" /></a></div>
                            <h3 class="item-title">ENVIRONNEMENT ET DEVELOPPEMENT DURABLE</h3>
                            <div class="seperator">&nbsp;</div>
                            <div class="item-desc">&nbsp;</div>
                        </div>
                        <div class="item item3 col-sm-3" data-scroll-reveal="enter left move 0px wait 0.6s">
                            <div class="item-image"><a href="#"><img
                                        src="{{ asset('images/biogaz_electricite.fw.png') }}" alt="" /></a>
                            </div>
                            <h3 class="item-title">ENERGIE</h3>
                            <div class="seperator">&nbsp;</div>
                            <div class="item-desc">&nbsp;</div>
                        </div>
                        <div class="item item1 col-sm-3" data-scroll-reveal="enter left move 0px wait 0.8s">
                            <div class="item-image"><a href="#"><img
                                        src="{{ asset('images/biogaz_biocarburant.fw.png') }}" alt="" /></a>
                            </div>
                            <h3 class="item-title">ENERGIE NOUVELLE ET RENOUVELABLE</h3>
                            <div class="seperator">&nbsp;</div>
                            <div class="item-desc">&nbsp;</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>   
<section id="partenership" class="block" style="margin:2%;">
    <div class="container">
        <div class="row">
            <div id="slideshow" class="col-sm-12">
                <div class="module    slider clearfix">
                    <div class="modcontent clearfix">
                        <div id="myCarousels" class="carousel slide" style="margin:0;">
                            <!-- Carousel items -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousels" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousels" data-slide-to="1" class=""></li>
                                <li data-target="#myCarousels" data-slide-to="2" class=""></li>
                                <li data-target="#myCarousels" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="active item">

                                    <img src="{{ asset('images/Logo_Sapphyre_RD .png') }}"
                                        alt="" title="" />
                                    
                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/Logo_Sapphyre_RD .png') }}" alt=""
                                        title="" />
                                    
                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/Logo_Sapphyre_RD .png') }}" alt=""
                                        title="" />
                                    {{-- <div class="carousel-caption">
                                        <h4>LOGO 3
                                        </h4>
                                        <p>LOGO 3</p>

                                        <div class="item-date">


                                        </div>
                                        <div class="item-hits"> </div>

                                    </div> --}}
                                </div>
                                <div class=" item">

                                    <img src="{{ asset('images/Logo_Sapphyre_RD .png') }}" alt=""
                                        title="" />
                                    
                                </div>
                            </div><!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousels" data-slide="prev"></a>
                            <a class="carousel-control right" href="#myCarousels" data-slide="next"></a>
                        </div>

                        <script>
                            //<![CDATA[    					
                            jQuery(document).ready(function($) {
                                $('.carousel').carousel({
                                    interval: 3000,
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
            </div>
        </div>
    </div>
</section>   
@endsection