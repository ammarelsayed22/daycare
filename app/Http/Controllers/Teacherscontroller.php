<?php

namespace App\Http\Controllers;
use App\Models\File;
use App\Models\Gallery;
use App\Models\Timetable;
use App\Models\Daycare;
use App\Models\Child;
use App\Models\Dad;
use App\Models\Event;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\comment;


use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;


class Teacherscontroller extends Controller
{
    /////////////////FILE///////////////
     public function index( Daycare $daycare)
    {
        $daycareId = Auth::guard('teacher')->user()->daycare_id;
        $files = File::where('daycare_id' , $daycareId)->get();

        return view('backend.teacher.indexfile', [
            'files' => $files
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teacher.createfile');
    }


    public function store(Request $request)
    {
        $fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();
         $daycare_id =$request->daycare_id;

        $request->file->move(public_path('file'), $fileName);

        File::create([
            'name' => $fileName,
            'type' => $type,
            'size' => $size,
            'daycare_id'=>$daycare_id,


        ]);

        return redirect()->route('teacher.files.index')->withSuccess(__('File added successfully.'));
    }
    public function show($filename, Daycare $daycare)
{
    $daycareId = auth()->user()->daycare_id;
    $file = File::where('daycare_id', $daycareId)->where('name', $filename)->firstOrFail();
    $filePath = public_path('file/' . $filename);

    return response()->file($filePath, [
        'Content-Type' => $file->type,
        'Content-Length' => $file->size,
    ]);
}

public function destroy($id)
    {
        $file = File::find($id);
        $file->delete();

        return redirect()->route('teacher.file.index');
    }
    public function download($filename ,Daycare $daycare)
{
     $daycareId = Auth::guard('teacher')->user()->daycare_id;
    $file = File::where('daycare_id', $daycareId)->where('name', $filename)->firstOrFail();
    $filePath = public_path('file/' . $filename);

    return response()->download($filePath, $file->name, [
        'Content-Type' => $file->type,
        'Content-Length' => $file->size,
    ]);
}

//////////////////GALLERY/////////////////////////
public function indexgallery(Daycare $daycare)
    {
          $daycareId = Auth::guard('teacher')->user()->daycare_id;
    $galleries =Gallery::where('daycare_id' , $daycareId)->get();
        return view('backend.teacher.indexgallery', compact('galleries'));
    }

    public function creategallery()
    {
        return view('backend.teacher.creategallery');
    }
    public function storegallery(Request $request)
    {
          $validatedData = $request->validate([
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
         'daycare_id' => 'required|exists:daycares,id',

    ]);
    $daycare_id = $request->daycare_id;
$imageFile = $request->file('image');
$name_gen = hexdec(uniqid());
$img_ext = strtolower($imageFile->getClientOriginalExtension());
$img_name = $name_gen . '.' . $img_ext;

$upload_location = 'assets/img/gallery/';
$imageFile->move($upload_location, $img_name);

$gallery = Gallery::create([
    'image' => $img_name,
    'daycare_id' => $daycare_id,
]);

return redirect()->route('teacher.galleries.index')->withSuccess('Image added successfully.');

}  public function destroygallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        $imagePath = public_path('images/' . $gallery->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $gallery->delete();

        return redirect()->route('auth.galleries.index')->withSuccess('Image deleted successfully.');
    }
    /////////////////////////TIMETABLE////////////////
    public function createtimetable()
    {
        return view('backend.teacher.createtimetable');
    }

    public function storetimetable(Request $request)
    {
        $request->validate([
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'room' => 'required',
            'teacher' => 'required',
            'subject' => 'required',
            'class' => 'required',
            'group' => 'required',
            'daycare_id' => 'required|exists:daycares,id',
        ]);

        Timetable::create($request->all());

        return redirect()->route('teacher.timetable.index')->with('success', 'Timetable entry added successfully.');
    }
    public function indextimetable(Daycare $daycare)

{                   $daycareId = Auth::guard('teacher')->user()->daycare_id;
        $timetableEntries =Timetable::where('daycare_id' , $daycareId)->get();

    return view('backend.teacher.indextimetable', compact('timetableEntries'));
}
/////////////////////child//////////////////

public function indexchild(Daycare $daycare)
{
        $daycareId = Auth::guard('teacher')->user()->daycare_id;
        $childs= child::where('daycare_id' , $daycareId)->get();
    return view('backend.teacher.indexstudent', compact('childs'));
}


   public function createchild()
{
    $daycares = Daycare::all();
    $dads = Dad::all();
    $teachers = Teacher::all();
    $classrooms = Classroom::all();

    return view('backend.teacher.createstudent', compact('daycares', 'dads', 'teachers', 'classrooms'));
}

public function storechild(Request $request)
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

    return redirect()->route('teacher.students.index', $child->id)->with('success', 'Student created successfully');
}

public function updatechild(Request $request, $id)
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

    return redirect()->route('teacher.students.index', $child->id)->with('success', 'Student updated successfully');
}

public function destroychild($id)
{

    $child = child::findOrFail($id);


    $child->delete();


    return redirect()->route('teacher.students.index')->with('success', 'Student deleted successfully');
}

////////////////parents///////////////////
public function createDad()
{
    return view('backend.teacher.add_dad');
}

public function storeDad(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:dads',
        'password' => 'required|string|unique:dads',
        'image' => 'nullable|image',
        'phone_number' => 'nullable|string',
        'daycare_id' => 'required|exists:daycares,id',
    ]);

    $name          = $request->name;
    $email         = $request->email;
    $phone_number  = $request->phone_number;
    $password      = Hash::make($request->password);
    $daycare_id    = $request->daycare_id;
    $imageFile = $request->file('image');
