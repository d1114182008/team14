<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>可持續發展目標</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- 自定義 CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 3em;
            color: #4CAF50;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
        }

        p {
            text-align: center;
            font-size: 1.2em;
            color: #666;
            margin-bottom: 40px;
        }

        .goal-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .goal-list li {
            text-align: center;
        }

        .goal-list a {
            display: block;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            border-radius: 10px;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
        }

        .goal-list a:hover {
            background-color: #388E3C;
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .goal-list a::after {
            content: " ";
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .goal-list a:hover::after {
            opacity: 1;
        }

        .goal-details {
            margin-top: 50px;
        }

        .goal-details h2 {
            font-size: 2em;
            color: #fff;
            background-color: #4CAF50;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .goal-details p {
            margin-top: 20px;
            font-size: 1.1em;
            color: #333;
            line-height: 1.8;
            padding: 20px;
            background-color: #f9f9f9;
            border-left: 5px solid #4CAF50;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .goal-details img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 1em;
            color: #777;
        }

        footer p {
            margin: 0;
        }

        /* 滾動動畫 */
        .goal-list a {
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s forwards;
        }

        .goal-list a:nth-child(even) {
            animation-delay: 0.3s;
        }

        .goal-list a:nth-child(odd) {
            animation-delay: 0.6s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* 小屏幕調整 */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }

            .goal-list a {
                font-size: 1em;
                padding: 15px;
            }

            .goal-details h2 {
                font-size: 1.5em;
            }

            .goal-details p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>聯合國可持續發展目標</h1>
        <p>可持續發展目標（SDGs）是全球可持續發展的藍圖，共有17個目標，旨在解決全球面臨的迫切問題。</p>
        
        <ul class="goal-list">
            <li><a href="#goal1">消除貧窮</a></li>
            <li><a href="#goal2">消除飢餓</a></li>
            <li><a href="#goal3">良好健康</a></li>
            <li><a href="#goal4">優質教育</a></li>
            <li><a href="#goal5">性別平等</a></li>
            <li><a href="#goal6">清潔水源</a></li>
            <li><a href="#goal7">清潔能源</a></li>
            <li><a href="#goal8">體面工作</a></li>
            <li><a href="#goal9">產業創新</a></li>
            <li><a href="#goal10">減少不平等</a></li>
            <li><a href="#goal11">可持續城市</a></li>
            <li><a href="#goal12">負責任消費</a></li>
            <li><a href="#goal13">氣候行動</a></li>
            <li><a href="#goal14">水下生物</a></li>
            <li><a href="#goal15">陸地生物</a></li>
            <li><a href="#goal16">和平正義</a></li>
            <li><a href="#goal17">合作實現</a></li>
        </ul>

        <div class="goal-details">
            <h2 id="goal1">1. 消除貧窮</h2>
            <p>消除一切形式的貧窮，確保每個人都有平等的生活條件。這包括提供經濟支持和社會保障，讓貧困人口能夠重建生計，獲得教育和醫療資源。</p>
            <img src="https://media.giphy.com/media/ELDEqBeo7k3tu/giphy.gif" alt="Homeless GIF">

            <h2 id="goal2">2. 消除飢餓</h2>
            <p>消除飢餓，實現糧食安全，改善營養，促進可持續農業。這目標要求各國投資農業，推廣可持續的生產方法，以確保每個人都能獲得充足的食物。</p>
            <img src="https://media.giphy.com/media/fteuziV4qzK62ctmLN/giphy.gif" alt="GIF Animation" width="480" height="269">


            <h2 id="goal3">3. 良好健康與福祉</h2>
            <p>確保健康生活，促進各年齡段人群的福祉。這包括改善醫療服務、預防疾病和促進心理健康，特別是在疫情和危機情況下的應對能力。</p>
            <img src="https://media.giphy.com/media/xTk9ZRtje1gyEmjjyM/giphy.gif" alt="良好健康與福祉GIF">

            <h2 id="goal4">4. 優質教育</h2>
            <p>確保包容和公平的優質教育，促進終身學習的機會。這目標強調提高教育的質量，特別是在貧困和邊緣化社區中的教育機會。</p>
            <img src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExaHpwOHhkZnl5MGh1bTlwNzFqOGthZnVsdTB1am51MjRwdzVrdnBkdiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/KiXl0vfc9XIIM/giphy.gif" alt="GIF" width="480">


            <h2 id="goal5">5. 性別平等</h2>
            <p>實現性別平等，增強所有女性和女孩的權能。這包括消除暴力、性別歧視和促進女性在政治、經濟和社會生活中的參與。</p>
            <img src="https://media.giphy.com/media/8KwExK7xjjJxqqSOnA/giphy.gif" alt="GIF" width="480">


            <h2 id="goal6">6. 清潔水源與衛生設施</h2>
            <p>確保人人享有水和衛生設施，管理水資源。這目標要求各國改善水質，推廣清潔衛生設施，以減少水源污染和水相關疾病。</p>
            <img src="https://media.giphy.com/media/Go79jaHXpDTPPQzWI0/giphy.gif" alt="GIF" width="480">


            <h2 id="goal7">7. 可負擔的清潔能源</h2>
            <p>確保人人可獲得負擔得起、可靠和可持續的現代能源。這包括增加可再生能源的使用，並改善能源效率。</p>
            <img src="https://media.giphy.com/media/WSqsdbIH6mLrHe78tJ/giphy.gif" alt="Wind Turbines" width="480" height="480">


            <h2 id="goal8">8. 體面工作和經濟增長</h2>
            <p>促進持久、包容和可持續的經濟增長，充分和生產性的就業機會。這目標強調改善工作條件，鼓勵創業和提高勞動者的權益。</p>
            <img src="https://media.giphy.com/media/tXHFRzLpbcwIuxcC2E/giphy.gif" alt="Saturday Night Live GIF" width="480" height="269">


            <h2 id="goal9">9. 產業、創新和基礎設施</h2>
            <p>建設韌性基礎設施，促進可持續工業化和創新。這包括支持小型企業和科技創新，增強基礎設施的可持續性。</p>
            <img src="https://media.giphy.com/media/wcSn86GKpAYbS/giphy.gif" alt="Tesla Elon Musk GIF" width="480" height="269">


            <h2 id="goal10">10. 減少不平等</h2>
            <p>在和國家之間縮小不平等。這包括提高富裕和貧困之間的收入公平，促進社會流動性和機會平等。</p>
            <img src="https://media.giphy.com/media/kiSmDXfBJwFYQsNEow/giphy.gif" width="480" height="480" alt="Chancen Index GIF">


            <h2 id="goal11">11. 可持續城市和社區</h2>
            <p>使城市和人類住區包容、安全、有韌性和可持續。這目標要求改善城市規劃，促進公共交通和綠色空間的發展。</p>
            <img src="https://media.giphy.com/media/fMYhlRdVtRnsk/giphy.gif" width="480" height="269" alt="Timelapse City New York">

            <h2 id="goal12">12. 負責任消費和生產</h2>
            <p>確保可持續的消費和生產模式。這包括減少資源的浪費，鼓勵可持續的商業實踐和負責任的消費行為。</p>
            <img src="https://media.giphy.com/media/QC0l58FqszjyGl4BmS/giphy.gif" width="480" height="269" alt="Funny Dogs Shopping">


            <h2 id="goal13">13. 氣候行動</h2>
            <p>加強應對氣候變化及其影響的能力。這包括支持可再生能源的使用、減少溫室氣體排放和提高社會對氣候變化的適應能力。</p>
            <img src="https://media.giphy.com/media/MQ49l1uD9myTE69Cn5/giphy.gif" width="480" height="480" alt="Climate Clean Energy Green">


            <h2 id="goal14">14. 水下生物</h2>
            <p>保護和可持續使用海洋和海洋資源，以促進可持續發展。這包括減少海洋污染，保護海洋生物多樣性。</p>
            <img src="https://media.giphy.com/media/BN6MkzHhaapG3n6BN9/giphy.gif" width="480" height="269" alt="4ocean Earth Day Month">

            <h2 id="goal15">15. 陸地生物</h2>
            <p>保護、恢復和促進可持續利用陸地生態系統。這包括防止生物多樣性的喪失，推動森林的可持續管理。</p>
            <img src="https://media.giphy.com/media/QBRmnNI3rwxbGELsJR/giphy.gif" width="480" height="271" alt="Disaster Relief">

            <h2 id="goal16">16. 和平、正義與強大機構</h2>
            <p>促進和平與包容的社會，確保每個人都能獲得司法，建立有效、負責任和包容的機構。</p>
            <img src="https://media.giphy.com/media/wJKQCSeexuO5y/giphy.gif" width="480" height="360" alt="Derek Hough">


            <h2 id="goal17">17. 合作實現目標</h2>
            <p>加強執行手段和重振全球夥伴關係以可持續發展。這包括促進國際合作，支持各國之間的發展資金。</p>
            <img src="https://media.giphy.com/media/3rgXBrLlRs4ZlpnVDO/giphy.gif" width="480" height="360" alt="Go Team Air Bud">

        </div>

        <footer>
            <p>&copy; 2025 聯合國可持續發展目標</p>
        </footer>
    </div>

    <!-- Bootstrap 5 JS 和 Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
