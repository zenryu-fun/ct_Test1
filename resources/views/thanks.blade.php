<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/reset.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>  
</head>
<body>
  <div class="thanks">
    <h1 class="ttl">ご意見いただきありがとうございました。</h1>
    <form action="/" method="post">
      @csrf
      <input class="submit" type="submit" value="トップページへ" />
    </form>
  </div>
</body>
</html>