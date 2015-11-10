<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav side-nav">
   <li class="active">
    <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-pencil"></i>  จัดการโครงการ <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="demo1" class="collapse">
      <li><a class="" href="<?php echo base_url("backend/project_service")?>">Service Platform</a></li>
      <li><a class="" href="<?php echo base_url("backend/project_coresearch")?>">Co-Research Platform</a></li>
      <li><a class="" href="<?php echo base_url("backend/project_irct")?>">IRTC Platform</a></li>                          
      <li><a class="" href="<?php echo base_url("backend/project_tbi")?>">TBI Platform</a></li>
    </ul>
  </li>
  <li>
    <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-file"></i> จัดการข้อเสนอโครงการ <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="demo2" class="collapse">
      <li><a class="" href="<?php echo base_url("backend/service")?>">Service Platform</a></li>
      <li><a class="" href="<?php echo base_url("backend/coresearch")?>">Co-Research Platform</a></li>
      <li><a class="" href="<?php echo base_url("backend/irtc")?>">IRTC Platform</a></li>                          
      <li><a class="" href="<?php echo base_url("backend/tbi")?>">TBI Platform</a></li>
    </ul>
  </li>
  <li >
    <a href="index.html"><i class="fa fa-shopping-cart"></i> จัดการการซื้อขายงานวิจัย</a>
  </li>
  <li>
    <a href="<?php echo base_url("backend/catalog")?>"><i class="fa fa-list"></i> จัดการแค็ตตาล็อก</a>
  </li>
  <li>
    <a target ="_blank"  href="http://stdb.most.go.th/"><i class="fa fa-search"></i></i> ค้นหาข้มูลนักวิจัย</a>
  </li>
  <li>
    <a href="<?php echo base_url("backend/news")?>"><i class="fa fa-bullhorn"></i> จัดการข่าวประชาสัมพันธ์</a>
  </li>
  <li>
    <a href="<?php echo base_url("backend/person")?>"><i class="fa fa-user"></i> จัดการข้อมุลบุคลากร</a>
  </li>
</ul>
</div>
<!-- /.navbar-collapse -->
</nav>