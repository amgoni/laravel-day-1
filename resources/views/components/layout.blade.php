<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nina Network</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Nina Network</h1>
            <a href="/ninas">All Ninas</a>
            <a href="/ninas/create">Create New Ninas</a>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
</body>
</html>
