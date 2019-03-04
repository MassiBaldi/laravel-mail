<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewLead;

class IscrivitiController extends Controller
{
  public function index()
  {
    return view('iscriviti.index');
  }

  public function save(Request $request)
  {
    $data = $request->all();
    $newLead = new Lead;
    $newLead->name = $data['name'];
    $newLead->email = $data['email'];
    $newLead->message = $data['message'];

    $newLead->save();

    $message = 'Ok, inserito con successo';

    Mail::to('massibaldi85@gmail.com')->send(new SendNewLead($newLead));

    return view('iscriviti.index', compact('message'));
  }
}
