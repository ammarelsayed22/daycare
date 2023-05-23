<?php

namespace App\Http\Controllers;
use App\Models\Dad;
use App\Models\child;
use App\Models\Teacher;
use App\Models\Classroom;
use App\Models\Daycare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Childcontroller extends Controller
{

   public function index(Daycare $daycare)
{
       $daycareId = auth()->user()->daycare_id;
        $childs= child::where('daycare_id' , $daycareId)->get();
    return view('backend.student.index', compact('childs'));
}


   public function create()
{
    $daycares = Daycare::all();
    $dads = Dad::all();
    $teachers = Teacher::all();
    $classrooms = Classroom::all();

    return view('backend.student.create', compact('daycares', 'dads', 'teachers', 'classrooms'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'daycare_id' => 'required|exists:daycares,id',
        'dad_id' => 'required|exists:dads,id',
        'teacher_id' => 'required|exists:teachers,id',
        'classroom_id' => 'required|exists:classrooms,id',
    ]);

    $imageFile = $request->file('image');
$name_gen = hexdec(uniqid());
$img_ext = strtolower($imageFile->getClientOriginalExtension());
$img_name = $name_gen . '.' . $img_ext;

$upload_location = 'assets/img/child/';
$imageFile->move($upload_location, $img_name);
    

    $child =child::create([
        'name' => $request->name,
        'image' => $img_name,
        'daycare_id' => $request->daycare_id,
        'dad_id' => $request->dad_id,
        'teacher_id' => $request->teacher_id,
        'classroom_id' => $request->classroom_id,
    ]);

    return redirect()->route('auth.students.index', $child->id)->with('success', 'Student created successfully');
}

public function update(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'daycare_id' => 'required|exists:daycares,id',
        'dad_id' => 'required|exists:dads,id',
        'teacher_id' => 'required|exists:teachers,id',
        'classroom_id' => 'required|exists:classrooms,id',
    ]);


    $child = child::findOrFail($id);

    if ($request->hasFile('image')) {

        if ($child->image) {
            Storage::disk('public')->delete($child->image);
        }
        $imagePath = $request->file('image')->store('images', 'public');
        $validatedData['image'] = $imagePath;
    }

    $child->update($validatedData);

    return redirect()->route('auth.students.index', $child->id)->with('success', 'Student updated successfully');
}

public function destroy($id)
{

    $child = child::findOrFail($id);


    $child->delete();


    return redirect()->route('auth.students.index')->with('success', 'Student deleted successfully');
}

}
