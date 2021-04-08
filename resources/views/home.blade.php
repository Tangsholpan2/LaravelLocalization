  @extends('layout')
  @section('content')
  <style>

  body{
  background:pink;
  }
  .main{
  display:flex;
  justify-content:center;
  }
  .container{
  text-align:center;
  }
  .wel{
  margin-bottom:30px;
  }
  .texts{
  margin-top:50px;
  margin-left:20px;
  }
  .footer{
  text-align:center;
  margin-top:30px;
  }
  input{
  margin:10px;
  width:60%;
  padding:5px;
   border:2px solid green;
  }
  textarea{
   width:60%;
   height:110px;
    border:2px solid green;
  }
  button{
  padding:10px;
  background:green;
  color:white;
  margin:10px;
  }
  </style>
  <div class="container">
        <h1 style="font-size: 3.0rem" class="wel">{{ __('lang.welcome')}}</h1>
    </div>

<div class="main">

<div class="imgs">
<img src="pexels-photo-1382734.jpeg" style="border-radius:50px;width:300px;border:3px solid white;"/>
</div>

<div class="texts">
<em><h3>{{ __('lang.name')}}<h3>
<h3>{{ __('lang.surname')}}<h3>
<h3>{{ __('lang.age')}}<h3>
<h3>{{ __('lang.email')}}<h3>
<h3>{{ __('lang.phone')}}<h3>
<h3>{{ __('lang.adviser')}}<h3>
<h3>{{ __('lang.gt')}}<h3>
</em>
</div>

</div>

<div class="footer">
<h2>{{ __('lang.contact')}}</h2>
<input type="text" placeholder="{{ __('lang.nname')}}"/></br>
<input type="text" placeholder="{{ __('lang.ssurname')}}"/></br>
<input type="text" placeholder="{{ __('lang.eemail')}}"/></br>
<textarea placeholder="{{ __('lang.sms')}}"></textarea></br>
<button>{{ __('lang.send')}}</button>
</div>

@endsection
