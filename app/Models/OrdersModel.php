<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    //protected $table_1 = 'orders';
    //protected $table_2 = 'customers';

    public function getOrders() 
    {   
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT *, orders.id as id_order FROM orders LEFT JOIN customers ON customers.id = orders.customer_id LEFT JOIN orders_status ON orders_status.id = orders.status_id");
        return $query->getResult('array');
    }

    public function getOrdersDetails($order_id) 
    {
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT * FROM order_details LEFT JOIN products ON products.id = order_details.product_id WHERE order_id = '$order_id'");
        return $query->getResult('array');
    }

    public function getOrdersCust($order_id) 
    {   
        $db      = \Config\Database::connect();
        $query = $db->query("SELECT * FROM orders LEFT JOIN customers ON customers.id = orders.customer_id WHERE orders.id = '$order_id'");
        return $query->getRow();
    }
}