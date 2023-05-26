<?php

namespace App\Http\Controllers;

use App\Models\Dad;
use App\Models\Daycare;
use App\Models\Teacher;
use App\Models\File;
use App\Models\Event;
use App\Models\Child;
use App\Models\Gallery;
use App\Models\Comment;
use App\Models\Timetable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DadController extends Controller
{

 public function create()
{
    return view('backend.dad.add_dad');
}

public function store(Request $request)
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


    return redirect()->route('dashboard')->with('success', 'dad added successfully.');
}

 public function index(Daycare $daycare)
{
       $daycareId = Auth::guard('dad')->user()->daycare_id;
         $teachers = Teacher::where('daycare_id' , $daycareId)->get();
    $gallerys =Gallery::where('daycare_id' , $daycareId)->get();
    $comments = Comment::where('daycare_id' , $daycareId)->get();
     $dads = Dad::where('daycare_id' , $daycareId)->get();


           return view('backend.dad.dashboard', compact('dads','teachers','gallerys','comments'));
    }

public function edit($id)
{
    $dad = Dad::findOrFail($id);
    return view('backend.dad.editdad', compact('dad'));
}
public function update(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:dads,email,'.$id,
        'password' => 'nullable|string|unique:dads,password,'.$id,
        'image' => 'nullable|image',
        'phone_number' => 'nullable|string',
        'daycare_id' => 'required|exists:daycares,id',
    ]);

    // Find the Dad
    $dad = Dad::findOrFail($id);

    // Update the Dad's properties
    $dad->name = $validatedData['name'];
    $dad->email = $validatedData['email'];
    if (!empty($validatedData['password'])) {
        $dad->password = bcrypt($validatedData['password']);
    }
    $dad->image = $validatedData['image'];
    $dad->phone_number = $validatedData['phone_number'];
    $dad->daycare_id = $validatedData['daycare_id'];
    $dad->save();

    // Redirect the user to a page showing the updated Dad or any other appropriate response
    return redirect()->route('dads.index')->with('success', 'Dad updated successfully');
}

public function show($id)
{
    $dad = Dad::findOrFail($id);
    return view('backend.dad.show', compact('dad'));
}
public function destroy($id)
{
    // Find the Dad with the specified ID
    $dad = Dad::findOrFail($id);

    // Delete the Dad
    $dad->delete();

    // Redirect the user to a page or any other appropriate response
    return redirect()->route('auth.dads.index')->with('success', 'Dad deleted successfully');
}
//////////////////file///////////////////
 public function indexfile()
    {
        $files = File::all();

        return view('backend.dad.indexfile', [
            'files' => $files
        ]);
    }

     public function showfile($filename, Daycare $daycare)
{
    $daycareId = Auth::guard('dad')->user()->daycare_id;
    $file = File::where('daycare_id', $daycareId)->where('name', $filename)->firstOrFail();
    $filePath = public_path('file/' . $filename);

    return response()->file($filePath, [
        'Content-Type' => $file->type,
        'Content-Length' => $file->size,
    ]);
}


 public function downloadfile($filename, Daycare $daycare)
{
    $daycareId = Auth::guard('dad')->user()->daycare_id;
    $file = File::where('daycare_id', $daycareId)->where('name', $filename)->firstOrFail();
    $filePath = public_path('file/' . $filename);

    return response()->download($filePath, $file->name, [
        'Content-Type' => $file->type,
        'Content-Length' => $file->size,
    ]);

}
 public function indexgallery( Daycare $daycare)
    {
         $daycareId = Auth::guard('dad')->user()->daycare_id;
         $galleries= Gallery::where('daycare_id' , $daycareId)->get();

        return view('backend.dad.indexgallery', compact('galleries'));
    }
     public function indextimetable(Daycare $daycare)

{                   $daycareId = Auth::guard('dad')->user()->daycare_id;
        $timetableEntries =Timetable::where('daycare_id' , $daycareId)->get();

    return view('backend.dad.indextimetable', compact('timetableEntries'));
}
public function indexchild(Daycare $daycare, Dad $dadId)
{
    $daycareId = Auth::guard('dad')->user()->daycare_id;
    $dadId = Auth::guard('dad')->user()->id;
    $childs = Child::where('daycare_id', $daycareId)
                  ->where('dad_id', $dadId)
                  ->firstOrFail();

    return view('backend.dad.indexchild', compact('childs'));
}
 public function indexpayment()

{
    return view('backend.dad.payment');
}
 public function indexevent(Daycare $daycare)

    {
        $daycareId = Auth::guard('dad')->user()->daycare_id;
          $events =Event::where('daycare_id' , $daycareId)->get();


        return view('backend.dad.event', compact('events'));
    }

}



