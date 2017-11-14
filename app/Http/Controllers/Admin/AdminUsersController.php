<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\AdminUser;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
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
            $adminusers = AdminUser::where('title', 'LIKE', "%$keyword%")
                ->orWhere('username', 'LIKE', "%$keyword%")
                ->orWhere('password', 'LIKE', "%$keyword%")
                ->orWhere('first_name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('email_id', 'LIKE', "%$keyword%")
                ->orWhere('phone_number', 'LIKE', "%$keyword%")
                ->orWhere('passport_number', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('state', 'LIKE', "%$keyword%")
                ->orWhere('city', 'LIKE', "%$keyword%")
                ->orWhere('country', 'LIKE', "%$keyword%")
                ->orWhere('role', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $adminusers = AdminUser::paginate($perPage);
        }

        return view('admin.admin-users.index', compact('adminusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.admin-users.create');
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
        $this->validate($request, [
			'title' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'password' => 'required',
			'email_id' => 'required|email',
			'username' => 'required',
			'phone_number' => 'required',
			'passport_number' => 'required'
		]);
        $requestData = $request->all();
        
        AdminUser::create($requestData);

        return redirect('admin-users')->with('flash_message', 'AdminUser added!');
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
        $adminuser = AdminUser::findOrFail($id);

        return view('admin.admin-users.show', compact('adminuser'));
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
        $adminuser = AdminUser::findOrFail($id);

        return view('admin.admin-users.edit', compact('adminuser'));
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
        $this->validate($request, [
			'title' => 'required',
			'first_name' => 'required',
			'last_name' => 'required',
			'password' => 'required',
			'email_id' => 'required|email',
			'username' => 'required',
			'phone_number' => 'required',
			'passport_number' => 'required'
		]);
        $requestData = $request->all();
        
        $adminuser = AdminUser::findOrFail($id);
        $adminuser->update($requestData);

        return redirect('admin-users')->with('flash_message', 'AdminUser updated!');
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
        AdminUser::destroy($id);

        return redirect('admin-users')->with('flash_message', 'AdminUser deleted!');
    }
}
