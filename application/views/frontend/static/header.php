 <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    
    <!-- Main Header-->
    <header class="main-header">
        
        <div class="main-box">
            <div class="outer-container clearfix">
                
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo">

                   <!--  <a href="<?=base_url()?>" tppabs="<?=base_url()?>" title="Lirive"><img src="<?=base_url('frontend_assets')?>/images/logo.png" tppabs="<?=base_url('frontend_assets')?>/images/logo.png" alt="PMS" title="PMS"></a> -->
                   <h1>PMS</h1>
                    </div>
                </div>
                
                <!--Other Links-->
                <?php if($this->session->userdata('name')):?>
                <div class="other-links clearfix">
                    <div class="link-box"><a href="<?=base_url('Home/Customer_dashboard')?>" tppabs="<?=base_url('Home/Customer_dashboard')?>" class="add-property-btn theme-btn"><?=$this->session->userdata('name');?> </a></div>
                     <div class="link-box"><a href="<?=base_url('Home/logout')?>" tppabs="<?=base_url('Home/logout')?>">Logout </a></div>
                    <div class="link-box"><a class="add-property-btn theme-btn" href="<?=base_url('Home/post_ad')?>" tppabs="<?=base_url('Home/post_ad')?>">Submit Property</a></div>
                </div>
                <?php else:?>
                 <div class="other-links clearfix">
                    <div class="link-box"><a href="<?=base_url('Home/Agent_sign_in')?>" class="add-property-btn theme-btn" tppabs="<?=base_url('Home/Agent_sign_in')?>">Sign In </a></div>
                    
                </div>   
                <?php endif;?>
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="<?=base_url()?>">Home</a>
                                   
                                </li>
                                <li class="dropdown"><a href="#">Agents</a>
                                    <ul>
                                        <li><a href="agents.html" tppabs="http://effortthemes.com/html/lirive/agents.html">Agents List</a></li>
                                        <li><a href="agent-single.html" tppabs="http://effortthemes.com/html/lirive/agent-single.html">Agent Profile</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Property</a>
                                    <ul>
                                        <li><a href="properties-list-one.html" tppabs="http://effortthemes.com/html/lirive/properties-list-one.html">Property List I</a></li>
                                        <li><a href="properties-list-two.html" tppabs="http://effortthemes.com/html/lirive/properties-list-two.html">Property List II</a></li>
                                        <li><a href="properties-grid-one.html" tppabs="http://effortthemes.com/html/lirive/properties-grid-one.html">Property Grid View I</a></li>
                                        <li><a href="properties-grid-two.html" tppabs="http://effortthemes.com/html/lirive/properties-grid-two.html">Property Gird View II</a></li>
                                        <li><a href="property-details.html" tppabs="http://effortthemes.com/html/lirive/property-details.html">Property Details</a></li>
                                        <li><a href="add-property.html" tppabs="http://effortthemes.com/html/lirive/add-property.html">Add Property</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html" tppabs="http://effortthemes.com/html/lirive/blog.html">Blog</a></li>
                                        <li><a href="blog-details.html" tppabs="http://effortthemes.com/html/lirive/blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html" tppabs="http://effortthemes.com/html/lirive/contact.html">Contact Us</a></li>
                             </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
                <!--Nav Outer End-->
                
            </div>
        </div>
    
    </header>
    <!--End Main Header --------->