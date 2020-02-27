<?php
class ViewProfile extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Body Content';

    }

    public function index(){
        $this->data['mx']=null;
        $this->not_logged_in();
        $this->render_users_template('ViewProfile/ViewProfile', $this->data);
    }

}
?>