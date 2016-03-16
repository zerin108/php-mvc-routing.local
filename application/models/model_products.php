<?php
/**
 * Created by PhpStorm.
 * User: Lama
 * Date: 16.03.2016
 * Time: 15:51
 */
class Model_Products extends Model{

    /**
     * @return array|PDOStatement
     */
    public function get_data(){
        $sql_request = "SELECT * FROM products";

        $result = $this->_pdo->query($sql_request);

        if(!$result) return $result;

        $records = $result->fetchAll(PDO::FETCH_ASSOC);
        return $records;
    }

    public function get_product($id){
        $sql_request = "SELECT * FROM products";
        $stmt = $this->_pdo->prepare($sql_request);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $records = $stmt->fetch(PDO::FETCH_ASSOC);
        return $records;
    }
}