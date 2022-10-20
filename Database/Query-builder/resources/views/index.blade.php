{{$user}}


@foreach ($user as $value)

<h1>{{$value->Nom}}</h1>
<h1>{{$value->Email}}</h1>
    
@endforeach