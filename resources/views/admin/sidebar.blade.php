

 <!-- Sidebar  -->
 <nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="{{ route('dashboard') }}"><img class="logo_icon img-responsive" src="/admin/images/logo/logo_icon.png" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="/admin/images/layout_img/user_img.jpg" alt="#" /></div>
             <div class="user_info">
                <h6>{{ auth()->user()->name }}</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>General</h4>
       <ul class="list-unstyled components">
          <li class="active">
             <a href="{{ route('dashboard') }}" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>

          </li>

          <li>
            <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-level-up yellow_color"></i> <span>Topbars</span></a>
            <ul class="collapse list-unstyled" id="element">
               <li><a href="{{ route('admin.topbar.index') }}">&gt; <span>Topbar</span></a></li>
               <li><a href="{{ route('admin.topbaricon.index') }}">&gt; <span>Topbar Icon</span></a></li>
            </ul>
         </li>

         <li>
            <a href="#about" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-folder-open yellow_color"></i> <span>About</span></a>
            <ul class="collapse list-unstyled" id="about">
               <li><a href="{{ route('admin.about.index') }}">&gt; <span>About</span></a></li>
               <li><a href="{{ route('admin.aboutimg.index') }}">&gt; <span>About Image</span></a></li>
            </ul>
         </li>

         <li>
            <a href="#feature" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-recycle yellow_color"></i><span>Feature</span></a>
            <ul class="collapse list-unstyled" id="feature">
               <li><a href="{{ route('admin.feature.index') }}">&gt; <span>Feature</span></a></li>
               <li><a href="{{ route('admin.featureimg.index') }}">&gt; <span>Feature Image</span></a></li>
            </ul>
         </li>

         <li class="active">
            <a href="{{ route('admin.course.index') }}" ><i class="fa fa-institution yellow_color"></i></i> <span>Courses</span></a>

         </li>


         <li class="active">
            <a href="{{ route('admin.teacher.index') }}" ><i class="fa fa-group yellow_color"></i></i> <span>Teachers</span></a>

         </li>


         <li class="active">
            <a href="{{ route('admin.student.index') }}" ><i class="fa fa-graduation-cap yellow_color"></i> <span>Students</span></a>

         </li>


         <li class="active">
            <a href="{{ route('admin.contact.index') }}" ><i class="fa fa-phone yellow_color"></i> <span>Contact</span></a>

         </li>


       </ul>
    </div>
 </nav>

 </div>

