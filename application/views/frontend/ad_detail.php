 <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <h1>Property Details</h1>
            <div class="text"></div>
        </div>
    </section>
    
    
    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
				
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <!--Property DEtails-->
                    <section class="property-details">
                    	<div class="prop-header">
                        	<h3><?=$details->ad_title?>

                                <?php if($details->status == "rent"):?>
                                    <span class="prop-label">For rent</span>
                                <?php else:?>
                                     <span class="prop-label">For sell</span>
                                <?php endif;?>
                           </h3>
                            <div class="info clearfix">
                            	<div class="location"><span class="fa fa-map-marker"></span>&ensp; <?=$details->address ?>.</div>
                            </div>
                        </div>
                        
                        <!--Product Carousel-->
                        <div class="product-carousel-outer">
                            
                            <!--Product image Carousel-->
                            <ul class="prod-image-carousel owl-theme owl-carousel">
                                <?php foreach($imgs as $key=>$row):?>
                                <li><figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" href="<?=base_url()."/".$row['image']?>" title="Image Title Here"><img src="images/gallery/1.jpg" alt=""></a></figure></li>
                               <?php endforeach;?>
                            </ul>
                            
                            <!--Product Thumbs Carousel-->
                            <div class="prod-thumbs-carousel owl-theme owl-carousel">
                            <?php foreach($imgs as $key=>$row):?>
                                <div class="thumb-item"><figure class="thumb-box"><img src="<?=base_url()."/".$row['image']?>" alt=""></figure></div>
                            <?php endforeach;?>
                               
                            </div>
                            
                        </div><!--End Product Carousel-->
                        
                        <div class="detail-content">
                            <div class="medium-title"><h3>PROPERTY DESCRIPTION</h3></div>
                            <div class="info">
                            	<ul>
                                	<li>Price : &ensp;<span class="price"><?=number_format($details->price ,2)?></span></li>
                                    <li>Area : &ensp;&ensp;<span class="area"><?=number_format($details->area ,2)?> Marla's.</span></li>
                                </ul>
                            </div>
                            <div class="text-content">
                            	<?=$details->description?>
                            </div>
                            <div class="property-specs">
                                <ul class="specs-list">
                                    <li><div class="icon"><span class="flaticon-double-king-size-bed"></span></div> <?=number_format($details->bedroom )?> Bedrooms</li>
                                    <li><div class="icon"><span class="flaticon-vintage-bathtub"></span></div> <?=number_format($details->bathroom )?> Bathrooms</li>
                                    <li><div class="icon"><span class="flaticon-private-garage"></span></div> <?=number_format($details->garage)?> Car Parking</li>
                                    <li><div class="icon"><span class="flaticon-copy"></span></div> <?=number_format($details->dining_room)?> Dining room</li>
                                </ul>
                            </div>
                            <!--Other Features-->
                            <div class="other-features">
                            	<div class="medium-title"><h3>Other Features</h3></div>
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <ul class="features-list">
                                            <?php $f= "";$f = explode(',',$details->features);
                                                foreach($f as $K=>$v):?>
                                                <li><?=$v?></li>
                                            <?php endforeach;?>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                           
                            
                           
                           
                        
                    </section>
                </div>
                <!--Content Side-->
                
                <!--Sidebar-->
                <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar">

						<!-- Request Quote Form -->
                        <div class="sidebar-widget request-quote">
                            <div class="widget-inner">
                            	<div class="agent-info">
                                	<figure class="author-thumb img-circle"><img class="img-circle" src="images/resource/author-thumb-5.jpg" alt=""></figure>
                                    <h3>Jhon Thomson</h3>
                                    <div class="designation">Agent in Los Angeles</div>
                                    <div class="phone"><span class="fa fa-phone"></span> (088) 123 456 7898</div>
                                </div>
                                <div class="default-form quote-form">
                                	<h4>Request A Quote</h4>
                                	<form method="post" action="contact.html">
                                    	<div class="form-group">
                                        	<input type="text" name="field-name" value="" placeholder="Name" required >
                                        </div>
                                        <div class="form-group">
                                        	<input type="email" name="field-name" value="" placeholder="Email" required >
                                        </div>
                                        <div class="form-group">
                                        	<textarea name="field-name" placeholder="Message" required ></textarea>
                                        </div>
                                        <div class="button-group"><button type="submit" class="theme-btn btn-style-one">Send Message</button></div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Recommended Properties -->
                        <div class="sidebar-widget recommended-properties">
                            <div class="sidebar-title"><h3>Recomended For You</h3></div>

                            <div class="post">
                            	<figure class="post-thumb"><a href="#"><img src="images/resource/post-thumb-5.jpg" alt=""></a></figure>
                                <h4><a href="#">146 Woodhaven Preserve</a></h4>
                                <ul class="specs clearfix">
                                	<li>3 Beds</li>
                                    <li>2 Baths</li>
                                    <li>1600 sq ft.</li>
                                </ul>
                                <div class="price">$25,000</div>
                            </div>

                            <div class="post">
                            	<figure class="post-thumb"><a href="#"><img src="images/resource/post-thumb-6.jpg" alt=""></a></figure>
                                <h4><a href="#">146 Woodhaven Preserve</a></h4>
                                <ul class="specs clearfix">
                                	<li>3 Beds</li>
                                    <li>2 Baths</li>
                                    <li>1600 sq ft.</li>
                                </ul>
                                <div class="price">$25,000</div>
                            </div>
                            
                            <div class="post">
                            	<figure class="post-thumb"><a href="#"><img src="images/resource/post-thumb-7.jpg" alt=""></a></figure>
                                <h4><a href="#">146 Woodhaven Preserve</a></h4>
                                <ul class="specs clearfix">
                                	<li>3 Beds</li>
                                    <li>2 Baths</li>
                                    <li>1600 sq ft.</li>
                                </ul>
                                <div class="price">$25,000</div>
                            </div>
                            
                            <div class="post">
                            	<figure class="post-thumb"><a href="#"><img src="images/resource/post-thumb-8.jpg" alt=""></a></figure>
                                <h4><a href="#">146 Woodhaven Preserve</a></h4>
                                <ul class="specs clearfix">
                                	<li>3 Beds</li>
                                    <li>2 Baths</li>
                                    <li>1600 sq ft.</li>
                                </ul>
                                <div class="price">$25,000</div>
                            </div>

                        </div>

                    </aside>


                </div>
                <!--Sidebar-->

            </div>
        </div>
    </div>