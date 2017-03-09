<h1>親愛的 {{ $request->input('name') }} 您好</h1>
<h2>以下為您的訂單</h2>
<h4>地址：{{ $request->input('address') }}</h4>
<h4>姓名：{{ $request->input('name') }}</h4>
<h4>型號：{{ $request->input('type') }}</h4>
@if($request->has('note'))
    <h4>備註：{{ $request->input('note') }}</h4>
@endif

