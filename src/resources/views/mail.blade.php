@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>訂購單車頁面</h4>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('mail.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">姓名：</label>
                                <input class="form-control" type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">電話：</label>
                                <input class="form-control" type="text" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="address">地址：</label>
                                <input class="form-control" type="text" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email：</label>
                                <input class="form-control" type="text" id="email" name="email" value="{{ Auth::user()->email }}" required>
                            </div>
                            <div class="form-group">
                                <label for="type">車款：</label>
                                <select class="form-control" id="type" name="type">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="store">請選擇車行：</label>
                                <select class="form-control" id="store" name="store">
                                    <option>hanbzsky@yahoo.com.tw</option>
                                    <option>econshawn@gmail.com</option>
                                    <option>shawn.chi@collegebike.tw</option>
                                    <option>info@collegebike.tw</option>
                                    <option>sh19940216@yahoo.com.tw</option>
                                    <option>b01303075@ntu.edu.tw</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="note">請輸入備註欄位（選填）：</label>
                                <textarea class="form-control" rows="3" name="note"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">送出訂單</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
