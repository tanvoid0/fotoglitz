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
                <a class="nav-link" href="{{ url('/') }}">
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
                <a class="nav-link" href="./table.html">
                    <i class="nc-icon nc-notes"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./typography.html">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./icons.html">
                    <i class="nc-icon nc-atom"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./maps.html">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Maps</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./notifications.html">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item active active-pro">
                <a class="nav-link active" href="upgrade.html">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>
