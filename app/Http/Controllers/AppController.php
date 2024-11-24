<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use App\Models\Ticket;


class AppController extends Controller
{
    public function index(){
        $users = User::all();
        $isAdminAlreadyExist = User::where('type', 'admin')->first();
        if(  $isAdminAlreadyExist == FALSE ){
            $user = User::create([
                'type' => 'admin',
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
            ]);
        }

        $isScreenExist = Item::where('cat','Screen')->first();
        if(  $isScreenExist == FALSE ){
            Item::create([
                'cat' => 'Screen',
                'type' => 'hp',
                'price' => '100$',
            ]);
        }

        $isMouseExist = Item::where('cat','Mouse')->first();
        if(  $isMouseExist == FALSE ){
            Item::create([
                'cat' => 'Mouse',
                'type' => 'lenovo',
                'price' => '50$',
            ]);
        }

        $isProcessorExist = Item::where('cat','Processor')->first();
        if(  $isProcessorExist == FALSE ){
            Item::create([
                'cat' => 'Processor',
                'type' => 'Intel Core',
                'price' => '400$',
            ]);
        }

        $isSSDExist = Item::where('cat','SSD')->first();
        if(  $isSSDExist == FALSE ){
            Item::create([
                'cat' => 'SSD',
                'type' => 'WD',
                'price' => '80$',
            ]);
        }

        $isRAMExist = Item::where('cat','Ram')->first();
        if(  $isRAMExist == FALSE ){
            Item::create([
                'cat' => 'Ram',
                'type' => 'DDR4',
                'price' => '150$',
            ]);
        }

        return view('landing');
    }

    public function userIndex(){
        $tickets = Ticket::all()->where('userId' ,Auth::user()->id );
        return view('user.index', compact('tickets'));
    }

    public function ticketCreate(){

        return view('ticket.index');
    }

    public function ticketStore(){
        $data = request()->all();
        $cat = request()->cat;
        $desc = request()->desc;
        $userId = Auth::user()->id;
        $price = Item::all()->where('cat', $cat)->pluck('price');

        Ticket::create([
            'cat' => $cat,
            'desc' => $desc,
            'price' => $price,
            'userId' => $userId,
        ]);

        return to_route('user.index');

    }

    public function fqa(){
        return view('fqa');
    }

}
