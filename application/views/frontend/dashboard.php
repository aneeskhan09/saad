 <style type="text/css">
     .inner-page-banner.style-two {
        padding: 50px 0px !important;
        }
 </style>
 <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <h1><?=$this->session->userdata('name')?>  Profile</h1>
            <!-- <div class="text">Reprehenderit in voluptate velit esse cillum dolore.</div> -->
        </div>
    </section>
    
    
    <!--Agent Details-->
    <section class="agent-details">
    	<div class="auto-container">
            
            <div class="row clearfix">
            	<!--Image Column-->
                <div class="image-column col-md-4 col-sm-6 col-xs-12">
                	<figure class="image"><img src="<?=base_url('uploads/').$this->session->userdata('image')?>" alt=""></figure>
                </div>
                
                <!--Content Column-->
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner">
                    	<div class="details-header clearfix">
                            <div class="title">
                                <h3><?=$this->session->userdata('name')?></h3>
                                <div class="designation">Agent in Charsadda</div>
                            </div>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-content">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint voccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</div>
                        <ul class="contact-info clearfix">
                            <li><span class="fa fa-phone"></span> (088) 123 456 7898</li>
                            <li><span class="fa fa-skype"></span> connectagent</li>
                            <li><span class="fa fa-envelope"></span> example@gmail.com</li>
                        </ul>
                        
                        <div class="facts">
                        	<ul class="clearfix">
                            	<li><div class="icon-box"><span class="fa fa-home"></span></div><h4>42</h4><div class="subtitle">Properties Sold</div></li>
                                <!-- <li><div class="icon-box"><span class="fa fa-smile-o"></span></div><h4>38</h4><div class="subtitle">Happy Clients</div></li> -->
                                <li><div class="icon-box"><span class="fa fa-briefcase"></span></div><h4>08</h4><div class="subtitle">Years of Experience</div></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    
    <!--Contact Agent Section-->
    <!-- <section class="contact-agent">
    	<div class="auto-container">
        	<div class="sec-title centered"><h2>Contact Me</h2></div>
            
        	<div class="default-form">
                <form method="post" action="properties-list-one.html">
                    <div class="row clearfix">
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="field-name" value="" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="email" name="field-name" value="" placeholder="Email" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="field-name" value="" placeholder="Phone" required>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="field-name" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center"><button type="submit" class="theme-btn btn-style-one">Send Message &nbsp; <span class="fa fa-paper-plane"></span></button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    
    
    <!--Agent Property Listing-->
    <section class="agent-properties">
    	<div class="auto-container">
            <!--Heading-->
            <div class="sec-title centered">
                <h2>My Properties</h2>
            </div>
            
            <!--Property Carousel-->
            <div class="property-carousel owl-theme owl-carousel">
            
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-1.jpg" alt=""></a></figure>
                            <div class="property-price">$1,000 / Month</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-2.jpg" alt=""></a></figure>
                            <div class="property-price">$27,000</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-3.jpg" alt=""></a></figure>
                            <div class="property-price">$15,00 / Month</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-4.jpg" alt=""></a></figure>
                            <div class="property-price">$27,000</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-5.jpg" alt=""></a></figure>
                            <div class="property-price">$800 / Month</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-6.jpg" alt=""></a></figure>
                            <div class="property-price">$27,000</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-2.jpg" alt=""></a></figure>
                            <div class="property-price">$27,000</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-4.jpg" alt=""></a></figure>
                            <div class="property-price">$27,000</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Default Property Box-->
                <div class="default-property-box">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-6.jpg" alt=""></a></figure>
                            <div class="property-price">$27,000</div>
                        </div>
                        <div class="lower-content">
                            <div class="rating-review">
                                <div class="ratings"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                <div class="rev">(105 reviews)</div>
                            </div>
                            <div class="property-title">
                                <h3><a href="property-details.html">146 Woodhaven Preserve</a></h3>
                                <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                            </div>
                            <div class="prop-info clearfix">
                                <div class="prop-for"><span class="for">For rent</span><span class="area">1600 sq ft.</span></div>
                                <div class="link-box"><a href="property-details.html" class="theme-btn">View Details <span class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div class="property-meta">
                                <ul class="clearfix">
                                    <li><span class="icon fa fa-user"></span> Kelium Smith</li>
                                    <li><span class="icon fa fa-calendar"></span> 02 Days ago</li>
                                    <li class="options"><a href="#"><span class="fa fa-heart-o"></span></a> &ensp; <a href="#"><span class="fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
        </div>
    </section>