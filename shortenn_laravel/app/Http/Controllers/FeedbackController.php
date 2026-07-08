<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $messageContent = $request->input('message');
        
        try {
            Mail::raw($messageContent, function ($message) {
                $message->to('support@shortenn.org')
                        ->subject('New Feedback from Shortenn User');
            });
            
            return response()->json(['success' => true, 'message' => 'Thank you for your feedback!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to send feedback.'], 500);
        }
    }
}
