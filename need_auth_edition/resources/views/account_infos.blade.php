<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>會員首頁</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Noto+Serif+TC&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/member_homepage_styles/style.css" />
</head>

<body>
    <header>
        <div class="logo">
            <h1><a href="{{ url('member-homepage') }}">NCU場地預約系統</a></h1>
            <input class="searchbar" type="text" name="search" />
        </div>
        <div class="searchbar">/></div>
        <nav>
            <ul>
                <li><a href="#">我的預約</a></li>
                <li><a href="#">我的帳戶</a></li>
                <li><a href="#">登出</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="form">
            <div>
                <label for="account">帳號:</label>
                <br />
                <p>xxx_account</p>
            </div>
            <div>
                <label for="email">電子信箱:</label>
                <br />
                <p>xxxxx@g.ncu.edu.tw</p>
            </div>
            <form>
                <div>
                    <label for="password">密碼:</label>
                    <br />
                    <input type="text" name="password" value="********" />
                    <br />
                    <input type="text" name="new_password" value="請輸入新密碼" />
                    <br />
                    <input type="text" name="new_password" value="請再次輸入新密碼" />
                    <br />
                    <button type="submit">更改密碼</button>
                </div>
            </form>
            <form>
                <div>
                    <label for="phone">電話號碼:</label>
                    <br />
                    <input type="text" name="phone" value="0912345678" />
                </div>
                <div>
                    <label for="name">暱稱:</label>
                    <br />
                    <input type="text" name="name" value="王曉明" />
                </div>
                <button type="submit">儲存更改</button>
            </form>
        </section>
    </main>
    <footer></footer>
</body>

</html>
