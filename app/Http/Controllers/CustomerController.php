<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //Customer Add
    public function index(){
        return view('admin.customer.customer_index');
    }
 }
