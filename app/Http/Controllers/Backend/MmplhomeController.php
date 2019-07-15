<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Header;
use App\Clients;
use App\Expertise;
use App\Video;
class MmplhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['header'] = Header::findorfail(1);
        $data['clients'] = Clients::all();
        $data['expertise'] = Expertise::all();
        $data['video'] = Video::findorfail(1);
       return view('Backend.home.home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header =  Header::findorfail($request->id);
        $header->title_1 = $request->title_1;
        $header->title_2 = $request->title_2;
        $header->description = $request->description;
        $header->save();
        return response()->json($header);
    }
    //Client
    public function clientstore(Request $request){
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('mmplimage'), $new_name);
        $client = new Clients();
        $client->name = $request->name;
        $client->description = $request->description;
        $client->url = $request->url;
        $client->image ='mmplimage/'. $new_name;
        $client->save();
        return response()->json($client);

    }
    public function clientedit(Request $request){
        $client = Clients::findorfail($request->id);
        return response()->json($client);
    }
    public function clientupdate(Request $request){
        if($request->file('image')){
            $find_image = Clients::find($request->id);
            $old_img = $find_image->image;
            if($old_img){
                unlink($old_img);
            }
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('mmplimage'), $new_name);
            $client = Clients::findorfail($request->id);
            $client->name = $request->name;
            $client->description = $request->description;
            $client->url = $request->url;
            $client->image ='mmplimage/'. $new_name;
            $client->save();
            return response()->json($client);  
        }else{
            $client = Clients::findorfail($request->id);
            $client->name = $request->name;
            $client->description = $request->description;
            $client->url = $request->url;
            $client->save();
            return response()->json($client); 
        }
    }
    public function clientdelete(Request $request){
        $id = $request->id;
        $client = Clients::find($id);
        $unlink_img = $client->image;
        $client->delete();
        unlink($unlink_img);
        return response()->json('deelted');
    }
    //Expertise
    public function expertisestore(Request $request){
        $expertise = new Expertise();
        $expertise->title = $request->title;
        $expertise->f_class = $request->icon;
        $expertise->save();
        return response()->json($expertise);

    }
    public function expertiseedit(Request $request){
        $expertise = Expertise::findorfail($request->id);
        return response()->json($expertise);
    }
    public function expertiseupdate(Request $request){
        $expertise = Expertise::findorfail($request->id);
        $expertise->title = $request->title;
        $expertise->f_class = $request->icon;
        $expertise->save();
        return response()->json($expertise);

    }
    public function expertisedelete(Request $request){
        $expertise = Expertise::findorfail($request->id);
        $expertise->delete();
        return response()->json('deelted');
    }
    //Video
    public function videoupdate(Request $request){
        $video = Video::findorfail($request->id);
        $video->url = $request->url;
        $video->save();
        return response()->json($video);

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
}
