<?php

namespace App\Http\Controllers;

use App\Models\ListSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SubjectListController extends Controller
{
    public function mainpage()
    {
        return view('mainpage', ['listsubjects' => ListSubject::all()]);

    }
    public function saveSubject(Request $request)
    {
        echo json_encode($request->all());
        $newSubjectItem = new ListSubject();
        $newSubjectItem->title= $request->subtitle;
        $newSubjectItem->description = $request->subdesc;
        $newSubjectItem->price = $request->subprice;
        $newSubjectItem->hours= $request->subhours;
        $newSubjectItem  ->save();
        return redirect('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
    }
}