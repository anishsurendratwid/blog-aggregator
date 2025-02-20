<form method="POST" action="{{ url('register') }}">
    @csrf
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>
    <button type="submit">Register</button>
</form>
