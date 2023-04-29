<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works= Work::orderBy('id','desc')->paginate(10);
        return response()->view('dashboard.works.index',compact("works"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::select('name','id')->get();
        return response()->view('dashboard.works.create',compact('services'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
        {

            $validator = Validator($request->all(), [
                'name' => 'required|string|max:100',
            ]);
    
    
            if ($validator->fails()) {
    
                return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
            } else {
    
    
                $services = new Work();
                $services->name = $request->get('name');
                $services->description = $request->get('description');
                $services->url = $request->get('url');
                $services->client = $request->get('client');
                $services->date = $request->get('date');
                $services->service_id = $request->get('service_id');
                $services->user_id = Auth::user()->id;
    
                $isSaved = $services->save();
                return response()->json(['icon' => 'success', 'title' => 'Works created successfully'], $isSaved ? 201 : 400);
            }
    
            
    
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
        $works= Work::findOrFail($id);
        $services=Service::select('name','id')->get();

        return response()->view('dashboard.works.edit',compact('works','services'));
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

        $validator = Validator($request->all(), [
            'name' => 'required|string|max:100',
        ]);


        if ($validator->fails()) {

            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        } else {


            $services =  Work::findOrFail($id);
            $services->name = $request->get('name');
            $services->description = $request->get('description');
            $services->url = $request->get('url');
            $services->client = $request->get('client');
            $services->date = $request->get('date');
            $services->service_id = $request->get('service_id');
            $services->user_id = Auth::user()->id;


            $isSaved = $services->save();
            return response()->json(['icon' => 'success', 'title' => 'Works updated successfully'], $isSaved ? 201 : 400);
        }

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $works= Work::destroy($id);
        return $works;
    }
        /**
     *  Display a trashed listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        //
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        //
    }

        /**
     * forcedelete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forcedelete($id)
    {
        //
    }
}
