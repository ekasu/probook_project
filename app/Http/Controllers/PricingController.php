<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class pricingController extends Controller
{

    public function index()
    {
        $data =   Pricing::latest()->get();

        return view(
            'admin.pricing',
            compact('data')
        );
    }

    public function createpricing()
    {
        return view('admin.createpricing');
    }


    public function storepricing(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'integer', 'max:255'],
            'cover' => ['required_without_all']

        ]);


        // store into the database 

        Pricing::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'cover' => implode(',', (array) $request->cover)
        ]);

        return redirect()->route('pricing')->with('success', 'Article added Successfully');
    }



    public function editpricing(Pricing $pricing)
    {
        $pricing = Pricing::find($pricing->id);

        return view('admin.editpricing', [
            'pricing' => $pricing
        ]);
    }


    public function updatepricing(Pricing $pricing, Request $request)
    {
        // select single user 

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'integer', 'max:255'],
            'cover' => ['required_without_all']

        ]);



        Pricing::where('id', $pricing->id)->update(
            [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'cover' => implode(',', (array) $request->cover)


            ]
        );
        return redirect()->route('pricing')->with('success', 'Article updated Succssfully');
    }



    public function destroy(Pricing $pricing)
    {
        // delete user
        $pricing->delete();
        return redirect()->route('pricing')->with('success', 'Article Deleted Successfully');
    }
}
