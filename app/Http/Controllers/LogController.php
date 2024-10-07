<?php

namespace App\Http\Controllers;

use App\Events\asynchoronousEvent;
use App\Events\DemoEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Jobs\AsyncLogJob;
use Carbon\Carbon;

class LogController extends Controller
{
    // Synchronous logging method
    public function syncLog()
    {
        Log::info('Synchronous Log: ' ."Started");
        $message = 'Synchronous  event dispatch: ' ."Started" ;
        DemoEvent::dispatch($message);
        Log::info('Synchronous Log: ' ."Completed");
        return response()->json(['status' => 'success', 'message' => 'Synchronous log completed.']);
    }

    // Asynchronous logging method
    public function asyncLog()
    {
        Log::info('Asynchronous Log: ' ."Started");
        $message = 'Asynchronous event dispatch: ' ."Started";
        asynchoronousEvent::dispatch($message);
        Log::info('Asynchronous Log: ' ."Completed");
        
        return response()->json(['status' => 'success', 'message' => 'Asynchronous log job dispatched.']);
    }
}

