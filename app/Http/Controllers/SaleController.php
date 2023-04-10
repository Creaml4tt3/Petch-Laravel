<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
  public function index()
  {
    $data = Sale::all(); // ดึงข้อมูลจากโมเดล
    return view('sale', ['data' => $data]); // ส่งข้อมูลไปยังวิว
  }
}
