<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function insertCustomer()
    {
        //
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $status = Customer::create(array('firstname' => $fname, 'lastname'=> $lname, 'phone'=>$phone, 'email'=>$email, 'created_at' => Date('Y-m-d')));
        return redirect()->route('index');
    }

    public function showCustomer(){
        $res = Customer::get();
        return view('index',compact('res'));
    }

    public function editCustomer(){
        $id = $_POST['id'];
        $res = Customer::find($id);
        return json_encode($res);
    }

    public function updateCustomer(){
        $id = $_GET['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $res = Customer::where('id', $id)->update([
            'firstname' => $fname,
            'lastname' => $lname,
            'phone' => $phone,
            'email' => $email,]);

            return redirect()->route('index');
    }
}
