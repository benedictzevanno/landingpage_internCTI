<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormSubmissionController extends Controller
{
    /**
     * Store the form submission.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'job_title'    => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'industry'     => 'required|string|in:technology,finance,healthcare,manufacturing,other',
            'phone'        => 'required|string|max:20', // You can add a regex for phone number validation if needed
            'agreement'    => 'accepted', // Ensures the checkbox is checked
        ]);

        // Process the data (e.g., save to the database)
        DB::table('trial_submissions')->insert([
            'first_name'   => $validatedData['first_name'],
            'last_name'    => $validatedData['last_name'],
            'email'        => $validatedData['email'],
            'job_title'    => $validatedData['job_title'],
            'company_name' => $validatedData['company_name'],
            'industry'     => $validatedData['industry'],
            'phone'        => $validatedData['phone'],
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        // Redirect to a thank you page or back with a success message
        return redirect()->route('thankyou')->with('success', 'Thank you for signing up for the free trial!');
    }
}
