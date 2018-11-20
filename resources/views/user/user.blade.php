<html>
    <head>
        <title>User List</title>
    </head>
    <body>

        <div class="container">
            @foreach($users as $user)
                <div>
                    <p>{{ $user->first_name }}</p>
                    <p>{{ $user->last_name }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->address }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>