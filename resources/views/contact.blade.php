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
  <div class="contact">
    <h1 class="ttl">お問い合わせ</h1>
    @if (count($errors) > 0)
      <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
      </ul>
    @endif
    <form action="/check" method="post">
      <table class="table">
      @csrf
        <tr>
          <th class="item">
            お名前
            <span class="mark">*</span>
          </th>
          <td class="body">
            <input type="text" name="sei" class="form-text" />
            <input type="text" name="mei" class="form-text" />
            <div class="example">例)山田　太郎</div>
          </td>
        </tr>
        <tr>
          <th class="item">
            性別
            <span class="mark">*</span>          
          </th>
          <td class="body">
            <label class="sex">
              <input type="radio" name="gender" value="man" checked="checked"/>
              <span class="sex-txt">男</span>
            </label>
            <label class="sex">
              <input type="radio" name="gender" value="woman" />
              <span class="sex-txt">女</span>
            </label>
          </td>
        </tr>
        <tr>
          <th class="item">
            メールアドレス
            <span class="mark">*</span>  
          </th>
          <td class="body">
            <input type="email" name="email" class="form-text" />
            <div class="example">例)test@example.com</div>
          </td>
        </tr>
        <tr>
          <th class="item">
            郵便番号
            <span class="mark">*</span>  
          </th>
          <td class="body">
            <span>〒</span>  
            <input type="text" name="postcode" class="form-text"
              onKeyUp="AjaxZip3.zip2addr(this,'','adress','adress')"/>
            <div class="example">例)123-4567</div>
          </td>
        </tr>
        <tr>
          <th class="item">
            住所
            <span class="mark">*</span>            
          </th>
          <td class="body">
            <input type="text" name="adress" class="form-text" />
            <div class="example">例)東京都渋谷区千駄ヶ谷1-2-3</div>
          </td>
        </tr>
        <tr>
          <th class="item">建物名</th>
          <td class="body">
            <input type="text" name="building_name" class="form-text" />
            <div class="example">例)千駄ヶ谷マンション101</div>
          </td>
        </tr>
        <tr>
          <th class="item">
            お問い合わせ内容
            <span class="mark">*</span>                      
          </th>
          <td class="body">
            <textarea name="opinion" class="form-textarea"></textarea>
          </td>
        </tr>
      </table>
      <input class="submit" type="submit" value="確認" />
    </form>
  </div>
</body>
</html>