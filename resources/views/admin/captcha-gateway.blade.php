<!DOCTYPE html>
<html>
<head>
    <title>Admin Gateway</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <h2>Verifikasi CAPTCHA Sebelum Masuk Admin</h2>

    @if ($errors->any())
        <div style="color:red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.gateway.verify') }}">
        @csrf
        <div class="g-recaptcha" data-sitekey="{{ $siteKey }}"></div>
        <br>
        <button type="submit">Lanjut ke Admin</button>
    </form>
</body>
</html>
