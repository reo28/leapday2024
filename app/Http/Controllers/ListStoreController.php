<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class ListStoreController extends Controller
{
    public function listOfstores (){
        $stores = Store::get();
        return view('tasks.list-of-stores', compact('stores'));
    }

    public function editStore($store){

        $store = Store::find($store);
        return view('store.edit-store', compact('store'));
    }

    public function updateStore(Request $request, $store){

        $incomingFields = $request->all();
        $store = Store::find($incomingFields['id']);
        $store->name = $incomingFields['name'];
        $store->adress = $incomingFields['adress'];

        $store->save();
        return redirect("/admin/dashboard");
    }

    public function deleteStore(Request $request, Store $store){

        $store->delete();
        return redirect()->back();
    }
}
