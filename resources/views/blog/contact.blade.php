@extends('master')
@section('content')

<div class="row ">
    <div class="col-md-12">
        <h1>Contact</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-3">+216 549654157</div>
    <div class="col-md-3">haythemmarouani@gmail.com</div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102239.40008056808!2d10.07323703095492!3d36.794999885869785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd337f5e7ef543%3A0xd671924e714a0275!2sTunis!5e0!3m2!1sfr!2stn!4v1561047292751!5m2!1sfr!2stn" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-md-6">
    <form action="{{url('/contact')}}">
        @csrf
        <div class="form-group">
            <label for="object">Object</label>
            <input type="text" name="object" id="Object" class="form-control" placeholder="" aria-describedby="helpID">
            <small id="helpID" class="text-muted"></small>
        </div>

        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="Email" id="Email" class="form-control" placeholder="" aria-describedby="helpID">
                
            </div>


        <div class="form-group">
                <label for="Message">Message</label>
                <textarea class="form-control" rows="10" cols="30" name="message" id="Message"></textarea>
        </div>

        <button class="btn btn-primary btn-block"></button>
        </form>    
    </div>
</div>
@endsection