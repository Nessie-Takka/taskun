@extends('layouts.app')
@section('content')

<div class="panel-body">
    <!--バリデーションエラー時。views/commom/errors.blade.php-->
    @include('common.errors')
    <form action="{{ url('/listing/edit') }}" method="POST" class="form-horizonal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="listing" class="col-m-6 control-label">リスト名</label>
            <div class="col-m-6">
                <!--oldは直前に入力したデータを取得することができる
                バリデーションに引っかかって画面が戻ったときに、値を復活できる
                -->
                <input type="text" name="list_name" class="form-control" value="{{ old('list_name') }}"/>
            </div>
            <input type="hidden" name="id" value="{{ old('id', $listing->id) }}" />
        </div>
        <div class="form-group">
            <div class="col-m-6">
                <button class="btn btn-info" type="submit">
                    更新
                </button>
            </div>    
        </div>
    </form>
</div>

@endsection