<p>Registration Page</p>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('register.submit')}}" method="POST">
    @csrf
    <label for="name">Username</label>
    <input name="name" type="text" id="name">
    <br>
    <label for="email">Email</label>
    <input name="email" type="email" id="email">
    <br>
    <label for="password">Password</label>
    <input name="password" type="password" id="password">
    <br>
    <label for="confirm_password">Confirm password</label>
    <input name="password_confirmation" type="password" id="confirm_password">
    <br>
    <button type="submit">register</button>
</form>
