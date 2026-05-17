<?php include 'head.php' ?>

	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
					</div>
				</div>
			</div>
			<!-- Loader end -->
			
<?php include 'header.php' ?>			
	        <style>
	            /* Homepage UI refresh only */
	            #this-is-top { margin-bottom: 0; padding: 0; border: none !important; background: #fff !important; }
	            #this-is-top .topmenu { padding: 0; min-height: auto; margin: 0; border: none !important; background: #f5f5f5 !important; }
	            #this-is-top .row.header { padding: 6px 0; margin: 0; border: none !important; background: #fff !important; }
	            #this-is-top .header-padding { padding-top: 0; padding-bottom: 0; }
	            #this-is-top .main-menu .navbar-nav > li > a { padding-top: 8px; padding-bottom: 8px; line-height: 18px; }
	            #this-is-top .header img { width: 130px; height: auto; }
	            
                /* Remove all vertical separators/borders/shadows in header */
                #this-is-top .h-block,
                #this-is-top .topmenu a, 
                #this-is-top .main-menu li, 
                #this-is-top .main-menu li a,
                #this-is-top .navbar-main,
                #this-is-top [class*="col-"] { border: none !important; box-shadow: none !important; outline: none !important; }
                
                #this-is-top .h-block { margin-top: 0; margin-bottom: 0; padding-top: 0; font-size: 11px; }
	            #this-is-top .h-block span { font-size: 9px; line-height: 1; }
	            
                /* FRESH MOBILE MENU RECONSTRUCTION */
                @media (max-width: 991px) {
                    .main-menu {
                        position: fixed !important;
                        top: 0 !important;
                        left: 0 !important;
                        width: 100% !important;
                        height: 100vh !important;
                        background: #000 !important; /* Full screen black overlay */
                        z-index: 99998 !important;
                        display: none; /* Toggle via slideDown in theme.js */
                        padding: 80px 10% 40px !important;
                        text-align: left !important;
                        overflow-y: auto !important;
                        border: none !important;
                    }
                    .main-menu .navbar-nav {
                        float: none !important;
                        margin: 0 !important;
                        display: block !important;
                    }
                    .main-menu .navbar-nav > li {
                        float: none !important;
                        display: block !important;
                        margin-bottom: 5px;
                    }
                    .main-menu .navbar-nav > li > a {
                        color: #fff !important;
                        font-size: 22px !important;
                        font-weight: 600 !important;
                        padding: 12px 0 !important;
                        border-bottom: 1px solid #222 !important;
                    }
                    .main-menu .navbar-nav .dropdown-menu {
                        display: block !important; 
                        position: static !important;
                        float: none !important;
                        background: transparent !important;
                        padding-left: 20px !important;
                        box-shadow: none !important;
                    }
                    .main-menu .navbar-nav .dropdown-menu li a {
                        color: #999 !important;
                        font-size: 16px !important;
                        padding: 10px 0 !important;
                    }
                    /* Improved Close Button UI and Size */
                    #menu-close {
                        display: none;
                        position: fixed !important;
                        top: 20px !important;
                        right: 20px !important;
                        z-index: 99999 !important;
                        color: #fff !important;
                        background: rgba(255, 255, 255, 0.15) !important;
                        width: 48px !important;
                        height: 48px !important;
                        line-height: 48px !important;
                        text-align: center !important;
                        border-radius: 50% !important;
                        font-size: 24px !important;
                        text-decoration: none !important;
                        transition: background 0.3s ease;
                    }
                    #menu-close:hover { background: rgba(255, 255, 255, 0.3) !important; }
                    /* Logic to show X when menu is active */
                    .main-menu.active + #menu-close, .main-menu.opened + #menu-close { display: block !important; }

                    /* Header layout and strip fixes */
                    #this-is-top .header img { width: 110px; }
                    #this-is-top .container-fluid { padding: 0; }
                    #this-is-top .row { margin: 0; }
                    #main-menu-bg { display: none !important; } /* Hide old background helper */
                }

	            #owl-main-slider {
	                border-radius: 18px;
	                overflow: hidden;
	                box-shadow: 0 20px 45px rgba(0, 0, 0, 0.18);
	            }
	            #owl-main-slider .item {
	                position: relative;
	            }
	            #owl-main-slider .item:before {
	                content: "";
	                position: absolute;
	                inset: 0;
	                background: linear-gradient(110deg, rgba(0, 0, 0, 0.55) 0%, rgba(0, 0, 0, 0.15) 55%, rgba(0, 0, 0, 0.05) 100%);
	                z-index: 1;
	            }
	            #owl-main-slider .slider-content {
	                position: relative;
	                z-index: 2;
	                background: rgba(0, 0, 0, 0.25);
	                border: 1px solid rgba(255, 255, 255, 0.28);
	                border-radius: 16px;
	                padding: 20px 22px 22px;
	                backdrop-filter: blur(2px);
	            }
	            .column-info > div,
	            .our-services > div > a,
	            .stats > div > div,
	            .blog-section .one-news > div,
	            .blog-section .two-news .news-item,
	            .partners .owl-item > div {
	                border-radius: 14px;
	            }
	            .column-info > div,
	            .stats > div > div {
	                overflow: hidden;
	                box-shadow: 0 12px 28px rgba(18, 32, 56, 0.12);
	            }
	            .column-info > div {
	                background: #fff;
	            }
	            .column-info img {
	                border-top-left-radius: 14px;
	                border-top-right-radius: 14px;
	            }
	            .our-services > div > a {
	                background: #fff;
	                border: 1px solid #e9edf4;
	                box-shadow: 0 10px 24px rgba(15, 30, 50, 0.08);
	                transition: transform 0.25s ease, box-shadow 0.25s ease;
	            }
	            .our-services > div > a:hover {
	                transform: translateY(-4px);
	                box-shadow: 0 16px 30px rgba(15, 30, 50, 0.14);
	            }
	            .big-hr {
	                border-radius: 16px;
	                box-shadow: 0 16px 34px rgba(10, 24, 40, 0.14);
	            }
	            .btn, .btn.btn-sm, .btn.btn-lg {
	                border-radius: 999px;
	            }
	            .column-info a.btn.btn-default.btn-sm,
	            .column-info a.btn.btn-default.btn-sm:hover,
	            .column-info a.btn.btn-default.btn-sm:focus {
	                background: #1f7a3d;
	                border-color: #1f7a3d;
	                color: #ffffff;
	            }
	            .column-info a.btn.btn-default.btn-sm:hover,
	            .column-info a.btn.btn-default.btn-sm:focus {
	                background: #166130;
	                border-color: #166130;
	            }
	            .partners,
	            .blog-section,
	            .block-content.inner-offset {
	                border-radius: 16px;
	            }
	            @media screen and (max-width: 768px) {
	                #owl-main-slider {
	                    border-radius: 12px;
	                }
	                #owl-main-slider .slider-content {
	                    padding: 14px 14px 16px;
	                    border-radius: 12px;
	                }
	                .column-info > div,
	                .our-services > div > a,
	                .stats > div > div,
	                .big-hr {
	                    border-radius: 12px;
	                }
	            }
	        </style>
	        
	        
	        <div id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
	            <div class="item">
            		<img src="media/main-slider/1.jpg" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1>SUPPLY CHAIN SOLUTIONS</h1>
	                            </div>
	                        </div>
	                        <p>Specialized,organized and complete supply chain management solutions tailored to fit your needs. From planning and analysis to quality control.<br><a class="btn btn-success" href="#">LEARN MORE</a></p>
	                    </div>
	                </div>
	            </div>
	            <div class="item">
            		<img src="media/main-slider/2.jpg" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1>CLEARANCE AND FORWARDING</h1>
	                            </div>
	                        </div>
	                        <p>Customs clearance,rules and processes can be confusing in Kenya but our goal is make customs brokerage as easy as possible for you.<br><a class="btn btn-success" href="#">LEARN MORE</a></p>
	                    </div>
	                </div>
	            </div>
                <div class="item">
            		<img src="media/3-column-info/11.jpg" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1 >ROAD TRUCKING</h1>
	                            </div>
	                        </div>
	                        <p>We provide a reasonable yet comprehensive transportation network within East Africa and will be in a position to handle your transport needs.<br><a class="btn btn-success" href="#">LEARN MORE</a></p>
	                    </div>
	                </div>
	            </div>
                 <div class="item">
            		<img src="media/3-column-info/10.jpg" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1>AIR FREIGHT</h1>
	                            </div>
	                        </div>
	                        <p>We are able to offer international coverage on air freight and also assist in interconnections of flights schedules for Transit Cargo.<br><a class="btn btn-success" href="#">LEARN MORE</a></p>
	                    </div>
	                </div>
	            </div>
                <div class="item">
            		<img src="media/main-slider/1.jpg" alt="slider">
	                <div class="container-fluid">
	                    <div class="slider-content col-md-6 col-lg-6">
	                        <div style="display:table;">
	                            <div style="display:table-cell; width:100px; vertical-align:top;">
	                                <a class="prev"><i class="fa fa-angle-left"></i></a>
	                                <a class="next"><i class="fa fa-angle-right"></i></a>
	                            </div>
	                            <div style="display:table-cell;">
	                                <h1> IMPORTS AND EXPORTS OF GOODS</h1>
	                            </div>
	                        </div>
	                        <p>We undertake actual clearance at the border points, land and air and ensure that regulations are followed and correct tariffs are subjected to the goods.<br><a class="btn btn-success" href="#">LEARN MORE</a></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div class="container-fluid">
        		<div class="row column-info block-content">
            		<div class="col-sm-4 col-md-4 col-lg-4 wow fadeInLeft" data-wow-delay="0.15s">
                		<img src="media/3-column-info/1.jpg" alt="slider">
	                    <span></span>
	                    <h3>FAST CARGO MOVEMENT</h3>
	                    <p>We are able to marshall resources and more required cargo from origin to the required destination within the shortest time period.</p>
	                    <a class="btn btn-default btn-sm" href="/goods">READ MORE</a>
	                </div>
	                <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                		<img src="media/3-column-info/2.jpg" alt="Img">
	                    <span></span>
	                    <h3>FAST AIR FREIGHT</h3>
	                    <p> we are able to offer international coverage on air freight and also assist in interconnections of flights schedules for Transit Cargo</p>
	                    <a class="btn btn-default btn-sm" href="/air-freight">READ MORE</a>
	                </div>
	                <div class="col-sm-4 col-md-4 col-lg-4 wow fadeInRight" data-wow-delay="0.15s">
                		<img src="media/3-column-info/3.jpg" alt="Img">
	                    <span></span>
	                    <h3>GROUND SHIPPING</h3>
	                    <p>We provide a reasonable yet comprehensive transportation network within East and Central Africa road from the Port.</p>
	                    <a class="btn btn-default btn-sm" href="/road-trucking">READ MORE</a>
	                </div>
	            </div>
	        </div>
	        
	        <hr>
	        <div class="big-hr color-1 wow zoomInUp" data-wow-delay="0.1s">
        		<div class="text-left" style="margin-right:40px;">
            		<h2>We provide first class logistics services worldwide.</h2>
            		<p>Ubuntu Clearing & Forwarding Limited is a professional logistics and supply chain company specializing in customs clearance, freight forwarding, transportation, warehousing, and cargo handling services across East Africa.</p>
				</div>
	            <div><a class="btn btn-success btn-lg" href="/contact">CONTACT US TODAY</a></div>
	        </div>
	        
	        <div class="container-fluid block-content">
        		<div class="text-center hgroup wow zoomInUp" data-wow-delay="0.1s">
            		<h1>OUR SERVICES</h1>
            		<h2>We have wide network of offices in all major locations to help you with <br> the services we offer</h2>
	            </div>
				<div class="row our-services">
            		<div class="col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-delay="0.1s">
                		<a href="/clearance">
                    		<span><i class="glyph-icon flaticon-boats4"></i>
                            </span>
                    		<h4>CLEARANCE AND FORWARDING</h4>
	                        <p>Ubuntu Clearing & Forwarding Limited has wide experience in handling Imports and Exports in Kenya, South Sudan and other </p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInUp" data-wow-delay="0.1s">
                		<a href="/road-trucking">
                    		<span><i class="glyph-icon flaticon-railway1"></i></span>
                    		<h4>Road Trucking</h4>
	                        <p> The increased trade between countries has stimulated haulage by road. Goods can be carried</p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInRight" data-wow-delay="0.1s">
                		<a href="/air-freight">
                    		<span><i class="glyph-icon flaticon-flying"></i></span>
                    		<h4>INTERNATIONAL AIR FREIGHT</h4>
	                        <p>Air Freight as a means of ferrying goods has its timely and security advantages and is the </p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-delay="0.1s">
                		<a href="/goods">
                    		<span><i class="glyph-icon flaticon-package7"></i></span>
                    		<h4>IMPORT AND EXPORT OF GOODS</h4>
                            <p>Ubuntu Clearing & Forwarding Limited has wide experience in handling Imports and Exports in Kenya, South Sudan and other </p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInUp" data-wow-delay="0.1s">
                		<a href="/warehousing">
                    		<span><i class="glyph-icon flaticon-garage1"></i></span>
                    		<h4>WAREHOUSING</h4>
                            <p>We offer our fleet to customers for local deliveries in times of need where no international</p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInRight" data-wow-delay="0.1s">
                		<a href="/supply-chain-management">
                    		<span><i class="glyph-icon flaticon-traffic-signal"></i></span>
                    		<h4>SUPPLY CHAIN CONSULTANCY </h4>
                            <p> Ubuntu Clearing & Forwarding Limited is capable of assisting reviewing procurement organizations for best practices and </p>
	                    </a>
	                </div>
	            </div>
	        </div>
	        
            	       
	        	<div class="block-content inner-offset">
				<div class="info-texts wow fadeIn" data-wow-delay="0.1s">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>We have wide network of offices in all major locations to help you with the services we offer</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>With the help of our worldwide partners we are providing specialized services in Logistics solutions to our satisfied customers</p>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4">
								<p>We provides comprehensive cargo care, cargo movement & project management</p>
							</div>
						</div>
					</div>
				</div>
			</div>
            
	        <hr>
	        
	        <div class="container-fluid block-content percent-blocks" data-waypoint-scroll="true">
        		<div class="row stats">
            		<div class="col-sm-6 col-md-3 col-lg-3">
                		<div class="chart" data-percent="230">
                    		<span><i class="fa fa-folder-open"></i></span>
                    		<span class="percent"></span>Projects Done
	                    </div>
	                </div>
	                <div class="col-sm-6 col-md-3 col-lg-3">
                		<div class="chart" data-percent="68">
                    		<span><i class="fa fa-users"></i></span>
                    		<span class="percent"></span>Clients Worldwide
	                    </div>
	                </div>
	                <div class="col-sm-6 col-md-3 col-lg-3">
                		<div class="chart" data-percent="16">
                    		<span><i class="fa fa-truck"></i></span>
                    		<span class="percent"></span>Owned Vehicles
	                    </div>
	                </div>
	                <div class="col-sm-6 col-md-3 col-lg-3">
                		<div class="chart" data-percent="46">
                    		<span><i class="fa fa-male"></i></span>
                    		<span class="percent"></span>People In Team
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div class="block-content bg-image blog-section inner-offset">
        		<div class="container-fluid">
            		<div class="hgroup wow fadeInLeft" data-wow-delay="0.1s">
	                    <h1>CUSTOMISED SERVICES</h1>
	                    
	                </div>
	                <a class="btn btn-danger pull-right read-all-news wow fadeInRight" data-wow-delay="0.1s" href="/services">VIEW ALL SERVICES</a>
	                <div class="row">
                		<div class="col-sm-6 col-md-6 col-lg-6 one-news wow fadeInLeft" data-wow-delay="0.1s">
                    		<div style="background-image:url(media/3-column-info/2.jpg);">
                        		<div>
                            		<a href="/air-freight"><h3>AIR FREIGHT SERVICES</h3></a>
	                                
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-sm-6 col-md-6 col-lg-6 two-news wow fadeInRight" data-wow-delay="0.1s">
	                        <div class="news-item row">
	                            <div class="col-sm-6 col-md-6 col-lg-6">
	                                <div style="background-image:url(media/3-column-info/1.jpg);"></div>
	                            </div>
	                            <div class="col-sm-6 col-md-6 col-lg-6">
	                                <div>
	                                    <a href="/road-trucking"><h3>ROAD TRUCKING</h3></a>
	                                    
	                                </div>
	                            </div>
	                        </div>
	                        <div class="news-item row">
	                            <div class="col-sm-6 col-md-6 col-lg-6">
	                                <div style="background-image:url(media/3-column-info/4.jpg);"></div>
	                            </div>
	                            <div class="col-sm-6 col-md-6 col-lg-6">
	                                <div>
	                                    <a href="/goods"><h3>IMPORTS & EXPORTS OF GOODS</h3></a>
	                               
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div class="container-fluid partners block-content">
	            <div class="hgroup title-space wow fadeInLeft" data-wow-delay="0.1s">
	                <h1>OUR partners</h1>
	                <h2>PROVIDING WIDE RANGE OF TRANSPORT SERVICES AND MEANS OF TRANSPORT</h2>
	            </div>
	            <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">
	                <div class="wow rotateIn" data-wow-delay="0.1s"><a href="#"><img src="media/partners/1.png" alt="Img"></a></div>
	                <div class="wow rotateIn" data-wow-delay="0.1s"><a href="#"><img src="media/partners/2.png" alt="Img"></a></div>
	                <div class="wow rotateIn" data-wow-delay="0.1s"><a href="#"><img src="media/partners/3.png" alt="Img"></a></div>
	                <div class="wow rotateIn" data-wow-delay="0.1s"><a href="#"><img src="media/partners/4.png" alt="Img"></a></div>
	                <div class="wow rotateIn" data-wow-delay="0.1s"><a href="#"><img src="media/partners/1.png" alt="Img"></a></div>
	                <div class="wow rotateIn" data-wow-delay="0.1s"><a href="#"><img src="media/partners/2.png" alt="Img"></a></div>
	            </div>
	        </div>

	        <div class="container-fluid block-content" style="padding-top:20px; padding-bottom:40px;">
	            <div class="text-center hgroup wow zoomInUp" data-wow-delay="0.1s">
	                <h1>OUR PHOTO GALLERY</h1>
	                <h2>Recent work highlights from our logistics operations</h2>
	            </div>
	            <div style="overflow:hidden; position:relative;">
	                <style>
	                    .home-gallery-track {
	                        display: flex;
	                        width: max-content;
	                        animation: homeGalleryScroll 32s linear infinite;
	                        will-change: transform;
	                    }
	                    .home-gallery-item {
	                        width: 260px;
	                        height: 170px;
	                        margin: 0 10px;
	                        border-radius: 8px;
	                        overflow: hidden;
	                        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
	                        flex-shrink: 0;
	                    }
	                    .home-gallery-item img {
	                        width: 100%;
	                        height: 100%;
	                        object-fit: cover;
	                        transition: transform 0.4s ease;
	                    }
	                    .home-gallery-item:hover img {
	                        transform: scale(1.08);
	                    }
	                    @keyframes homeGalleryScroll {
	                        0% { transform: translateX(0); }
	                        100% { transform: translateX(-50%); }
	                    }
	                </style>
	                <div class="home-gallery-track">
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/bnjc.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/cd.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/cvbnj.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/df.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/fd.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/fef.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/h.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/kjn.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/wde.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/wsa.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/bnjc.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/cd.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/cvbnj.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/df.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/fd.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/fef.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/h.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/kjn.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/wde.jpeg" alt="Gallery image"></a>
	                    <a class="home-gallery-item" href="/gallery"><img src="gallery/wsa.jpeg" alt="Gallery image"></a>
	                </div>
	            </div>
	            <p class="text-center" style="margin-top:25px;">
	                <a class="btn btn-success" href="/gallery">VIEW FULL GALLERY</a>
	            </p>
	        </div>
	       
<?php include 'footer.php' ?>			
        </div>
        <!--Main-->   
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        
        <script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
		<!-- Loader -->
		<script src="assets/loader/js/classie.js"></script>
		<script src="assets/loader/js/pathLoader.js"></script>
		<script src="assets/loader/js/main.js"></script>
		<script src="js/classie.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
        <!--Owl Carousel-->
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
        <!--Theme-->
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
        <script src="js/theme.js"></script>
	</body>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
</html>
