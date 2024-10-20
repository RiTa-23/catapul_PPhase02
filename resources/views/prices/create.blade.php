<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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


    <!-- Bladeの条件分岐を使ってデータがない場合の処理 -->
    @if ($stores->isEmpty())
        <p>ヒットしませんでした。</>
    @else
        <!-- データがある場合は地図を表示 -->
        <div id="map"></div>
    @endif

    @if (!$stores->isEmpty())
    <script>
        import L from 'leaflet';
        import icon from "leaflet/dist/images/marker-icon.png";
        import iconRetina from "leaflet/dist/images/marker-icon-2x.png";
        import iconShadow from "leaflet/dist/images/marker-shadow.png";

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

        // 位置情報の取得
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

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
            @foreach ($stores as $store)
                L.marker([{{ $store->locationX }}, {{ $store->locationY }}])
                    .addTo(map)
                    .bindPopup('{{ $store->name }}');
            @endforeach
        }

        function errorCallback(error) {
            alert("位置情報が取得できませんでした");
        }
    </script>
    @endif
</body>
</html>
