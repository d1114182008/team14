<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>原住民族部落永續發展造景計畫核定明細</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1a1a1a;
      color: white;
    }

    header {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
      font-size: 24px;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
      color: white;
    }

    table {
      width: 100%;
      margin: 20px 0;
      border-collapse: collapse;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    table th, table td {
      padding: 12px;
      text-align: left;
      border: 1px solid #444;
    }

    table th {
      background-color: #222;
      color: white;
    }

    table tr:nth-child(even) {
      background-color: #2a2a2a;
    }

    table tr:hover {
      background-color: #444;
    }

    .container {
      width: 90%;
      margin: 0 auto;
    }

    .search-container {
      text-align: center;
      margin: 20px 0;
    }

    .search-input {
      padding: 8px;
      font-size: 16px;
      width: 300px;
      border: 2px solid #444;
      border-radius: 5px;
      background-color: #333;
      color: white;
    }

    .search-button {
      padding: 8px 15px;
      background-color: #555;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .search-button:hover {
      background-color: #666;
    }

    .highlight {
      background-color: #FFFF00;
      color: black;
      font-weight: bold;
    }

    .no-results {
      color: #f44336;
      font-size: 18px;
      text-align: center;
      margin-top: 20px;
    }

    .search-suggestion {
      color: #bbb;
      font-size: 14px;
      text-align: center;
      margin-top: 10px;
    }

  </style>
  <script>
    function searchTable() {
      let input = document.getElementById('searchInput');
      let filter = input.value.toLowerCase();
      let table = document.getElementById('dataTable');
      let tr = table.getElementsByTagName('tr');
      let noResultsDiv = document.getElementById('noResults');
      let suggestionDiv = document.getElementById('suggestion');
      let found = false;

      suggestionDiv.innerHTML = '';
      noResultsDiv.style.display = 'none';

      for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName('td');
        for (let j = 0; j < td.length; j++) {
          td[j].innerHTML = td[j].innerHTML.replace(/<span class="highlight">/g, '').replace(/<\/span>/g, '');
        }
      }

      if (filter === '') {
        for (let i = 1; i < tr.length; i++) {
          tr[i].style.display = '';
        }
        return;
      }

      for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName('td');
        let rowVisible = false;

        for (let j = 0; j < td.length; j++) {
          if (td[j]) {
            let cellText = td[j].textContent.toLowerCase();
            if (cellText.indexOf(filter) > -1) {
              rowVisible = true;

              let highlightedText = td[j].innerHTML.replace(new RegExp(filter, 'gi'), (match) => {
                return `<span class="highlight">${match}</span>`;
              });
              td[j].innerHTML = highlightedText;
            }
          }
        }

        if (rowVisible) {
          tr[i].style.display = '';
          found = true;
        } else {
          tr[i].style.display = 'none';
        }
      }

      if (!found && filter !== '') {
        noResultsDiv.style.display = 'block';
      } else {
        noResultsDiv.style.display = 'none';
      }

      if (filter.length > 0) {
        suggestionDiv.innerHTML = `目前搜尋: "${filter}"`;
      } else {
        suggestionDiv.innerHTML = '';
      }
    }
  </script>
</head>
<body>
  <header>
    原住民族部落永續發展造景計畫核定明細
  </header>

  <div class="container">
    <h1>計畫核定明細</h1>
    <div class="search-container">
      <input type="text" id="searchInput" class="search-input" placeholder="搜尋項目...">
      <button class="search-button" onclick="searchTable()">搜尋</button>
    </div>

    <div class="search-suggestion" id="suggestion"></div>
    <div class="no-results" id="noResults" style="display:none;">無搜尋結果</div>

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
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
