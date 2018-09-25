 <!--Add Property Section-->
    <section class="add-property">
            
    	<div class="default-form">

            <form method="post" action="<?=base_url('Home/submit_ad')?>" enctype="multipart/form-data" >
                <!--Add Property Info-->
                <div class="add-property-info">
                    <div class="auto-container">
                    <?php if($this->session->flashdata('msg')):?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <?=$this->session->flashdata('msg')?>
                    </div>
                <?php endif;?>
                        <div class="sec-title centered"><h2>Property Information</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Property Title</div>
                                <input type="text" name="title" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Status</div>
                                <select class="custom-select-box" name="status">
                                   
                                    <option value="rent">For Rent</option>
                                    <option value="sale">For Sale</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Type</div>
                                <select class="custom-select-box" name="type">
                                   
                                    <option value="comercial">Commercial</option>
                                    <option value="residential">Residential</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Price ($)</div>
                                <input type="text" name="price" value="" placeholder="0" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Marla's</div>
                                <input type="text" name="area" value="" placeholder="0" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add Gallery-->
                <div class="add-gallery">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Add Photos</h2></div>
                        <div class="upload-panel" align="center">
                        	<input type="file" multiple="" class= "image" name="images[]"></input>
                        </div>
                    </div>
                </div>
                <!--Add Property Location-->
                <div class="add-property-location">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Property Location</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Address</div>
                                <input type="text" name="address" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">State</div>
                                <input type="text" name="state" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">City</div>
                                <input type="text" name="city" value="" placeholder="" required>
                            </div>
                            <!-- <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="field-label">Zip Code</div>
                                <input type="text" name="field-name" value="" placeholder="" required>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!--Add Details Info-->
                <div class="add-details-info">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Details Information</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Description</div>
                                <textarea name="Description" placeholder="" required></textarea>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Bedroom</div>
                                <input type="text" name="Bedroom" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Dining Room</div>
                                <input type="text" name="Dining_room" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Drawing Room</div>
                                <input type="text" name="Drawing_room" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Kitchen</div>
                                <input type="text" name="Kitchen" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Bathroom</div>
                                <input type="text" name="Bathroom" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Garage</div>
                                <input type="text" name="Garage" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="field-label">Other Features</div>
                                <div class="check-box">
                                	<input name = "feature[]" value="Swimming Pool" type="checkbox" id="cbox-1">
                                    <label for="cbox-1">Swimming Pool</label>
                                </div>
                                <div class="check-box">
                                	<input  name = "feature[]" value="Air Condetioning" type="checkbox" id="cbox-2">
                                    <label for="cbox-2">Air Conditioning</label>
                                </div>
                                <div class="check-box">
                                	<input name = "feature[]" value="Laundry room" type="checkbox" id="cbox-3">
                                    <label for="cbox-3">Laundry Room</label>
                                </div>
                                <div class="check-box">
                                	<input  name = "feature[]"  value = "Gym" type="checkbox" id="cbox-4">
                                    <label for="cbox-4">Gym</label>
                                </div>
                                <div class="check-box">
                                	<input  name = "feature[]" value = "Central Heating" type="checkbox" id="cbox-5">
                                    <label for="cbox-5">Central Heating</label>
                                </div>
                                <div class="check-box">
                                	<input  name = "feature[]"  value="Fire Safty" type="checkbox" id="cbox-6">
                                    <label for="cbox-6">Fire Safty</label>
                                </div>
                                <div class="check-box">
                                	<input name = "feature[]"  value = "Window Cinvering" type="checkbox" id="cbox-7">
                                    <label for="cbox-7">Window Cinvering</label>
                                </div>
                                <div class="check-box">
                                	<input  name = "feature[]" value = "Alarm" type="checkbox" id="cbox-8">
                                    <label for="cbox-8">Alarm</label>
                                </div>
                                <div class="check-box">
                                	<input  name = "feature[]" value = "Garden" type="checkbox" id="cbox-9">
                                    <label for="cbox-9">Garden</label>
                                </div>
                                <div class="check-box">
                                	<input name = "feature[]"  value ="Guest House" type="checkbox" id="cbox-10">
                                    <label for="cbox-10">Guest House</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add Contact Info-->
                <div class="add-contact-info">
                    <div class="auto-container">
                        <div class="sec-title centered"><h2>Contact Info</h2></div>
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Name</div>
                                <input type="text" name="contact_name" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="field-label">Email</div>
                                <input type="email" name="email" value="" placeholder="" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <div class="field-label">Phone</div>
                                <input type="text" name="phone" value="" placeholder="" required>
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="button-box"><button type="submit" class="theme-btn btn-style-one">Submit</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    