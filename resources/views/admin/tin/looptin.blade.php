<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
            <th class="wd-10p">ID</th>
            <th class="wd-10p">TIÊU ĐỀ</th>
            <th class="wd-20p">TÓM TẮT</th>
            <th class="wd-10p">LƯỢT XEM</th>
            <th class="wd-10p">NGÔN NGỮ</th>
            <th class="wd-20p">NGÀY ĐĂNG</th>
            <th class="wd-20p">ẨN HIỆN</th>
            <th class="wd-25p">Chỉnh</th>
            <th class="wd-25p">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ds as $row)
        <tr>
            <td>{{ $row->idTin }}</td>
            <td>{{ $row->TieuDe }}</td>
            <td>{{ $row->TomTat }}</td>
            <td>{{ $row->SoLanXem }}</td>
            <td>{{ $row->lang==='vi' ? 'Tiếng Việt' : 'English' }}</td>
            <td>{{ $row->Ngay }}</td>
            <td>{{ $row->AnHien ? 'Đang hiện' : 'Đang ẩn' }}</td>
            <td>
                <a href="{{ route('tintuc.edit', $row->idTin) }}" class="btn btn-warning">Chỉnh</a>
            </td>
            <td>
                <form action="{{ route('tintuc.destroy', $row->idTin) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Xác nhận xóa?');" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $ds->links() }}