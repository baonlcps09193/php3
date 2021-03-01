<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
            <th class="wd-20p">ID</th>
            <th class="wd-20p">LOẠI TIN</th>
            <th class="wd-20p">NGÔN NGỮ</th>
            <th class="wd-20p">ẨN HIỆN</th>
            <th class="wd-10p">Chỉnh</th>
            <th class="wd-10p">Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ds as $row)
        <tr>
            <td>{{ $row->idLT }}</td>
            <td>{{ $row->Ten }}</td>
            <td>{{ $row->lang==='vi' ? 'Tiếng Việt' : 'English' }}</td>
            <td>{{ $row->AnHien ? 'Đang hiện' : 'Đang ẩn' }}</td>
            <td>
                <a href="{{ route('loaitin.edit', $row->idLT) }}" class="btn btn-warning">Chỉnh</a>
            </td>
            <td>
                <form action="{{ route('loaitin.destroy', $row->idLT) }}" method="POST">
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