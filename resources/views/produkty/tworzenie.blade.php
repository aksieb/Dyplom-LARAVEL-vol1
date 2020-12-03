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

        Nazwa produktu<br />
        <input type="text" name="" value="" />

        <br />

        <button type='submit'>Wyślij</button>
    </form>
@endsection
