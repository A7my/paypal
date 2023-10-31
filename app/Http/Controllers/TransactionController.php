<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TransactionController extends Controller
{
    public function transactions(){
        return view('transactions');

    }
    public function transactionsData(){
        $data = Transaction::query();

        return DataTables::of($data)
            ->make(true);
    }
}
