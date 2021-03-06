<?php

namespace App\Http\Controllers;


use App\Http\Requests\TripRequest;
use App\Photo;
use App\Trip;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TripsController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth' , ['except'=> ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trip = Trip::all();
//        dd($trip);


        return view('trips.index',compact('trip'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Trip::all();
//        flash()->overlay('Welcome Aboard!  ','Thank you for signup');
       return view('trips.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TripRequest $request)
    {

        //persist the trip
        $data = $request->all();
        $data['zip'] = 250000;
        $user = Auth::user();
        $data['user_id'] = $user['id'];

     $trip = Trip::create($data);

//        flash( 'Success!' ,'Your trips has been create! ');
        flash()->success('Success!','Your Trips has been create!');


        // rederect to landing page
//        flash('trips successfully created! ');
        return redirect()->route('trip.addPhoto',[$trip->zip, $trip->street]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show($zip, $street)
    {

        $trip = Trip::locatedAt($zip, $street);
        return view('trips.show',compact('trip'));

    }

    public function addPhoto($zip, $street,Request $request)
    {

//        $this->validate($request , [
//            'photo' => 'required| mimes: jpg, jpeg, png, bmp'
//        ]);
        $trips =Trip::locatedAt($zip, $street);

        $photo = $this->makePhoto($request->file('photo'));


        $trips->addPhoto($photo);

    }

    protected function makePhoto(UploadedFile $file)
    {
        return Photo::named($file->getClientOriginalName())->move($file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::find($id);
        return view('trips.edit',compact('trip'));
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
        $trip = Trip::findOrFail($id);
        $data = $request->all();
        if ($trip->update($data))
        {
            flash()->success('Success! ','Your Trips has been edit!');
            return redirect()->route('trip.addPhoto',[$trip->zip, $trip->street]);
        }
        return redirect()->route('trip.edit',[$id]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        if($trip->delete())
        {
            flash()->success('Success!','Your Trips has been delete! ');
            return redirect()->back();
        }
        return redirect()->back();
    }
}
