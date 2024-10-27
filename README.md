# やすいと
## 概要
最安値を検索、登録するアプリ
カテゴリ、商品を選択して検索をすると現在地をもとに近くのお店の値段を検索できる
また、ユーザー側がカテゴリ、商品、店舗を選択して値段を入力することで値段の登録も行うことができる
### 最安値検索
- 探している商品をカテゴリで選択する
- 現在地をもとに近くの最安値をマップ上で表示してくれる

### 値段登録
- マップ上で該当のお店を選択
- 商品、値段を入力（誰が登録したか、登録した時間も詳細で確認できる）
## 画面遷移
### カテゴリ選択画面
▼ 
### 商品選択画面
▼
### モード選択画面（検索 or 登録）
- 商品検索画面
    - マップ上に値段（お店の場所）が複数表示される（データベースのpriceを参照→範囲内の登録されている値段を表示）
    - 表示された値段を押すと詳細画面に飛ぶ（お店の名前、場所、営業時間などの説明）
- 値段登録画面
    - マップ上にお店が表示される（データベースのstoreを参照→表示されている画面内にある近場のお店を選択できる）
    - 表示されたお店をおすと値段が入力できる
## 使用技術
leaflet(JSのライブラリ）
## チーム開発に関して
- slackのハドルミーティングを用いて定期的に夜９時あたりからチーム開発を行った
- 基本的にペアプロで二人チーム×２に分かれて作業を進めた
- gitHubのissueやlabelなども活用してチーム開発を進めた
