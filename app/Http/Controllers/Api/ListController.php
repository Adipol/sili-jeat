<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index()
    {
        $lists = DB::table('controls')->select('id_pep', 'id_all', 'type', 'code', 'name_one', 'name_two', 'last_name_one', 'last_name_two', 'type_document', 'nro_document', 'extension', 'country_abbreviation', 'country', 'department', 'province', 'type_pep', 'position_country', 'position', 'entity', 'management', 'justification', 'report_date', 'management_all', 'entity_all', 'justification_all', 'type_all', 'type_fam', 'detail', 'profession', 'id_register')->where('report_date', '=', DB::raw("(select max(report_date) from controls c)"))->get();

        return response()->json([
            'lists' => $lists
        ]);
    }
}
