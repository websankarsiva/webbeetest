<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class MenuController extends BaseController
{
    /**
     * SAMPLE RESPONSE:
     *
     *
     */

    public function getMenuItems() {
        $items = DB::table('menu_items')->get();

        return $items->toArray();        
        //throw new \Exception('implement in coding task 3');
    }
}
