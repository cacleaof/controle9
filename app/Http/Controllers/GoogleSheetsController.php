<?php

namespace App\Http\Controllers;

use Google\Service\Sheets;
use Illuminate\Http\Request;
use App\Http\Services\GoogleSheetsServices;

class GoogleSheetsController extends Controller
{
    public function sheetOperation(Request $request)
    {
        // (new GoogleSheetsServices())->writeSheet([
        //     [
        //         'carlos leao',
        //         'cacleaof@gmail.com'
        //     ]
        //     ]);
        $data = (new GoogleSheetsServices() )->readSheet();

        return response()->json($data);

    }

    
}
