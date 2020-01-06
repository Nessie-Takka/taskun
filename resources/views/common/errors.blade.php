@if(count($errors) >0)

<div class="alert alert-danger">
    <div class=""><strong>入力内容を修正してください</strong></div>
    <div class="">
        <ul>
            <!--$error変数はlaravelに組み込まれている変数-->
            @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endif