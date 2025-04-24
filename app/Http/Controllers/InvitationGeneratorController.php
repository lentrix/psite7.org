<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationGeneratorController extends Controller
{
    public function index() {
        return view('invitation-generator');
    }
}
