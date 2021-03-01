<table id="datatable1" class="table display responsive nowrap">
    <thead>
        <tr>
            <th class="wd-20p">ID</th>
            <th class="wd-20p">NGƯỜI ĐĂNG</th>
            <th class="wd-20p">EMAIL</th>
            <th class="wd-20p">NGÀY</th>
            <th class="wd-20p">ẨN HIỆN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ds as $row)
        <tr>
            <td>{{ $row->idYKien }}</td>
            <td>{{ $row->HoTen }}</td>
            <td>{{ $row->Email }}</td>
            <td>{{ $row->Ngay }}</td>
            <td>{{ $row->AnHien ? 'Đang hiện' : 'Đang ẩn' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $ds->links() }}