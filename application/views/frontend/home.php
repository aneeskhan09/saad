    <!--Home Banner------------>
    <section class="home-banner">
    	<!--Banner Slider-->
        <div class="banner-slider-container">
        	<ul class="banner-slider owl-theme owl-carousel">
            	<li class="slide-item" style="background-image:url(<?=base_url('frontend_assets/jj
                ')?>images/main-slider/1.jpg);"></li>
                <li class="slide-item" style="background-image:url(<?=base_url('frontend_assets/')?>images/main-slider/2.jpg);"></li>
                <li class="slide-item" style="background-image:url(<?=base_url('frontend_assets/')?>images/main-slider/3.jpg);"></li>
            </ul>
        </div>
        
        <!--Banner Search Form-->
        <div class="banner-search-container">
        	<div class="form-outer">
            	<div class="banner-search-form">
                	<h1>Find your dream home just in a click</h1>
                    <div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint.</div>
                    
                    <div class="banner-form-box">
                        <div class="default-form">
                            <form method="post" action="<?=base_url('frontend_assets')?>images/properties-list-one.html">
                                <div class="row clearfix">
                                    <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                        <select class="custom-select-box">
                                            <option>Property Type</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Agriculture</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-4 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Enter Location" required>
                                    </div>
                                    <div class="form-group col-md-3 col-sm-4 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">SEARCH</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
    
    <!--Property Listing-->
    <section class="property-listing">
    	<div class="auto-container">
        	<div class="mixitup-gallery">
            	<!--Heading-->
                <div class="sec-title centered">
                    <h2>Latest Properties</h2>
                </div>
                
            	<!--Filter-->
                <div class="filters gallery-filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Any Type</li>
                        <li class="filter" data-role="button" data-filter=".for-sell">For Sell</li>
                        <li class="filter" data-role="button" data-filter=".for-rent">For Rent</li>
                    </ul>
                </div>
                
                <div class="filter-list row clearfix">
                
                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-rent col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-11.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-11.jpg" alt=""></a></figure>
                                <div class="prop-cat rent-cat">For Rent</div>
                                <div class="upper-links"><a href="#"><span class="fa fa-heart-o"></span></a> <a href="#"><span class="fa fa-share-alt"></span></a></div>
                                <div class="prop-agent img-circle"><a href="#"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" alt=""></a></div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html">146 Woodhaven Preserve</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                    	<li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                            	<div class="price-discount clearfix">
                                	<div class="price"><strong>$1600</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html">Make An offer <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-12.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-12.jpg" alt=""></a></figure>
                                <div class="prop-cat sell-cat">For Sell</div>
                                <div class="upper-links"><a href="#"><span class="fa fa-heart-o"></span></a> <a href="#"><span class="fa fa-share-alt"></span></a></div>
                                <div class="prop-agent img-circle"><a href="#"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" tppabs="<?=base_url('frontend_assets')?>images/resource/author-thumb-1.jpg" alt=""></a></div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html">146 Woodhaven Preserve</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                    	<li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                            	<div class="price-discount clearfix">
                                	<div class="price"><strong>$165,000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html">Make An offer <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-rent col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-13.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-13.jpg" alt=""></a></figure>
                                <div class="prop-cat rent-cat">For Rent</div>
                                <div class="upper-links"><a href="#"><span class="fa fa-heart-o"></span></a> <a href="#"><span class="fa fa-share-alt"></span></a></div>
                                <div class="prop-agent img-circle"><a href="#"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" alt=""></a></div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html">146 Woodhaven Preserve</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                    	<li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                            	<div class="price-discount clearfix">
                                	<div class="price"><strong>$1500</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html">Make An offer <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-14.jpg" tppabs="<?=base_url('frontend_assets')?>images/resource/featured-image-14.jpg" alt=""></a></figure>
                                <div class="prop-cat sell-cat">For Sell</div>
                                <div class="upper-links"><a href="#"><span class="fa fa-heart-o"></span></a> <a href="#"><span class="fa fa-share-alt"></span></a></div>
                                <div class="prop-agent img-circle"><a href="#"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/author-thumb-1.jpg" alt=""></a></div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property-details.html" tppabs="<?=base_url('frontend_assets')?>images/property-details.html">146 Woodhaven Preserve</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                    	<li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                            	<div class="price-discount clearfix">
                                	<div class="price"><strong>$165,000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html">Make An offer <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-rent col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-15.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-15.jpg" alt=""></a></figure>
                                <div class="prop-cat rent-cat">For Rent</div>
                                <div class="upper-links"><a href="#"><span class="fa fa-heart-o"></span></a> <a href="#"><span class="fa fa-share-alt"></span></a></div>
                                <div class="prop-agent img-circle"><a href="#"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" alt=""></a></div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html">146 Woodhaven Preserve</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                    	<li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                            	<div class="price-discount clearfix">
                                	<div class="price"><strong>$1000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html">Make An offer <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Property Box Two-->
                    <div class="property-box-two mix all for-sell col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-16.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-16.jpg" alt=""></a></figure>
                                <div class="prop-cat sell-cat">For Sell</div>
                                <div class="upper-links"><a href="#"><span class="fa fa-heart-o"></span></a> <a href="#"><span class="fa fa-share-alt"></span></a></div>
                                <div class="prop-agent img-circle"><a href="#"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" alt=""></a></div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html">146 Woodhaven Preserve</a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; 10037 North Douglas Hwy.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                    	<li><strong>4</strong> Beds</li>
                                        <li><strong>3</strong> Baths</li>
                                        <li><strong>3542</strong> sq ft.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                            	<div class="price-discount clearfix">
                                	<div class="price"><strong>$165,000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div>
                                <div class="link"><a href="property-details.html" tppabs="<?=base_url('frontend_assets/')?>images/property-details.html">Make An offer <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    
                    <?php foreach($ads as $key=> $row):
                     if(!$row['status'] == "rent"):
                                $class = "for-sell";
                             else:
                                $class = "for-rent";
                            endif;
                        ?>
                        <div class="property-box-two mix all <?=$class ?> col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="<?=base_url('Home/ad_detail/'.$row['ads_id'])?>" tppabs="<?=base_url('Home/ad_detail/'.$row['ads_id'])?>"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-16.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-16.jpg" alt=""></a></figure>
                                <?php if($row['status'] == "rent"):?>
                                    <div class="prop-cat rent-cat">For rent</div>
                                <?php else:?>
                                    <div class="prop-cat sell-cat">For Sell</div>
                                <?php endif;?>
                                <div class="upper-links"><a href="#"><span class="fa fa-heart-o"></span></a> <a href="#"><span class="fa fa-share-alt"></span></a></div>
                                <div class="prop-agent img-circle"><a href="#"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/author-thumb-1.jpg" alt=""></a></div>
                            </div>
                            <div class="lower-content">
                                <div class="property-title">
                                    <h3><a href="<?=base_url('Home/ad_detail/'.$row['ad_title'].'-'.$row['ads_id'])?>" tppabs="<?=base_url('Home/ad_detail/'.$row['ads_id'])?>"><?=$row['ad_title'] ?></a></h3>
                                    <div class="location"><span class="fa fa-map-marker"></span>&nbsp; <?=$row['address'] ?>.</div>
                                </div>
                                <div class="prop-info">
                                    <ul class="clearfix">
                                        <li><strong><?=$row['bedroom'] ?></strong> Beds</li>
                                        <li><strong><?=$row['bathroom'] ?></strong> Baths</li>
                                        <li><strong><?=$row['area'] ?></strong> Marla's.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <!-- <div class="price-discount clearfix">
                                    <div class="price"><strong>$165,000</strong>Asking Price</div>
                                    <div class="discount"><strong>19%</strong>Bellow Market Value</div>
                                </div> -->
                                <div class="link"><a href="<?=base_url('Home/ad_detail/'.$row['ads_id'])?>" tppabs="<?=base_url('Home/ad_detail/'.$row['ads_id'])?>" >Make An offer <span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>                    
                    
                </div>
            </div>            
            <div class="view-all"><a href="properties-list-one.html" tppabs="<?=base_url('frontend_assets/')?>images/properties-list-one.html" class="theme-btn btn-style-two">Explore More Properties</a></div>
            
        </div>
    </section>
    
    
    <!--NewsLetter Section-->
    <section class="newsletter-section style-two" style="background-image:url(<?=base_url('frontend_assets/')?>images/background/image-3.jpg);">
    	<div class="auto-container">
            <!--Heading-->
            <div class="sec-title centered">
                <h2>Get Notified</h2>
            </div>
            
            <!--Newsletter Style One-->
            <div class="newsletter-style-one">
                <div class="desc-text">Subscribe for FREE to receive the latest porperty deals and don’t miss any of our great price on property deals.</div>
                
                <form method="post" action="<?=base_url('frontend_assets/')?>images/contact.html">
                    <div class="form-group">
                        <input type="email" name="text" value="" placeholder="Enter Your Email" required>
                        <button type="submit" class="theme-btn">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    
    <!--Popular Places-->
    <section class="popular-places style-two">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
                <h2>Popular Places</h2>
            </div>
            
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!--Popular Place Box-->
                    <div class="popular-place-box">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-17.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-17.jpg" alt=""></figure>
                                <div class="overlay-content">
                                    <h4>Boston</h4>
                                    <div class="count">24 Properties</div>
                                </div>
                            </div>
                            <a href="#" class="link-overlay"></a>
                        </div>
                    </div>
                    <!--Popular Place Box-->
                    <div class="popular-place-box">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-20.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-20.jpg" alt=""></figure>
                                <div class="overlay-content">
                                    <h4>San Francisco</h4>
                                    <div class="count">24 Properties</div>
                                </div>
                            </div>
                            <a href="#" class="link-overlay"></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                	<div class="row clearfix">
                        <!--Popular Place Box-->
                        <div class="popular-place-box col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-18.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-18.jpg" alt=""></figure>
                                    <div class="overlay-content">
                                        <h4>New York</h4>
                                        <div class="count">24 Properties</div>
                                    </div>
                                </div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                        <!--Popular Place Box-->
                        <div class="popular-place-box col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-19.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-19.jpg" alt=""></figure>
                                    <div class="overlay-content">
                                        <h4>Las Angeles</h4>
                                        <div class="count">24 Properties</div>
                                    </div>
                                </div>
                                <a href="#" class="link-overlay"></a>
                            </div>
                        </div>
                    </div>
                    <!--Popular Place Box-->
                    <div class="popular-place-box">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?=base_url('frontend_assets/')?>images/resource/featured-image-21.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/featured-image-21.jpg" alt=""></figure>
                                <div class="overlay-content">
                                    <h4>Las Vegas</h4>
                                    <div class="count">24 Properties</div>
                                </div>
                            </div>
                            <a href="#" class="link-overlay"></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    
    <!--Team Section-->
    <section class="team-section style-two">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
                <h2>Creative Agents</h2>
            </div>
            
            <!--Team Carousel-->
            <div class="team-carousel owl-carousel owl-theme">
            
            	<!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-5.jpg" tppabs="<?=base_url('frontend_assets')?>images/resource/team-image-5.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-6.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/team-image-6.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="images/resource/team-image-7.jpg" tppabs="<?=base_url('frontend_assets/')?>/images/resource/team-image-7.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-8.jpg" tppabs="<?=base_url('frontend_assets')?>images/resource/team-image-8.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets')?>/images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-5.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/team-image-5.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-6.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/team-image-6.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets')?>/images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-7.jpg" tppabs="<?=base_url('frontend_assets/')?>images/images/resource/team-image-7.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-8.jpg" tppabs="<?=base_url('frontend_assets')?>images/images/resource/team-image-8.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-5.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/team-image-5.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-6.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/team-image-6.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-7.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/team-image-7.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member-two">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="<?=base_url('frontend_assets/')?>images/resource/team-image-8.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/team-image-8.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<div class="overlay-content">
                                <h3><a href="agent-single.html" tppabs="<?=base_url('frontend_assets/')?>images/agent-single.html">Hery Willium</a></h3>
                                <div class="designation">Agent @ Reki Housing</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    
    <!--Testimonials Section-->
    <section class="testimonials-style-two" style="background-image:url(<?=base_url('frontend_assets/')?>images/background/image-4.jpg);">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
                <h2>Testimonials</h2>
            </div>
        	
            <div class="carousel-outer">
            	<div class="testimonial-carousel-two owl-theme owl-carousel">
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-2.jpg" tppabs="<?=base_url('frontend_assets/')?>images/images/resource/author-thumb-2.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-3.jpg" tppabs="<?=base_url('frontend_assets/')?>/images/resource/author-thumb-3.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-4.jpg" tppabs="<?=base_url('frontend_assets/')?>images/images/resource/author-thumb-4.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-2.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/author-thumb-2.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-3.jpg" tppabs="<?=base_url('frontend_assets/')?>images/images/resource/author-thumb-3.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-4.jpg" tppabs="<?=base_url('frontend_assets/')?>images/images/resource/author-thumb-4.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-2.jpg" tppabs="<?=base_url('frontend_assets/')?>images/images/resource/author-thumb-2.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-3.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/author-thumb-3.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Slide Item-->
                    <div class="slide-item">
                        <div class="slide-inner">
                            <div class="text">“Laborum. Sed ut perspiciatis unde nisi omnis iste natus  sit voluptatem totam rem aperiam, eaque ipsa.”</div>
                            <div class="author-info">
                            	<div class="clearfix">
                                    <figure class="author-image img-circle"><img class="img-circle" src="<?=base_url('frontend_assets/')?>images/resource/author-thumb-4.jpg" tppabs="<?=base_url('frontend_assets')?>/images/resource/author-thumb-4.jpg" alt=""></figure>
                                    <div class="info">Jhon Doe / CEO at Simkit</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
    
    
    <!--News Section-->
    <section class="news-section with-bg">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
                <h2>Latest News</h2>
            </div>
            
            <div class="row clearfix">
            	<!--News Style One-->
                <div class="news-style-one alternate col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="blog-details.html" tppabs="<?=base_url('frontend_assets')?>images/blog-details.html"><img src="i<?=base_url('frontend_assets/')?>mages/resource/blog-image-1.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/blog-image-1.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<div class="title-box">
                            	<div class="date"><div class="day">04</div>Feb <br>2017</div>
                                <div class="post-meta">
                                    <ul>
                                        <li>Jonathan Doe</li>
                                    </ul>
                                </div>
                            	<h3><a href="blog-details.html" tppabs="<?=base_url('frontend_assets')?>images/blog-details.html">Nemo enim ipsam story for voluptatem quia</a></h3>
                            </div>
                            <div class="text">Duis aute irure dolor in voccaecat reprehenderit in voluptate velit esse cillum dolore eu fugiat non nulla paratur excepteur sint voccaecat cupidatat.</div>
                        </div>
                    </div>
                </div>
                <!--News Style One-->
                <div class="news-style-one alternate col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                        <figure class="image-box"><a href="blog-details.html" tppabs="<?=base_url('frontend_assets/')?>images/blog-details.html"><img src="<?=base_url('frontend_assets/')?>images/resource/blog-image-2.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/blog-image-2.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<div class="title-box">
                            	<div class="date"><div class="day">05</div>Feb <br>2017</div>
                                <div class="post-meta">
                                    <ul>
                                        <li>Jonathan Doe</li>
                                    </ul>
                                </div>
                            	<h3><a href="blog-details.html" tppabs="<?=base_url('frontend_assets/')?>images/blog-details.html">Nemo enim ipsam story for voluptatem quia</a></h3>
                            </div>
                            <div class="text">Duis aute irure dolor in voccaecat reprehenderit in voluptate velit esse cillum dolore eu fugiat non nulla paratur excepteur sint voccaecat cupidatat.</div>
                        </div>
                    </div>
                </div>
                <!--News Style One-->
                <div class="news-style-one alternate col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="blog-details.html" tppabs="<?=base_url('frontend_assets/')?>images/blog-details.html"><img src="i<?=base_url('frontend_assets/')?>images/resource/blog-image-3.jpg" tppabs="<?=base_url('frontend_assets/')?>images/resource/blog-image-3.jpg" alt=""></a></figure>
                        <div class="lower-content">
                        	<div class="title-box">
                            	<div class="date"><div class="day">06</div>Feb <br>2017</div>
                                <div class="post-meta">
                                    <ul>
                                        <li>Jonathan Doe</li>
                                    </ul>
                                </div>
                            	<h3><a href="blog-details.html" tppabs="<?=base_url('frontend_assets/')?>images/blog-details.html">Nemo enim ipsam story for voluptatem quia</a></h3>
                            </div>
                            <div class="text">Duis aute irure dolor in voccaecat reprehenderit in voluptate velit esse cillum dolore eu fugiat non nulla paratur excepteur sint voccaecat cupidatat.</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="view-all"><a href="blog.html" tppabs="<?=base_url('frontend_assets/')?>images/blog.html" class="theme-btn btn-style-two">View More News</a></div>
            
        </div>
    </section>
    
    
    <!--Sponsors Section-->
    <section class="sponsors-section with-padding">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
                <h2>Our Partners</h2>
            </div>
            
            <ul class="sponsors-carousel owl-theme owl-carousel">
            	<li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/1.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/1.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/2.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/2.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/3.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/3.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/4.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/4.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/1.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/1.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/2.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/2.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/3.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/3.png" alt=""></a></figure></li>
                <li><figure class="image"><a href="#"><img src="<?=base_url('frontend_assets/')?>images/sponsors/4.png" tppabs="<?=base_url('frontend_assets/')?>images/sponsors/4.png" alt=""></a></figure></li>
            </ul>
            
        </div>
    </section>