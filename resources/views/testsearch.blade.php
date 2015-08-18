@extends('layouts.master')
@section('title')
View Ticket
@stop
@section('body')
<!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->


 <!--BEGIN CONTENT-->
                <div class="page-content">
        <div class="panel panel-green">
         <p>Ticket</p>
        <div class="panel-heading">

         <span>{{$showy}}&nbsp;</span>
                <span>&nbsp;{{$showb}}</span>
                <span>&nbsp;&nbsp;{{$showmodelname}}</span>
       
        </div>
   
               
            
        

                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                            </div>
                            <div class="col-lg-12">
                            <div class="col-lg-12">
                            <ul id="generalTab" class="nav nav-tabs responsive">
                            <li class="active"><a href="#alert-tab" data-toggle="tab">Car</a></li>
                            <li><a href="#note-tab" data-toggle="tab">Ticket</a></li>
                           
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="alert-tab" class="tab-pane fade in active">
                                <div class="row">
                                  
                                   {!! Form::open(['id'=>'demoForm','class'=>'demoForm']) !!}
                <div class="col-md-3">
                    <div class="form-group">
                       <select name="year" id="year" size="15" >
                            <option>Select Year</option>

                            @foreach($gentkyear as $r=>$t)
                            <option value="{{$r}}">{{$t}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-md-3">
                <div class="form-group">  
                   <select name="brand_name" id="brand_name" size="15"  onchange='this.form.submit()'>
                     <option>Select Brand</option>
                            @foreach($gentkbrand as $b=>$d)
                            <option value="{{$b}}">{{$d}}</option>
                            @endforeach
                    </select>
                </div>
                </div>

                <noscript>{!!Form::submit('Submit',['class'=>'','type'=>'submit','value'=>'Submit'])!!}</noscript>
                
                {!!Form::close()!!}
                <div class="col-md-3">
                <div class="form-group">  
                   <select  size="15" data-toggle="modal" data-target="#myModal" multiple>
                     <option>All Series</option>
                            @foreach($gentkmodel as $v=>$s)
                            <option value="{{$v}}">{{$s}}</option>
                            @endforeach
                    </select>
                </div>
                </div>

                                </div>
                            </div>
                            <div id="note-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-6">
                                            <p>{{$clientview->name}}</p>
                                            <p>{{$clientview->car_num}}</p>
                                            <p>{{$clientview->phone}}</p>
                                            <p>{{$clientview->address}}</p>
                                    </div>
                                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Username</th>
        <th>Date registered</th>
        <th>Role</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>David R</td>
        <td class="center">2012/01/01</td>
        <td class="center">Member</td>
        <td class="center">
            <span class="label-success label label-default">Active</span>
        </td>
        <td class="center">
            <a class="btn btn-success" href="#">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                View
            </a>
            <a class="btn btn-info" href="#">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="#">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
</tbody>
    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                            
                            
                            </div>
                            
                        </div>
                    </div>
                    </div>
                </div>
                <!--END CONTENT-->

 <!-- Modal First Step Start-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
              <div>
                <span>{{$showy}}&nbsp;</span>
                <span>&nbsp;{{$showb}}</span>
                <span>&nbsp;&nbsp; {{$showmodelname}}</span>
            </div>
          </h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class=" col-md-3"><a href="#" class="thumbnail"><button class="btn btn-success btn-lg btn-block"  data-toggle="modal" data-target="#myModal1"><img src="images/garage/1.jpg" alt="" class="img-responsive"/></button></a></div>
                <div class=" col-md-3"><a href="#" class="thumbnail"><button class="btn btn-success btn-lg btn-block"  data-toggle="modal" data-target="#myModal2"><img src="images/garage/2.jpg" alt="" class="img-responsive"/></button></a></div>
                <div class=" col-md-3"><a href="#" class="thumbnail"><button class="btn btn-success btn-lg btn-block"  data-toggle="modal" data-target="#myModal3"><img src="images/garage/3.jpg" alt="" class="img-responsive"/></button></a></div>
                <div class=" col-md-3"><a href="#" class="thumbnail"><button class="btn btn-success btn-lg btn-block"  data-toggle="modal" data-target="#myModal4"><img src="images/garage/4.jpg" alt="" class="img-responsive"/></button></a></div>   
            </div>
            <div class="row">
                <div class="col-md-3"><a href="#" class="thumbnail"><button class="btn btn-success btn-lg btn-block"   data-toggle="modal" data-target="#myModal5"><img src="images/garage/5.jpg" alt="" class="img-responsive"/></button></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/6.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/7.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/8.jpg" alt="" class="img-responsive"/></a></div>
            </div>
            <div class="row">
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/9.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/10.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/11.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/12.jpg" alt="" class="img-responsive"/></a></div>
            </div>
            <div class="row">
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/13.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/14.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/15.jpg" alt="" class="img-responsive"/></a></div>
                <div class="col-md-3"><a href="#" class="thumbnail"><img class="btn btn-success btn-lg btn-block" src="images/garage/16.jpg" alt="" class="img-responsive"/></a></div>
        
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal First Step End-->
<!-- Modal Second One Step Start-->
<br><br>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog" style="width:600px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><div>
                <span>{{$showy}}&nbsp;</span>
                <span>&nbsp;{{$showb}}</span>
                <span>&nbsp;&nbsp; {{$showmodelname}}</span>
            </div></h4>
        </div>
        <div class="modal-body">
                 @foreach($dnos as $d)
                    <a href="" >{{$d->adjustments}}</a></br>
                    <a href="" >{{$d->car_symptoms_engine_performance}}</a></br>
                    <a href="" >{{$d->car_symptoms_starting_lights}}</a></br>
                    <a href="" >{{$d->car_symptoms_noises_comforts}}</a></br>
                    <a href="" >{{$d->car_symptoms_vibrations_leaks}}</a></br>
                    <a href="" >{{$d->check_outs}}</a></br>
                    <a href="" >{{$d->comments_wo_prices}}</a></br>
                    <a href="" >{{$d->diagnostic_charges}}</a></br>
                    <a href="" >{{$d->mileage_services}}</a></br>
                    <a href="" >{{$d->road_services_towing}}</a></br>
                
               @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Second One Step End-->
<!-- Modal Second One+One Step Start-->
<br><br>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" style="width:600px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><div>
                <span>{{$showy}}&nbsp;</span>
                <span>&nbsp;{{$showb}}</span>
                <span>&nbsp;&nbsp; {{$showmodelname}}</span>
            </div></h4>
        </div>
        <div class="modal-body">
                 @foreach($electronics as $d)
                    <a href="" >{{$d->air_suspension_system}}</a></br>
                    <a href="" >{{$d->control_modules}}</a></br>
                    <a href="" >{{$d->fuel_injection}}</a></br>
                    <a href="" >{{$d->idle_speed}}</a></br>
                    <a href="" >{{$d->ignition}}</a></br>
                    <a href="" >{{$d->relays}}</a></br>
                    <a href="" >{{$d->ride_control}}</a></br>
                    <a href="" >{{$d->sensors}}</a></br>
                    <a href="" >{{$d->solenoids}}</a></br>
                    <a href="" >{{$d->switches}}</a></br>
                    <a href="" >{{$d->vacuum}}</a></br>
                    <a href="" >{{$d->test_adjust}}</a></br>
               @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Second One+One Step End-->
<!-- Modal Second One+Two Step Start-->
<br><br>
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog" style="width:600px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><div>
                <span>{{$showy}}&nbsp;</span>
                <span>&nbsp;{{$showb}}</span>
                <span>&nbsp;&nbsp; {{$showmodelname}}</span>
            </div></h4>
        </div>
        <div class="modal-body">
                 @foreach($exhaust as $d)
                    <a href="" >{{$d->air_mgmt_system}}</a></br>
                    <a href="" >{{$d->computer_controls}}</a></br>
                    <a href="" >{{$d->egr_system}}</a></br>
                    <a href="" >{{$d->evaporative}}</a></br>
                    <a href="" >{{$d->exhaust}}</a></br>
                    <a href="" >{{$d->fuel_controllers}}</a></br>
                    <a href="" >{{$d->sensors}}</a></br>
                    <a href="" >{{$d->test_adjust}}</a></br>
                    <a href="" >{{$d->quick_job}}</a></br>
                    
               @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Second One+Two Step End-->
<!-- Modal Second One+Three Step Start-->
<br><br>
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog" style="width:600px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><div>
                <span>{{$showy}}&nbsp;</span>
                <span>&nbsp;{{$showb}}</span>
                <span>&nbsp;&nbsp; {{$showmodelname}}</span>
            </div></h4>
        </div>
        <div class="modal-body">
                 @foreach($heat as $d)
                    <a href="" >{{$d->accumulator}}</a></br>
                    <a href="" >{{$d->belts_hoses}}</a></br>
                    <a href="" >{{$d->cab_sleepers}}</a></br>
                    <a href="" >{{$d->compressor}}</a></br>
                    <a href="" >{{$d->controllers_heater}}</a></br>
                    <a href="" >{{$d->evaporator_condensor}}</a></br>
                    <a href="" >{{$d->heater_blower}}</a></br>
                    <a href="" >{{$d->diagnostic_charges}}</a></br>
                    <a href="" >{{$d->switchs_relays}}</a></br>
                    <a href="" >{{$d->test_adjust}}</a></br>
                    <a href="" >{{$d->quick_job}}</a></br>
                
               @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Second One+Three Step End-->
<!-- Modal Second One+Three Step Start-->
<br><br>
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog" style="width:600px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:100%">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><div>
                <span>{{$showy}}&nbsp;</span>
                <span>&nbsp;{{$showb}}</span>
                <span>&nbsp;&nbsp; {{$showmodelname}}</span>
            </div></h4>
        </div>
        <div class="modal-body">
                 @foreach($dnos as $d)
                    <a href="" >{{$d->adjustments}}</a></br>
                    <a href="" >{{$d->car_symptoms_engine_performance}}</a></br>
                    <a href="" >{{$d->car_symptoms_starting_lights}}</a></br>
                    <a href="" >{{$d->car_symptoms_noises_comforts}}</a></br>
                    <a href="" >{{$d->car_symptoms_vibrations_leaks}}</a></br>
                    <a href="" >{{$d->check_outs}}</a></br>
                    <a href="" >{{$d->comments_wo_prices}}</a></br>
                    <a href="" >{{$d->diagnostic_charges}}</a></br>
                    <a href="" >{{$d->mileage_services}}</a></br>
                    <a href="" >{{$d->road_services_towing}}</a></br>
                
               @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Second One+Three Step End-->


@stop







