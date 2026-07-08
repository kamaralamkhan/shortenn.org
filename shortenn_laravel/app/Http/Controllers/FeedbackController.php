<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
            'name' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:150',
            'subject' => 'nullable|string|max:150',
        ]);

        $messageContent = $request->input('message');
        $name = $request->input('name', 'Anonymous User');
        $email = $request->input('email', 'No Email Provided');
        $subject = $request->input('subject', 'New Feedback from Shortenn User');
        
        $fullMessage = "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\n\nMessage:\n{$messageContent}";
        
        try {
            Mail::raw($fullMessage, function ($message) use ($subject, $email) {
                $message->to('support@shortenn.org')
                        ->subject("Shortenn Contact: " . $subject);
                
                if ($email !== 'No Email Provided') {
                    $message->replyTo($email);
                }
            });
            
            return response()->json(['success' => true, 'message' => 'Thank you for your feedback!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to send feedback.'], 500);
        }
    }
}
