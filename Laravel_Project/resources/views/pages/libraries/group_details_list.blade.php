<fieldset style="width:700px;">
      	<legend>List View</legend>
        
        <table class="rpt_table" width="700" cellspacing="0" cellpadding="0" border="0" rules="all">
            <thead>
                <tr style="height:2px;">
                    <th width="35">SL</th>
                    <th width="130">Group Name</th>
                    <th  width="125">Contact Person</th>
                    <th width="125">Contact no</th>
                    <th width="130">Website</th>
                    <th width="80">Status</th>
                    <th>Action</th>
                </tr>
            </thead>
         </table>
          <div style="height:200px; overflow:scroll">
             <table class="rpt_table" width="700" cellspacing="0" cellpadding="0" border="0" rules="all">
                <tbody>
                <?php $i=1;?>
                @foreach ($details as $row)
                  <tr>
                   	<td width="35" align="center">{!! $i++; !!} </td>
                    <td width="130">{!! $row->group_name !!} </td>
                    <td width="125">{!! $row->contact_person !!} </td>
                    <td width="125">{!! $row->contact_number !!} </td>
                    <td width="130">{!! $row->website !!} </td>
                    <td width="80">{!! $status[$row->status] !!} </td>
                    <td width="">
                        <a href="{!! route('groupEdit',$row->id)!!}" class="btn btn-primary btn-sm" style=""><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="{!! route('groupDelete',$row->id)!!}" class="btn btn-primary btn-sm" style=""><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
      </fieldset>