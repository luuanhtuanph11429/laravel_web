<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<link rel="stylesheet" href="style.css"/> 
</head> 
<body> 
<form action='login.php' class="dangnhap" method='POST'> 
Tên đăng nhập : <input type='email' name='email' value="{{$email}}" /> <br>
Mật khẩu : <input type='password' name='password' /> <br>
<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
<form> 
</body> 
</html>