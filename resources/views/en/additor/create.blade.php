@extends('en.layout')
@section('title' , '/  Request service')
@section('nav')
<div class="navbar">
  <ul>
   
    <li><a href="{{route('additor.create')}}" class="active"> Request serve </a></li>
    <li><a href="{{route('en.work')}}">works</a></li>
    <li><a href="{{route('en.serves')}}" class=""> serves</a></li>
    <li><a href="{{route('en.about')}}"> about us</a></li>
    <li><a href="{{route('en.index')}}" class="">index</a></li>
  </ul>
</div>
@endsection
@section('content')


<section class="sec-about">
    <div class="landing" id="home">
      <div class="container">
        <div class="title-service-requestsercc">
          <h1>  Request a service</h1>
          <p>
            We provide successful, high-performance solutions that add tremendous value to our customers in the UAE, the Gulf countries and the world. We work with a large number of prestigious institutions. We seek to develop your projects and help in their spread and to be the leading company in the field of electronic marketing by providing the best services with the help of a team with long experience in this field
                    </p><br>
        </div>
        <div class="service-requestsercc-form">
            <form action="{{route('additor.store')}}" method="post">
              @csrf
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="number" name="phone" id="phone" placeholder="phone number ">
                <input type="text" name="country" id="country" placeholder="Where are you from؟">
                <select id="prod_id" name="prod_id" >
                    <option disabled	selected value=""> service type</option>
                    @foreach($prod as $prod)
                            <option value="{{ $prod->id }}">{{ $prod->name }}</option>
                        @endforeach
                </select>
                <textarea name="description" id="description" cols="30" rows="10" placeholder=" Project details"></textarea>
             
             
                <input type="submit" value="Request  service ">
            </form>
        </div>
      </div>
    </div>
  </section>

@endsection