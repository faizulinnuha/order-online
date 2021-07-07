<?php

namespace App\Controllers;

use App\Models\OrdersModel;
use CodeIgniter\Controller;

class Orders extends BaseController
{

	public function index()
	{
		$model = new OrdersModel();
		$data['orders'] = $model->getOrders();

		return view('orders', $data);
	}

	public function detail($order_id)
	{
		$model = new OrdersModel();
		$data['orders'] = $model->getOrdersDetails($order_id);
		$data['customer'] = $model->getOrdersCust($order_id);
		$data['id_order'] = $order_id;

		return view('orders_details', $data);
	}
}
