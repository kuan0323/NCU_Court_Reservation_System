<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>會員首頁</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Noto+Serif+TC&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="/css/member_homepage_styles/style.css" />
    </head>
    <body>
        <header>
            <div class="logo">
                <h1><a href="#">NCU場地預約系統</a></h1>
                <input class="searchbar" type="text" name="search" />
            </div>
            <div class="searchbar">/></div>
            <nav>
                <ul>
                    <li><a href="#">我的預約</a></li>
                    <li><a href="{{ url('account-infos') }}">我的帳戶</a></li>
                    <li><a href="#">登出</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="courts_category">
                <ul>
                    <li>
                        <button class="court_category" id="basketball">
                            籃球場
                        </button>
                    </li>
                    <section id="basketballs"></section>
                    <li>
                        <button class="court_category" id="badminton">
                            羽球場
                        </button>
                    </li>
                    <section id="badmintons"></section>
                    <li>
                        <button class="court_category" id="tennis">
                            網球場
                        </button>
                    </li>
                    <section id="tennises"></section>
                    <li>
                        <button class="court_category" id="volleyball">
                            排球場
                        </button>
                    </li>
                    <section id="volleyballs"></section>
                </ul>
            </section>
        </main>
        <footer></footer>
    </body>
    <script src="js/member_homepage.js"></script>
</html>
