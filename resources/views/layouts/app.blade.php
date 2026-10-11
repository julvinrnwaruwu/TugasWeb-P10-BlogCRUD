<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog CRUD Laravel')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
            margin: 0;
        }

        nav {
            background: #1f2937;
            padding: 18px 8%;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 24px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px #00000010;
        }

        h1, h2 {
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-danger {
            background: #dc2626;
        }

        .btn-secondary {
            background: #6b7280;
        }

        .alert {
            padding: 14px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
        }

        .alert-error {
            background: #fee2e2;
            color: #991b1b;
        }

        input, textarea {
            width: 100%;
            padding: 11px;
            margin-top: 7px;
            margin-bottom: 15px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font: inherit;
        }

        label {
            font-weight: bold;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: wrap;
        }

        footer {
            text-align: center;
            color: #6b7280;
            padding: 25px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('posts.index') }}">Blog CRUD Laravel</a>
    </nav>

    
     <main class="container">
    <x-alert />

    @yield('content')
</main>
    </main>

    <footer>
        Tugas Rutin 10 — Blog CRUD Laravel
    </footer>
</body>
</html>