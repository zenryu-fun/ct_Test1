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
  <div class="check">
    <h1 class="ttl">内容確認</h1>
    <form action="/thanks" method="post">
      @csrf
      <table class="table">
        <tr>
          <th class="item">
            お名前
          </th>
          <td class="body">
              <div class="check-body">{{$fullname}}</div>
              <input type="hidden" name="fullname" value={{$fullname}} />
            </td>
        </tr>
        <tr>
          <th class="item">
            性別
          </th>
          <td class="body">
            <div class="check-body">{{$gender}}</div>
            <input type="hidden" name="gender" value={{$gender}} />
          </td>
        </tr>
        <tr>
          <th class="item">
            メールアドレス
          </th>
          <td class="body">
            <div class="check-body">{{$email}}</div>
            <input type="hidden" name="email" value={{$email}} />
          </td>
        </tr>
        <tr>
          <th class="item">
            郵便番号
          </th>
          <td class="body">
            <div class="check-body">{{$postcode}}</div>
            <input type="hidden" name="postcode" value={{$postcode}} />
          </td>
        </tr>
        <tr>
          <th class="item">
            住所
          </th>
          <td class="body">
            <div class="check-body">{{$adress}}</div>
            <input type="hidden" name="adress" value={{$adress}} />
          </td>
        </tr>
        <tr>
          <th class="item">建物名</th>
          <td class="body">
            <div class="check-body">{{$building_name}}</div>
            <input type="hidden" name="building_name" value={{$building_name}} />
          </td>
        </tr>
        <tr>
          <th class="item">
            お問い合わせ内容
          </th>
          <td class="body">
            <div class="check-body">{{$opinion}}</div>
            <input type="hidden" name="opinion" value={{$opinion}} />
          </td>
        </tr>
      </table>
      <input class="submit" type="submit" value="送信" />
    </form>
    <div class="link">
      <a href="/">修正する</a>
    </div>
  </div>
</body>
</html>