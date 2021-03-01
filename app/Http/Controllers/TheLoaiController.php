<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;

class TheLoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds = TheLoai::paginate(10);
        return view('admin.theloai.index', compact('ds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.theloai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new TheLoai([
            'TenTL' => $request->get('TenTL'),
            'ThuTu' => $request->get('ThuTu'),
            'AnHien' => $request->get('AnHien'),
            'HienMenu' => $request->get('HienMenu'),
            'lang' => $request->get('lang'),
        ]);
        $row->save();
        return redirect('/theloai')->with('success','Thể loại đã được lưu');
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
        $row = TheLoai::find($id);
        if($row == null)
            return redirect('/theloai')->with('fail', 'Thể loại không tồn tại');
            
        return view('admin.theloai.edit', compact('row'));
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
        $row = TheLoai::find($id);
        $row->update($request->except(['_token', '_method']));
        return redirect('/theloai')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loaiTin = LoaiTin::select('idTL')->where('idTL', $id)->get();
        if($loaiTin->isEmpty()) {
            $row = TheLoai::find($id);
            if(is_null($row)) {
                return redirect('/theloai')->with('fail', 'Thể loại không tồn tại');
            }
            $row->delete();
            return redirect('/theloai')->with('success', 'Đã xóa thể loại');
        }
        else
            return redirect('/theloai')->with('fail', 'Không thể xóa thể loại này vì có loại tin con');
    }
}
