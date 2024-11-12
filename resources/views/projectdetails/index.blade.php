<!DOCTYPE html>
<html lang="zh-Hant">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>原住民族部落永續發展造景計畫核定明細</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f0f8;
      margin: 0;
      padding: 0;
      color: #333;
    }

    h1 {
      text-align: center;
      color: #d2569e;
      padding: 20px;
      background-color: #fff0f5;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 90%;
      margin: 0 auto;
      border-collapse: collapse;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    table th, table td {
      padding: 12px;
      text-align: center;
      border: 2px solid #f1a7c3;
    }

    table th {
      background-color: #f8c2d6;
      color: #d2569e;
      font-weight: bold;
    }

    table td {
      background-color: #fff;
    }

    tr:hover {
      background-color: #fce4f1;
    }

    .container {
      width: 90%;
      margin: 0 auto;
      padding: 20px;
    }

    tr:nth-child(odd) {
      background-color: #f9e6f1;
    }
    tr:nth-child(even) {
      background-color: #ffffff;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>原住民族部落永續發展造景計畫核定明細</h1>
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
        </tr>
      </thead>
      <tbody>
        @foreach ($projectdetails as $projectdetail)
          <tr>
            <td>{{$projectdetail->date_listed}}</td>
            <td>{{$projectdetail->year}}</td>
            <td>{{$projectdetail->application_number}}</td>
            <td>{{$projectdetail->implementation_area}}</td>
            <td>{{$projectdetail->township}}</td>
            <td>{{$projectdetail->province_city_code}}</td>
            <td>{{$projectdetail->province_city_town_code}}</td>
            <td>{{$projectdetail->project_name}}</td>
            <td>{{$projectdetail->central_grant}}</td>
            <td>{{$projectdetail->local_matching_funds}}</td>
            <td>{{$projectdetail->total_approved_budget_thousand}}</td>
            <td>{{$projectdetail->implementation_item}}</td>
            <td>{{$projectdetail->notes}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>