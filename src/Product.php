<?php
namespace Scandiweb;
use Scandiweb\Database;
use PDO;
use PDOException;

class Product
{
    public $db;


    public function __construct()
    {
        // ვქმნი Database ობიექტს სახელად db
        $this->db = new Database();
    }

    public function select()
    {

        /*
            თავიდან აუცილებლად უნდა გავუტოლოთ $stmt ცლვადს $this->db->database და ამის შემდეგ
            უკვე შეგვიძლია მხოლოდ $stmt ცვლადით გამოვიძახოთ execute() მეთოდი.
        */
        /*
            db ცვლადით ვიძახებ database ცვლადს Database.php კლასიდან.
            ამის შემდეგ ჩათვალე, რომ database.php ფაილში ხარ და იძახებ prepare() მეთოდს.
        */

        $stmt = $this->db->database->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        /*
            თავიდან აუცილებლად უნდა გავუტოლოთ $stmt ცლვადს $this->db->database და ამის შემდეგ
            უკვე შეგვიძლია მხოლოდ $stmt ცვლადით გამოვიძახოთ execute() მეთოდი.
        */
        $stmt = $this->db->database->prepare("INSERT INTO products (sku, name, price)
        VALUES (:sku, :name, :price)");

        /*
            bindValue არის თვითონ PDO ფუნქცია, როგორც execute, prepare და მრავალი სხვა.
        */
        $stmt->bindValue(':sku', $data['sku']);
        $stmt->bindValue(':name', $data['name']);
        $stmt->bindValue(':price', $data['price']);

        return $stmt->execute();
    }

}