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
     public function edit(Internship $internship)
     {
    // Returns your editing view blade file (e.g., resources/views/internships/edit.blade.php)
     return view('internships.edit', compact('internship'));
     }

/**
 * Save the updated changes back to the database.
 */
     public function update(Request $request, Internship $internship)
    {
     $request->validate([
        'title' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'description' => 'required|string',
     ]);

     $internship->update([
        'title' => $request->input('title'),
        'company' => $request->input('company'),
        'location' => $request->input('location'),
        'description' => $request->input('description'),
     ]);

     return redirect('/')->with('success', 'Internship updated successfully!');
    }
    /**
 * Show the creation form layout for an internship opening.
 */
public function create()
{
    // Returns resources/views/internships/create.blade.php
    return view('internships.create');
}

/**
 * Store a newly created internship offer inside the database.
 */
public function storeNewOffer(Request $request)
{
    // Validate that required fields are present
    $request->validate([
        'title'       => 'required|string|max:255',
        'company'     => 'required|string|max:255',
        'location'    => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // Create and save to your internships table
    $internship = new Internship();
    $internship->title       = $request->input('title');
    $internship->company     = $request->input('company');
    $internship->location    = $request->input('location');
    $internship->description = $request->input('description');
    $internship->save();

    return redirect('/')->with('success', 'New internship position posted successfully!');
 }
}