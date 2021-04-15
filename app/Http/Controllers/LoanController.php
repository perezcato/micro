<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function storeLoan(Request $request)
    {
        Loan::create($request->except('_token'));
        return view('loan-processed');
    }
}
