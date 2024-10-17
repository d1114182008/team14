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
      background-color: #ffffff;
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
      width: 30%;
      margin-bottom: 20px;
    }

    .goal img {
      width: 100px;
      height: 100px;
    }

    #goal-info {
      background-color: #e9f5e9;
      padding: 30px;
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
  <script>
    // 定義每個SDG目標的詳細描述
    const goalDescriptions = {
      1: "SDG 1 終結貧窮：消除各地一切形式的貧窮",
      2: "SDG 2 消除飢餓：確保糧食安全，消除飢餓，促進永續農業",
      3: "SDG 3 健康與福祉：確保及促進各年齡層健康生活與福祉",
      4: "SDG 4 優質教育：確保有教無類、公平以及高品質的教育，及提倡終身學習",
      5: "SDG 5 性別平權：實現性別平等，並賦予婦女權力",
      6: "SDG 6 淨水及衛生：確保所有人都能享有水、衛生及其永續管理",
      7: "SDG 7 可負擔的潔淨能源：確保所有的人都可取得負擔得起、可靠、永續及現代的能源",
      8: "SDG 8 合適的工作及經濟成長：促進包容且永續的經濟成長，讓每個人都有一份好工作",
      9: "SDG 9 工業化、創新及基礎建設：建立具有韌性的基礎建設，促進包容且永續的工業，並加速創新",
      10: "SDG 10 減少不平等：減少國內及國家間的不平等",
      11: "SDG 11 永續城鄉：建構具包容、安全、韌性及永續特質的城市與鄉村",
      12: "SDG 12 責任消費及生產：促進綠色經濟，確保永續消費及生產模式",
      13: "SDG 13 氣候行動：完備減緩調適行動，以因應氣候變遷及其影響",
      14: "SDG 14 保育海洋生態：保育及永續利用海洋生態系，以確保生物多樣性並防止海洋環境劣化",
      15: "SDG 15 保育陸域生態：保育及永續利用陸域生態系，確保生物多樣性並防止土地劣化",
      16: "SDG 16 和平、正義及健全制度：促進和平多元的社會，確保司法平等，建立具公信力且廣納民意的體系",
      17: "SDG 17 多元夥伴關係：建立多元夥伴關係，協力促進永續願景",
    };

    // 顯示目標詳細信息
    function showGoalInfo(goalNumber) {
      const description = goalDescriptions[goalNumber] || "該目標的詳細信息尚未提供。";
      document.getElementById('goal-description').textContent = description;
    }
 </script>
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
        <img src="" alt="Goal 1">
        <p>無貧窮</p>
      </div>
      <div class="goal" onclick="showGoalInfo(2)">
        <img src="" alt="Goal 2">
        <p>零飢餓</p>
      </div>
      <div class="goal" onclick="showGoalInfo(3)">
        <img src="" alt="Goal 3">
        <p>良好健康與福祉</p>
      </div>
      <div class="goal" onclick="showGoalInfo(4)">
        <img src="" alt="Goal 4">
        <p>優質教育</p>
      </div>
      <div class="goal" onclick="showGoalInfo(5)">
        <img src="" alt="Goal 5">
        <p>性別平權</p>
      </div>
      <div class="goal" onclick="showGoalInfo(6)">
        <img src="" alt="Goal 6">
        <p>淨水及衛生</p>
      </div>
      <div class="goal" onclick="showGoalInfo(7)">
        <img src="" alt="Goal 7">
        <p>可負擔的潔淨能源</p>
      </div>
      <div class="goal" onclick="showGoalInfo(8)">
        <img src="" alt="Goal 8">
        <p>合適的工作及經濟成長</p>
      </div>
      <div class="goal" onclick="showGoalInfo(9)">
        <img src="" alt="Goal 9">
        <p>工業化、創新及基礎建設</p>
      </div>
      <div class="goal" onclick="showGoalInfo(10)">
        <img src="" alt="Goal 10">
        <p>減少不平等</p>
      </div>
      <div class="goal" onclick="showGoalInfo(11)">
        <img src="" alt="Goal 11">
        <p>永續城鄉</p>
      </div>
      <div class="goal" onclick="showGoalInfo(12)">
        <img src="" alt="Goal 12">
        <p>責任消費及生產</p>
      </div>
      <div class="goal" onclick="showGoalInfo(13)">
        <img src="" alt="Goal 13">
        <p>氣候行動</p>
      </div>
      <div class="goal" onclick="showGoalInfo(14)">
        <img src="" alt="Goal 14">
        <p>保育海洋生態</p>
      </div>
      <div class="goal" onclick="showGoalInfo(15)">
        <img src="" alt="Goal 15">
        <p>保育陸域生態</p>
      </div>
      <div class="goal" onclick="showGoalInfo(16)">
        <img src="" alt="Goal 16">
        <p>和平、正義及健全制度</p>
      </div>
      <div class="goal" onclick="showGoalInfo(17)">
        <img src="" alt="Goal 17">
        <p> 多元夥伴關係</p>
      </div>
    </div>
  </section>

  <section id="goal-info">
    <h2>詳情</h2>
    <p id="goal-description">點擊上方的目標以查看詳細信息。</p>
  </section>

  <footer>
    <p>&copy; 2024 SDGs介紹網頁</p>
  </footer>
</body>
</html>
