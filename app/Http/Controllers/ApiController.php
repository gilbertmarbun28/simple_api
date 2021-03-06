<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class ApiController extends Controller
{
    public function getAllStudents() {
        $students = Mahasiswa::get()->toJson(JSON_PRETTY_PRINT);
        return response($students, 200);
    }
  
      public function createStudent(Request $request) {
        $student = new Mahasiswa;
        $student->nama = $request->nama;
        $student->jurusan = $request->jurusan;
        $student->save();

        return response()->json([
            "message" => "student record created"
        ], 201);
      }
  
      public function getStudent($id) {
        if (Mahasiswa::where('id', $id)->exists()) {
            $student = Mahasiswa::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($student, 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
      }
  
      public function updateStudent(Request $request, $id) {
        if (Mahasiswa::where('id', $id)->exists()) {
            $student = Mahasiswa::find($id);
    
            $student->name = is_null($request->name) ? $student->name : $request->name;
            $student->course = is_null($request->course) ? $student->course : $request->course;
            $student->save();
    
            return response()->json([
              "message" => "records updated successfully"
            ], 200);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
      }
  
      public function deleteStudent ($id) {
        if(Mahasiswa::where('id', $id)->exists()) {
            $student = Mahasiswa::find($id);
            $student->delete();
    
            return response()->json([
              "message" => "records deleted"
            ], 202);
          } else {
            return response()->json([
              "message" => "Student not found"
            ], 404);
          }
      }
}
