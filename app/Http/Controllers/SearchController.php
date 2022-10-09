<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\SearchRequest;
use Carbon\Carbon;

class SearchController extends Controller
{

    // 明細削除
    public function delete(SearchRequest $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/search');
    }    


    // 明細検索
    public function search(SearchRequest $request)
    {
        $fullname = $request->fullname;
        $gender = $request->gender;
        $date_start = $request->date_start;
        $date_end = $request->date_end;
        $email = $request->email;

        // SQL比較項目
        $sql = "select * from contacts";
        $code = "select * from contacts";
        
        // 名前入力あり
        if($fullname != null) {
            $sql = $sql." where fullname like '%".$fullname."%'";
        }

        // 性別入力あり
        if($gender != 0){

            // 他項目入力なし
            if ($sql == $code) {
                $sql = $sql." where gender = $gender";

            // 他項目入力あり
            } else {
                $sql = $sql." and gender = $gender";
            }
        }

        // 開始日のみ入力あり
        if($date_start != null and $date_end == null) {

            $date_start = Carbon::parse($date_start);

            // 他項目入力なし
            if ($sql == $code) {
                $sql = $sql." where created_at >= '".$date_start."'";

            // 他項目入力あり
            } else {
                $sql = $sql." and created_at >= '".$date_start."'";
            }        

        // 終了日のみ入力あり
        } else if($date_start == null and $date_end != null){

            $date_end = Carbon::parse($date_end);

            // 他項目入力なし
            if ($sql == $code) {
                $sql = $sql." where created_at <= '".$date_end."'";

            // 他項目入力あり
            } else {
                $sql = $sql." and created_at <= '".$date_end."'";
            }        

        // 両日入力あり
        } else if($date_start != null and $date_end != null){    

            $date_start = Carbon::parse($date_start);
            $date_end = Carbon::parse($date_end);

            // 他項目入力なし
            if ($sql == $code) {
                $sql = $sql." where created_at Between '".$date_start."' and '".$date_end."'";

            // 他項目入力あり
            } else {
                $sql = $sql." and created_at Between '".$date_start."' and '".$date_end."'";
            }
        }

        // メールアドレス入力あり
        if($email != null){

            // 他項目入力なし
            if ($sql == $code) {
                $sql = $sql." where email like '%".$email."%'";

            // 他項目入力あり
            } else {
                $sql = $sql." and email like '%".$email."%'";
            }
        }

        // SQL実行
        $contacts = DB::select($sql);
        return view('search',['contacts' => $contacts]);
    }
}