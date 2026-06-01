<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    // READ: Display all internships (Landing Page)
    public function index()
    {
        $postings = Internship::latest()->get();
        return view('welcome', compact('postings'));
    }

    // CREATE: Show the form to add a new internship
    public function create()
    {
        return view('internships.create');
    }

    // CREATE: Store the form data into the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'company' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required',
        ]);

        Internship::create($validated);

        return redirect('/')->with('success', 'Internship vacancy posted successfully!');
    }

    // UPDATE: Show the form to edit an existing internship
    public function edit(Internship $internship)
    {
        return view('internships.edit', compact('internship'));
    }

    // UPDATE: Save the updated changes back to the database
    public function update(Request $request, Internship $internship)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'company' => 'required|max:255',
            'location' => 'required|max:255',
            'description' => 'required',
        ]);

        $internship->update($validated);

        return redirect('/')->with('success', 'Internship updated successfully!');
    }

    // DELETE: Remove an internship from the database
    public function destroy(Internship $internship)
    {
        $internship->delete();
        return redirect('/')->with('success', 'Internship vacancy removed successfully.');
    }
    // Show the application form page
public function applyForm(Internship $internship)
{
    return view('internships.apply', compact('internship'));
}

// Save the application data
public function submitApplication(Request $request, Internship $internship)
{
    $validated = $request->validate([
        'applicant_name' => 'required|max:255',
        'applicant_email' => 'required|email|max:255',
        'cover_letter' => 'required',
        'resume_link' => 'required|url',
    ]);

    // Add the internship ID automatically
    $validated['internship_id'] = $internship->id;

    \App\Models\Application::create($validated);

    return redirect('/')->with('success', 'Your application for ' . $internship->title . ' was submitted successfully!');
}
}