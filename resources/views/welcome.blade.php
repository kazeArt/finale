<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #7f1d1d, #fce7e7, #ffffff);
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .welcome-container {
            background-color: white;
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        h1 {
            color: #991b1b;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: bold;
        }

        p {
            color: #444;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }

        a {
            background-color: #991b1b;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.75rem;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: background-color 0.2s ease;
        }

        a:hover {
            background-color: #7f1d1d;
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <h1>Bienvenue sur auto48 admin panel!</h1>
    <p>ici vous pouvez modifier le contenue de votre site</p>
    <p>click sure 'login' pour vous connectez</p>
    @if ($canLogin)
        <a href="{{ route('login') }}">login</a>
    @endif
</div>

</body>
</html>
