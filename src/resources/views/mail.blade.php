@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>郵寄訂單功能</h4>
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
                                <label for="address">請選擇寄送對象：</label>
                                <select class="form-control" id="address" name="address">
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
                            <button type="submit" class="btn btn-default">發送郵件</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
