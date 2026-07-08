<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'urls' => 'required|string',
        ]);

        $lines = explode("\n", $request->urls);
        $created = [];
        $errors = [];
        $guestUser = User::where('role', 'guest')->first();
        $userId = auth()->check() ? auth()->id() : $guestUser->id;

        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;

            $parts = array_map('trim', explode('|', $line));
            $url = $parts[0] ?? '';
            $alias = $parts[1] ?? '';
            $expiry = $parts[2] ?? '';
            $maxClicks = $parts[3] ?? '';

            if (empty($url)) {
                $errors[] = "Empty URL in line: $line";
                continue;
            }

            if (!preg_match('/^https?:\/\//', $url)) {
                $url = 'http://' . $url;
            }

            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                $errors[] = "Invalid URL: $url";
                continue;
            }

            $code = $alias;
            if (empty($code)) {
                $code = $this->generateUniqueCode();
            } else {
                if (!preg_match('/^[A-Za-z0-9_-]{3,30}$/', $code)) {
                    $errors[] = "Invalid alias '$code'. Must be 3-30 chars, alphanumeric with dash/underscore only.";
                    continue;
                }
                if (Link::where('code', $code)->exists()) {
                    $errors[] = "Alias '$code' already exists.";
                    continue;
                }
            }

            $expiresAt = null;
            if (!empty($expiry)) {
                try {
                    $expiresAt = \Carbon\Carbon::parse($expiry);
                } catch (\Exception $e) {
                    $errors[] = "Invalid expiry date for $code: $expiry";
                    continue;
                }
            }

            $maxClicksVal = null;
            if (!empty($maxClicks) && is_numeric($maxClicks)) {
                $maxClicksVal = (int)$maxClicks;
            }

            $link = Link::create([
                'user_id' => $userId,
                'code' => $code,
                'url' => $url,
                'expires_at' => $expiresAt,
                'max_clicks' => $maxClicksVal,
            ]);

            $created[] = $link;
        }

        if (count($created) > 0) {
            return redirect()->back()->with('success', count($created) . ' link(s) created successfully!')
                ->with('created_links', $created)
                ->with('errors', $errors);
        }

        return redirect()->back()->with('error', 'No valid links created.')->with('errors', $errors);
    }

    private function generateUniqueCode($length = 6)
    {
        do {
            $code = Str::random($length);
        } while (Link::where('code', $code)->exists());

        return $code;
    }

    public function about()
    {
        return view('pages.about');
    }

    public function features()
    {
        return view('pages.features');
    }

    public function howItWorks()
    {
        return view('pages.how-it-works');
    }

    public function useCases()
    {
        return view('pages.use-cases');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function resources()
    {
        return view('pages.resources');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function terms()
    {
        return view('pages.terms');
    }

    public function guideShortlinkSafety()
    {
        return view('pages.guide-shortlink-safety');
    }
}
