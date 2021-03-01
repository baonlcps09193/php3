<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
            <th class="wd-15p">ID</th>
            <th class="wd-15p">TÊN</th>
            <th class="wd-20p">THỨ TỰ</th>
            <th class="wd-15p">ẨN HIỆN</th>
            <th class="wd-10p">NGÔN NGỮ</th>
            <th class="wd-25p">HIỆN MENU</th>
            <th class="wd-25p">Chỉnh</th>
            <th class="wd-25p">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ds as $row)
        <tr>
            <td>{{ $row->idTL }}</td>
            <td>{{ $row->TenTL }}</td>
            <td>{{ $row->ThuTu }}</td>
            <td>{{ $row->AnHien ? 'Đang hiện' : 'Đang ẩn' }}</td>
            <td>{{ $row->lang==='vi' ? 'Tiếng Việt' : 'English' }}</td>
            <td>{{ $row->HienMenu===1 ? 'Hiện trên menu' : 'Ẩn trên menu' }}</td>
            <td>
                <a href="{{ route('theloai.edit', $row->idTL) }}" class="btn btn-warning">Chỉnh</a>
            </td>
            <td>
                <form action="{{ route('theloai.destroy', $row->idTL) }}" method="POST">
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