$name_gen = hexdec(uniqid());
$img_ext = strtolower($imageFile->getClientOriginalExtension());
$img_name = $name_gen . '.' . $img_ext;

$upload_location = 'assets/img/dads/';
$imageFile->move($upload_location, $img_name);
    $dad = Dad::create([
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'daycare_id' => $daycare_id,
         'phone_number' =>$phone_number,
        'image' => $img_name,
    ]);


    return redirect()->route('teacher.dads.index')->with('success', 'dad added successfully.');
}

 public function indexDad(Daycare $daycare)
{
      $daycareId = Auth::guard('teacher')->user()->daycare_id;
        $dads= Dad::where('daycare_id' , $daycareId)->get();

        return view('backend.teacher.indexdad', [
            'dads' => $dads
        ]);
    }

public function editDad($id)
{
    $dad = Dad::findOrFail($id);
    return view('backend.teacher.editdad', compact('dad'));
}
public function updateDad(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:dads,email,'.$id,
        'password' => 'nullable|string|unique:dads,password,'.$id,
        'image' => 'nullable|image',
        'phone_number' => 'nullable|string',
        'daycare_id' => 'required|exists:daycares,id',
    ]);

    $dad = Dad::findOrFail($id);

    $dad->name = $validatedData['name'];
    $dad->email = $validatedData['email'];
    if (!empty($validatedData['password'])) {
        $dad->password = bcrypt($validatedData['password']);
    }
    $dad->image = $validatedData['image'];
    $dad->phone_number = $validatedData['phone_number'];
    $dad->daycare_id = $validatedData['daycare_id'];
    $dad->save();

    return redirect()->route('teacher.dads.index')->with('success', 'Dad updated successfully');
}


public function destroyDad($id)
{
    $dad = Dad::findOrFail($id);

    $dad->delete();

    return redirect()->route('teacher.dads.index')->with('success', 'Dad deleted successfully');
}
//////////////COMMENT////////////////
public function indexcomment(Daycare $daycare)
    {
            $daycareId = Auth::guard('teacher')->user()->daycare_id;
        $comments= Comment::where('daycare_id' , $daycareId)->get();

        return view('backend.teacher.all_comments' , compact('comments'));
    }

      public function indexevent(Daycare $daycare)

    {
        $daycareId = Auth::guard('teacher')->user()->daycare_id;
          $events =Event::where('daycare_id' , $daycareId)->get();


        return view('backend.teacher.event', compact('events'));
    }

}


