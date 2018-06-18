<?php

namespace App\Http\Controllers;

use App\Photo, App\Category;

use App\Http\Requests\PhotoRequest;
//use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
       $this->middleware('auth', ['except' => ['index', 'photoCategory']]);
       $this->middleware('admin', ['except' => ['index', 'photoCategory']]);
     }

    public function index()
    {
        $photos = Photo::select('photo.*')->join('category', 'photo.category_id', 'category.id')->where('category.name', 'Ireland')->get();//$this->photoCategory('Ireland');

        return view('photo.index', compact("photos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('photo.create', compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotoRequest $request)
    {
      echo $request->input('category');
      $image = $request->file('image');

        //image
        if($image->isValid())
		    {
			      $path = config('upload.path');
			      $extension = $image->getClientOriginalExtension();
			      do {
				          $name = str_random(10) . '.' . $extension;
			      } while(file_exists($path . '/' . $name));

			      if($image->move($path, $name)){
              Photo::create(['name' => $name, 'category_id' => $request->input('category')]);
            }
          }
          flash('Well done! Image successfully uploaded!')->success();

        return redirect('photo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function photoCategory($category){
      //echo "test : " . $category;
      //return response()->json(['response' => 'This is post method']);
      return Photo::select('photo.*')->join('category', 'photo.category_id', 'category.id')->where('category.name', $category)->get();
    }


}
