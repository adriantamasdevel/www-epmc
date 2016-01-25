<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// require APPPATH . "third_party/MX/Controller.php";
class CommonController extends MX_Controller
{
    public $module;
    public $controller;
    public $method;
    public $access;
    
    //Page info
    protected $data = Array();
    protected $pageName = FALSE;
    protected $template = "main";
    protected $hasNav = TRUE;
    //Page contents
    protected $javascript = array();
    protected $run_on_load = array();
    protected $run_on_unload = array();
    protected $css = array();
    protected $fonts = array();
    //Page Meta
    protected $site_title = FALSE;
    protected $title = FALSE;
    protected $description = FALSE;
    protected $keywords = FALSE;
    protected $author = FALSE;

    public function __construct()
    {
        parent::__construct();

        $this->config->load('custom');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('Pages_model');
        $this->load->driver('cache', array('adapter' => 'file'));

        $this->load->database();
    }

     protected function debugData($data, $stop = false, $method = '') {
        echo '<pre>';
        if ($method == '')
            print_r($data);
        else
            var_dump($data);
        echo '</pre>';
        if ($stop)
            die();
    }
}

class FrontendController extends CommonController
{
    public function __construct()
    {
        parent::__construct();

        $this->data['fullNav'] = $this->getMenu();

        
        
    }

    protected function getMenu() {
        if ( ! $cache_data = $this->cache->file->get('full_menu'))
        {
            $menu = $this->Pages_model->getMenu();
            
           
            // Save into the cache for 24h
            $this->cache->file->save('full_menu', $menu, 60 * 24);
            $cache_data = $menu;
        }

        return $cache_data;
        
    }


    protected function _render($view,$renderData="FULLPAGE") {
        switch ($renderData) {
            case "AJAX"     :
                $this->load->view($view,$this->data);
            break;
            case "JSON"     :
                echo json_encode($this->data);
            break;
            case "FULLPAGE" :
            default         : 
            //static
            $toTpl["javascript"] = $this->javascript;
            $toTpl["run_on_load"] = $this->run_on_load;
            $toTpl["run_on_unload"] = $this->run_on_unload;
            $toTpl["css"] = $this->css;
            $toTpl["fonts"] = $this->fonts;
            
            //meta
            $toTpl["site_title"] = $this->site_title;
            $toTpl["description"] = $this->description;
            $toTpl["keywords"] = $this->keywords;
            $toTpl["author"] = $this->author;
            $toTpl["title"] = $this->data['title'];
                
            //data
            $toBody["content_body"] = $this->load->view('frontend/'.$view,array_merge($this->data,$toTpl),true);
            
            //nav menu
            if($this->hasNav){
                $this->load->helper("nav");
                $toMenu["pageName"] = $this->pageName;
                $toHeader["nav"] = $this->load->view("frontend/template/nav",$toMenu,true);
            }
            $toHeader["basejs"] = $this->load->view("frontend/template/basejs",$this->data,true);
            
            $toBody["header"] = $this->load->view("frontend/template/header",$toHeader,true);
            $toBody["footer"] = $this->load->view("frontend/template/footer",'',true);
            
            $toTpl["body"] = $this->load->view("frontend/template/".$this->template,$toBody,true);
            
            
            //render view
             $this->load->view("frontend/template/skeleton",$toTpl);
             break;
        }
    }
}

class BackendController extends CommonController
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('ion_auth');
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
    }

    protected function _render($view,$renderData="FULLPAGE") {
        switch ($renderData) {
            case "AJAX"     :
                $this->load->view($view,$this->data);
            break;
            case "JSON"     :
                echo json_encode($this->data);
            break;
            case "FULLPAGE" :
            default         : 
            //static
            $toTpl["javascript"] = $this->javascript;
            $toTpl["run_on_load"] = $this->run_on_load;
            $toTpl["run_on_unload"] = $this->run_on_unload;
            $toTpl["css"] = $this->css;
            $toTpl["fonts"] = $this->fonts;
            
            //meta
            $toTpl["site_title"] = $this->site_title;
            $toTpl["description"] = $this->description;
            $toTpl["keywords"] = $this->keywords;
            $toTpl["author"] = $this->author;
            $toTpl["title"] = $this->title;
                
            //data
            $toBody["content_body"] = $this->load->view($view,array_merge($this->data,$toTpl),true);
            
            //nav menu
            if($this->hasNav){
                $this->load->helper("nav");
                $toMenu["pageName"] = $this->pageName;
                $toHeader["nav"] = $this->load->view("template/nav",$toMenu,true);
            }
            $toHeader["basejs"] = $this->load->view("template/basejs",$this->data,true);
            
            $toBody["header"] = $this->load->view("template/header",$toHeader,true);
            $toBody["footer"] = $this->load->view("template/footer",'',true);
            
            $toTpl["body"] = $this->load->view("template/".$this->template,$toBody,true);
            
            
            //render view
             $this->load->view("template/skeleton",$toTpl);
             break;
        }
    }
}
