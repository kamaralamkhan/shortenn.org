<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Link::with('user');

        if (!auth()->user()->isAdmin()) {
            $query->where('user_id', auth()->id());
        }

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('code', 'like', "%{$search}%")
                  ->orWhere('url', 'like', "%{$search}%")
                  ->orWhere('note', 'like', "%{$search}%");
            });
        }

        $links = $query->orderBy('created_at', 'desc')->paginate(25);

        return view('dashboard', compact('links'));
    }

    public function toggle(Link $link)
    {
        if (!auth()->user()->isAdmin() && $link->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $link->is_active = !$link->is_active;
        $link->save();

        return redirect()->back()->with('success', 'Link status updated successfully!');
    }

    public function destroy(Link $link)
    {
        if (!auth()->user()->isAdmin() && $link->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $link->delete();

        return redirect()->back()->with('success', 'Link deleted successfully!');
    }

    public function export()
    {
        $query = Link::with('user');

        if (!auth()->user()->isAdmin()) {
            $query->where('user_id', auth()->id());
        }

        $links = $query->orderBy('created_at', 'desc')->get();

        $filename = 'links_export_' . date('Y-m-d_H-i-s') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($links) {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['ID', 'Short Code', 'Original URL', 'Clicks', 'Unique Visitors', 'Created At', 'Expires At', 'Max Clicks', 'Status', 'Note']);

            foreach ($links as $link) {
                fputcsv($file, [
                    $link->id,
                    $link->code,
                    $link->url,
                    $link->clicks,
                    $link->uniqueVisitors(),
                    $link->created_at->format('Y-m-d H:i:s'),
                    $link->expires_at ? $link->expires_at->format('Y-m-d H:i:s') : 'Never',
                    $link->max_clicks ?? 'Unlimited',
                    $link->is_active ? 'Active' : 'Disabled',
                    $link->note,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
