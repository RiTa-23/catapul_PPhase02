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

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

// 取得に成功した場合の処理
function successCallback(position) {
    // 緯度を取得
    var latitude = position.coords.latitude;
    // 経度を取得
    var longitude = position.coords.longitude;

    // 座標とズームレベルを指定 
    const map = L.map('map').setView([latitude, longitude], 14);

    // // 現在地のマーカーの追加
    // var marker = L.marker([latitude, longitude]).addTo(map);
    // marker.bindPopup('現在地', { autoClose: false }).openPopup();

    // マーカーの追加 例 博多駅
    // ここでマーカーを作っているので !!$shop.locationから追加したい
    var marker = L.marker([33.590188, 130.420685]).addTo(map);
    marker.bindPopup('博多駅', { autoClose: false }).openPopup(); // ポップアップを表示 !!ここで値段を入れる

    // 円の追加 例：東京駅
    // ここで縁を追加しているので !!user.locationから緯度経度を代入してif文で半径を決める
    var circle = L.circle([latitude, longitude], {
        color: 'blue',
        fillColor: '#4169e1',
        fillOpacity: 0.4,
        radius: 1000 //ここが半径
    }).addTo(map);

    // OpenStreetMapレイヤーを追加、クレジット表記必須
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);
};

// 取得に失敗した場合の処理
function errorCallback(error) {
    alert("位置情報が取得できませんでした");
};