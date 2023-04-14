<form action="{{ route('register.save')}}" method="POST">
    @csrf
    Nome: <br> <input type="text" name="nome"> <br>
    Email: <br> <input type="email" name="email"> <br>
    Senha: <br> <input type="password" name="password"> <br>
    Confirmar senha: <br> <input type="password" name="passwordconfirm"> <br>

    <button type="submit">Registrar</button>

</form>
