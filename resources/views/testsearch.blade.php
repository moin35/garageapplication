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
           
             <div>
                <span id="display" >&nbsp;</span>
            </div>
            <div>
                <span id="display" >&nbsp;</span>
            </div>
        </div>
            <div class="panel-body pan">
            <div class="form-body pal">

                <div class="row">
                {!! Form::open(['id'=>'demoForm','class'=>'demoForm']) !!}
                <div class="col-md-3">
                    <div class="form-group">
                       <select name="year" id="demoSel" size="15" multiple>
                            <option>Select Year</option>

                            @foreach($gentkyear as $r=>$t)
                            <option value="{{$r}}">{{$t}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">  
                   <select name="brand_name" id="demoSel1" size="15"  onchange='this.form.submit()' multiple>
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
 <script>
// arguments: reference to select list, callback function (optional)
function getSelectedOptions(sel, fn) {
    var opts = [], opt;
    
    // loop through options in select list
    for (var i=0, len=sel.options.length; i<len; i++) {
        opt = sel.options[i];
        
        // check if selected
        if ( opt.selected ) {
            // add to array of option elements to return from this function
            opts.push(opt);
            
            // invoke optional callback function if provided
            if (fn) {
                fn(opt);
            }
        }
    }
    
    // return array containing references to selected option elements
    return opts;
}

// example callback function (selected options passed one by one)
function callback(opt) {
    // can access properties of opt, such as...
    //alert( opt.value )
    //alert( opt.text )
    //alert( opt.form )
    
    // display in textarea for this example
    var display = document.getElementById('display');
    display.innerHTML += opt.value + ' ';
}
// anonymous function onchange for select list with id demoSel
document.getElementById('demoSel').onchange = function(e) {
    // get reference to display textarea
    var display = document.getElementById('display');
    display.innerHTML = ''; // reset
    
    // callback fn handles selected options
    getSelectedOptions(this, callback);
    
    // remove ', ' at end of string
    var str = display.innerHTML.slice(0, -2);
    display.innerHTML = str;
};
document.getElementById('demoSel1').onchange = function(e) {
    // get reference to display textarea
    var display1 = document.getElementById('display1');
    display.innerHTML = ''; // reset
    
    // callback fn handles selected options
    getSelectedOptions(this, callback);
    
    // remove ', ' at end of string
    var str = display1.innerHTML.slice(0, -2);
    display1.innerHTML = str;
};


@stop







