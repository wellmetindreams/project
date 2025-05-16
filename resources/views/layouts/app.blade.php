<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Магазин ножей "Острый Край"</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
    }

    /* Навбар */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #111;
      color: white;
      padding: 1rem 2rem;
    }
    .navbar .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .navbar .auth-buttons button {
      margin-left: 1rem;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 4px;
      background-color: #444;
      color: white;
      cursor: pointer;
    }
    .navbar .auth-buttons button:hover {
      background-color: #666;
    }

    header {
      background-color: #222;
      color: white;
      padding: 1rem;
      text-align: center;
    }

    .container {
      padding: 2rem;
    }
    .products {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      justify-content: center;
    }
    .product {
      background: white;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 1rem;
      max-width: 250px;
      text-align: center;
    }
    .product img {
      max-width: 100%;
      height: auto;
      border-radius: 6px;
    }
    .product h3 {
      margin: 0.5rem 0;
    }
    .product p {
      font-size: 0.9rem;
      color: #555;
    }
    .price {
      font-weight: bold;
      margin: 0.5rem 0;
    }
    .buy-btn {
      background-color: #007b33;
      color: white;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .buy-btn:hover {
      background-color: #005f26;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background-color: #eee;
      margin-top: 2rem;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">Острый Край</div>
    <div class="auth-buttons">
      <button onclick="window.location.href='login.html'">Войти</button>
      <button onclick="window.location.href='register.html'">Регистрация</button>
    </div>
  </nav>

  <header>
    <h1>Добро пожаловать в магазин ножей "Острый Край"</h1>
    <p>Лучшие ножи для охоты, туризма и кухни</p>
  </header>

  <div class="container">
    <section class="products">
      <div class="product">
        <img src="knife1.jpg" alt="Охотничий нож" />
        <h3>Охотничий нож "Сокол"</h3>
        <p>Прочный стальной клинок и эргономичная рукоять.</p>
        <div class="price">20 000тг</div>
        <button class="buy-btn">Купить</button>
      </div>
      <div class="product">
        <img src="knife2.jpg" alt="Кухонный нож" />
        <h3>Кухонный нож "Шеф"</h3>
        <p>Отличный выбор для профессиональной кухни.</p>
        <div class="price">15 000тг</div>
        <button class="buy-btn">Купить</button>
      </div>
    </section>
  </div>

  <footer>
    &copy; 2025 Магазин "Острый Край" | Все права защищены
  </footer>

</body>
</html>














<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name ="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
</head>
<body>
<header>hui</header>
@yield('content')
<footer> ppizda</footer>
</body>
</html>