<div id="page-wrapper">

  <div class="container-fluid">

    <!-- Page Heading -->
    <!-- Star row-->
    <div class="row">
      <div class="col-sm-12">
        <h1 class="page-header">
          <small>Contact</small>
        </h1>
        <ol class="breadcrumb">
         <li class="active"> <i class="fa fa-home"></i> <a href="<?php echo base_url("backend/index/display")?>">Home</a></li><li><i class="fa fa-pencil"></i> <a href="<?php echo base_url("backend/contact")?>">จัดการข้อมูลการติดต่อ</a></li>
       </ol>
     </div>
   </div></br></br>

   <div class="row"> 
    <div class="col-sm-12 ">
      <center>
        <form enctype="multipart/form-data" id="" method="post" class="form-horizontal" >
          <table >
            <tr>
             <td>
              <td><input type="date" class="form-control"   name=""></td>
              <td><button class="btn btn-success" type="submit" ><i class="fa fa-search"></i> ค้นหา</button></td>
              <td ><button class="btn btn-success" type="reset" >ล้างข้อมูล</button> </td>
            </td>

          </tr>
        </table>
      </form>
    </center>
    <!-- /input-group -->
  </div>
</div><br>        


<!-- Search-->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">ข้อมูลบุคลากร</div>
      <div class="panel-body">

        <table class="table table-striped">

          <tr class="bg-success">
            <th width="5%">#</th>
            <th width="20%">ชื่อบริษัท</th>
            <th width="30%">ชื่อ-สุกลผู้ติดต่อ</th>
            <th width="30%">หัวข้อติดต่อ</th>
            <th></th>
            <th></th>

          </tr>



          <tr class="bg-success">
            <td></td>
            <td></td>
            <td></td> 
            <td></td>  
            <td><button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-viewperson"><i class="fa fa-eye"></i>  ดู</button></td>         
           <td><a target ="_blank" href="<?php echo base_url('backend/contact/deletecontact/'.$row->Ne_id)?>")?><button type="button" class="btn btn-warning" data-toggle ="modal" ><i class="fa fa-times"></i> ลบ</button></a></td>   
          </tr>
          <form id="" method="post" class="form-horizontal"  >

            <div class="modal fade bs-example-modal-lg-viewperson"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                 <div class="row">
                   <div class="col-lg-9 col-lg-offset-1">
                    <hr>
                    <center><h3>ข้อมูลการติดต่อ</h3></center><br> 
                    <center>

                     <div class="form-group">
                       <label class="col-lg-2 control-label">ชื่อบริษัท</label>
                       <div class="col-lg-4">
                        <input type="text" class="form-control" value="" name=""/>
                      </div>
                      <label class="col-lg-2 control-label">ชื่อ-สกุล ผู้ติดต่อ</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" value="" name=""/>
                      </div>
                    </div>
                    <br><br><br>

                    <div class="form-group">
                      <label class="col-lg-2 control-label">หัวข้อ</label>
                      <div class="col-lg-4">
                        <input type="text" class="form-control" value="" name="">
                      </div>
                      <label class="col-lg-2 control-label">รายละเอียด</label>
                      <div class="col-lg-4">
                        <textarea class="form-control" name="" rows="3" cols="60"></textarea>
                      </div>
                    </div><br><br>

                    <div class="form-group">
                    <label class="col-lg-2 control-label">E-mail</label>
                      <div class="col-lg-4">
                        <input type="email" class="form-control" value="" name="">
                      </div>
                    </div><br><br>

                  </div>
                </div>

                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
           </div>
         </div>

       </form>


     </table> 






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