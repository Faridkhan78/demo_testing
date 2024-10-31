<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeemail;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
        
            'username' => 'required|string|min:3|max:30',
            'email' => 'required|email',
            'password' => 'required',
            'mobile' => 'required|numeric|digits:10'
            
        ]);
        
        // return $request->input();

        // $user = User::create([
        //     'username' =>$request->username,
        //     'email' =>$request->email,
        //     'password' =>$request->password,
        //     'mobile' =>$request->mobile,

        // ]);
        
        $user = User::create($data);

        if ($user) {
            return redirect()->route('loginpage');
        }
    }
    // public function login(Request $request)
    // {

    //     $credentials = $request->validate(
    //         [
    //             'email' => 'required|email',
    //             'password' => 'required',
    //         ],
    //         [
    //             'email.required' => 'Email is required',
    //             'email.email' => 'Please enter a valid email address',
    //             'password.required' => 'Password is required',
    //             'password.password' => 'Please enter a valid password',
    //         ]

    //     );
    // }
    // public function loginPage(Request $request)
    // {
    //     // dd(1);
    //     // return view('user.login');
    //      return view('login');
    // }
    public function viewUserall(Request $request)
    {
        $user = User::get();
        // dd($user);
        return view('viewuser', compact('user'));
        // return view('basicdatatable')->with('user', $user);
    }
    public function viewuser()
    {
        // dd(1);
        return view('viewuser');
    }
    public function updatePage($id)
    {
        $user = User::find($id);
        return view('', compact('user'));
    }
    public function updateUser(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'mobile' => 'required'
        ]);
        $user = User::where(['id' => $request['id']])->update([

            'username' => $request['username'],
            'email' => $request['email'],
            'password' => $request['password'],
            'mobile' => $request['mobile']
        ]);
        if ($user) {
            return redirect()->route('viewuser');
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('viewuser');
    }

    public function updateApprove($id)
    {
        $user = User::where(['id' => $id])->update([
            'status' => 1,
        ]);
        if ($user) {
            return redirect()->route('viewuser');
        }
    }

    public function updateDisapprove($id)
    {
        $user = User::where(['id' => $id])->update([
            'status' => 0,
        ]);
        if ($user) {
            return redirect()->route('viewuser');
        }
    }

    // public function sendEmail($id)
    // {
    //     $user = User::find($id);
    //     // $toEmail = "aghariaali123@gmail.com";
    //     // $toEmail = "akbarchaudhari10@gmail.com";
    //     $toEmail = "fluhar76@gmail.com";
    //     $moreUser = $user->email;
    //     $message = "Hello, Mahirkhan";
    //     $subject = "Welcome to Akashyakalpa";
    //     $details = [
    //         'name' => 'To HR',
    //         'product' => 'Happy Diwali',
    //         'price' => 'I hope you enjoy this festival',
    //     ];
    //     $describe = "I hope you enjoy this festival with family members";

    //     $request = Mail::to($toEmail)->cc($moreUser)->send(new WelcomeEmail($message, $subject, $details, $describe));

    //     //  dd($request);
    //     if ($user) {
    //         return redirect()->route('viewuser');
    //     }
    // }


    // start send sendEmail
    public function sendEmail($id)
    {
        $user = User::find($id);
        $toEmail = "fluhar76@gmail.com";
        $moreUser = $user->email;
        $message = "Hello, Mahirkhan";
        $subject = "Welcome to Akashyakalpa";
        $details = [
            'name' => 'To HR',
            'product' => 'Happy Diwali',
            'price' => 'I hope you enjoy this festival',
        ];
        $describe = "I hope you enjoy this festival with family members";

        try {
            // Attempt to send the email
            Mail::to($toEmail)
                ->cc($moreUser)
                ->send(new WelcomeEmail($message, $subject, $details, $describe));

            // If successful, flash success message to the session
            session()->flash('status', 'success');
            session()->flash('message', 'Email sent successfully!');
        } catch (\Exception $e) {
            // If there's an error, flash failure message to the session
            session()->flash('status', 'failure');
            session()->flash('message', 'Failed to send email. Please try again.');
        }

        // Redirect to the viewuser route
        return redirect()->route('viewuser');
    }

    // end sendemail

    public function showDashboard()
    {
        // dd(auth()->user());
        if (Auth::check()) {
            return view('layout.main');
        } else {
            return redirect()->route('loginpage');
            //return redirect()->route('login')->with('error', 'Please log in first.');
        }
        // return view('user.dashboard');
    }
    public function login(Request $request)
    {

        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email is required',
                'email.email' => 'Please enter a valid email address',
                'password.required' => 'Password is required',
                'password.password' => 'Please enter a valid password',
            ]

        );
        // new 
        $user = User::where('email', $credentials['email'])->first();

        // Check if the user exists
        if ($user) {
            // Check if the user's account is active (status = 1)
            if ($user->status == 1) {
                // Attempt login
                if (Auth::attempt($credentials)) {
                    return redirect()->route('dashboard');
                } else {
                    // Invalid credentials
                    return redirect()->back()->with('error', 'Login failed. Invalid credentials.');
                }
            } else {
                // User's account is inactive
                return redirect()->back()->with('error', 'Your account is inactive. Please contact support.');
            }
        } else {
            // User does not exist
            return redirect()->back()->with('error', 'Email or password is not valid.');
        }
        // end new code
    }

    public function loginPage(Request $request)
    {
        // dd(1);
        // return view('user.login');
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginpage');

        //  return view('dashboard');
    }

    public function search(Request $request)
    {
        $output = '';
        $search = $request['search'];
        $user = User::where('username', 'LIKE', '%' . $search . '%')->get();

        foreach ($user as $userItem) {
            $output .= '<tr>
             <td>' . $userItem->id . '</td>
            <td>' . $userItem->username . '</td>
             <td>' . $userItem->email . '</td>
              <td>' . $userItem->mobile . '</td>
                  <td><a href="' . route('update.page', $userItem->id) . '"
                                    class="btn btn-warning btn-sm">UPDATE</a>
                            </td>
                            <td><a href="' . route('delete', $userItem->id) . '"  class="btn btn-danger btn-sm"</a>DELETE</td>
            </tr>';
        }
        return Response($output);
        // return view('viewuser', compact('user'));
    }
    public function index()
    {
        $user = User::all();
        return view('viewuser', compact('user'));
    }
    public function fetchdatewisedata(Request $request)
    {
        $valid = Request()->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:sdate',
        ]);

        // $start_date = $request->input('start_date');
        // $end_date = $request->input('end_date');

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $user = User::whereBetween('created_at', [$start_date, $end_date])->get();
        return view('viewuser', compact('user'));
    }
}
