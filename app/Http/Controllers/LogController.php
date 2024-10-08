<?php

namespace App\Http\Controllers;

use App\Events\asynchoronousEvent;
use App\Events\DemoEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Jobs\AsyncLogJob;
use App\Models\Post;
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
    public function store(){
        $post = new Post();
        $post->title = 'test';
        $post->save();
        return "Stored post successfully";
    }

    public function updated(){
        $post = Post::first();
        $post->title = 'test-1';
        $post->save();
        return "Updated post successfully";
    }
    public function deleted(){  
        $post = Post::first();
        $post->delete();
        return "Deleted post successfully";
    }
}

