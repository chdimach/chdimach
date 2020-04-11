<!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Библия, чтение онлайн, несколько переводов и поиск. Без коментариев и толкования . </title>
    <meta name="description" content="Читать Библию онлайн, используя разные переводы, это легко и удобно на нашем сайте. ПОИСК и практичный интерфейс
      помогут в этом достойном, увлекательном деле.  Библия это уникальный бестселлер, контент пришедший через 1000-чи лет.  На сайте отсутствуют комментарии и толкование." />
    <meta name="keywords" content="Вы можете читать Библию онлайн используя разные переводы и поиск.">
    <link rel="stylesheet" href="css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<script>
    function colorTheme() {
        if (localStorage.getItem('theme') === null) {
            document.querySelector('body').classList.toggle('dark');
            localStorage.setItem('theme', 'dark');
            localStorage.getItem('theme');
        }else if (localStorage.getItem('theme') === "dark") {
            document.querySelector('body').classList.toggle('dark');
            localStorage.removeItem('theme');
        }
    }

    if (localStorage.getItem('theme') === 'dark') {
        document.querySelector('body').classList.toggle('dark');
    }
</script>
    <header class="mb-4">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo"><a href="index.php"><img src="images/logo.png" alt=""></a></div
              <div class="search-wrap">
                <form method="post" action="search.php" class="search-group">
                    <input type="text" name="search" class="search-input" placeholder="Поиск">
                    <button type="submit" class="search-button" name="submit" value="поиск">
                        <svg height="24" fill="#fafafa" viewBox="0 0 515.558 515.558" width="24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="m378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333 0-115.484-93.961-209.445-209.445-209.445s-209.444 93.961-209.444 209.445 93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564c0-.001-137.214-137.213-137.214-137.213zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>