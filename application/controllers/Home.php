<?php
/**
 * Created by PhpStorm.
 * User: saad
 * Date: 2/23/2018
 * Time: 12:11 AM
 */
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Admin_model');
        $this->load->library('My_PHPMailer');
        $this->load->library('cart');
    }


    public function search()
    {
        print_r($_GET);
        $this->load->view('frontend/static/head');
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/search');
        $this->load->view('frontend/static/footer');
    }
    /*===== HOME PAGE ======*/
    public function index()

    {

        // $data['get_fet'] = $this->Home_model->get_featured_products();
        // //echo '<pre>'; print_r($data['get_fet']); exit;
        // $data['cats'] = $this->Home_model->get_all_categories();
        // $data['category'] = $this->Home_model->getAll('category');
        // $data['brands'] = $this->Home_model->getAll('brands');
        // $data['social_links'] = $this->Home_model->get_social_links();
        // $data['company_info'] = $this->Admin_model->get_company_info();
        // $data['all_products'] = $this->Home_model->get_new_products();
        // $data['new_arrv'] = $this->Home_model->get_new_arrivals();
        // $data['title'] = $data['company_info']['name']." | Home";
        // $data['slides'] = $this->Home_model->getAll('slider');
        $data['ads'] = $this->Home_model->getAll('ads');// print_r($data);die;
        $this->load->view('frontend/static/head');
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/home',$data);
        $this->load->view('frontend/static/footer');
    }
    // AD Deatils
    function ad_detail()
    {
        $ad_id = $this->uri->segment(3);
        $data['details'] = $this->Home_model->getWhere('ads',array('ads_id' => $ad_id)); 
        $data['imgs'] = $this->Home_model->getAll('images',array('ad_id' => $ad_id)); 
        
         // echo "<pre>"; print_r($data); die;
        $this->load->view('frontend/static/head'); 
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/ad_detail',$data);
        $this->load->view('frontend/static/footer');

    } 
     // ADD an ADD
    function post_ad()
    {
        $this->load->view('frontend/static/head'); 
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/add_an_ad');
        $this->load->view('frontend/static/footer');

       
    }

     // submit an add
    function submit_ad()
    {
        // echo "<pre>";print_r($_FILES);;print_r($_POST) ;die;
        extract($_POST);
        $ad_id = $this->Home_model->get_last_id()->ads_id+1; 
        $feature =  implode($feature,",");
        $data =  [
                    'ad_title' => $title,
                    'status'    => $status,
                    'type'      => $type,
                    'price'     => $price,
                    'description' => $Description,
                    'area'        => $area,
                    'address'   => $address,
                    'city'      => $city,
                    'province'  => $state,
                    'bedroom'   => $Bedroom,
                    'bathroom'  => $Bathroom,
                    'drawing_room'  => $Drawing_room,
                    'dining_room'   => $Dining_room,
                    'features'       => $feature,
                    'garage'        => $Garage,

                    'date_create'   => date('Y-m-d H:i:s'),
                    'date_update' => " "];
                    // echo "<pre>";print_r($data);
          $contact = array('ad_id' => $ad_id,
            'name' => $contact_name,
            'email'  => $email,
             'phone' => $phone ); 
    

          $this->Home_model->insert_data('ads', $data);
          $this->Home_model->insert_data('contacts', $contact);
          for($i = 0; $i<count( $_FILES['images']['name']); $i++):
              $tmpFilePath = $_FILES['images']['tmp_name'][$i]; 
             if (count($tmpFilePath) >0){
                //Setup our new file path 

                $newFilePath ='uploads/ads/' . $_FILES['images']['name'][$i];
                    
                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {

                  $this->Home_model->insert_data('images',array('ad_id'=> $ad_id,'image' => $newFilePath));
                  

                }
            }
       
        endfor;
        $this->session->set_flashdata('msg', 'The Ad is submitted successfully once it is approved by admin it will be visible on site');
        redirect('Home/post_ad');
    } 
  


    /*===== ABOUT US =====*/
    public function About_us()
    {
        $data['category'] = $this->Home_model->getAll('category');
        $data['brands'] = $this->Home_model->getAll('brands');
        $data['social_links'] = $this->Home_model->get_social_links();
        $data['company_info'] = $this->Admin_model->get_company_info();
        $data['title'] = $data['company_info']['name']." | About Us";
        $this->load->view('frontend/static/head',$data);
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/about_us');
        $this->load->view('frontend/static/footer');
    }

    /*===== Contact Us =====*/
    public function Contact_us()
    {
        $data['category'] = $this->Home_model->getAll('category');
        $data['brands'] = $this->Home_model->getAll('brands');
        $data['social_links'] = $this->Home_model->get_social_links();
        $data['company_info'] = $this->Admin_model->get_company_info();
        $data['title'] = $data['company_info']['name']." | Contact Us";
        $this->load->view('frontend/static/head',$data);
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/contact_us');
        $this->load->view('frontend/static/footer');
    }

    /*====== GET SINGLE PRODUCT DETAIL PAGE ======*/
    public function get_product_detail()
    {
       
    }

    /*===== REGISTER =====*/
    public function Customer_sign_up()
    {
        $data['category'] = $this->Home_model->getAll('category');
        $data['brands'] = $this->Home_model->getAll('brands');
        $data['social_links'] = $this->Home_model->get_social_links();
        $data['company_info'] = $this->Admin_model->get_company_info();
        $data['title'] = $data['company_info']['name']." | Sign In / Register";
        $this->load->view('frontend/static/head',$data);
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/Sign_up');
        $this->load->view('frontend/static/footer');
    }

    /*===== SIGN IN ======*/
    public function Agent_sign_in()
    {   
        $this->load->view('frontend/static/head');
        $this->load->view('frontend/static/header');
        $this->load->view('frontend/login');
        $this->load->view('frontend/static/footer');
    }

    /*====== CUSTOMER DASHBOARD  ======*/
    public function Customer_dashboard()
    {
        if($this->isLoggedIn())
        {
            $data = array();
            // print_r($_SESSION);die;
            
            //echo "<pre>";print_r($data['product_detail']);exit;
            $data['title'] = $this->session->userdata('name')." | Dashboard";
            $data['ads']   =  $this->Home_model->agent_dashboard(); 
            // echo "<pre>";print_r($data); die;
            $this->load->view('frontend/static/head',$data);
            $this->load->view('frontend/static/header');
            $this->load->view('frontend/dashboard');
            $this->load->view('frontend/static/footer');
        }
        else {
            redirect(base_url());
        }
    }

    /*===== EDIT PROFILE =====*/
    public function Edit_profile()
    {
        if($this->isLoggedIn())
        {
            $data['social_links'] = $this->Home_model->get_social_links();
            $data['company_info'] = $this->Admin_model->get_company_info();
            $data['category']  = $this->Admin_model->getAll('category');
            $data['sub_category']  = $this->Admin_model->getAll('sub_category');
            $data['brands']  = $this->Admin_model->getAll('brands');
            $id = $this->uri->segment(3);
            $data['detail'] = $this->Admin_model->getById('customer', $id);
            $data['title'] = $data['company_info']['name']." | Edit Profile";
            $this->load->view('frontend/static/head',$data);
            $this->load->view('frontend/static/header');
            $this->load->view('frontend/edit_profile');
            $this->load->view('frontend/static/footer');
        }
        else {
            redirect(base_url());
        }
    }

    /*===== UPDATE PROFILE AJAX CALL ======*/
    public function update_profile()
    {
        if($this->isLoggedIn())
        {
            if($_POST) {
                $config = array(
                    array(
                        'field' => 'first_name',
                        'label' => 'First Name',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'last_name',
                        'label' => 'Last Name',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'contact_no',
                        'label' => 'Contact No',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'address_1',
                        'label' => 'Address 1',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'address_2',
                        'label' => 'Address 2',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'country',
                        'label' => 'Country',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'city',
                        'label' => 'City',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'state',
                        'label' => 'State',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'zip_code',
                        'label' => 'Zip Code',
                        'rules' => 'trim|required'
                    ),
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == false) {
                    echo json_encode((["msg_type" => "errors", "message" => validation_errors()]));
                } else {

                    $id = $this->input->post('id');
                    $this->Home_model->update_profile($_POST, $id);
                    echo json_encode((["msg_type" => "success", "message" => "Profile Updated Successfully"]));

                }
            }
        }
        else
        {
            redirect(base_url());
        }
    }

    /*===== ORDER HISTORY =====*/
    public function order_history()
    {
        if($this->isLoggedIn())
        {
            $data['social_links'] = $this->Home_model->get_social_links();
            $data['company_info'] = $this->Admin_model->get_company_info();
            $data['category']  = $this->Admin_model->getAll('category');
            $data['sub_category']  = $this->Admin_model->getAll('sub_category');
            $data['brands']  = $this->Admin_model->getAll('brands');
            $data['title'] = $data['company_info']['name']." | Order History Profile";
            $data['orders_record'] = $this->Home_model->get_user_orders_record($this->session->userdata('id')); 

            if( !empty($_POST) && !empty($_POST['id'])): 

                $data['orders_record']['details'] = $this->Home_model->get_orders_detail($_POST['id']);  
                foreach ( $data['orders_record']['details'] as $value) {
                   echo "Product : ".$value->name."<br>";
                   echo "Quantity : ".$value->quantity."<br>";
                   echo "status : ".$value->status."<br>";
                   echo "Price   : ".$value->sale_price;
                   echo $value->details; 
                }

                die;
            endif;
  
            $this->load->view('frontend/static/head',$data);
            $this->load->view('frontend/static/header');
            $this->load->view('frontend/order_history');
            $this->load->view('frontend/static/footer');
        }
        else {
            redirect(base_url());
        }
    }

    /*===== CHANGE PASSWORD =======*/
    public function Change_password()
    {
        if($this->isLoggedIn())
        {
            $data['social_links'] = $this->Home_model->get_social_links();
            $data['company_info'] = $this->Admin_model->get_company_info();
            $data['category']  = $this->Admin_model->getAll('category');
            $data['brands']  = $this->Admin_model->getAll('brands');
            /*$id = $this->uri->segment(3);
            $data['detail'] = $this->Admin_model->getById('customer', $id);*/
            $data['title'] = $data['company_info']['name']." | Change Password";
            $this->load->view('frontend/static/head',$data);
            $this->load->view('frontend/static/header');
            $this->load->view('frontend/change_password');
            $this->load->view('frontend/static/footer');
        }
        else {
            redirect(base_url());
        }
    }

    /*===== CHANGE PASSWORD AJAX ACTION ======*/
    public function change_password_ajax_action()
    {
        if($this->isLoggedIn())
        {
            if($_POST)
            {
                $config = array(
                    array(
                        'field' => 'old_pass',
                        'label' => 'Current Password',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'new_pass',
                        'label' => 'New Password',
                        'rules' => 'required|matches[confirm_pass]'
                    ),
                    array(
                        'field' => 'confirm_pass',
                        'label' => 'Confirm Password',
                        'rules' => 'trim|required'
                    )
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run() == false)
                {
                    echo json_encode((["msg_type" => "error", "message" => validation_errors() ]));
                }
                else
                {
                    $data['email'] = $this->session->userdata['email'];
                    $encrpTPass = md5(sha1($_POST['old_pass']));
                    $data['oldPass'] = $this->Home_model->checkOldPass($data['email'], $encrpTPass);
                    if ($data['oldPass'] > 0) {
                        $confirmPass = md5(sha1($_POST['confirm_pass']));
                        $data['user_Id'] = $this->Home_model->getUserId($data['email']);
                        $this->Home_model->updatePass($data['user_Id']['id'], $confirmPass);
                        echo json_encode((["msg_type" => "success", "message" => "Password Updated Successfully" ]));
                    }
                    else
                    {
                        echo json_encode((["msg_type" => "error", "message" => "Old Password Not Match" ]));
                    }
                }
            }
        }
        else
        {
            redirect(base_url());
        }
    }

    /*===== REGISTER USER AJAX CALL ======*/
    public function register_user()
    {
        if($_POST)
        {
            $config = array(
                array(
                    'field' => 'first_name',
                    'label' => 'First Name',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'last_name',
                    'label' => 'Last Name',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'phone',
                    'label' => 'Phone',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'confirm_pass',
                    'label' => 'Conform Password',
                    'rules' => 'trim|required|matches[password]'
                ),
                array(
                    'field' => 'address1',
                    'label' => 'Address Line 1',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'address2',
                    'label' => 'Address Line 2',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'city',
                    'label' => 'City',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'state',
                    'label' => 'State',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'country',
                    'label' => 'Country',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'zip',
                    'label' => 'Zip',
                    'rules' => 'trim|required'
                ),
            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == false){
                echo json_encode((["msg_type" => "errors" , "message" => validation_errors()]));
            }else{

                $check = $this->Home_model->register_customer($_POST);
                if($check)
                {
                    echo json_encode((["msg_type" => "success" , "message" => "Register successfully Kindly check your Email"]));
                }
                else
                {
                    echo json_encode((["msg_type" => "errors" , "message" => "Email Already Exist"]));
                }
            }
        }
    }

    /*====== SENDING VERIFICATION LINK =======*/
    public function thank($id)
    {
        $data['user']=$this->Admin_model->getById('customer',$id);
        $settings=$this->Admin_model->getEmailSettings();
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = $settings->host;
        $mail->Port       = $settings->port;
        $mail->Username   = $settings->email;
        $mail->Password   = $settings->password;
        $mail->SetFrom($settings->sent_email, $settings->sent_title);
        $mail->AddReplyTo($settings->reply_email,$settings->reply_email);
        $mail->Subject    = "Please verify your email address to Activate your Account";
        $mail->IsHTML(true);
        $body = $this->load->view('backend/emails/thanks_email', $data, true);
        $mail->MsgHTML($body);
        $destination = $data['user']['email'];
        $mail->AddAddress($destination);
        if(!$mail->Send()) {
            $data['code']=300;
            $data["message"] = "Error: " . $mail->ErrorInfo;
        }
    }

    /*====== ACTIVATE USER =======*/
    public function activate()
    {
        $id=$this->uri->segment(3);
        $hash=$this->uri->segment(4);
        $this->Home_model->activateUser($id,$hash);
        $user=$this->Home_model->getById($id);
        $this->success($user);
        redirect(base_url().'Home/login');
    }

    /*===== SEND SUCCESSFUL REGISTRATION MESSAGE ======*/
    public function success($reply)
    {
        $settings=$this->Admin_model->getEmailSettings();
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = $settings->host;
        $mail->Port       = $settings->port;
        $mail->Username   = $settings->email;
        $mail->Password   = $settings->password;
        $mail->SetFrom($settings->sent_email, $settings->sent_title);
        $mail->AddReplyTo($settings->reply_email,$settings->reply_email);
        $mail->Subject    = "Congratulations! Your account is active now";
        $mail->IsHTML(true);
        $body = $this->load->view('backend/emails/success_email', $reply, true);
        $mail->MsgHTML($body);
        $destination = $reply['email'];
        $mail->AddAddress($destination);
        if(!$mail->Send()) {
            $data['code']=300;
            $data["message"] = "Error: " . $mail->ErrorInfo;
        }
    }




   
    /*==== FUNCTION CHECK USER SESSION =====*/
    public function isLoggedIn()
    {
        if (!empty($this->session->userdata['id'])){ 
            return true;
        } else {
            return false;
        }
    }

    /*====== LOGOUT FUNCTION ======*/
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function customer_login()
    { 
        if(!$this->isLoggedIn())
        {
            
            $data['title']='Property Set | Agent Login';
            if($_POST)
            {
                $config = array(
                    array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email',
                    ),
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required',
                    ),
                );
                $this->form_validation->set_rules($config);
                if($this->form_validation->run()==false)
                {
                    $this->session->set_flashdata("msg" ,"<div class='alert alert-danger>'" .validation_errors()."</div>" );
                    redirect("Home/customer_login");
                    
                }
                else
                {
                    $user=$this->Home_model->do_login($_POST); 
                    if(!empty($user))
                    {
                        $this->session->set_userdata($user);
                        $redirect_link = base_url().'Home/Customer_dashboard';
                        redirect($redirect_link);
                        
                    }
                    else
                    {
                        $this->session->set_flashdata("msg" ,"<div class='alert alert-danger'> Invalid login Credintial </div>" );
                        redirect("Home/customer_login");
                    }
                }
            }
            else
            { 

                
                
                $this->load->view('frontend/static/head');
                $this->load->view('frontend/static/header');
                $this->load->view('frontend/login');
                $this->load->view('frontend/static/footer');
            }
        }
        else
        {
            redirect(base_url().$this->session->userdata['type']);
        }
    }

   

}