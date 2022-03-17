<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/app.css">
    <title>register</title>
</head>

<body>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <img src="/seo_group-work-1536x1100.png" alt="loading" class="col-6 col-lg-10">
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5 form-bg">
                    <div class="form-toner">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-pill ps-4" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="ms-3">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control ps-4 rounded-pill" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword" class="ms-3">Пароль</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" class="inp" value="remember-me"> Запомнить меня
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn_sign text-light rounded-pill" type="submit">Войти</button>
                        <hr class="my-4">
                        <small class="text-muted">Все права защищены.</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>