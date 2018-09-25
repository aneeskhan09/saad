  <!--Inner Page Banner-->
    <section class="inner-page-banner style-two" style="background-image:url(images/background/bg-page-title.jpg);">
        <div class="auto-container">
            <h1>Login / Register</h1>
            <div class="text">Duis aute irure dolor in reprehenderit</div>
        </div>
    </section>
    
    
    <!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-lg-offset-3 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title medium">
                        <h2>Login</h2>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <div class="msgbox"><?=$this->session->flashdata('msg')?></div>
                        <form method="post" id="loginform" action="<?=base_url("Home/customer_login")?>">
                            <!-- <div class="form-group">
                                <input type="text" name="username" value="" placeholder="Username" required>
                            </div> -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password"  placeholder="Password" required>
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="submit" class="theme-btn btn-style-one login-btn">login</button>
                                </div>
                                <div class="form-group social-links-two padd-top-5 pull-right">
                                    Or login with <a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a> <a href="#" class="img-circle twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="img-circle google-plus"><span class="fa fa-google-plus"></span></a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
               
                
            </div>
        </div>
    </section>
    