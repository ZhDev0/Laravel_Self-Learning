<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;

class CompanyController extends Controller
{
    public function OneToOne()
    {
        $company = company::with('owner')->find(1);
        return $company;
    }

}
