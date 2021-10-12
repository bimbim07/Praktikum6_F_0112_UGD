<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\StudentMail;
use App\Models\Student;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Student::get();
        Mail::to('danielbima05@gmail.com')->send(new StudentMail($detail));
        return redirect()->route('students.index')->with('success','Email was send');
    }
}
