@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-3">
            @include('admin._sidebar')
        </div>


        <div class="col-md-9">
            <div class="card">
                <div class="card-header">

                    <h2>Treated Tickets</h2>
                </div>

                <div class="card-body">
                    @if(count($tickets)>0)
                    
                    <table class="table table-sm table-info table-striped">
                        <thead class="thead">
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($tickets as $ticket)
                          <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->title}}</td>
                            <td>{{$ticket->body}}</td>
                            <td>{{$ticket->priority}}</td>
                            <td>{{$ticket->status}}</td>
                            <td>{{$ticket->created_at}}</td>
                            <td>
                               <a href="/admin/{{$ticket->id}}/view_ticket" class="btn btn-primary btn-sm view " id="{{$ticket->id}}">View</a> 
                            </td>
                            <td>
                               <a href="/admin/{{$ticket->id}}/viewlogs" class="btn btn-secondary btn-sm logs " id="{{$ticket->id}}">Logs</a> 
                            </td>
                        
                          </tr>
                           @endforeach
                        </tbody>
                  </table>
                  @endif
                </div>
                
            </div>

        </div>
     </div> 










<script type="text/javascript">
    
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


           $('.logs').on('click', function(e){
              e.preventDefault();
            //  $('#myModal').modal('show');
              var id = this.id;
              $.ajax({
                      url:'/admin/'+id+'/printlogs',
                      method:'GET',
                      data:{
                          id

                      },
                      success:function(response){
                        for(var i = 0; i> response.length ; i++ ){
                          console.log(response[i].fieldname);

                          window.location.assign('/admin/' + response + '/printlogs');

                        }

                      },
                      error:function(error){
                        console.log(error); 
                      }                

              });
        




                

            });

        }); */ 

</script>    

@endsection