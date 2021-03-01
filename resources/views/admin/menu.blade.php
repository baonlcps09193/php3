<div class="kt-sideleft">
    <label class="kt-sidebar-label"></label>
    <ul class="nav kt-sideleft-menu">
      <li class="nav-item">
        <a href="/quantri" class="nav-link {{ (request()->is('quantri')) ? 'active' : '' }}">
          <i class="icon ion-ios-home-outline"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- nav-item -->
      <li class="nav-item">
        <a href="" class="nav-link with-sub {{ (request()->is('theloai*')) ? 'active' : '' }}">
          <i class="icon ion-ios-gear-outline"></i>
          <span>Thể loại</span>
        </a>
        <ul class="nav-sub">
          <li class="nav-item"><a href="{{ route('theloai.index') }}" class="nav-link">Danh sách thể loại</a></li>
          <li class="nav-item"><a href="{{ route('theloai.create') }}" class="nav-link">Thêm thể loại</a></li>
        </ul>
      </li><!-- nav-item -->
      <li class="nav-item">
        <a href="" class="nav-link with-sub {{ (request()->is('tintuc*')) ? 'active' : '' }}">
          <i class="icon ion-ios-filing-outline"></i>
          <span>Tin tức</span>
        </a>
        <ul class="nav-sub">
          <li class="nav-item"><a href="{{ route('tintuc.index') }}" class="nav-link">Danh sách tin</a></li>
          <li class="nav-item"><a href="{{ route('tintuc.create') }}" class="nav-link">Thêm tin</a></li>
        </ul>
      </li><!-- nav-item -->
      <li class="nav-item">
        <a href="" class="nav-link with-sub {{ (request()->is('loaitin*')) ? 'active' : '' }}">
          <i class="icon ion-ios-analytics-outline"></i>
          <span>Loại tin</span>
        </a>
        <ul class="nav-sub">
          <li class="nav-item"><a href="{{ route('loaitin.index') }}" class="nav-link">Danh sách loại tin</a></li>
          <li class="nav-item"><a href="{{ route('loaitin.create') }}" class="nav-link">Thêm loại tin</a></li>
        </ul>
      </li><!-- nav-item -->
      <li class="nav-item">
        <a href="" class="nav-link with-sub {{ (request()->is('ykien*')) ? 'active' : '' }}">
          <i class="icon ion-ios-navigate-outline"></i>
          <span>Ý kiến</span>
        </a>
        <ul class="nav-sub">
          <li class="nav-item"><a href="{{ route('ykien.index') }}" class="nav-link">Danh sách ý kiến</a></li>
        </ul>
      </li><!-- nav-item -->
    </ul>
</div>