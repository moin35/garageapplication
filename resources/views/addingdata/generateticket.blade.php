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
<div class="page-content">
    <div class="panel panel-green">
        <div class="panel-heading">
           Search Car Model Information According to Year
           
             <div>
                <span id="showResult" >&nbsp;</span>
            </div>
            <div>
                <span id="showResult1" >&nbsp;</span>
            </div>
        @if(Session::get('year'))
        <h2 style="color:white;">All Ready Have This Year in Your DB !!</h2>
        @endif
@if(Session::get('car'))
        <h2 style="color:white;">Opps All Ready Have This Model in Your DB  !!</h2>
        @endif
@if(Session::get('showmsg'))
        <h2 style="color:white;">Information Added !!</h2>
        @endif
        </div>
            <div class="panel-body pan">
            <div class="form-body pal">

                <div class="row">
                {!! Form::open(['id'=>'demoForm','class'=>'demoForm']) !!}
                <div class="col-md-3">
                    <div class="form-group">
                       <select name="year" id="demoSel" size="4" multiple>
                            @foreach($gentkyear as $r=>$t)
                            <option value="{{$r}}">{{$t}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">  
                   <select name="brand_name" id="demoSel1" size="4" multiple>
                            @foreach($gentkbrand as $b=>$d)
                            <option value="{{$b}}">{{$d}}</option>
                            @endforeach
                    </select>
                </div>
                </div>
                {!!Form::submit('Submit',['class'=>'btn btn-primary form-control'])!!}
                {!!Form::close()!!}
                <div class="col-md-3">
                <div class="form-group">  
                   <select  size="4" multiple>
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
    display.innerHTML += opt.value + ', ';
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

document.getElementById('demoForm').onsubmit = function(e) {
    // reference to select list using this keyword and form elements collection
    // no callback function used this time
    var opts = getSelectedOptions( this.elements['demoSel[]'] );
    var opts = getSelectedOptions( this.elements['demoSel1[]'] );
    alert( 'The number of options selected is: ' + opts.length ); //  number of selected options
    
    return false; // don't return online form
};
</script> 
@stop







