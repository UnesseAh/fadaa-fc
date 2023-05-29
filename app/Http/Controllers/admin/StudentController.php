<?php

namespace App\Http\Controllers\admin;

use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('etudiant.etudiant');
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
    public function store(StoreStudentRequest $request): JsonResponse
    {

        try {
            $name = '';
            $file = $request->img;
            $name = $file->getClientOriginalName().time();
            $file->move(public_path('assets/images/etudiants'), $name);
            Student::create([
                'first_name_ar' => $request->first_name_ar,
                'first_name_fr' => $request->first_name_fr,
                'last_name_ar' => $request->last_name_ar,
                'last_name_fr' => $request->last_name_fr,
                'cin' => $request->cin,
                'email' => $request->email,
                'img' => 'assets/images/etudiants/' . $name,
                'telephone1' => $request->telephone1,
                'telephone2' => $request->telephone2,
            ]);

            return response()->json(['success' => 'storeed', 200]);
        } catch (\Throwable $e) {


            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id): JsonResponse
    {
        $student = Student::find($id);

        if ($student) {
            return response()->json($student);
        } else {
            return response()->json(['error' => 'Student not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, $id): JsonResponse
    {
        try {
            $image = $request->image;

            if ($request->hasFile('image')) {
                $file = $request->image;
                $image = $file->getClientOriginalName();
                $file->move(public_path('assets/images/etudiants'), $image);
                $image = 'assets/images/etudiants/' . $image;
            }else{
                $name = '';
                $file = $request->img;
                $name = $file->getClientOriginalName().time();
                $file->move(public_path('assets/images/etudiants'), $name);
                $image = 'assets/images/etudiants/' . $name;
            }

            $student = Student::find($id);

            $student->update([
                'first_name_ar' => $request->first_name_ar,
                'first_name_fr' => $request->first_name_fr,
                'last_name_ar' => $request->last_name_ar,
                'last_name_fr' => $request->last_name_fr,
                'cin' => $request->cin,
                'email' => $request->email,
                'img' => $image,
                'telephone1' => $request->telephone1,
                'telephone2' => $request->telephone2,
            ]);

            return response()->json(['success' => 'Student Updated Successfully', 200]);

        } catch (\Throwable $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): JsonResponse
    {
        try {
            $student = Student::find($id);

            $student->delete();

            return response()->json(['success' => 'Student Deleted Successfully', 200]);
        } catch (\Throwable $e) {


            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getStudents(): JsonResponse
    {
        try {
            $students = Student::all();
            return response()->json($students);
        } catch (\Throwable $e) {

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
