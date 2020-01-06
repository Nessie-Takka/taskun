@extends('layouts.app')
@section('content')
<div class='carddetailPage'>
  <div class="container">
    <div class="cardContents">
      <div class="cardContents_title">
        <div class="each-line-title">タイトル</div>
        <div class="each-contents">{{ $card->title }}</div>
      </div>
      <div class="cardContents_memo">
        <div class="each-line-title">メモ</div>
        <div class="each-contents">{{ $card->memo }}</div>
      </div>
      <div class="cardContents_listStatus">
        <div class="each-line-title">リスト名</div>
        <div class="each-contents">{{ $listing->title }}</div>
      </div>
      <div class="cardContents_btnArea">
        <a class="edit_btn" href="/listing/{{ $listing->id }}/card/{{ $card->id }}/edit">編集する</a>
        <a class="delete_btn"  onclick="return confirm('このカードを削除して大丈夫ですか?')" rel="nofollow" data-method="delete" href="/listing/{{ $listing->id }}/card/{{ $card->id }}/delete">削除する</a>
      </div>
    </div>
  </div>
</div>
@endsection