<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormationRequest;
use App\Http\Requests\UpdateFormationRequest;
use App\Models\Formation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class FormationController extends Controller
{
    /**
     * Display a listing of all formations using the YajraBox Datatable
     */
    public function index(Request $request)
    {
        if($request->ajax()) {

            $formations = Formation::latest()->get();

            return DataTables::make($formations)
                ->addIndexColumn()
//                ->setRowId('id')
                ->addColumn('action', function ($row){
                    $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-warning btn-rounded waves-effect waves-light editFormation"><i class="bx bx-error font-size-16 align-middle me-2"></i>Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-id="'.$row->id.'" class="delete btn btn-danger btn-rounded waves-effect waves-light deleteFormation"><i class="bx bx-block font-size-16 align-middle me-2"></i>Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.formation.index-formation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormationRequest $request)
    {
        Formation::updateOrCreate([
            'id' => $request->formation_id
        ],
        [
            'title' => $request->title,
            'description' => $request->description,
            'level' => $request->level,
            'duration' => $request->duration
        ]);
        return response()->json(['success'=>'Formation saved successfully.']);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formation = Formation::find($id);
        return response()->json($formation);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Formation::find($id)->delete();
        return response()->json(['success'=> 'Formatin deleted successfully!']);
    }
}
