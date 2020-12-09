<?php
namespace Scandiweb\Traits;

use Scandiweb\Database;


trait Deletable
{
    public $db;
    public $item_id;
    public $msg;

    public function deleteMultiple()
    {
        $this->db = new Database();

        if(isset($_POST['chk_id']))
        {
            $array = $_POST['chk_id'];
            foreach($array as $id){
                $this->db->database->query("DELETE FROM products WHERE id=".$id);
            }
             "Deleted";
        }

    }
}