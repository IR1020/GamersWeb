<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class SearchReportController extends Controller
{
    public function get(Request $request)
    {
        $search_word = $request->input('search_word');

        $search_results = Report::with('user')->where('title', 'like', '%' . $search_word . '%')->orWhere('content', 'like', '%' . $search_word . '%')->paginate(15);

        return view('search-report-result', compact('search_results'));
    }
}
