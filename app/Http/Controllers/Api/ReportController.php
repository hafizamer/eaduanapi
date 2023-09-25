<?php

namespace App\Http\Controllers\Api;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return response()->json([
            'data' => \App\Models\Report::all(),
        ]);
    }

    public function store(Request $request)
    {
        Report::create([
            'user_id' => 1,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return response()->json([
            'message' => 'Report Created',
            'code' => 200,
        ]);
    }

    public function update(Request $request, Report $report)
    {
      $report->update([
           'title' => $request->title,
          'body' => $request->body,
        ]);

        // $id->update()

        return response()->json([
            'message' => 'Report',
            'code' => 200,
            'report' => $report
        ]);
    }
}
