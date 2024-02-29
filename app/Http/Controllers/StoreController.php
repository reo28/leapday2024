<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Imports\ImportStore;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StoreController extends Controller
{
    public function searchStore()
    {
        $search_text = $_GET['query'];
        $stores = Store::where('name', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('adress', 'LIKE', '%'.$search_text.'%')
                    ->get();

        return view('tasks.result-query-store', compact('stores'));
        
    }
    
    public function indexStore()
    {
        $stores = Store::get();
        return view('tasks.import-store-page', compact('stores'));
    }
        
   
    
     public function importStore() 
     {
         Excel::import(new ImportStore,request()->file('file'));
         return back();
     }
}
