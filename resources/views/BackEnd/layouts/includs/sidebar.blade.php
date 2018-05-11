<div class="sidebar" data-image="{{asset('BackEnd/img/sidebar-5.jpg')}}" data-color="blue">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text">
            Fotoglitz
          </a>
        </div>
        <ul class="nav">
          <li class="nav-item active">
              <a class="nav-link" href="{{ url('/dashboard') }}">
                  <i class="nc-icon nc-chart-pie-35"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li>
              <a class="nav-link" href="{{ url('/user-list') }}">
                  <i class="nc-icon nc-circle-09"></i>
                  <p>User List</p>
              </a>
          </li>
          <li>
              <a class="nav-link" href="{{ url('/request-list') }}">
                  <i class="nc-icon nc-paper-2"></i>
                  <p>Trail Request</p>
              </a>
          </li>
        </ul>
    </div>
</div>
