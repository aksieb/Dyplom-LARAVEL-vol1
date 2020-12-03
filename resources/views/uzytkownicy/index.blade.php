@extends('../template')

@section('content')
    <h1>Lista użytkowników</h1>
    <a class="btn btn-primary mt-4" href="/admin/uzytkownik">Nowy użytkownik</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Login</th>
                <th>Imię i nazwisko</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id_users }}</td>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->first_name }} {{ $user->surname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class="btn" href="/admin/uzytkownik/{{ $user->id_users }}">Edycja</a>
                        <a class="btn" href="/admin/usun_uzytkownika/{{ $user->id_users }}">Usuń</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
