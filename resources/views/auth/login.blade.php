<form method="POST" action="{{ url('login') }}">
    @csrf
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <button type="submit">Login</button>
    @foreach ($errors->all() as $error)
        {{ $error }}<br/>
    @endforeach
</form>
