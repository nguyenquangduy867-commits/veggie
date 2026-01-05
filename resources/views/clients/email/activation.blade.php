<!DOCTYPE html>
<html>
<head>
    <title>Kích hoạt tài khoản</title>
</head>
<body>
    <h1>Xin chào, {{ $user->name }}</h1>
    <p>
        Cảm ơn bạn đã đăng ký tài khoản trên website của chúng tôi.
        Để kích hoạt tài khoản của bạn, vui lòng nhấp vào liên kết dưới đây:
    </p>
    <a href="{{ url('/activate/' . $token) }}"style="padding: 10px 15px; background-color: green; color: #fff; ">Kích hoạt tài khoản</a>
    <br><br>
    <p>Trân trọng,</p>
    <p>Đội ngũ hỗ trợ khách hàng</p>
</body>
</html>


