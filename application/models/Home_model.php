<?php
/**
 * Created by PhpStorm.
 * User: saadi
 * Date: 2/23/2018
 * Time: 12:12 AM
 */
class Home_model extends CI_Model
{
     // Insert into any table
    public function insert_data($table,$data)
    {
       return $this->db->insert($table,$data);
    }
    // update any table data
    public function update_data($table,$data,$where)
    {
        return $this->db->where($where)->update($table,$data);
    }
    public function get_last_id()
    {
        return $this->db->query("SELECT ads_id FROM ads ORDER BY ads_id DESC LIMIT 1")->row();
    }
    public function agent_dashboard()
    {
        $this->db->where('agent_id',$this->session->userdata('id'));
        $this->db->select('*')->from('ads');
        $data = $this->db->get()->result(); //print_r($data);
        return $data;

    }
    /*==== FUNCTION GET ALL DATA ====*/
    public function getAll($table,$where = NULL)
    {
            if ($where != NULL) {
                $this->db->where($where);
            }
          $this->db->select('*')->from($table);
          $t = $this->db->get()->result_array();
         return $t;
    }
     /*==== FUNCTION GET WhERE DATA ====*/
    public function getWhere($table,$where)
    {
        $d = $this->db->where(
            $where)->select('*')->from($table)->get()->row();

        return $d;
    }


    /*===== GET SOCIAL LINKS ====*/
    public function get_social_links()
    {
        $st = $this->db->query('SELECT * from social_links where id=?', [1])->result_array();
        return $st[0];
    }

    /*===== GET ALL CATEGORIES =====*/
    public function get_all_categories()
    {
        $cats = $this->db->get("category")->result();
        $all_cats = [];
        foreach ($cats as $key => $cat){
            $scats = $this->db->get_where("sub_category", ['cat_id' => $cat->id])->result();
            $all_scats = [];
            foreach ($scats as $key => $scat){
                $brands = $this->get_brands_where($scat->id);
                $scat->brands = $brands;
                $all_scats[] = $scat;
            }
            $cat->sub_cats = $all_scats;
            $all_cats[] = $cat;
        }
        return $all_cats;
    }

    /*===== GET NEW ARRIVALS ======*/
    public function get_new_arrivals()
    {
        $query = $this->db->select('*')
            ->from('products')
            ->order_by("date_time","desc")
            ->limit(10)
            ->get()
            ->result_array();
        return $query;
    }

