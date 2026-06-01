<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Internship; // Make sure to import your model here!

class InternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample 1: Web Developer
        Internship::create([
            'title' => 'Frontend React Developer Intern',
            'company' => 'Kathmandu Tech Solutions',
            'location' => 'Kupondole, Lalitpur',
            'description' => 'We are looking for a passionate frontend intern who understands HTML, CSS, and basic modern React.js. You will work on real client dashboards and UI optimization layouts.',
        ]);

        // Sample 2: Laravel Developer
        Internship::create([
            'title' => 'Backend Laravel Developer Intern',
            'company' => 'Himalayan Digital Agency',
            'location' => 'Tinkune, Kathmandu',
            'description' => 'Join our backend development engine! You will assist mid-level engineers in building RESTful APIs, configuring database schemas, and integrating local payment gateways like eSewa and Khalti.',
        ]);

        // Sample 3: QA Engineer
        Internship::create([
            'title' => 'Quality Assurance (QA) Intern',
            'company' => 'Deerwalk Outsourcing',
            'location' => 'Sifale, Kathmandu',
            'description' => 'Great entry-level opening for someone meticulous. You will learn manual testing procedures, document bugs, map test cases, and coordinate closely with deployment product teams.',
        ]);
    }
}