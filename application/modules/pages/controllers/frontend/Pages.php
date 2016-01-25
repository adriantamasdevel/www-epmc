<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends FrontendController {

    public function index (){
        $uri_string = uri_string();
        $is_homepage = '0';
        $handle = $uri_string;

        if(empty($uri_string)) {
            $is_homepage = '1';
            $handle = '';
        }

        $this->data['page'] = $this->Pages_model->getPageByHandle($handle, $is_homepage);

        $this->view();

    }

   
    public function view()
    {
        $moduleName = $this->router->fetch_module();
        $page = $this->data['page'];

        if ( ! file_exists(APPPATH . 'modules/' . $moduleName . '/views/frontend/'.$page->template_filename.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        switch ($page->template_filename) {
            case "home":
                $menuBgClass = '';
                $headerSignSize = 'bigHeaderSign';    
            break;

            case "finantare_hub":
                $menuBgClass = 'height_submenu';
                $headerSignSize = 'bigHeaderSign';    
            break;

            case "finantare":
                $menuBgClass = 'height_submenu';
                $headerSignSize = 'bigHeaderSign';    
            break;

            default:
                $menuBgClass = 'height_submenu';
                $headerSignSize = 'bigHeaderSign';    
            break;
        }

        $this->data['title'] = ucfirst($page->menu_title); // Capitalize the first letter
        $this->data['menuBgClass'] = $menuBgClass;
        $this->data['headerSignSize'] = $headerSignSize;

        $this->_render($page->template_filename);
    }
}
