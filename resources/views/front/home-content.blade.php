<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from lmpixels.com/demo/sunshine-demo/sunshine-version-2/sunshine-html-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Nov 2018 16:18:54 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sunshine - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('/front/') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/normalize.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/transition-animations.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('/front/') }}/css/main.css" type="text/css">

    <!-- This styles needs for demo -->
    <link rel="stylesheet" href="{{ asset('/front/') }}/preview/lmpixels-demo-panel.css" type="text/css">
    <!-- /This styles needs for demo -->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92992662-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script src="{{ asset('/front/') }}/js/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('/front/') }}/js/modernizr.custom.js"></script>

    <script src='../../../../../www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- /Loading animation -->

<div id="page" class="page">
    <!-- Header -->
    <header id="site_header" class="header mobile-menu-hide">
        @foreach($logos as $logo)
        <div class="my-photo">
            <img src="{{ $logo->image }}" alt="image">
            <div class="mask"></div>
        </div>

        <div class="site-title-block">
            <h1 class="site-title">{{ $logo->name }}</h1>
            <p class="site-description">{{ $logo->title }}</p>
        </div>
        @endforeach
        <!-- Navigation & Social buttons -->
        <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
                <!-- About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#home" data-animation="58" data-goto="1">Home</a><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
                </li>
                <!-- /About Me Subpage link -->
                <!-- About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#about_me" data-animation="59" data-goto="2">About me</a>
                </li>
                <!-- /About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#resume" data-animation="60" data-goto="3">Resume</a>
                </li>
                <li>
                    <a class="pt-trigger" href="#portfolio" data-animation="61" data-goto="4">Portfolio</a>
                </li>
                <li>
                    <a class="pt-trigger" href="#blog" data-animation="58" data-goto="5">Blog</a>
                </li>
                <li>
                    <a class="pt-trigger" href="#contact" data-animation="59" data-goto="6">Contact</a>
                </li>
            </ul>
            <!-- /Main menu -->

            <!-- Social buttons -->
            <ul class="social-links">
                <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                <!--<li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>-->
                <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
                <!--<li><a class="tip social-button" href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>-->
            </ul>
            <!-- /Social buttons -->
        </div>
        <!-- Navigation & Social buttons -->
    </header>
    <!-- /Header -->

    <!-- Mobile Header -->
    <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
            <div class="mobile-site-title">Shahariar</div>
        </div>

        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- /Mobile Header -->

    <!-- Main Content -->
    <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
            <!-- Subpages -->
            <div class="subpages">

                <!-- Home Subpage -->
                <section class="pt-page pt-page-1 section-with-bg section-paddings-0" style="background-image: url({{ asset('/front/') }}/images/home_page_bg_2.jpg);" data-id="home">
                    <div class="home-page-block-bg">
                        <div class="mask"></div>
                    </div>
                    @foreach($backends as $backend)
                    <div class="home-page-block">
                        <div class="v-align">
                            <h2>{{ $backend->heading_name }}</h2>
                            <div id="rotate" class="text-rotate">
                                <div>
                                    <p class="home-page-description">{{ $backend->title }}</p>
                                </div>
                                <div>
                                    <p class="home-page-description">{{ $backend->sub_title }}</p>
                                </div>
                            </div>

                            <div class="block end" style="text-align: center">
                                <ul class="info-list">
                                    <li><span class="title">Address</span><span class="value">{{ $backend->own_address }}</span></li>
                                    <li><span class="title">E-mail</span><span class="value"><a href="https://lmpixels.com/cdn-cgi/l/email-protection#d7b2bab6bebb97b2afb6baa7bbb2f9b4b8ba"><span class="__cf_email__" data-cfemail="7e1b131f17123e1b061f130e121b501d1113">{{ $backend->email }}</span></a></span></li>
                                    <li><span class="title">Phone</span><span class="value">{{ $backend->phone }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section class="pt-page pt-page-2" data-id="about_me">
                    <div class="section-title-block">
                        <h2 class="section-title">About Me</h2>
                        <h5 class="section-description">Back-End Developer</h5>
                    </div>

                    <div class="row">
                        @foreach($abouts as $about)
                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="general-info">
                                <h3>{{ $about->designation_title }}</h3>
                                <p>{!! $about->description !!}</p>
                                <p>{!! $about->description !!}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Testimonials</h3>
                            </div>

                            <div class="testimonials owl-carousel">

                                <!-- Testimonial 2 -->
                                @foreach($testimonials as $testimonial)
                                <div class="testimonial-item" style="width:100%">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <div class="testimonial-text">
                                            <p>{!! $testimonial->client_comment !!}</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial Content -->
                                    <!-- Testimonial Author -->
                                    <div class="testimonial-credits">
                                        <!-- Picture -->
                                        <div class="testimonial-picture">
                                            <img src="{!! asset('service-images/'.$testimonial->client_picture) !!}" alt="">
                                        </div>
                                        <!-- /Picture -->
                                        <!-- Testimonial author information -->
                                        <div class="testimonial-author-info">
                                            <p class="testimonial-author">{!! $testimonial->author_name !!}</p>
                                            <p class="testimonial-firm">{!! $testimonial->company_name !!}</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial author information -->
                                </div>
                                @endforeach

                                <!-- End of Testimonial 2 -->
                            </div>

                        </div>
                    </div>

                    <!-- Services block -->

                    <div class="block-title">
                        <h3>Services</h3>
                    </div>

                    <div class="row">
                        @foreach($services as $service)
                        <div class="col-sm-9 col-sm-3 subpage-block">
                            <div class="service-block">
                                <div class="service-info">
                                    <img src="{!! asset('service-images/' .$service->service_image ) !!}">
                                    <h4>{!! $service->service_name !!}</h4>
                                    <p>{!! substr($service->service_description,0,50) !!}....</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- End of Services block -->

                    <!-- Clients block -->
                    <div class="block-title">
                        <h3>Clients</h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ asset('/front/') }}/images/clients/client_1.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ asset('/front/') }}/images/clients/client_2.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ asset('/front/') }}/images/clients/client_3.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ asset('/front/') }}/images/clients/client_4.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ asset('/front/') }}/images/clients/client_5.png" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ asset('/front/') }}/images/clients/client_6.png" alt="image"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End of Clients block -->

                    <!-- Fun facts block -->
                    <div class="block-title">
                        <h3>Fun Facts</h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block gray-bg">
                                <i class="pe-7s-icon pe-7s-smile"></i>
                                <h4>Happy Clients</h4>
                                <span class="fun-value">1,024</span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block">
                                <i class="pe-7s-icon pe-7s-alarm"></i>
                                <h4>Working Hours</h4>
                                <span class="fun-value">6,256</span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block gray-bg">
                                <i class="pe-7s-icon pe-7s-medal"></i>
                                <h4>Awards Won</h4>
                                <span class="fun-value">21</span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block">
                                <i class="pe-7s-icon pe-7s-coffee"></i>
                                <h4>Coffee Consumed</h4>
                                <span class="fun-value">20,000</span>
                            </div>
                        </div>
                    </div>
                    <!-- End of Fun fucts block -->
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section class="pt-page pt-page-3" data-id="resume">
                    <div class="section-title-block">
                        <h2 class="section-title">Resume</h2>
                        <h5 class="section-description">6 Years of Experience</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Education</h3>
                            </div>
                            @foreach($educations as $education)
                            <div class="timeline">
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">2018</h5>
                                    <h4 class="event-name">Bachelor Of Computer Science( CSE )</h4>
                                    <span class="event-description">{!! $education->university_name !!}</span>
                                    <p>{!! substr($education->university_description,0,100) !!}</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">2013</h5>
                                    <h4 class="event-name">Diploma Engineering ( Computer )</h4>
                                    <span class="event-description">{!! $education->college_name !!}</span>
                                    <p>{!! substr($education->college_description,0,100) !!}</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">2009</h5>
                                    <h4 class="event-name">Science Group</h4>
                                    <span class="event-description">{!! $education->school_name !!}</span>
                                    <p>{!! substr($education->school_description,0,100) !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Experience</h3>
                            </div>
                            @foreach($experiences as $experience)
                            <div class="timeline">
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Dec 2013</h5>
                                    <h4 class="event-name">Web Designer</h4>
                                    <span class="event-description">{!! $experience->first_office !!}</span>
                                    <p>{!! substr($experience->first_project,0,100) !!}.........</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Dec 2013 - Nov 2014</h5>
                                    <h4 class="event-name">Front-End Developer</h4>
                                    <span class="event-description">{!! $experience->second_office !!}</span>
                                    <p>{!! substr($experience->second_project,0,100) !!}........</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Nov 2014 - Current</h5>
                                    <h4 class="event-name">Back-end Developer</h4>
                                    <span class="event-description">{!! $experience->third_office !!}</span>
                                    <p>{!! substr($experience->third_project,0,100) !!}.........</p>
                                </div>
                            </div>
                                @endforeach
                        </div>

                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Design Skills</h3>
                            </div>
                            <div class="skills-info">
                                <h4>Web Design</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-1"></div>
                                </div>

                                <h4>Graphic Design</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-2"></div>
                                </div>

                                <h4>Print Design</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-3"></div>
                                </div>
                            </div>

                            <div class="block-title">
                                <h3>Coding Skills</h3>
                            </div>
                            <div class="skills-info">
                                <h4>HML5</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-4"></div>
                                </div>

                                <h4>CSS3</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-5"></div>
                                </div>

                                <h4>jQuery</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-6"></div>
                                </div>

                                <h4>Wordpress</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-7"></div>
                                </div>

                                <h4>PHP</h4>
                                <div class="skill-container">
                                    <div class="skill-percentage skill-8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="download-cv-block">
                                <a class="button" target="_blank" href="#">Download CV</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Resume Subpage -->


                <!-- Portfolio Subpage -->
                <section class="pt-page pt-page-4" data-id="portfolio">
                    <div class="section-title-block">
                        <h2 class="section-title">Portfolio</h2>
                        <h5 class="section-description">My Best Works</h5>
                    </div>

                    <!-- Portfolio Content -->
                    <div class="portfolio-content">

                        <!-- Portfolio filter -->
                        <ul id="portfolio_filters" class="portfolio-filters">
                            <li class="active">
                                <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                            </li>
                            @foreach($category_name as $name)
                            <li>

                                <a class="filter btn btn-sm btn-link" data-group="{!! $name->category_name !!}">{!! $name->category_name !!}</a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- End of Portfolio filter -->

                        <!-- Portfolio Grid -->
                        <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                            <!-- Portfolio Item 1 -->
                            @foreach($portfolios as $portfolio)
                            <figure class="item" data-groups='["all", "{!! $portfolio->category_name !!}"]'>
                                <a class="ajax-page-load" href="portfolio-1.html">
                                    <img src="{!! asset('files/'.$portfolio->project_file) !!}" alt="">
                                    <div>
                                        <h3 class="name" style="color: red">{!! $portfolio->project_name !!}</h3>
                                        <h4 class="name" style="color: darkgray;">{!! $portfolio->category_name !!}</h4>
                                        <h5 class="name" style="color: yellow;">{!! $portfolio->project_title !!}</h5>
                                        <small>{!! $portfolio->project_category !!}</small>
                                        <i class="fa fa-file-text-o"></i>
                                    </div>
                                </a>
                            </figure>
                            @endforeach
                            <!-- /Portfolio Item 1 -->

                            <!-- Portfolio Item 2 -->

                            <!-- /Portfolio Item 12 -->
                        </div>
                        <!-- /Portfolio Grid -->

                    </div>
                    <!-- /Portfolio Content -->

                </section>
                <!-- /Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section class="pt-page pt-page-5" data-id="blog">
                    <div class="section-title-block">
                        <h2 class="section-title">Blog</h2>
                        <h5 class="section-description">My Diary</h5>
                    </div>
                    <div class="blog-masonry">
                        <!-- Blog Post 1 -->
                        @foreach($blogs as $blog)
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="{!! asset('blog-images/'.$blog->blog_image) !!}" alt="blog-post-1" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">{!! $blog->date_month !!}</span><span class="month">{!! $blog->date_month !!}</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">{!! $blog->blog_name !!}</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">{!! $blog->blog_title !!}</h4></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <!-- End of Blog Post 8 -->
                    </div>
                </section>
                <!-- End Blog Subpage -->

                <!-- Contact Subpage -->
                <section class="pt-page pt-page-6" data-id="contact">
                    <div class="section-title-block">
                        <h2 class="section-title">Contact</h2>
                        <h5 class="section-description">Get in Touch</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Get in Touch</h3>
                            </div>
                            @foreach($touchs as $touch)
                            <p>{!! $touch->description !!}</p>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-map"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>{!! $touch->location !!}</h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-mail"></i>
                                </div>
                                <div class="ci-text">
                                    <h5><a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b1d0ddd4c9c2dcd8c5d9f1d4c9d0dcc1ddd49fd2dedc">{!! $touch->email !!}</a></h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-call"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>{!! $touch->number !!}</h5>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Contact Form</h3>
                            </div>
                            <form id="contactForm" method="post" action="{!! url('contact/store') !!}">
                                @csrf

                                <div class="messages"></div>

                                <div class="controls">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-user"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-envelope"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>


                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-comment"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-callback="correctCaptcha"></div>

                                    <button type="submit" class="button btn-send">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- End Contact Subpage -->

            </div>
        </div>
        <!-- /Page changer wrapper -->
    </div>
    <!-- /Main Content -->
</div>

<!-- Demo Color changer -->
{{--<a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right"><i class="fa fa-gear"></i></a>--}}
{{--<div id="lm_demo_panel" class="lm-demo-panel right active">--}}
    {{--<div class="demo-panel-title">Main Color</div>--}}
    {{--<a href="index.html"><div class="preview" id="color1"><span class="current"></span>&nbsp;</div></a>--}}
    {{--<a href="https://lmpixels.com/demo/sunshine-demo/sunshine-version-2/sunshine-html-template-red/index.html"><div class="preview" id="color2">&nbsp;</div></a>--}}
    {{--<a href="https://lmpixels.com/demo/sunshine-demo/sunshine-version-2/sunshine-html-template-cyan/index.html"><div class="preview" id="color3">&nbsp;</div></a>--}}
    {{--<a href="https://lmpixels.com/demo/sunshine-demo/sunshine-version-2/sunshine-html-template-violet/index.html"><div class="preview" id="color4">&nbsp;</div></a>--}}
    {{--<a href="https://lmpixels.com/demo/sunshine-demo/sunshine-version-2/sunshine-html-template-orange/index.html"><div class="preview" id="color5">&nbsp;</div></a>--}}
    {{--<a href="https://lmpixels.com/demo/sunshine-demo/sunshine-version-2/sunshine-html-template-blue/index.html"><div class="preview" id="color6">&nbsp;</div></a>--}}
    {{--<div class="row"></div>--}}
    {{--<div class="demo-button-block">--}}
        {{--<a class="button demo-button" target="_blank" href="https://themeforest.net/item/sunshine-a-vcard-template/19503929">Buy Now</a>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- /Demo Color changer -->

<script data-cfasync="false" src="{{ asset('/front/') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('/front/') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('/front/') }}/js/page-transition.js"></script>
<script src="{{ asset('/front/') }}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{ asset('/front/') }}/js/validator.js"></script>
<script src="{{ asset('/front/') }}/js/jquery.shuffle.min.js"></script>
<script src="{{ asset('/front/') }}/js/masonry.pkgd.min.js"></script>
<script src="{{ asset('/front/') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('/front/') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('/front/') }}/js/jquery.hoverdir.js"></script>
<script src="{{ asset('/front/') }}/js/main.js"></script>

<!-- Demo Color changer Script -->
<script src="{{ asset('/front/') }}/preview/lmpixels-demo-panel.js"></script>
<!-- /Demo Color changer Script -->
</body>

<!-- Mirrored from lmpixels.com/demo/sunshine-demo/sunshine-version-2/sunshine-html-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Nov 2018 16:19:10 GMT -->
</html>
