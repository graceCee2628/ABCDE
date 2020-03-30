@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">

        <div class="col-md-3">
            @include('admin._sidebar')
        </div>


        <div class="col-md-9">
            <div class="card">
                <div class="card-header">

                    <h2> LOGS</h2>
                </div>

                <div class="card-body">


                	<a href="/admin/{id}/treated_tickets">Back</a>
			              <div class="modal-content">
			              
			                    <!-- Modal Header -->
			                    <div class="modal-header" >
			                        <h4 class="modal-title" >
			                            <label class="text-primary">Ticket ID:</label>
			                            <label class="text-primary" id="id">{{$logs->ticket_id}}</label>
			                            
			                        </h4>
			         
			                    </div>

			                    <form id="UpdateForm">
			                        {{ csrf_field() }}
			                        <div class="modal-body">
			                            <div class="form-group">

			                                    <div class="row">
			                                        <div class="col-md-3">
			                                            <label name="date">Date Created:</label>
			                                        </div>
			                                        <div class="col-md-9">
			                                            <label  id="date"></label>
			                                        </div>                                
			                                    </div>

			                                    <div class="row">
			                                        <div class="col-md-3">
			                                            <label name="auth">Created by:</label>
			                                        </div>
			                                        <div class="col-md-9">
			                                            <label id="auth"></label>
			                                        </div>                                
			                                    </div>

			                                    <div class="row">
			                                        <div class="col-md-3">
			                                            <label name="priority">Priority:</label>
			                                        </div>
			                                        <div class="col-md-9">
			                                            <label id="priority"></label>
			                                        </div>                                
			                                    </div>

			                                    <div class="row">
			                                        <div class="col-md-3">
			                                            <label name="status">Status:</label>
			                                        </div>
			                                        <div class="col-md-9">
			                                            <label id="status"></label>
			                                        </div>                                
			                                    </div>
			                            </div>
			  
			                        </div>
			                        <div class="modal-footer">

			                        </div>
			                    
			                    </form>

			              </div>
                </div>
                
            </div>

        </div>
        
    </div>

@endsection