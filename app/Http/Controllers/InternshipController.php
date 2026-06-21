<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Application;
use Illuminate\Support\Facades\Schema;

class InternshipController extends Controller
{
    /**
    
    
 * Show the application form for a specific internship.
 */
 public function applyForm($id)
 {
    // Find the internship or throw a 404 error if it doesn't exist
    $internship = \App\Models\Internship::findOrFail($id);
    
    // Return your application form blade view (e.g., resources/views/internships/apply.blade.php)
    // Pass the internship variable to the view
    return view('internships.apply', compact('internship'));
 }  
    public function index()
    {
        // Fetch postings along with their associated applications relationship
        $postings = Internship::with('applications')->get();
        return view('welcome', compact('postings'));
    }

    /**
     * Process and store an incoming internship application.
     */
    public function submitApplication(Request $request, $internshipId)
    {
        // 1. Validate form fields according to your submitted form body keys
        $request->validate([
            'applicant_name'  => 'required|string|max:255',
            'applicant_email' => 'required|email|max:255',
            'resume_link'     => 'nullable|string',
            'cover_letter'    => 'nullable|string',
        ]);

        // 2. Initialize and save the record to the applications table
        $application = new Application();
        $application->internship_id = $internshipId;
        
        // Check and map user_id safely if the column exists in your table layout
        if (Schema::hasColumn('applications', 'user_id')) {
            $application->user_id = auth()->id();
        }
        
        // DIRECT DATABASE MAPPING: Save form data directly to your specific database columns
        $application->applicant_name  = $request->input('applicant_name');
        $application->applicant_email = $request->input('applicant_email');
        
        // Handle flexible naming conventions for the resume file/link field safely
        if (Schema::hasColumn('applications', 'resume_link')) {
            $application->resume_link = $request->input('resume_link');
        } elseif (Schema::hasColumn('applications', 'resume_path')) {
            $application->resume_path = $request->input('resume_link');
        }

        if (Schema::hasColumn('applications', 'cover_letter')) {
            $application->cover_letter = $request->input('cover_letter');
        }

        $application->save();

        // 3. Redirect smoothly back to home directory with a status message
        return redirect('/')->with('success', 'Application registered successfully!');
    }
}