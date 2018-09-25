<div class="layout-content">
    <div class="layout-content-body">
        <div class="row gutter-xs">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Manage Order</strong>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?= base_url().'Admin/export_product' ?>">
                           <button name="export" type="submit" class="btn-xs btn-primary">EXPORT</button>
                        </form>
                            <table id="demo-datatables-fixedheader-2" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Customer Email.</th>
                                <th>Customer Country</th>
                                <th>Customer City</th>
                                <th>Customer Address</th>
                                <th>Total amount Paid</th>
                                <th>Zip Code</th>
                                <th>Date Time</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($ordersdata as $ordersdata ){?>
                                <tr>
                                    <td><?php echo $ordersdata->id?></td>
                                    <td><?php echo $ordersdata->customer_email?></td>
                                    <td><?php echo $ordersdata->customer_country?></td>
                                    <td><?php echo $ordersdata->customer_city?></td>
                                    <td><?php echo $ordersdata->customer_address?></td>
                                    <td><?php echo $ordersdata->total_amount?></td>
                                    <td><?php echo $ordersdata->customer_zipcode?></td>
                                    <td><?php echo date('Y-m-d h:i a',strtotime($ordersdata->date_time))?></td>
                                    <td>
                                        <?php $status = array('Approved','Deliverd','Pending','Shipment');?>
                                        <form method="post" class="form">
                                            <input type="hidden" name="order_id" value="<?php echo $ordersdata->id?>">
                                            <select name="status" class="" onchange="this.form.submit()">
                                                <?php foreach($status as $row):?>
                                                    <?php if($row == $ordersdata->status):?>
                                                        <option value="<?=$row?>" selected><?=$row?></option>
                                                    <?php else:?>
                                                        <option value="<?=$row?>"><?=$row?></option>
                                                    <?php endif?>
                                                <?php endforeach;?>
                                                
                                            </select>
                                        </form>
                                        
                                            
                                        </td>
                                  </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= base_url() ?>backend_assets/<?= $theme ?>/sweetalert/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>backend_assets/<?= $theme ?>/sweetalert/core.js"></script>
<script>
    $('.sidenav-toogler').prop('aria-expanded',false);
    function validate(a)
    {
        var id= a.value;
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            animation: false,
            customClass: 'animated pulse',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: true,
            reverseButtons: true
        }).then( function(result) {
            if (result.value) {

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url()?>Admin/delete_product/',
                    data: {'id': id}
                }).then(function(res){
                    $(a).closest('tr').remove();
                    swal('Deleted!', 'Product has been Deleted.', 'success');
                }, function(err){
                    swal('Error', err.statusText, 'error');
                });



            } else if (result.dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
<script>
    function validate1(a)
    {
        var id= a.value;
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            animation: false,
            customClass: 'animated pulse',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Enable it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: true,
            reverseButtons: true
        }).then( function(result) {
            if (result.value) {

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url()?>Admin/enable_feature_product/',
                    data: {'id': id}
                }).then(function(res){
                    //$(a).closest('tr').remove();
                    swal('Enabled!', 'Feature Product has been Enable.', 'success');
                }, function(err){
                    swal('Error', err.statusText, 'error');
                });



            } else if (result.dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
<script>
    function validate2(a)
    {
        var id= a.value;
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            animation: false,
            customClass: 'animated pulse',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Disable it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: true,
            reverseButtons: true
        }).then( function(result) {
            if (result.value) {

                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url()?>Admin/disable_feature_product/',
                    data: {'id': id}
                }).then(function(res){
                    //$(a).closest('tr').remove();
                    swal('Disabled!', 'Feature Product has been Disable.', 'success');
                }, function(err){
                    swal('Error', err.statusText, 'error');
                });



            } else if (result.dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
