<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as ModelsRequest;

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
        return view('admin.requests.index', [
            'requests' => $requests->get(), 
        ]);
        
    }
    /**
     * Create function return Create request | GET
     * @return view 
     */
    public function create()
    {
        //
    }
    /**
     * Store function will store the data and return redirect with flash masg | POST
     * @return redirect    
     */
    public function store()
    {
        //
    }
    /**
     * SHow function return show view for and certian request | GET
     * @return view  
     */
    public function show($id)
    {
        
        return view('admin.requests.show', [
            'request' => \App\Models\Request::find($id)
        ]);
    }
    /**
     * Edit function return edit request view  | GET
     * @return view  
     */
    public function edit($id)
    {
        
        return view('admin.requests.edit', [
            'request' => \App\Models\Request::find($id)
        ]);
    }
    /**
     * Update function will update certian requst | PUT/PATCH
     * @return Redirect  
     */
    public function update(Request $request, $id)
    {
        $RequestModel = \App\Models\Request::find($id);

        $attributes = $request->validate([
            'status' => ['required'],
            'reason' => ['required_if:status,rejected']
        ]);
        

        $RequestModel->status = $attributes['status'];
        $RequestModel->reason = $attributes['reason'];

        $RequestModel->save();

        return redirect('admin/requests/' . $RequestModel->id )->with('success', 'تم تعديل حالة الطلب');


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
