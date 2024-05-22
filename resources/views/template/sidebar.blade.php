  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Logo -->
      <a href="index3.html" class="brand-link">
          <img class="logoutama" src="/asset/logo.png" alt="logo panrb">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <div class="d-flex" style="margin-top: 40px">
              <div class="info">
                  <a href="/" class="d-block">MENU</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-1">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="/" class="nav-link {{ @$page == 'dashboard' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-th-large" style="color: #B5565D"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/penilaian" class="nav-link {{ @$page == 'penilaian' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tasks" style="color: #B5565D;"></i>
                          <p>
                              Tugas Penilaian Mandiri
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/bagians" class="nav-link {{ @$page == 'bagians' ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tasks" style="color: #B5565D;"></i>
                          <p>
                              Bagian
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="/bantuan" class="nav-link {{ @$page == 'bantuan' ? 'active' : '' }}">
                          <i class="nav-icon far fa-question-circle" style="color: #B5565D;"></i>
                          <p>
                              Bantuan
                          </p>
                      </a>
                  </li>
                  {{-- <li class="nav-item">
                      <a href="/bantuan" class="nav-link {{ @$page == 'bantuan' ? 'active' : '' }}">
                        <i class="nav-icon far fa-question-circle" style="color: #B5565D;"></i>
                          <p>
                              Bantuan
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/bantuan" class="nav-link">
                                <i class="fas fa-question-circle" style="color: #B5565D;"></i>
                                  <p>Pusat Bantuan</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/infoweb" class="nav-link">
                                <i class="fas fa-info-circle" style="color: #B5565D;"></i>
                                  <p>Info Website</p>
                              </a>
                      </ul>
                  </li> --}}
              </ul>
          </nav>
      </div>
      <!-- /.sidebar -->
  </aside>
