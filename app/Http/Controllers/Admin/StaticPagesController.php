<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\StaticPage;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
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
            $staticpages = StaticPage::where('page_title', 'LIKE', "%$keyword%")
                ->orWhere('page_content', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $staticpages = StaticPage::paginate($perPage);
        }

        return view('admin.static-pages.index', compact('staticpages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.static-pages.create');
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
        
        StaticPage::create($requestData);

        return redirect('static-pages')->with('flash_message', 'StaticPage added!');
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
        $staticpage = StaticPage::findOrFail($id);

        return view('admin.static-pages.show', compact('staticpage'));
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
        $staticpage = StaticPage::findOrFail($id);

        return view('admin.static-pages.edit', compact('staticpage'));
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
        
        $staticpage = StaticPage::findOrFail($id);
        $staticpage->update($requestData);

        return redirect('static-pages')->with('flash_message', 'StaticPage updated!');
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
        StaticPage::destroy($id);

        return redirect('static-pages')->with('flash_message', 'StaticPage deleted!');
    }

    public function upload_content(Request $request) 
    {
        $pages = array('1'=>'about-us','2'=>'privacy-policy','3'=>'terms-conditions');
        $this->validate($request, [
            'page_content' => 'required|file|mimes:txt|max:2048',
        ]);
        $page = StaticPage::findOrFail($request->page_id);
     
        if($file = $request->hasFile('page_content')) {
            
            $file = $request->file('page_content') ;
            
            $fileName = $pages[$request->page_id].'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path().'/uploads/static_pages' ;
            $file->move($destinationPath,$fileName);
            $page->page_content = file_get_contents($destinationPath.'/'.$fileName);
        }
        $page->save() ;
        return redirect($pages[$request->page_id])->with('flash_message', 'StaticPage updated!');
    }
}
