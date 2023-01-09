<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    //
    public function index()
    {
        $data = Footer::latest()->get();
        return view('admin.managefooter', [
            'data' => $data
        ]);
    }

    // public function showform()
    // {
    //     return view('admin.addfooter');
    // }

    // public function addfooter(Request $request)
    // {

    //     $this->validate($request, [
    //         'title' => ['required', 'string', 'max:255'],
    //         'description' => ['required', 'string', 'max:255']

    //     ]);


    //     // store into the database 

    //     Footer::create([
    //         'title' => $request->title,
    //         'description' => $request->description
    //     ]);

    //     return redirect()->route('footer')->with('success', 'Footer information added Successfully');
    // }


    public function editfooter(Footer $footer)
    {
        $footers = Footer::find($footer->id);

        return view('admin.updatefooter', [
            'footers' => $footer
        ]);
    }

    public function updatefooter(Request $request, Footer $Footer)
    {
        // select single Footer 
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);

        Footer::where('id', $Footer->id)->update(
            [
                'title' => $request->title,
                'description' => $request->description,

            ]
        );
        return redirect()->route('footer')->with('success', 'Footer updated Succssfully');
    }

    // public function destroyfooter(Footer $Footer)
    // {
    //     // delete Footer
    //     $Footer->delete();
    //     return redirect()->route('footer')->with('success', 'Footer Deleted Successfully');
    // }
}
