<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelcheckController extends Controller
{
    public function modelCheck(Request $request)
    {
        $modelname = $request->modelName;
        $filename = app_path('Models/'.$modelname.'.php');
        if (file_exists($filename)) {
            return [
                'status' => false,
                'message' => 'Model name already exists',
            ];
        }
        return [
                'status' => true,
                'message' => 'success',
            ];

    
    }
}
