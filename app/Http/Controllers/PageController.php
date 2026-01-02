<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Display the home page
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the events page
     */
    public function events()
    {
        return view('pages.events');
    }

    /**
     * Display the community page
     */
    public function community()
    {
        return view('pages.community');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission
     */
    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Store the contact message in the database or send via email
        // For now, we'll just redirect with a success message
        // In production, you would want to:
        // 1. Store in database
        // 2. Send notification email
        // 3. Integrate with a CRM or helpdesk

        // Log the contact submission (you can implement proper storage later)
        \Log::info('Contact Form Submission', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'timestamp' => now(),
        ]);

        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We\'ll get back to you within 24-48 hours.');
    }

    /**
     * Display the privacy policy page
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Display the terms of service page
     */
    public function terms()
    {
        return view('pages.terms');
    }
}
