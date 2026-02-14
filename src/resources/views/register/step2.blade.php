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
        <h1>PiGry</h1>
        <h2>新規会員登録</h2>
        <h3>STEP2 体重データの入力</h3>
    </div>
    <form class="form" action="/register" method="post">
          @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">現在の体重</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="number" name="current_weight" value="{{ old('current_weight') }}" />
                </div>
                <div class="form_error">
                    @error('current_weight')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form_group-title">
                <span class="form_label--item">目標の体重</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="number" name="target_weight" value="{{ old('target_weight') }}" />
                </div>
                <div class="form_error">
                    @error('target_weight')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">アカウント作成</button>
        </div>
    </form>
    
</body>
</html>
