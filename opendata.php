<?php
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

    curl_setopt($curl, CURLOPT_URL, "https://data.ntpc.gov.tw/api/v1/rest/datastore/382000000A-000352-001");

    $data = curl_exec($curl);

    curl_close($curl);

    // 將JSON文字轉為可使用的陣列
    // true 轉陣列，false 轉物件
    $json = json_decode($data, true);

    foreach($json['result']['records'] as $value) {
        print_r($value);
    }
?>       