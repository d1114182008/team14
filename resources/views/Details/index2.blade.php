@extends('app')

@section('content')
    <h1>計畫核定明細</h1>

    <div class="search-container">
        <input type="text" id="searchInput" class="search-input" placeholder="搜尋項目...">
        <button class="search-button" onclick="searchTable()">搜尋</button>
    </div>

    <div class="search-suggestion" id="suggestion"></div>
    <div class="no-results" id="noResults" style="display:none;">無搜尋結果</div>
    @if (Route::has('login'))
            @auth
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">登出</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">登入</a> | 
                <a href="{{ route('register') }}">註冊</a>|
            @endauth
    @endif
    <a href={{ route('Details.create')}}>新增</a>
    <table id="dataTable">
        <thead>
            <tr>
                <th>日期</th>
                <th>年度</th>
                <th>申請編號</th>
                <th>實施區域</th>
                <th>鄉鎮</th>
                <th>縣市代碼</th>
                <th>縣市鄉鎮代碼</th>
                <th>計畫名稱</th>
                <th>中央補助金額</th>
                <th>地方配合經費</th>
                <th>總核定預算(千元)</th>
                <th>實施項目</th>
                <th>備註</th>
                <th>操作1</th>
                @can('admin')
                <th>操作2</th>
                <th>操作3</th>
                @elsecan('manager')
                <th>操作2</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($Details as $Detail)
                <tr>
                    <td>{{$Detail->date_listed}}</td>
                    <td>{{$Detail->year}}</td>
                    <td>{{$Detail->application_number}}</td>
                    <td>{{$Detail->implementation_area}}</td>
                    <td>{{$Detail->township}}</td>
                    <td>{{$Detail->province_city_code}}</td>
                    <td>{{$Detail->province_city_town_code}}</td>
                    <td>{{$Detail->project_name}}</td>
                    <td>{{$Detail->central_grant}}</td>
                    <td>{{$Detail->local_matching_funds}}</td>
                    <td>{{$Detail->total_approved_budget_thousand}}</td>
                    <td>{{$Detail->implementation_item}}</td>
                    <td>{{$Detail->notes}}</td>
                    <td><a href="{{route('Details.show', ['id' =>$Detail->id])}}">顯示</a></td>
                    @can('admin')
                    <td><a href="{{route('Details.edit', ['id' =>$Detail->id])}}">修改</a></td>
                    <td>
                    <form action="{{ url('/Details/delete', ['id' => $Detail->id]) }}" method="post">
                        <input class="button" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
                @elsecan('manager')
                <td><a href="{{route('Details.edit', ['id' =>$Detail->id])}}">修改</a></td>
                @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
