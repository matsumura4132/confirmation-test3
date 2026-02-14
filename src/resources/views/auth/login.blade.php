<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-form_content">
    <div class="login-form_heading">
        <h1>PiGLy</h1>
        <h2>ログイン</h2>
    </div>
    <form class="form" action="/login" method="post">
          @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">メールアドレス</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="form_error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form_group-title">
                <span class="form_label--item">パスワード</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="password" name="password" value="{{ old('password') }}" />
                </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">ログイン</button>
        </div>
    </form>
    <div class="register_link">
        <a class="register_button-submit" href="/register/step1">アカウント作成はこちら</a>
    </div>
</body>
</html>
