<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Daycare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{
    public function index(Daycare $daycare)
    {
        $daycareId = Auth::guard('teacher')->user()->daycare_id;
        $teachers = Teacher::where('daycare_id' , $daycareId)->get();
        $classrooms = Classroom::where('daycare_id' , $daycareId)->get();
        return view('backend.teacher.indexclassroom', compact('classrooms','teachers'));
    }

    public function create(Daycare $daycare)
    {

     $daycareId = Auth::guard('teacher')->user()->daycare_id;
         $teachers = Teacher::where('daycare_id' , $daycareId)->get();
        return view('backend.teacher.createclassroom');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'daycare_id' => 'required|exists:daycares,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        // Create a new classroom
        $classroom = new Classroom();
        $classroom->name = $validatedData['name'];
        $classroom->daycare_id = $validatedData['daycare_id'];
        $classroom->teacher_id = $validatedData['teacher_id'];
        $classroom->save();

        // Redirect the user to a page showing the created classroom or any other appropriate response
        return redirect()->route('teacher.classrooms.index', $classroom->id)->with('success', 'Classroom created successfully');
    }


    public function edit($id)
    {
        $classroom = Classroom::findOrFail($id);
        return view('classrooms.edit', compact('classroom'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'daycare_id' => 'required|exists:daycares,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        // Find the classroom
        $classroom = Classroom::findOrFail($id);

        // Update the classroom's properties
        $classroom->name = $validatedData['name'];
        $classroom->daycare_id = $validatedData['daycare_id'];
        $classroom->teacher_id = $validatedData['teacher_id'];
        $classroom->save();

        return redirect()->route('teacher.classrooms.index', $classroom->id)->with('success', 'Classroom updated successfully');
    }

    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();

        // Redirect the user to a page or any other appropriate response
        return redirect()->route('teacher.classrooms.index')->with('success', 'Classroom deleted successfully');
    }
}
