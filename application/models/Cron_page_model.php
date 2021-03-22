<?php defined('BASEPATH') or exit('No direct script access allowed');

class Cron_page_model extends CI_Model
{
    public function getPage($type) {
        $page = $this->db->get_where('cron_pages', array('type' => $type)) ->row()->page;
        return $page;
    }

    public function updatePage($page, $type) {
        $data = array('page' => $page);
        $this->db->where('type', $type);
        return $this->db->update('cron_pages', $data);
    }
}