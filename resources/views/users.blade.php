<!--  <h1>Welcome to the website</h1>
 @if(session('name'))
 <h3>Data For {{session('name')}} has been saved</h3>
 @endif
<form action="users" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name.."><br>
    <span style="color:red;">@error('name'){{$message}}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="Password.."><br>
    <span style="color:red;">@error('password'){{$message}}@enderror</span>
    <br>
    <button type="submit">Submit</button>
</form> -->

<h1>{{__('profile.welcome')}}</h1>
<a href="">{{__('profile.about')}}</a>
<a href="">{{__('profile.contact')}}</a>
<a href="">{{__('profile.list')}}</a>