<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nome utente</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="email">Email utente</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label for="password">Password di Conferma</label>
        <input type="password" name="password_confirmation" required>
    </div>
    <button type="submit">Registrati</button>
    <a href="{{ route('login') }}">Sei registrato? Accedi</a>
</form>
