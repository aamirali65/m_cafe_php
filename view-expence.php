<?php
include('header.php');
include('role_page.php');
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Expense Data</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>

                <li class="breadcrumb-item active">Expense Data</li>
            </ol>
        </div>
        <div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Export</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Price</th>
                                        <th>Paid For</th>
                                        <th>Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($ob->expance_view() as $ovo) {

                                        echo ('
                                            <tr>
                                                <td>' . $ovo['e_id'] . '</td>
                                           		<td>' . $ovo['t_price'] . '</td>
                                                <td>' . $ovo['e_name'] . '</td>
                                                <td>' . $ovo['datee'] . '</td>
											<td><a href="expence.php?exp_id=' . $ovo['e_id'] . '"><i class="fa fa-edit"></i></a>
											
											</td>	
                                               
											   
                                                                                         </tr>
                                          
                                           ');
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->

        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>

    <?php
    include('footer.php');
    ?>