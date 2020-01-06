@extends('layouts.app')
@section('content')

<div class="panel-body">
    <!--バリデーションエラー時-->
    @include('common.errors')
    <form action="{{ url('listings') }}" method="POST" class="form-horizonal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="listing" class="control-label">リスト名</label>
            <div class="col-m-6">
                <!--oldは直前に入力したデータを取得することができる
                バリデーションに引っかかって画面が戻ったときに、値を復活できる
                -->
                <input type="text" name="list_name" class="form-control" value="{{ old('list_name') }}"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-m-6">
                <button class="btn btn-info" type="submit">
                    <i class="glyphicon glyphicon-plus"></i>
                    MAKE !
                </button>
            </div>    
        </div>
    </form>
</div>

@endsection