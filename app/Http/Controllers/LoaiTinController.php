<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTin;

class LoaiTinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = loaiTin::paginate(10);
        return view('admin.loaitin.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loaitin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new loaiTin($request->except(['_token', '_method']));
        $row->save();
        return redirect('/loaitin')->with('success','Loại tin đã được lưu');
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
        $row = loaiTin::find($id);
        if($row == null) {
            return redirect('/loaitin')->with('fail', 'Loại tin không tồn tại');
        }
        return view('admin.loaitin.edit', compact('row'));
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
        $row = loaiTin::find($id);
        $row->update($request->except(['_token', '_method']));
        return redirect('/loaitin')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = loaiTin::find($id);
        if(is_null($row)) {
            return redirect('/loaitin')->with('fail', 'Loại tin không tồn tại');
        }
        $row->delete();
        return redirect('/loaitin')->with('success', 'Đã xóa loại tin');
    }
}