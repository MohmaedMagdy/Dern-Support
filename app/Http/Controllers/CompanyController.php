<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use App\Models\Ticket;

class CompanyController extends Controller
{
    public function index(){
        $data = Ticket::all();
        return view('company.index', compact('data'));
    }

    public function priorityStore($id){
        $data = Ticket::find($id);
        $priority = request()->priority;
        $data->update([
            'priority'=>$priority,
        ]);

        return to_route('company.index');
    }

    public function itemIndex(){
        $data = Item::all();
        return view('item.index', compact('data'));
    }

    public function updateQty($id) {
        $part = Item::find($id);
        $part->qty = request()->qty;
        $part->save();

        return to_route('item.index');
    }
}
