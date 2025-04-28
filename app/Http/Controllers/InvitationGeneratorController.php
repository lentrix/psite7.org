<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvitationGeneratorController extends Controller
{
    public function index() {
        return view('invitation-generator');
    }

    public function generate(Request $request) {

        $pdf = Pdf::loadView('invitation', [
            'full_name' => $request->full_name,
            'designation' => $request->designation,
            'greeting' => $request->greeting,
            'institution' => $request->institution,
            'address' => $request->address
        ]);
        $pdf->setPaper([0,0,612,936],'portrait');

        return $pdf->stream();
    }
}
