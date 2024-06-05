  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Logo -->
      <a href="#" class="brand-link">
          <img class="logoutama" src="/asset/lgkab.jpg" alt="logo panrb" style="width: 110px; height: 50px;">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <div class="d-flex" style="margin-top: 40px">
              <div class="info">
                  <a href="/" class="d-block">MENU</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          @if (Auth::user()->level == 'admin')
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
                          <a href="/users" class="nav-link {{ @$page == 'user' ? 'active' : '' }}">
                              <i class="nav-icon fas fa-user-tie fa-fw" style="color: #B5565D;"></i>
                              <p>
                                  User
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="/users" class="nav-link">
                                      <i class="fas fa-eye fa-fw nav-icon" style="color: #B5565D;"></i>
                                      <p>Daftar User</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="/users/create" class="nav-link">
                                      <i class="fas fa-plus-circle fa-fw nav-icon" style="color: #B5565D;"></i>
                                      <p>Tambah User</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      {{-- <li class="nav-item">
                          <a href="/bagians" class="nav-link {{ @$page == 'bagian' ? 'active' : '' }}">
                              <i class="nav-icon fas fa-tasks" style="color: #B5565D;"></i>
                              <p>
                                  Bagian
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="/bagians" class="nav-link">
                                      <i class="fas fa-eye fa-fw nav-icon" style="color: #B5565D;"></i>
                                      <p>Daftar Bagian</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="/bagians/create" class="nav-link">
                                      <i class="fas fa-plus-circle fa-fw nav-icon" style="color: #B5565D;"></i>
                                      <p>Tambah Bagian</p>
                                  </a>
                              </li>
                          </ul>
                      </li> --}}
                      <li class="nav-item">
                          <a href="/bagians" class="nav-link {{ @$page == 'indikator' ? 'active' : '' }}">
                              <i class="nav-icon fas fa-book-open" style="color: #B5565D;"></i>
                              <p>
                                  Indikator
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="/adm/indikator" class="nav-link">
                                      <i class="fas fa-eye fa-fw nav-icon" style="color: #B5565D;"></i>
                                      <p>Daftar Indikator</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="/adm/indikator/create" class="nav-link">
                                      <i class="fas fa-plus-circle fa-fw nav-icon" style="color: #B5565D;"></i>
                                      <p>Tambah Indikator</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                        <a href="/penilaian" class="nav-link {{ @$page == 'penilaian' ? 'active' : '' }}">
                            <i class="nav-icon far fa-newspaper" style="color: #B5565D;"></i>
                            <p>
                                Tugas Penilaian Mandiri
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/task" class="nav-link">
                                    <i class="fas fa-eye fa-fw nav-icon" style="color: #B5565D;"></i>
                                    <p>Daftar Tugas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/task/create" class="nav-link">
                                    <i class="fas fa-plus-circle fa-fw nav-icon" style="color: #B5565D;"></i>
                                    <p>Tambah Tugas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/penilaian" class="nav-link">
                                    <i class="fas fa-check-circle fa-fw nav-icon" style="color: #B5565D;"></i>
                                    <p>Pilih & Lihat Tugas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                      {{-- <li class="nav-item">
                          <a href="/penilaian" class="nav-link {{ @$page == 'penilaian' ? 'active' : '' }}">
                              <i class="nav-icon far fa-newspaper" style="color: #B5565D;"></i>
                              <p>
                                  Tugas Penilaian Mandiri
                              </p>
                          </a>
                      </li> --}}
                      <li class="nav-item">
                          <a href="/bantuan" class="nav-link {{ @$page == 'bantuan' ? 'active' : '' }}">
                              <i class="nav-icon far fa-question-circle" style="color: #B5565D;"></i>
                              <p>
                                  Bantuan
                              </p>
                          </a>
                      </li>
                  </ul>
              </nav>
              <!-- Sidebar Menu -->
          @else
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
                          <a href="/bantuan" class="nav-link {{ @$page == 'bantuan' ? 'active' : '' }}">
                              <i class="nav-icon far fa-question-circle" style="color: #B5565D;"></i>
                              <p>
                                  Bantuan
                              </p>
                          </a>
                      </li>
                  </ul>
              </nav>
          @endif
      </div>
      <!-- /.sidebar -->
  </aside>
