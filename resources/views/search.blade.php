<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理システム</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/reset.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/search_style.css') }}">
</head>
<body>
  <div class="search">
    <h1 class="ttl">管理システム</h1>
    <div class="card">
      <form action="/search" method="post">
        <table class="table">
        @csrf
          <tr>
            <th class="item">お名前</th>
            <td class="body">
              <input type="text" name="fullname" class="form-text" />
            </td>
          </tr>
          <tr>
            <th class="item">性別</th>
            <td class="body">
              <label class="sex">
                <input type="radio" name="gender" value=0 checked="checked"/>
                <span class="sex-txt">全て</span>
              </label>
              <label class="sex">
                <input type="radio" name="gender" value=1 />
                <span class="sex-txt">男</span>
              </label>
              <label class="sex">
                <input type="radio" name="gender" value=2 />
                <span class="sex-txt">女</span>
              </label>
            </td>
          </tr>
          <tr>
            <th class="item">登録日</th>
            <td class="body">
              <label class="date">
                <input type="date" name="date_start" class="form-text" />
                ～
                <input type="date" name="date_end" class="form-text" />
              </label>
            </td>
          </tr>
          <tr>
            <th class="item">
              メールアドレス
            </th>
            <td class="body">
              <input type="email" name="email" class="form-text" />
            </td>
          </tr>
        </table>
        <input class="submit" type="submit" value="検索" />
      </form>
      <div class="link mb-40">
        <a href="/search">リセット</a>
      </div>
      <table class="table result">
        <tr>
          <th class="item-result">ID</th>
          <th class="item-result">お名前</th>
          <th class="item-result">性別</th>
          <th class="item-email">メールアドレス</th>
          <th class="item-opinion">ご意見</th>
          <th class="item-result">削除</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
          <td class="body-result">
            {{$contact->id}}
          </td>
          <td class="body-result">
            {{$contact->fullname}}
          </td>
          <td class="body-result">
            {{$contact->gender}}
          </td>
          <td class="body-result">
            {{$contact->email}}
          </td>
          <td class="body-opinion">
            {{$contact->opinion}}
          </td>
          <form action="/search_delete" method="post">
            <td class="body-result">
              @csrf
              <input type="hidden" name="id" value={{$contact->id}}>
              <button class="button-delete">削除</button>
            </td>
          </form>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</body>
</html>