    public function get_product_detail($id)
    {
        return $this->db->query("SELECT p.`id`,(p.name) AS product_name, p.`details`, p.`purchase_price`,p.`sale_price`,p.`part_no`,p.`image`,(b.`name`) AS brand_name,(b.`id`) AS brand_id FROM 
                    products AS p, brands AS b,category AS c,sub_category AS sc
                    WHERE p.`brand_id` = b.`id`
                    AND p.`cat_id` = c.`id`
                    AND p.`sub_cat_id` = sc.`id`
                    AND p.`id` = $id")->result_array();
    }




   

    /*===== CUSTOMER SIGN UP ======*/
    public function register_customer($data)
    {
        $st = $this->db->select('*')->from('customer')->WHERE('email', $data['email'])->get()->result_array();
        if (count($st) > 0) {
            return false;
        }
        else {
            $item =array(
                'first_name'  => $data['first_name'],
                'last_name'   => $data['last_name'],
                'email'       => $data['email'],
                'contact_no'  => $data['phone'],
                'password'    => md5(sha1($data['password'])),
                'hash'        => md5(sha1($data['email'])),
                'address_1'   => $data['address1'],
                'address_2'   => $data['address2'],
                'country'     => $data['country'],
                'city'        => $data['city'],
                'state'       => $data['state'],
                'zip_code'    => $data['zip']
            );
            $this->db->insert('customer', $item);
            return $this->db->insert_id();
        }
    }

    /*===== LOGIN CUSTOMER =====*/
    public function do_login($data)
    {
        $st=$this->db->select('*')->from('users')->WHERE('email',$data['email'])->WHERE('password',sha1($data['password']))->get()->result_array();
       return $st[0];
        if(count($st)>0)
        {
            if($st[0]['status']=='approved')
            {
                return $st[0];
            }
            else
            {
                return false;
            }

        }
        else
        {
            return false;
        }
    }

    /*===== UPDATE PROFILE =====*/
    public function update_profile($data, $id)
    {
        $item = array(
            'first_name'  => $data['first_name'],
            'last_name'   => $data['last_name'],
            'email'       => $data['email'],
            'contact_no'  => $data['contact_no'],
            'address_1'   => $data['address_1'],
            'address_2'   => $data['address_2'],
            'country'     => $data['country'],
            'city'        => $data['city'],
            'state'       => $data['state'],
            'zip_code'    => $data['zip_code'],
        );
        $this->db->WHERE('id', $id)->update('customer', $item);
    }

    /*==== CHECK OLD PASSWORD ====*/
    public function checkOldPass($email, $oldPass)
    {
        $array = array(
            'email' => $email,
            'password' => $oldPass
        );
        $st = $this->db->select('id')->from('customer')->WHERE($array)->get()->result_array();
        return $this->db->affected_rows();
    }

    /*==== UPDATE PASSWORD ====*/
    public function updatePass($id, $pass)
    {
        $update = array(
            'password' => $pass
        );
        $this->db->WHERE('id', $id)->update('customer', $update);
    }

    /*==== GET USER ID ====*/
    public function getUserId($email)
    {
        $st = $this->db->select('id')->from('customer')->WHERE('email', $email)->get()->result_array();
        return $st[0];
    }

    /*===== GET DATA BY ID =====*/
    public function getById($table, $id)
    {
        $st = $this->db->select('*')->from($table)->WHERE('id', $id)->get()->result_array();
        return $st[0];
    }

    /*===== ACTIVATE USER ======*/
    public function activateUser($id,$hash)
    {
        $user=$this->getUserById($id);
        if($user['hash']==$hash)
        {
            $this->db->query("UPDATE customer set status='Approved' WHERE id=$id");
        }
    }


    public function getAllProducts()
    {
        return $this->db->query("SELECT * FROM 
        product AS p, brands AS b,product_image AS PI
        WHERE p.`brand_id` = b.`id`
        AND p.`product_id` = pi.`product_id`
        AND pi.`class`='primary'")->result_array();
    }
    public function getByIdAjax($id)
    {
        if($id !=''){
            $i = " AND p.cat_id = $id";
        }
        return $this->db->query("SELECT * FROM 
        product AS p, brands AS b,product_image AS PI
        WHERE p.`brand_id` = b.`id`
        AND p.`product_id` = pi.`product_id`
        $i AND pi.`class`='primary'")->result_array();
    }


    public function increment_page_view($item_unique_id,$page_views)
    {
        $this->db->query('UPDATE products SET products.views='.$page_views.' WHERE products.id LIKE \''.$item_unique_id.'\'');
        return true;
    }

    public function get_page_views($item_unique_id)
    {
        $this->db->select('views')->from('products')->like('id',$item_unique_id);
        $st=$this->db->get();
        $data=$st->result_array();
        return $data[0]['views'];
    }
    ///////////////////////////////////////
    ///                                 ///
    ///      User orders                ///
    ///                                 ///
    ///////////////////////////////////////
     public function get_user_orders_record($id)
     {
       return $this->db->query('select * from order_details where customer_id = '.$id)->result();
     }
     //////////// get orders products //////////

     public function get_orders_detail($id)
     {
        $sql = "SELECT 
                  * 
                FROM
                  orders 
                  LEFT JOIN order_details 
                    ON order_details.`order_details_id` = orders.`purchase_id` 
                  LEFT JOIN products 
                    ON products.`id` = orders.`product_id` 
                WHERE orders.`purchase_id`=".$id;
        $res = $this->db->query($sql)->result();
   
        return $res;

     }
}