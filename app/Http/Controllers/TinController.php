<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tin;

class TinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = Tin::paginate(10);
        return view('admin.tin.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Tin($request->except(['_token', '_method']));
        $row->save();
        return redirect('/tintuc')->with('success','Tin tức đã được lưu');
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
        $row = Tin::where('idTin', $id)->first();
        if($row == null) {
            return redirect('/tintuc')->with('fail', 'Tin tức không tồn tại');
        }
        return view('admin.tin.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Tin::where('idTin', $id);
        $row->update($request->except(['_token', '_method']));
        return redirect('/tintuc')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Tin::where('idTin', $id);
        if(is_null($row)) {
            return redirect('/tintuc')->with('fail', 'Tin tức không tồn tại');
        }
        $row->delete();
        return redirect('/tintuc')->with('success', 'Đã xóa tin');
    }
}