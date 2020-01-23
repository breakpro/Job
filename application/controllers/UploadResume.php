<?php
class UploadResume extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->data['page_title'] = 'Body Content';

    }

    public function index(){
        $this->data['mx']=null;
        $this->render_new_template('UploadResume/UploadResume', $this->data);
    }

}


?>