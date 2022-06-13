@auth

      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">


              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('admin.project.index')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-animation"></i
                  ><span class="hide-menu">Projeler</span></a
                >
              </li>





              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('admin.category.index')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Kategoriler</span></a
                >
              </li>


              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('admin.user.index')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span class="hide-menu">Kullanıcılar</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="/admin/comment"
                  aria-expanded="false"
                  ><i class="mdi mdi-comment-text"></i
                  ><span class="hide-menu">Yorumlar</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('admin.faq.index')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-comment-question-outline"></i
                  ><span class="hide-menu">SSS</span></a
                >

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="{{route('admin.message.index')}}"
                  aria-expanded="false"
                  ><i class="mdi mdi-message"></i
                  ><span class="hide-menu">Mesajlar</span></a
                >

              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="/admin/setting"
                  aria-expanded="false"
                  ><i class="mdi mdi-settings"></i
                  ><span class="hide-menu">Ayarlar</span></a
                >

              </li>


              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="/admin/evaluation"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-bar"></i
                  ><span class="hide-menu">Değerlendirmeler</span></a
                >
              </li>



            </li>



            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->

      @else

      <?php
        header("refresh:0;url=http://127.0.0.1:8000/loginadmin");
      ?>

      @endauth
