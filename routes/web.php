<?php

use App\Http\Controllers\LoanController;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loan', function () {
    return view('request');
});

Route::get('/loanslist', function (){
        $data = Loan::all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('requested', function(Loan $row){
                return Carbon::parse($row->created_at)->format('d-m-Y');
            })
            ->addColumn('status', function(Loan $row){
                if($row->status){
                    $actionBtn = '<span class="badge text-success">Processed</span></h1>';
                }else{
                    $actionBtn = '<span class="badge text-danger">Pending</span></h1>';
                }
                return $actionBtn;
            })
            ->addColumn('action', function(Loan $row){
                if($row->status){
                    $actionBtn = "<a href=\"/loan/{$row->id}\" class=\"btn btn-danger\">X</a>";
                }else{
                    $actionBtn = "<a href=\"/loan/{$row->id}\" class=\"btn btn-success\">&#10003;</a>";
                }
                return $actionBtn;
            })
            ->rawColumns(['status','action'])
            ->make(true);
})->name('loans.list');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('dashboard');
})->name('dashboard');


Route::post('/loan', [LoanController::class, 'storeLoan']);

Route::get('/loan/{id}', function (Request $request, $id){
    $loan = Loan::find($id);
    $loan->status = !$loan->status;
    $loan->save();
    return redirect()->back();
});
