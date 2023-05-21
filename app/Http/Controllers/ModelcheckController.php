<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ModelcheckController extends Controller
{
    public function modelCheck(Request $request)
    {
        $modelname = $request->modelName;
        $directory = app_path('Models/');
        $list = File::directories($directory);
        $filename = app_path('Models/'.$modelname.'.php');
        $filename1 = app_path($modelname.'.php');
        if (count($list) > 0) {
            $val = 0;
            foreach ($list as $folder) {
                $filename2 = $folder.'/'.$modelname.'.php';
                if (file_exists($filename) || file_exists($filename1) || file_exists($filename2)) {
                    $val++;
                }
            }
            if ($val > 0) {
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
        if (file_exists($filename) || file_exists($filename1)) {
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
