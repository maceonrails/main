<?php  
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout{

    var $obj;
    var $layout;

    function __construct(){
        $this->obj =& get_instance();
        /* folder default */
        $this->layout = 'default';
    }

    function setLayout($layout){
      $this->layout = $layout;
    }

    function view($view, $data=null, $return=false){
        $loadedData = array();
        $loadedData['content_for_layout'] = $this->obj->load->view($view,$data,true);

		/* layout utama disimpan di file index.php */
        if($return){
            $output = $this->obj->load->view('layout/' . $this->layout . '/index', $loadedData, true);
            return $output;
        }else{
            $this->obj->load->view('layout/' . $this->layout . '/index', $loadedData, false);
        }
    }
}
?> 
