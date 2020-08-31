<?php
	class Food_model extends CI_Model {

        public function __construct(){
                $this->load->database();
        }

		// get all food items
        public function get_food_items($id = FALSE){
			if($id === FALSE){
				$query = $this->db->get('fooditems');
				return $query->result_array();
			}

			$query = $this->db->get_where('fooditems', array('id' => $id));
			return $query->result_array();

		}

        public function get_other_images($id){
			$this->db->select('*');
			$this->db->where('id', $id);
			$query = $this->db->get('foodimages');

			return $query->result_array();

		}

		// get all teams
        public function get_food_variants(){
			$this->db->select('*');
			$query = $this->db->get('foodvariants');

			return $query->result_array();
		}

		// get all teams
        public function get_category(){
        	$this->db->select('*');
			$query = $this->db->get('category');

			return $query->result_array();
		}

		// get all teams
        public function get_food_types(){
        	$this->db->select('*');
			$query = $this->db->get('foodtype');

			return $query->result_array();
		}

		public function get_options($id){
			$this->db->select('*');
			$this->db->join('foodvariants', 'foodvariants.id = foodoptions.variantID');
			$this->db->where('foodoptions.itemID', $id);
			$query = $this->db->get('foodoptions');

			return $query->result_array();

		}

		
}