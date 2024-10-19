<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map</title>
    <!-- LeafletのスタイルをVite経由で読み込む -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html, body {
            height: 100%;  /* HTMLとbodyの高さを100%に設定 */
            margin: 0;     /* マージンを0に設定 */
            padding: 0;    /* パディングを0に設定 */
            position: relative;
            /* z-indexを使う場合、positionが必要です */
            z-index: 1;
            /* 他の要素よりも高い値を設定 */
        }
        #map {
            height: 90%;  /* 地図を表示するdivの高さを100%に設定 */
            width: 100%;   /* 地図を表示するdivの幅を100%に設定 */
            position: relative;
            /* z-indexを使う場合、positionが必要です */
            z-index: 10;
            /* 他の要素よりも高い値を設定 */
        }
        header {
            position: relative;
            /* z-indexを使う場合、positionが必要です */
            z-index: 1000;
            /* 他の要素よりも高い値を設定 */
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    <!-- 地図を表示するための要素 -->
    <!-- !!ここの高さがうまく調整できない ;; -->
    <div id="map" style="height: 92%;"></div>
</body>
</html>