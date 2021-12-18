 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="{{url('/')}}" class="brand-link">
     <img src="{{ asset('/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Global Business Solution</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{(!empty(Auth::user()->image))?url('upload/user_images/'.Auth::user()->image):url('upload/no-image.png')}}" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">{{ Auth::user()->name}}</a>
       </div>
     </div>
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fas fas fa-user"></i>
             <p>
               Management
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('users.view')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>User List</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('profile.view')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Profile View</p>
               </a>
             </li>
            
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fas fas fa-user"></i>
             <p>
               Website Setting
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('logos.view')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Manage Logo</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('sliders.view')}}" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Manage Banner</p>
               </a>
             </li>
            
           </ul>
         </li>
 
        
           
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>