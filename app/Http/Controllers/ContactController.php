<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	public function showContact()
  {
    return view('pages.contact');
  }

  public function sendContact()
  {
    
  }
}
