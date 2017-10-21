<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Location</h4>
</div>
<div class="modal-body">
    <div class="table-responsive">
        <table class="table table-bordered mb30">
            <tbody>
                <tr>
                    <td class="col-sm-2"><strong>Location</strong></td>
                    <td class="col-sm-4">{!! $location->location !!}</td>
                </tr>
                <tr>
                    <td class="col-sm-2"><strong>Location Local</strong></td>
                    <td class="col-sm-4">{!! $location->location_local !!}</td>
                </tr> 
                <tr>
                    <td class="col-sm-2"><strong>Contact Person</strong></td>
                    <td class="col-sm-4">{!! $location->contact_person !!}</td>
                </tr>
                <tr>
                    <td class="col-sm-2"><strong>Contact No</strong></td>
                    <td class="col-sm-4">{!! $location->contact_no !!}</td>
                </tr>
                <tr>
                    <td class="col-sm-2"><strong>E-mail</strong></td>
                    <td class="col-sm-4">{!! $location->email !!}</td>
                </tr>
                <tr>
                    <td class="col-sm-2"><strong>Website</strong></td>
                    <td class="col-sm-4">{!! $location->website !!}</td>
                </tr> 
                <tr>
                    <td class="col-sm-2"><strong>Address</strong></td>
                    <td class="col-sm-4">{!! $location->address !!}</td>
                </tr>
                <tr>
                    <td class="col-sm-2"><strong>Remarks</strong></td>
                    <td class="col-sm-4">{!! $location->remarks !!}</td>
                </tr>
                <tr>
                    <td class="col-sm-2"><strong>Company</strong></td>
                    <td class="col-sm-4">{!! array_get(config('common_array.company_array'),$location->company_id) !!}</td>
                </tr>
                <tr>
                    <td class="col-sm-2"><strong>Status</strong></td>
                    <td class="col-sm-4">{!! array_get(config('common_array.status_active'),$location->status) !!}</td>
                </tr>                    
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
    <script>
		/*$(".modal").on("hidden.bs.modal", function(){
			alert("su..re");
			$(".modal-body").html("");
		});*/
		$('#myModal').on('hidden', function() {
			$(this).removeData('modal');
		});
	</script>
