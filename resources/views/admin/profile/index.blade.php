@extends('layouts.profile')
@section('title', '登録されたマイプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <h2>マイプロフィール</h2>
        </div>
        
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <th width="10%">ID</th>
                            <th width="20%">名前</th>
                            <th width="10%">性別</th>
                            <th width="20%">趣味</th>
                            <th width="30%">自己紹介欄</th>
                            <th width="10%">操作</th>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ \Str::limit($profile->name, 40) }}</td>
                                    <td>{{ \Str::limit($profile->gender, 10) }}</td>
                                    <td>{{ \Str::limit($profile->hobby, 100) }}</td>
                                    <td>{{ \Str::limit($profile->introduction, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id])  }}">編集</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection