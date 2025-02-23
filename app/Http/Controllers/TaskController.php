<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        
    }
}
