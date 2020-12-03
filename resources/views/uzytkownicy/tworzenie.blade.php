@extends('../template')

@section('content')
    <h1>Tworzenie użytkownika</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            </div>
        </div>

        Login
        <input type='text' name='login' required="required" />
        <br />
        Hasło
        <input type='password' name='password' required="required" />
        <br />
        Imię
        <input type='text' name='first_name' required="required" />
        <br />
        Nazwisko
        <input type='text' name='surname' required="required" />
        <br />
        Email
        <input type='email' name='email' required="required" />
        <br />

        <br />

        <button type='submit'>Wyślij</button>
    </form>
@endsection
