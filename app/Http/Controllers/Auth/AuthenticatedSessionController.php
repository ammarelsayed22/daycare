<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\Teacher;
use App\Models\daycare;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Comment;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
 public function index(Daycare $daycare)
{
     $daycareId = auth()->user()->daycare_id;
        $teachers = Teacher::where('daycare_id' , $daycareId)->get();
    $gallerys =Gallery::where('daycare_id' , $daycareId)->get();
    $comments = Comment::where('daycare_id' , $daycareId)->get();



    return view('dashboard', compact('daycare','teachers','comments','gallerys'));
}







    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function createTeacher()
{
    return view('backend.teacher.add_teacher');
}

public function storeTeacher(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:teachers|max:255',
        'password' => 'required|string|min:8|max:255',
        'phone_number' => 'required|string|min:8|max:255',
        'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'daycare_id' => 'required|exists:daycares,id',
        'facebook' => 'nullable|string|max:255',
        'twitter' => 'nullable|string|max:255',
        'subject' => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
    ]);

    $name          = $request->name;
    $email         = $request->email;
    $password      = Hash::make($request->password);
    $daycare_id    = $request->daycare_id;
    $facebook      = $request->facebook;
    $twitter       = $request->twitter;
    $subject       = $request->subject;
    $phone_number       = $request->phone_number;
    $instagram     = $request->instagram;
     $imageFile = $request->file('image');
$name_gen = hexdec(uniqid());
$img_ext = strtolower($imageFile->getClientOriginalExtension());
$img_name = $name_gen . '.' . $img_ext;

$upload_location = 'assets/img/teacher/';
$imageFile->move($upload_location, $img_name);


    $teacher = Teacher::create([
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'daycare_id' => $daycare_id,
        'facebook' => $facebook,
        'twitter' => $twitter,
        'subject' => $subject,
        'phone_number' => $phone_number,
        'instagram' => $instagram,
        'image' => $img_name,
    ]);

    return redirect()->route('dashboard')->with('success', 'Teacher added successfully.');
}
   public function createDad()
{
    return view('backend.dad.add_dad');
}


 public function indexTeacher(Daycare $daycare)
{
        $daycareId = auth()->user()->daycare_id;
        $teachers = Teacher::where('daycare_id' , $daycareId)->get();

        return view('backend.teacher.index', [
            'teachers' => $teachers
        ]);
    }

public function editteacher($id)
{
    $teacher = Teacher::findOrFail($id);
    return view('backend.teacher.edit', compact('teacher'));
}
public function updateTeacher(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:teachers,email,'.$id,
        'password' => 'nullable',
        'image' => 'nullable',
        'daycare_id' => 'required|exists:daycares,id',
        'facebook' => 'nullable',
        'twitter' => 'nullable',
        'instagram' => 'nullable',
    ]);

    // Find the teacher
    $teacher = Teacher::findOrFail($id);

    // Update the teacher's properties
    $teacher->name = $validatedData['name'];
    $teacher->email = $validatedData['email'];
    if (!empty($validatedData['password'])) {
        $teacher->password = bcrypt($validatedData['password']);
    }
    $teacher->image = $validatedData['image'];
    $teacher->daycare_id = $validatedData['daycare_id'];
    $teacher->facebook = $validatedData['facebook'];
    $teacher->twitter = $validatedData['twitter'];
    $teacher->instagram = $validatedData['instagram'];
    $teacher->save();

    // Redirect the user to a page showing the updated teacher or any other appropriate response
    return redirect()->route('teachers.show', $teacher->id)->with('success', 'Teacher updated successfully');
}
 public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('backend.teacher.show', compact('teacher'));
    }
public function destroyTeacher($id)
{

    $teacher = Teacher::findOrFail($id);
    $teacher->delete();

    // Redirect the user to a page or any other appropriate response
    return redirect()->route('auth.teachers.index')->with('success', 'Teacher deleted successfully');
}

    public function teacherdashboard(Daycare $daycare)
    {
$daycareId = Auth::guard('teacher')->user()->daycare_id;
        $teachers = Teacher::where('daycare_id' , $daycareId)->get();
    $gallerys =Gallery::where('daycare_id' , $daycareId)->get();
    $comments = Comment::where('daycare_id' , $daycareId)->get();


        return view('backend.teacher.dashboard', compact('teachers', 'gallerys','comments'));
    }
    public function indexclassroom()
    {
        $classrooms = Classroom::all();
        return view('classrooms.index', compact('classrooms'));
    }
}






