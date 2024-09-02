<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email utente</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" required>
    </div>

    <button type="submit">Accedi</button>
    <a href="{{ route('register') }}">Non sei registrato?</a>
</form>
