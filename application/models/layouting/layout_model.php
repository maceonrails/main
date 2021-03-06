<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class layout_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
	
	/* ambil route url berdasarkan nama controller dan action */
	public function get_route($controller, $action){
		$query = $this->db->get_where(
			"modules", array(
				'controller'=>$controller,
				'action'=>$action
			))->result();
		if(!empty($query))
			return $query[0]->routes;
		else
			return $query;
	}

	/* ambil route url berdasarkan nama module id */
	public function get_route_id($module_id){
		$query = $this->db->get_where(
			"modules", array(
				'id'=>$module_id
			))->result();
		if(!empty($query))
			return $query[0]->routes;
		else
			return $query;
	}

	/* ambil module id berdasarkan nama controller dan action */
	public function get_module_id($controller, $action){
		$query = $this->db->get_where(
			"modules", array(
				'controller'=>$controller,
				'action'=>$action
			))->result();
		if(!empty($query))
			return $query[0]->id;
		else
			return $query;
	}
	
	/* ambil main menu */
	public function get_mainmenu($position, $group){
		$this->db->select('m.*, md.controller, md.action');
		$this->db->from('menus m');
		$this->db->join('modules md', 'm.module_id=md.id', 'left');
		$this->db->where('m.menu_id', null);
		$this->db->where('m.position', $position);
		if(!$group){
			$this->db->like('m.groups', '*', 'both');
		}else{
			$this->db->like('m.groups', $group, 'both');
		}
		$query = $this->db->get()->result();
		return $query;
	}
	
	/* ambil sub menu */
	public function get_submenu($menu_id, $group){
		$this->db->select('m.*, md.controller, md.action');
		$this->db->from('menus m');
		$this->db->join('modules md', 'm.module_id=md.id', 'left');
		$this->db->where('m.menu_id', $menu_id);
		if(!$group){
			$this->db->like('m.groups', '*', 'both');
		}else{
			$this->db->like('m.groups', $group, 'both');
		}
		$query = $this->db->get()->result();
		return $query;
	}
	
	/* ambil semua module */
	function get_all_modules(){
		$query = $this->db->get('modules');
		return $query->result();
	}
	
	/* ambil setting constants */
	function get_all_settings(){
		$query = $this->db->get('settings');
		return $query->result();
	}
}
?>
