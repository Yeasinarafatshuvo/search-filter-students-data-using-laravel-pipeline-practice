<?php

namespace App\Http\Controllers;

use App\Filters\Components\StudentFilter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SearchController extends Controller
{
    public function search_data()
    {

        $queryBuilder = DB::table('students');
        $queryParams = [
            'gender' => 'Male',
            'age' => 9
        ];

        $getSearchStudents = resolve(StudentFilter::class)->getResults([
            'builder' => $queryBuilder,
            'params' => $queryParams
        ]);

        dd($getSearchStudents);
    }
}
