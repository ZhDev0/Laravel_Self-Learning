<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function insertRecord() {
        $phone = new Phone();
        $phone->phone='0677833006';
        $user = new User();
        $user->name='Omar';
        $user->email='omaarr.zairh@gmail.com';
        $user->password=encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Record Has Been Created Successfully !!";
    }
    public function getUserPhone($id) {
        $phone = User::find($id)->phone;
        return $phone;
    }
}
