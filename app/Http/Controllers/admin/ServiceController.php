<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('admin.formation.service');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.index-service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request) : JsonResponse
    {

        try {

            Service::create([
                'title_ar' => $request->title_ar,
                'title_fr' => $request->title_fr,
                'description_ar' => $request->description_ar,
                'description_fr' => $request->description_fr,
                'montant' => $request->montant,
                'status' => $request->status,
            ]);


            return response()->json(['success' => 'Service Added Successfully',200]);



        } catch (\Throwable $e) {



            return response()->json(['error' => $e->getMessage()], 500);

        }

    }




    /**
     * Display the specified resource.
     */
    public function show($id) : JsonResponse
    {
        $service=Service::find($id);


        if($service){
            return response()->json($service);
        }else{
            return response()->json(['error' => 'Service Not Found'],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request,$id) : JsonResponse
    {
        try {

            $service=Service::find($id);
            $service->update([
                'title_ar' => $request->title_ar,
                'title_fr' => $request->title_fr,
                'description_ar' => $request->description_ar,
                'description_fr' => $request->description_fr,
                'montant' => $request->montant,
                'status' => $request->status,
            ]);



            return response()->json(['success' => 'Service Updated Successfully',200]);
    }
        catch (\Throwable $e) {


            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : JsonResponse
    {
        try {

            $service=Service::find($id);
            $service->delete();



            return response()->json(['success' => 'Service Deleted Successfully',200]);
    }
        catch (\Throwable $e) {


            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function getServices(): JsonResponse
    {

        try{

            $services = Service::all()->map(function($service){
                return [
                    'id' => $service->id,
                    'title_ar' => $service->title_ar,
                    'title_fr' => $service->title_fr,
                    'description_ar' => $service->description_ar,
                    'description_fr' => $service->description_fr,
                    'montant' => $service->montant,
                    'status' => $service->status,
                    'created_at' => $service->created_at->diffForHumans(),
                ];
            });


            return response()->json($services);

        }
        catch (\Throwable $e) {


            return response()->json(['error' => $e->getMessage()], 500);

        }
    }

}
