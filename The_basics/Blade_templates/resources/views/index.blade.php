{{-- if and else --}}

@include('Title')



Id = {{ $age= null }}


{{-- @if($age == 1)
    <h2>Hello hicham</h2>
    
@else
<h2>null</h2>
@endif --}}



{{-- isset and empty --}}

{{-- 
@isset($age)

<h2>age is {{$age}}</h2>
@endisset
 
@empty($age)
    <h2>age is empty</h2>
@endempty --}}


{{-- loop Foreach --}}

@php
$user = array("hicham","adnan","nada")   



@endphp





@foreach ($user  as $value)
    <p>User name     : {{ strtoupper( $value) }}</p>
@endforeach
 