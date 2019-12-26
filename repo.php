<?php
    include_once ("base.php");

    // 清空資料庫
    del();
    // 初始化 curl
    $curl = curl_init();

    // 設定發出請求的瀏覽器
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");

    // 設定接受所有 https 憑證，不做驗證
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 

    // 設定跟隨重新導向
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 

    // 重新導向時自動設定訪客來源 referer
    curl_setopt($curl, CURLOPT_AUTOREFERER, true); 

    // 將回傳資料寫入變數，而不是直接輸出
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    
    curl_setopt($curl, CURLOPT_URL, "https://data.ntpc.gov.tw/od/data/api/54DDDC93-589C-4858-9C95-18B2046CC1FC?\$format=json");

    $data = curl_exec($curl);

    curl_close($curl);

    // 將JSON文字轉為可使用的陣列
    // true 轉陣列，false 轉物件
    $json = json_decode($data, true);
?>
<table border="1">

    <!-- 一筆一筆存入資料庫 -->
    <?php
        $num = 1;
        foreach($json as $value) {
            $dataU['id'] = $num;
            $dataU['sna'] = $value['sna'];
            $dataU['tot'] = $value['tot'];
            $dataU['sbi'] = $value['sbi'];
            $dataU['sarea'] = $value['sarea'];
            $dataU['lat'] = $value['lat'];
            $dataU['lng'] = $value['lng'];
            $dataU['ar'] = $value['ar'];
            $dataU['act'] = $value['act'];
            insert($dataU);
            $num++;
        }
    $_SESSION['save'] = "done";
    ?>
</table>
    
</body>
</html>