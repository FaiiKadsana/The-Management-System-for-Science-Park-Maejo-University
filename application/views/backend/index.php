<style type=”text/css”>
.calendar {
font-family: Arial; font-size: 12px;
}
table.calendar {
margin: auto; border-collapse: collapse;
}
.calendar .days td {
width: 60px; height: 60px; padding: 4px;
border: 1px solid #999;
vertical-align: top;
background-color: #DEF;
}
.calendar .days td:hover {
background-color: #FFF;
}
.calendar .highlight {
font-weight: bold; color: #00F;
}
</style>

      
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
         <small>Home</small>
       </h1>
       <ol class="breadcrumb">
         <li><i class="active"> <i class="fa fa-home"></i></i><a href="<?php echo base_url("backend/index/display")?>"> Home</a></li>
       </ol>
     </div>
   </div>
   <!-- /.row -->
   <div class="row cal" >
    <div class="col-sm-10 portlets " >
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2><strong>Calendar</strong></h2>
        </div><br>
        <div class="panel-body">
          <!-- Calenda -->
          <!-- Below line produces calendar. I am using FullCalendar plugin. -->
          <div id="calendar">
           <?php echo $calendar; ?>

         
         </div>
       </div>
     </div>               
   </div>
 </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

