<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\ClickLog;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirect(Request $request, $code)
    {
        $link = Link::where('code', $code)->first();

        if (!$link) {
            abort(404, 'Short link not found');
        }

        if (!$link->is_active) {
            return view('errors.link-disabled');
        }

        if ($link->isExpired()) {
            return view('errors.link-expired');
        }

        if ($link->hasReachedMaxClicks()) {
            return view('errors.link-max-clicks');
        }

        $link->increment('clicks');

        ClickLog::create([
            'link_id' => $link->id,
            'clicked_at' => now(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'referer' => $request->header('referer'),
        ]);

        return redirect($link->url);
    }
}
