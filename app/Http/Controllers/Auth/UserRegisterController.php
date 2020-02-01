<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

use App\Trainer;
use App\Gym;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserRegisterController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $request->validate([
                'password'=>'min:8',
        ]);

        //Trainer Register
        if($request->role == 'Trainer'){
            if (Trainer::where('tphone', '=', $request->phone)->exists() or Trainer::where('email', '=', $request->email)->exists()) {
                return redirect()->back()->withErrors(['Email Id or Phone No. already exists']); 
            }
            else{
                $trainer = new Trainer;
                $trainer->tname = $request->name;
                $trainer->tphone = $request->phone;
                $trainer->tcity = $request->city; 
                $trainer->email = $request->email; 

                if($request->password != NULL)
                $trainer->password = Hash::make($request->password); 
                
                $trainer->gid = $request->gid;
                $trainer->save();
    
                return redirect('trainers');
            }
        }

        //Customer Register
        if($request->role == 'Customer'){
            if (Customer::where('cphone', '=', $request->phone)->exists() or Customer::where('email', '=', $request->email)->exists()) {
                return redirect()->back()->withErrors(['Email Id or Phone No. already exists']); 
            }
            else{
                $customer = new Customer;
                $customer->cname = $request->name;
                $customer->cphone = $request->phone;
                $customer->ccity = $request->city; 
                $customer->email = $request->email;

                if($request->password != NULL)
                $customer->password = Hash::make($request->password); 
                
                $customer->gid = $request->gid;
                $customer->save();
    
                return redirect('customers');
            }
        }

        //Gym Register
        if($request->role == 'Gym'){
            if (Gym::where('gphone', '=', $request->phone)->exists() or Gym::where('email', '=', $request->email)->exists()) {
                return redirect()->back()->withErrors(['Email Id or Phone No. already exists']); 
            }else{
                $gym = new Gym;
                $gym->gname = $request->name;
                $gym->gphone = $request->phone;
                $gym->gcity = $request->city; 
                $gym->email = $request->email; 
                $gym->password = Hash::make($request->password); 
    
                $gym->save();
    
                return redirect('gyms');
            }
        }
    }
}
