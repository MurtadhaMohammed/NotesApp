
      <div class="row">
  	<div class="progress col-xs-12" ></div>
  </div>
   @foreach($all as $row)
    
     <div class="row list-group-item page-title-list">
  
   <div id="test" class="col-xs-8 font-size">
   	  {{$row->fname}} {{$row->lname}}
   </div>

   <div class="col-xs-4">

   	  <button id="delete" value="{{$row->id}}"  class="btn btn-danger pull-right">delete</button>
   </div>
   </div>
     @endforeach 
        <div class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Modal header</h3>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div>

   <script type="text/javascript">
       
       $(function() {
       	 
          $('.progress').hide();

           $(document).on('click','#delete',function(){
                var id=$(this).val();
                $.ajax({
                url:'delete/'+id,
                type: 'GET',
                beforeSend:function(){
                	$('.progress').show();
                    $('.progress').html('<img class="center-block" src="img/progress.gif"/>');


                },
                success: function(msg) {
                	$('.c2').load('all');

                }
               });
                

            });
        });
 
    </script>
