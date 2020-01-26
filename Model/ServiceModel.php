<?php
class ServiceModel
{
    //protected $request;
    //protected $response;
    public function __constructor()
    {
        $this->db = Helper::intanceDatabase();
    }

    public function getAllService()
    {
        $db = Helper::intanceDatabase();
        $service = $db->get("dichvu");
        return $service;
    }
    
    public function addService($data)
    {
        $db = Helper::intanceDatabase();
        $db->insert('dichvu', $data);
        return $data;
    }

    public function updateService($id, $data)
    {
        $db = Helper::intanceDatabase();
        $db->where('MaDichVu', $id);
        $db->update('dichvu', $data);
        return $data;
    }

    public function deleteService($id)
    {
        $db = Helper::intanceDatabase();
        $db->where('MaDichVu', $id);
        $db->delete('dichvu');
        return $db;
    }

}