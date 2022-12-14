<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<h1 class="visually-hidden">Дела в порядке</h1>

<div class="page-wrapper">
    <div class="container container--with-sidebar">
        <div class="content">

            <section class="content__side">
                <p class="content__side-info">Если у вас уже есть аккаунт, авторизуйтесь на сайте</p>

                <a class="button button--transparent content__side-button" href="auth.php">Войти</a>
            </section>

            <main class="content__main">
                <h2 class="content__main-heading">Вход на сайт</h2>

                <form class="form" action="auth.php" method="post" autocomplete="off">
                    <div class="form__row">
                        <?php $classname = isset($errors['email']) ? "form__input--error" : ""; ?>
                        <label class="form__label" for="email">E-mail <sup>*</sup></label>

                        <input class="form__input <?=$classname;?>" type="text" name="email" id="email" value="<?=getPostVal('email')?>" placeholder="Введите e-mail">
                        <p class="form__message"><?= $errors['email'] ?? ""; ?></p>
                    </div>

                    <div class="form__row">
                        <?php $classname = isset($errors['password']) ? "form__input--error" : ""; ?>
                        <label class="form__label" for="password">Пароль <sup>*</sup></label>

                        <input class="form__input <?=$classname;?>" type="password" name="password" id="password" value="<?=getPostVal('password')?>" placeholder="Введите пароль">
                        <p class="form__message"><?= $errors['password'] ?? ""; ?></p>
                    </div>

                    <div class="form__row form__row--controls">
                        <p <?= count($errors) == 0 ? "hidden" : "" ?> class="error-message">Пожалуйста, исправьте ошибки в форме</p>
                        <p <?= $email_or_pas == false ? "hidden" : "" ?> class="error-message">Вы ввели неверный email/пароль</p>
                        <input class="button" type="submit" name="" value="Войти">
                    </div>
                </form>

            </main>

        </div>

    </div>
</div>
</body>
</html>
