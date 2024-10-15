<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SDGs介紹</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
    }

    header {
      background-color: #2d6a4f;
      color: white;
      padding: 20px;
      text-align: center;
    }

    header h1 {
      font-size: 2.5em;
    }

    section {
      margin: 20px;
    }

    #sdgs .goal-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .goal {
      text-align: center;
      margin: 15px;
      cursor: pointer;
    }

    .goal img {
      width: 100px;
      height: 100px;
    }

    #goal-info {
      background-color: #e9f5e9;
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
    }

    footer {
      background-color: #2d6a4f;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <header>
    <h1>可持續發展目標 (SDGs)</h1>
    <p>探索聯合國提出的17個可持續發展目標，讓我們一起為全球的未來出一份力。</p>
  </header>

  <section id="sdgs">
    <h2>SDGs目標</h2>
    <div class="goal-container">
      <!-- 目標列表 -->
      <div class="goal" onclick="showGoalInfo(1)">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/SDG_Logo_1.svg/120px-SDG_Logo_1.svg.png" alt="Goal 1">
        <p>無貧窮</p>
      </div>
      <div class="goal" onclick="showGoalInfo(2)">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/SDG_Logo_2.svg/120px-SDG_Logo_2.svg.png" alt="Goal 2">
        <p>零飢餓</p>
      </div>
      <div class="goal" onclick="showGoalInfo(3)">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/SDG_Logo_3.svg/120px-SDG_Logo_3.svg.png" alt="Goal 3">
        <p>良好健康與福祉</p>
      </div>
      <!-- 可以添加更多目標 -->
    </div>
  </section>

  <section id="goal-info">
    <h2>目標詳情</h2>
    <p id="goal-description">點擊上方的目標以查看詳細信息。</p>
  </section>

  <footer>
    <p>&copy; 2024 SDGs介紹網頁</p>
  </footer>

  <script>
    // 定義每個SDG目標的詳細描述
    const goalDescriptions = {
      1: "無貧窮：消除世界各地的貧困，確保每個人都能過上有尊嚴的生活。",
      2: "零飢餓：消除飢餓，確保全球人們能享有足夠、營養和可持續的食物。",
      3: "良好健康與福祉：確保所有人享有健康的生活和促進福祉。",
      // 可以添加更多的目標描述
    };

    // 顯示目標詳細信息
    function showGoalInfo(goalNumber) {
      const description = goalDescriptions[goalNumber] || "該目標的詳細信息尚未提供。";
      document.getElementById('goal-description').textContent = description;
    }
  </script>

</body>
</html>
