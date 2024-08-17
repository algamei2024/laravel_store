<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
          <span>لوحة المعلومات</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>فورمات الاضافة</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('categorie.create')}}">
              <i class="bi bi-circle"></i><span>إضافة صنف</span>
            </a>
          </li>
          <li>
            <a href="{{route('product.create')}}">
              <i class="bi bi-circle"></i><span>إضافة منتج</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>الجداول</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('categorie.index')}}">
              <i class="bi bi-circle"></i><span>جدول الاصناف</span>
            </a>
          </li>
          <li>
            <a href="{{route('product.index')}}">
              <i class="bi bi-circle"></i><span>جدول المنتجات</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">صفحتي</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>الحساب</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-envelope"></i>
          <span>إتصال</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside>