<?php
include('header.php');

?>
<div class="page-wrapper" style="padding-bottom: 100% !important;">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <li class="breadcrumb-item active">Items</li>
            </ol>
        </div>
        <div class="">

        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h3 class="box-title m-b-0">Paid Items</h3>
                    <p class="text-muted m-b-30 font-13">Items </p>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="st_from">Start From</label>
                            <input type="text" id="st_from" name="" class="form-control" />


                        </div>
                        <div class="col-md-5">
                            <label for="st_from">End To</label>
                            <input type="text" id="end_to" name="" class="form-control" />
                        </div>





                        <div class="col-md-2">
                            <br>
                            <button class="btn btn-success btn-block" id="filter_today" onclick="filter_today()">
                                Filter
                            </button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">


                            <table class="table">
                                <tr>

                                    <th>Item Name</th>
                                    <th>Qty</th>
                                    <th>Total Sale</th>

                                </tr>

                                <tbody id="td_body">

                                    <?php

                                    $ob->paid_items();

                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>
            </div>


        </div>

        <script>
            function filter_today() {
                var filter_today = document.getElementById('filter_today');
                var from_date = document.getElementById('st_from').value;
                var end_date = document.getElementById('end_to').value;
                filter_today.innerHTML = '';
                filter_today.innerHTML = '<div class="spinner-border" role="status"> <span class="sr-only">Loading...</span> </div>';


                $.ajax({
                    type: "get",
                    url: "main.php",
                    data: {
                        paid_today: "",
                        st: from_date,
                        end: end_date
                    },
                    success: function(response) {
                        filter_today.innerHTML = '';
                        filter_today.innerHTML = 'Filter';
                        document.getElementById("td_body").innerHTML = response;
                    }
                });

            }
        </script>
         <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $("#end_to").datepicker();
    $("#st_from").datepicker();

    
  });
  </script>