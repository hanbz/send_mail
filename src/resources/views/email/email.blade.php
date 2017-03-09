<h1> {{ $request->input('store') }}單車行您好</h1>
<h2>以下為最新訂單，請依照此訂單進行出貨</h2>
<h4>姓名：{{ $request->input('name') }}</h4>
<h4>型號：{{ $request->input('type') }}</h4>
@if($request->has('note'))
    <h4>備註：{{ $request->input('note') }}</h4>
@endif
