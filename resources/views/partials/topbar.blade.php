<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
  </button>

  <a href="#" class="nav-link disabled"><i class="bx bx-time"></i> <!--digital clock start-->
      <div class="datetime">
        <div class="date">
          <span id="dayname">Day</span>,
          <span id="month">Month</span>
          <span id="daynum">00</span>,
          <span id="year">Year</span>
        </div>
        <div class="time">
          <span id="hour">00</span>:
          <span id="minutes">00</span>:
          <span id="seconds">00</span>
          <span id="period">AM</span>
        </div>
      </div>
      <!--digital clock end--></a>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      
      

     

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if(auth()->check() && auth()->user()->is_superadmin === 1)
              <span class="mr-2 d-none d-lg-inline text-primary-600 small">  <font color="blue">SuperAdmin</font></span>
              @endif
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
             
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
              aria-labelledby="userDropdown">
              
              <a class="dropdown-item" href="#">
                  <i class="fas fa-id-card fa-sm fa-fw mr-2 text-gray-400"></i>
                  {{ auth()->user()->name }}
              </a>

              <a class="dropdown-item" href="/user">
                  <i class="fas fa-cogs text-gray-400"></i>
                  Settings
              </a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt text-red-400"></i>
                  Logout
              </a>
          </div>
      </li>

  </ul>

</nav>

<script type="text/javascript">
  function updateClock(){
    var now = new Date();
    var dname = now.getDay(),
        mo = now.getMonth(),
        dnum = now.getDate(),
        yr = now.getFullYear(),
        hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds(),
        pe = "AM";

        if(hou >= 12){
          pe = "PM";
        }
        if(hou == 0){
          hou = 12;
        }
        if(hou > 12){
          hou = hou - 12;
        }

        Number.prototype.pad = function(digits){
          for(var n = this.toString(); n.length < digits; n = 0 + n);
          return n;
        }

        var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var week = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
        var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
        var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
        for(var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
  }

  function initClock(){
    updateClock();
    window.setInterval("updateClock()", 1);
  }
</script>