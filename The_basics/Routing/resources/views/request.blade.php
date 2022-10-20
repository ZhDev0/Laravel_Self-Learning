@if (session('session'))
<h1 style="color: rgb(252, 0, 0)">{{ session('session') }}</h1>

@endif
<form action="/user" method="post">
    @csrf
    <input type="text" name="name">
    <button>click</button>
</form>