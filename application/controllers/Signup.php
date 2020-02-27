<?php

class Signup extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Body Content';

    }

    public function index(){
        $this->data['mx']=null;
        $this->render_users_template('Signup/Signup', $this->data);
    }

    public function auth(){
        // Load model signup_Model
        $this->load->model('Signup_Model');

        // Set rule for form validation
        $this->form_validation->set_rules('username','Email / Phone', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'matches[password]');

        // CHeck if the validation went correct
        if($this->form_validation->run()){
            // Accept the input field values into a local variable
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $cpassword=$this->input->post('cpassword');

            // Develop password hash, for the password received
            $option=['cost'=>12];
            $hashed=password_hash($password, PASSWORD_BCRYPT, $option);

            // Create token for security purpose, to be used to verify an account
            $token=$this->create_token();
            
            // Database table values that will be inserted into the database
            $data=[
                "email"=>$this->db->escape($username),
                "password"=>$this->db->escape($hashed),
                "author"=>'Employer',
                "token"=>$token,
                "phoneNo"=>0,
                "enable"=>0,
                "	isEmailConfirmed"=>0
            ];
            
            
            // Result from the signup model, while sending the $data values
            $result=$this->signup_model->Register($data);
            
               // Create the email with the specified parameter and send the email
            $this->load_email($username, $token);
            

         
            // Check if the insertion went correct
            if($result){
                $array = array(
                    'success' => '<div class="alert alert-success">Thank you for Contact Us</div>'
                   );
              
                $this->session->set_flashdata('registeration', '<div class="alert alert-success text-center">You have successfully registered, please verify your account on your email.</div>');
                // redirect(base_url('signup'));
            }else{
                $array = array(
                    'success' => '<div class="alert alert-danger">Something is wrong. Code 400 internal error!</div>'
                   );
                // $this->session->set_flashdata('registeration', '<div class="alert alert-danger text-center">Something went wrong</div');
                // redirect(base_url('signup'), $data);
            }
        }else{
            $array = array(
                'error'   => true,
                'username_error' => form_error('username'),
                'password_error' => form_error('password'),
                'cpassword_error' => form_error('cpassword')
               
               );

            //    Send the result in a json format so that, on the view it can be rendered and view for the user, all the errors
            //    echo json_encode($array);
        }

       
        
    }

    public function create_token(){
        // a list of string that will be later shuffled and be a token
        $str="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0912345678qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0912345678qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0912345678qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0912345678";

        $str=str_shuffle($str);

        $str=substr($str, 0, 70);    

        return $str;
    }

    public function send_email($content, $username){

        $this->load->library('email');
        $config = array(
            
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.gmail.com', 
                        'smtp_port' => 465, 
                        'smtp_user' => 'yonatanabera2007@gmail.com', 
                        'smtp_pass' => 'yonny105192119@', 
                        'mailtype' => 'html', 
                        'charset' => 'iso-8859-1'
            );

        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        
       

        $htmlContent =$content;
        
        $this->email->to($username);
        $this->email->from('yonatanabera2007@gmail.com','Vintage Job Portal');
        $this->email->subject('Email Verification');
        $this->email->message($htmlContent);
        
        $this->email->send();

        $this->session->set_flashdata('registeration', '<div class="alert alert-success text-center">You have successfully registered, please verify your account on your email.</div>');
        redirect(base_url('Signup'));


    }
    
         
     public function load_email($username, $token){
        $data=array(
            'token'=>$token,
            'username'=>$username
        );
        $email=$this->load->view('email', $data, TRUE);
        
        $this->send_email($email, $username);
    }
    
     public function verify_email(){
         /*
         In this method, go to the model, and write a code,
         that will fetch the username and token which is sent
          via the email address inorder to verify email. 
          So fetch database and check if the value or parameter
           passed is correct, if it is then grant the user the permission, to use his account.
        */
        echo $this->input->get('username', TRUE);
        echo $this->input->get('token', TRUE);
    }

   

}


?>