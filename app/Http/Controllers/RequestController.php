<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\Request as ModelsRequest;
use App\Models\Status;
use App\Models\User;

class RequestController extends Controller
{
    /**
     * Index function return the Index view and all
     *  request that thier status equle to active | GET
     * @return view  
     * @param ModelsRequest $request
     */
    public function index() 
    {
        
        $requests =  ModelsRequest::latest();
        if(request('search')){
            $requests->where('name', 'like', '%' . request('search') . '%');
        }
        return view('index', [
            'requests' => $requests->get(),
        ]);
    }
    /**
     * Create function return Create request | GET
     * @return view 
     */
    public function create(ModelsRequest $request)
    {
        return view('supervisor.create', [
            'request' => $request
        ]);
    }
    /**
     * Store function will store the data and return redirect with flash masg | POST
     * @return redirect    
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'type' => ['required'],
            'classification' => ['required'],
            'duration' => ['required'],
            'external_side' => ['required_if:classification,initiative'],
            'area' => ['required_if:classification,initiative'],
            'profession' => ['required' ],
            'explained' => ['required'],
            'volunteers_role' => ['required'],
            'start_date' => ['required' , 'date'],
            'finished_date' => ['required', 'date', 'after:start_date'],
            'start_time' => ['required' ,'date_format:H:i'],
            'finished_time' => ['required', 'date_format:H:i' , 'after:start_time'],
            'volunteers_number' => ['required'],
            'facility_name' => ['required', 'string'],
            'department' => ['required'],
        ]);


        \DB::transaction(function () use ($attributes) {

            $request = ModelsRequest::create([
                'user_id' => auth()->id(),
                'name' => $attributes['name'],
                'type' => $attributes['type'],
                'classification' => $attributes['classification'],
                'duration' => $attributes['duration'],
                'external_side' => $attributes['external_side'],
                'area' => $attributes['area'],
                'profession' => $attributes['profession'],
                'explained' => $attributes['explained'],
                'volunteers_role' => $attributes['volunteers_role'],
                'facility_name' => $attributes['facility_name'],
                'department' => $attributes['department'],
                'start_date' => $attributes['start_date'],
                'finished_date' => $attributes['finished_date'],
                'start_time' => $attributes['start_time'],
                'finished_time' => $attributes['finished_time'],
                'volunteers_number' => $attributes['volunteers_number'],
            ]);

            // Facility::create([
            //     'facility_name' => $attributes['facility_name'],
            //     'department' => $attributes['department'],
            //     'request_id' => $request->id
            //     ]);

                
            // Schedule::create([
            //     'start_date' => $attributes['start_date'],
            //     'finished_date' => $attributes['finished_date'],
            //     'start_time' => $attributes['start_time'],
            //     'finished_time' => $attributes['finished_time'],
            //     'volunteers_number' => $attributes['volunteers_number'],
            //     'request_id' => $request->id
            // ]);
            
            Status::create([
                'request_id' => $request->id
            ]);
        });


        return redirect('/supervisor')->with('success', 'تم رفع الطلب بنجاح، يمكنك النظر لحالة الطلب من خلال صفحة متابعة الطلب');
    }
    /**
     * SHow function return show view for and certian request | GET
     * @return view  
     */
    public function show($id)
    {
        return view('show', [
            'request' => ModelsRequest::find($id)
        ]);
    }
    /**
     * Edit function return edit request view  | GET
     * @return view  
     */
    public function edit()
    {
        return view('request.edit');
    }
    /**
     * Update function will update certian requst | PUT/PATCH
     * @return Redirect  
     */
    public function updtae()
    {
        # code...
    }
    /**
     * Delete function will delete certian request  | DELETE
     * @return Redirect  
     */
    public function delete()
    {
        # code...
    }
}
