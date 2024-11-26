@extends('app')

@section('title', '原住民族部落永續發展造景計畫核定明細')

@section('content')
  <table>
    <thead>
      <tr>
        <th>日期</th>
        <th>年度</th>
        <th>申請編號</th>
        <th>實施區域</th>
        <th>鄉鎮</th>
        <th>省市代碼</th>
        <th>省市鄉代碼</th>
        <th>計畫名稱</th>
        <th>中央補助</th>
        <th>地方配合</th>
        <th>總核定預算</th>
        <th>實施項目</th>
        <th>備註</th>
        <th>操作1</th>
        <th>操作2</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projectdetails as $projectdetail)
        <tr id="project-{{ $projectdetail->id }}">
          <td>{{ $projectdetail->date_listed }}</td>
          <td>{{ $projectdetail->year }}</td>
          <td>{{ $projectdetail->application_number }}</td>
          <td>{{ $projectdetail->implementation_area }}</td>
          <td>{{ $projectdetail->township }}</td>
          <td>{{ $projectdetail->province_city_code }}</td>
          <td>{{ $projectdetail->province_city_town_code }}</td>
          <td>{{ $projectdetail->project_name }}</td>
          <td>{{ $projectdetail->central_grant }}</td>
          <td>{{ $projectdetail->local_matching_funds }}</td>
          <td>{{ $projectdetail->total_approved_budget_thousand }}</td>
          <td>{{ $projectdetail->implementation_item }}</td>
          <td>{{ $projectdetail->notes }}</td>
          <!-- 修改路由名称 -->
          <td>
            <!-- "顯示"按钮 -->
            <a href="{{ route('projectdetails.show', ['id' => $projectdetail->id]) }}">顯示</a>
          </td>
          <td>
            <!-- 删除按钮：提交删除表单 -->
            <form action="{{ route('projectdetails.destroy', ['id' => $projectdetail->id]) }}" method="POST" onsubmit="return confirm('確定要刪除這個項目嗎？');">
              @csrf
              @method('DELETE')
              <button type="submit">刪除</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
