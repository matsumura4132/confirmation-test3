<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
</head>
<body>
    <div class="register-form_content">
    <div class="register-form_heading">
        <h1>PiGLy</h1>
        <h2>新規会員登録</h2>
        <h3>STEP1 アカウント情報の登録</h3>
    </div>
    <form class="form" action="/register/step2" method="post">
          @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">お名前</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="name" name="name" value="{{ old('name') }}" />
                </div>
                <div class="form_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
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
            <button class="form_button-submit" type="submit">次に進む</button>
        </div>
    </form>
    <div class="register_link">
        <a class="login_button-submit" href="/login">ログインはこちら</a>
    </div>
</body>
</html>