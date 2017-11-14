<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\ContactUs;
use App\Models\ContactAddress;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $contactus = ContactUs::where('full_name', 'LIKE', "%$keyword%")
                ->orWhere('email_id', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('message', 'LIKE', "%$keyword%")
                ->orWhere('request_call', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $contactus = ContactUs::paginate($perPage);
        }
        $contactaddress = ContactAddress::all();
        return view('admin.contact-us.index', compact('contactus','contactaddress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.contact-us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        ContactUs::create($requestData);

        return redirect('contact-us')->with('flash_message', 'ContactUs added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $contactus = ContactUs::findOrFail($id);

        return view('admin.contact-us.show', compact('contactus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // $contactus = ContactUs::findOrFail($id);
        $contactaddress = ContactAddress::findOrFail($id);

        return view('admin.contact-us.edit', compact('contactaddress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        // $contactus = ContactUs::findOrFail($id);
        $contactaddress = ContactAddress::findOrFail($id);
        $contactaddress->update($requestData);

        return redirect('contact-us')->with('flash_message', 'Contact Address updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        ContactUs::destroy($id);

        return redirect('contact-us')->with('flash_message', 'ContactUs deleted!');
    }
}
