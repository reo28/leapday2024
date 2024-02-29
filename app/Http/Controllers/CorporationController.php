<?php

namespace App\Http\Controllers;

use App\Models\Corporation;
use Illuminate\Http\Request;
use App\Imports\ImportCorporation;
use Maatwebsite\Excel\Facades\Excel;

class CorporationController extends Controller
{
    public function search()
    {
        $search_text = $_GET['query'];
        $corporations = Corporation::where('name', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('adress', 'LIKE', '%'.$search_text.'%')
                    ->get();

        return view('tasks.result-query-corporation', compact('corporations'));
        
    }
    
    public function indexCorp()
    {
        $corporations = Corporation::get();
        return view('tasks.import-corporation-page', compact('corporations'));
    }
        
   
    
     public function importCorp() 
     {
         Excel::import(new ImportCorporation,request()->file('file'));
         return back();
     }
}
