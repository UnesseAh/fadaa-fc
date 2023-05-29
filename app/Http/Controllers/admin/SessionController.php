<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSessionRequest;
use App\Http\Requests\UpdateSessionRequest;
use App\Models\Formation;
use App\Models\Session;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            $sessions = Session::with('formation')->get();
//            return $session[0]->formation->title;


            return DataTables::make($sessions)
                ->addIndexColumn()
                ->addColumn('action', function ($row){
                    $btn = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-warning btn-rounded waves-effect waves-light editSession"><i class="bx bx-edit font-size-16 align-middle me-2"></i>Edit</a>';

                    $btn = $btn.' <a href="javascript:void(0)" data-id="'.$row->id.'" class="delete btn btn-danger btn-rounded waves-effect waves-light deleteSession"><i class="bx bx-trash font-size-16 align-middle me-2"></i>Delete</a>';
                    return $btn;
                })
                // <span class="badge rounded-pill bg-primary">Primary</span>
                ->editColumn('status', function($row){
                    if($row->status != 'Publier')  {
                        return '<span class="badge rounded-pill badge-soft-danger p-2">'.$row->status.'</span>';
                    }else return '<span class="badge rounded-pill badge-soft-success p-2">'.$row->status.'</span>';
                })
                ->editColumn('amount', '{{$amount}} <span class="mx-2 badge rounded-pill bg-primary">MAD</span>')
                // <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Tooltip on bottom" aria-describedby="tooltip425626">
                //                                                Tooltip on bottom
                //                                            </button>

                ->editColumn('formation_id', function($row){
//                    return $row->formation->title;
                    return '<span data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Tooltip on bottom" aria-describedby="tooltip731804">
                                                '. str::limit($row->formation->title, 40). '</span>';
                })
                ->rawColumns(['action','status', 'amount', 'formation_id'])
                ->toJson();
        }
        return view('admin.formation.index-session');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSessionRequest $request)
    {
        Session::updateOrCreate(
            ['id' => $request->session_id],
            [
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'amount' => $request->amount,
                'formation_id' => $request->formation_id,
                'promotion' => $request->promotion,
                'status' => $request->status,
            ]
        );
        return response()->json(['success'=> 'Sessions saved successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Session $session)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $session = Session::with('formation')->find($id);
        return response()->json($session);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSessionRequest $request, Session $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Session::find($id)->delete();
        return response()->json(['success'=>'Session deleted successfully!']);
    }


}
