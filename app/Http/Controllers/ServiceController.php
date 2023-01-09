<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $data =   Service::latest()->get();

        return view(
            'admin.services',
            compact('data')
        );
    }

    public function createservice()
    {
        return view('admin.createservice');
    }


    public function storeservice(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            
        ]);


        // store into the database 

        Service::create([
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category
        ]);

        return redirect()->route('services')->with('success', 'Article added Successfully');
    }



    public function editservice(Service $service)
    {
        $services = Service::find($service->id);

        return view('admin.editservice', [
            'services' => $services
        ]);
    }


    public function updateservice(Service $service, Request $request)
    {
          // select single user 
    
          $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255']

        ]);



        Service::where('id', $service->id)->update(
            [
                'title' => $request->title,
                'body' => $request->body,
                'category' => $request->category,


            ]
        );
        return redirect()->route('services')->with('success', 'Article updated Succssfully');
    }



    public function destroy(Service $service)
    {
               // delete user
               $service->delete();
               return redirect()->route('services')->with('success', 'Article Deleted Successfully');
    }
}
