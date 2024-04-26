<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    function get()
    {   $data= user::all();
       return  view('users',compact('data')); 
   
    }
       
function add()
{
    return view('layouts.add');
}

        function store(Request $request)
        {           
    
            // $validatedData = $request->validate([
            //     'name' => 'required|max:25',
            //     'lastname' => 'required',
            //     'address' => 'required',
            //     'city' => 'required',
            //     'state' => 'required',
                
    
            // ]);
    
            // user::create($validatedData);
            user::create($request->all());
    
            return redirect()->route('get');
        }


        public function delete($id)
        {
            $delete = user::find($id);
            $delete->delete();
            return redirect()->route('get');
        }

        public function edit($id)
        {
            $data = user::find($id);
            return view('edit', compact('data'));
        }   
    

    
        function update(request $request, $id)

        {
           //  dd($request->all());
    
            $request->validate([
                'name' => 'required|max:25',
                'lastname' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required'
                
            ]);
          
    
             // Update the product in the database
            $data = user::find($id);
            $data->update($request->all());
    
            return redirect()->route('get');
    
        }
    
    }
