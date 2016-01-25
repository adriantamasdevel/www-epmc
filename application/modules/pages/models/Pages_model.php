<?php

/**
 * Model for pages table
 *
 * @author Adrian Tamas
 */
class Pages_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function create($params) {

        if (!empty($params)) {
            $this->db
                    ->insert('pages', $params);

            return $this->db->insert_id();
        }
    }

    public function edit($pageID, $params) {

        if (!empty($params) || !empty($pageID)) {
            $this->db
                    ->where('pages.id', $pageID)
                    ->update('pages', $params);

            return $this->db->affected_rows();
        }
    }

    public function getPageByHandle($pageHandle, $isHomepage) {
            $query = $this->db->select('pages.*, menus.title, menus.title as menu_title, menus.type, menus.homepage, templates.filename as template_filename, users.first_name as author_firstname, users.last_name as author_lastname, users.email as author_email');
            $query = $this->db->join('pages', 'menus.resource_id = pages.id', 'left');
            $query = $this->db->join('templates', 'templates.id = pages.template_id', 'left');
            $query = $this->db->join('users', 'users.id = pages.created_by', 'left');
            $query = $this->db->where('pages.slug', $pageHandle);
            $query = $this->db->where('menus.homepage', $isHomepage);
            $query = $this->db->get('menus');

            $result = $query->row();

            return $result;
    }

    public function getMenu($parentID = '0') {
            $query = $this->db->select('menus.*, pages.slug');
            $query = $this->db->join('pages', 'menus.resource_id = pages.id', 'left');
            $query = $this->db->where('menus.parent_id', $parentID);
            $query = $this->db->order_by('order', 'ASC');
            $query = $this->db->get('menus');

            $menus = $query->result();

            foreach($menus as $index => $item){
                $submenu = $this->getMenu($item->id);

                if (!empty ($submenu)) {
                    if( empty( $item->slug )) $item->slug = $submenu[0]->slug;
                    $item->has_submenu = 1;
                    $item->submenu = $submenu;
                } else {
                    $item->has_submenu = 0;
                }

            }

            return $menus;
    }

 
    
}

?>
