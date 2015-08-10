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
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <h1>OK</h1>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<div class="page-content">
    <div class="panel panel-green">
        <div class="panel-heading">
           Search Car Model Information According to Year
          </span>
            </div>
            
        </div>
            <div class="panel-body pan">
            <div class="form-body pal">

                <div class="row">
                {!! Form::open(['id'=>'demoForm','class'=>'demoForm']) !!}
                <div class="col-md-3">
                    <div class="form-group">
                       <select name="year" size="15" >
                            <option>Select Year</option>

                            @foreach($gentkyear as $r=>$t)
                            <option value="{{$r}}">{{$t}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">  
                   <select name="brand_name"  size="15"  onchange='this.form.submit()'>
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
            </div>
    </div>
</div>

@stop







