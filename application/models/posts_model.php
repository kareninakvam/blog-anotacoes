<?php

class Posts_model extends CI_Model{

   public function index(){
    return $this->db->get("posts")->result_array();
   }

   public function destroy($id){
      $this->db->where("id", $id);
      return $this->db->delete("posts");
  }

  public function store($post){
      $this->db->insert("posts", $post);
  }

  public function show($id){
      return $this->db->get_where("posts", array(
         "id" => $id
      ))->row_array();
  }

  public function update($id, $post){
      $this->db->where("id", $id);
      return $this->db->update("posts", $post);
  }
 
}