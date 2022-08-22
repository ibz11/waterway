@include('Driver.dashboard')

@if (session()->has('message'))
   <div class=" pt-2 alert alert-primary">
   {{session()->get('message')}}
   <a  type="button" class="close" data-dismiss="alert"> x </a>
</div>
@endif
<h1 style="font-weight:600;font-size:40px;"class="text-center pt-3">Create an Event Appointment</h1>
<form action="{{URL('createevent')}}" method="POST" enctype="multipart/form-data">
@csrf

<!---<input type = "hidden" name = "id" value = "{{Auth::user()->id}}">--->
<!--<label  class="w-75 text-white bg-info form-control">Full names</label>
<input name="name"class="w-75  pt-2 form-control" value="" placeholder=""type="text"></input>-->
<div class="pt-5">
<h2 class="text-secondary">Note: Your  names will be auto-filled for you.</h2>

</div>
<div class="pt-5">
<label  class="w-75 text-white bg-info form-control">Select Date</label>
<input name="date"class="w-75  pt-2 form-control"type="date"></input>
</div>
<div class="pt-4">
<label  class="w-75 text-white bg-info form-control">Time starts</label>
<input name="time_begin"class="w-75  form-control"type="time"></input>

<div class="pt-4">
<label   class="w-75 text-white bg-info  form-control">Time ends</label>
<input name="time_end"class="w-75 form-control"type="time"></input>
</div>
<div class="pt-4">
<button class="btn btn-primary text-info" style=" font-weight:600;font-size:25px;"  type="submit">Submit</button>
</div>



</form>






















</div>
         
         </body>
         </html>