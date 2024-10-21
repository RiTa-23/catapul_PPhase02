<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map</title>
    @vite('resources/css/app.css')
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        header {
            height: 8%;
            position: relative;
            z-index: 1000;
        }
        #map {
            height: 92%;
            width: 100%;
            position: relative;
            z-index: 10;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    @foreach ($prices as $price)
        <p>{{ $price->store->name }}: {{ $price->price }}</p>
    @endforeach


    <!-- Bladeの条件分岐を使ってデータがない場合の処理 -->
    @if ($prices->isEmpty())
        <p>ヒットしませんでした。</>
    @else
        <!-- データがある場合は地図を表示 -->
        <div id="map"></div>
    @endif

    @if (!$prices->isEmpty())
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script>
        // 位置情報の取得
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        successCallback(1);

        let DefaultIcon = L.icon({
            iconUrl: icon,
            iconRetinaUrl: iconRetina,
            shadowUrl: iconShadow,
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            tooltipAnchor: [16, -28],
            shadowSize: [41, 41]
        });
        L.Marker.prototype.options.icon = DefaultIcon;

        function successCallback(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            const map = L.map('map').setView([latitude, longitude], 14);

            // 現在地のマーカーを追加
            L.marker([latitude, longitude]).addTo(map)
                .bindPopup('現在地').openPopup();

            // OpenStreetMapレイヤーを追加
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // データベースから取得した店舗のマーカーを追加
            let prices = @json($prices); // BladeからJavaScriptにデータを渡す
            prices.forEach(price => {
                L.marker([price.store.locationx, price.store.locationy]) // プロパティ名に注意
                    .addTo(map)
                    .bindPopup(`${price.price}` +
                    "<br><a href='../../dashboard'>詳細画面へ</a>",
                    {autoClose:false,closeOnClick: false }).openPopup();
            });
        }

        function errorCallback(error) {
            alert("位置情報が取得できませんでした");
        }
    </script>
    @endif
</body>
</html>
