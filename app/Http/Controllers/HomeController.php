<?php

namespace App\Http\Controllers;

use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images =   Home::latest()->paginate(10);

        return view(
            'admin.index',
            compact('images')
        );
    }

    // front end index 

    public function showHome()
    {
        return view('admin.createhomearticle');
    }


    public function storeHome(Request $request)
    {

        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:png,jpg,svg,jpeg', 'max:3000']
        ]);



        $ImageDimension = HomeController::getDimensions($request->image);

        $ogname = $request->image->getClientOriginalName();
        $imageName = time() . '_' . $ogname;

        $request->image->move(public_path('images'), $imageName);

        // store into the database 

        Home::create([
            'title' => $request->title,
            'subTitle' => $request->subTitle,
            'body' => $request->body,
            'category' => $request->category,
            'file' => $imageName,
            'dimension' => $ImageDimension
        ]);

        return redirect()->route('home')->with('success', 'Article added Successfully');
    }

    public static function getDimensions($image)
    {
        [$width, $height] = getimagesize($image);

        return $width . 'x' . $height;
    }



    public function edithome(Home $home)
    {
        $homes = Home::find($home->id);

        return view('admin.edithome', [
            'homes' => $homes
        ]);
    }


    public function updatehome(Home $home, Request $request)
    {
        // select single user 

        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'subTitle' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255']
            // 'image' => ['required', 'image', 'mimes:png,jpg,svg,jpeg', 'max:3000']
        ]);

        // $ImageDimension = HomeController::getDimensions($request->image);

        // $ogname = $request->image->getClientOriginalName();
        // $imageName = time() . '_' . $ogname;

        // $request->image->move(public_path('images'), $imageName);

        Home::where('id', $home->id)->update(
            [
                'title' => $request->title,
                'subTitle' => $request->subTitle,
                'body' => $request->body,
                'category' => $request->category,
                // 'file' => $imageName,
                // 'dimension' => $ImageDimension

            ]
        );
        return redirect()->route('home')->with('success', 'Article updated Succssfully');
    }


    public function destroy(Home $home)
    {
        // delete user
        $home->delete();
        return redirect()->route('home')->with('success', 'Article Deleted Successfully');
    }
}
