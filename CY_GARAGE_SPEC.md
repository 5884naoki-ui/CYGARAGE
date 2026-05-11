# CY GARAGE — TOPページ制作スペック
> Claude Code向け指示書 / 2026.04

---

## プロジェクト概要

**サイト名**: CY GARAGE（まれしゃ屋）  
**運営**: 米川 力（代表）  
**所在**: 江東区南砂  
**事業**: 稀少輸入車販売・カーラッピング・買取  
**Wix構築予定**（現段階はHTMLプロトタイプで方向性確認）

---

## 制作するファイル

| ファイル名 | 概要 |
|---|---|
| `TOP_A.html` | A案：まれしゃという車の世界が入口 |
| `TOP_B.html` | B案：社長という人が入口 |
| `TOP_C.html` | C案：販売・買取の両方がFVからわかる |

3案ともクライアントに見せる**方向性確認用プロトタイプ**。
実装はWixで行うため、HTMLは見た目・雰囲気の確認用。

---

## デザイントークン（全案共通）

```css
:root {
  --gold: #c8a96e;
  --gold-light: #e8c98e;
  --gold-dark: #a8893e;
  --black: #080808;
  --dark: #0d0d0d;
  --panel: #111111;
  --gray: #888888;
  --text: #f0f0f0;
}
```

**フォント**
```
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans+JP:wght@300;400;500;700&display=swap');

見出し大: Bebas Neue（英字）
本文・日本語: Noto Sans JP
```

**基本スタイル方針**
- 背景: `#080808`（ほぼ黒）
- アクセント: `--gold`（ゴールド）
- テキスト: `#f0f0f0`（白に近いグレー）
- サブテキスト: `#888`
- ボーダー: `rgba(200,169,110,0.15)`（ゴールド薄め）
- 余白は広め、高級感のあるラグジュアリーな空気感
- マイアミの豪邸をイメージ（暗くリッチ）

---

## 画像プレースホルダー仕様

画像が届いていないため、以下のプレースホルダーを使用する。
実装時に差し替えるだけでいい状態にしておくこと。

| 変数名（alt / comment） | 内容 | 推奨サイズ |
|---|---|---|
| `RAPTOR_HERO` | ラッピングされたラプター全景 | 1920×1080px |
| `BOSS_HERO` | 社長・マイアミTシャツ腕組み写真 | 1920×1080px |
| `INVENTORY_01〜04` | 在庫車両写真（ダミー） | 800×600px |
| `INSTAGRAM_01〜06` | Instagram投稿サムネ（ダミー） | 400×400px |

プレースホルダーのスタイル：
```css
.img-placeholder {
  background: #1a1a1a;
  border: 1px dashed #333;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #444;
  font-size: 11px;
  letter-spacing: 2px;
}
```

---

## 共通コンポーネント

### ヘッダー（全案共通）
```
[CY GARAGE ロゴ]  在庫  買取  ラッピング  まれしゃとは  [無料査定 CTA]
```
- fixed / 透過グラデーション
- スクロールで背景ソリッドに変化

### フッター（全案共通）
```
CY GARAGE
江東区南砂 / @cy_garage_official
© 2026 CY GARAGE
```

### 在庫カード（C案共通・3案すべてに使用）
```
[車両写真]
車名（例: Ford F-150 Raptor）
年式 / 走行距離
価格: ¥000万円
[社長のひとことコメント]  ← B案では必須、A/C案でも入れる
```

---

## コピー（確定テキスト）

### まれしゃ定義コピー（全案共通で使用）
```
稀車と書いて、まれしゃ。
被らない一台がここにある。

個性が強くて、まず被らない。
走ってたら、振り返られる。
そういう見た目の車のことを
CY GARAGEでは、まれしゃという。
```

### 買取CTAコピー（全案共通）
```
H2: あなたの車、まれしゃ価格で。
body: 個性的な車の価値は、わかる人間に査定させてほしい。
CTA: 無料査定を依頼する
```

---

## 各案のテキスト構成

---

### A案｜まれしゃという世界が入口

**HERO**
- eyebrow: `CY GARAGE — MIAMI STYLE RARE CARS`
- H1: `これが、まれしゃだ。`
- sub: `なかなか被らない。そういう一台を、集めている。`
- CTA: `在庫を見る`
- **背景画像**: `RAPTOR_HERO`（ラッピングラプター全景）

**SECTION 1｜まれしゃとは**
- eyebrow: `WHAT IS 稀車`
- H2: `稀車と書いて、まれしゃ。被らない一台がここにある。`
- body: まれしゃ定義コピー（上記）

**SECTION 2｜在庫ハイライト**
- eyebrow: `CURRENT INVENTORY`
- H2: `今、ここにあるまれしゃたち。`
- 在庫カード × 4台
- link: `すべての在庫を見る →`

**SECTION 3｜Instagram**
- eyebrow: `FOLLOW @cy_garage_official`
- H2: `まれしゃ好き、集まれ。`
- Instagram投稿グリッド × 6枚（プレースホルダー）

**SECTION 4｜買取CTA**
- 買取CTAコピー（上記）

---

### B案｜社長が入口

**HERO**
- eyebrow: `CY GARAGE — 米川 力`
- H1: `まれしゃ屋の社長が、選んだ一台。`
- sub: `稀車と書いて、まれしゃ。被らない一台がここにある。`
- CTA: `在庫を見る`
- **背景画像**: `BOSS_HERO`（社長・マイアミTシャツ腕組み）
- 画像は右側に大きく配置、左にテキスト

**SECTION 1｜社長について**
- eyebrow: `THE BOSS`
- H2: `まれしゃ屋、米川。`
- body: `かましてる車が好きで、被りたくない人の味方。それだけをずっとやってきた。`
- link: `社長について →`

**SECTION 2｜在庫ハイライト**
- eyebrow: `BOSS'S PICK`
- H2: `社長が今、推したい一台。`
- 在庫カード × 4台（各カードに社長コメント必須）
- link: `すべての在庫を見る →`

**SECTION 3｜Instagram**
- eyebrow: `FOLLOW @cy_garage_official`
- H2: `社長の目線で見る、まれしゃの世界。`
- Instagram投稿グリッド × 6枚（動画サムネ混在）

**SECTION 4｜買取CTA**
- 買取CTAコピー（上記）

---

### C案｜販売も買取も一目でわかる

**HERO**
- eyebrow: `CY GARAGE — MIAMI STYLE RARE CARS`
- H1: `稀車好き、集まれ。`
- sub: `買いたい人も、売りたい人も。まれしゃのことなら、CY GARAGE。`
- CTA①: `まれしゃを探す`（ゴールド）
- CTA②: `愛車を売る`（ゴースト）
- **背景画像**: `RAPTOR_HERO`（A案と同じ、またはBOSS_HEROでも可）

**SECTION 1｜まれしゃとは**
- eyebrow: `WHAT IS 稀車`
- H2: `稀車と書いて、まれしゃ。被らない一台がここにある。`
- body: まれしゃ定義コピー（上記）

**SECTION 2｜販売 × 買取 並列カード**
- 左カード（BUY）
  - eyebrow: `BUY`
  - H3: `まれしゃを、手に入れる。`
  - body: `在庫はすべて社長が選んだ一台。`
  - CTA: `在庫を見る →`
- 右カード（SELL）
  - eyebrow: `SELL`
  - H3: `まれしゃを、正しく売る。`
  - body: `個性的な車の価値は、わかる人間に査定させてほしい。`
  - CTA: `無料査定を依頼する →`

**SECTION 3｜在庫ハイライト**
- eyebrow: `CURRENT INVENTORY`
- H2: `今、ここにあるまれしゃたち。`
- 在庫カード × 4台
- link: `すべての在庫を見る →`

**SECTION 4｜Instagram**
- eyebrow: `FOLLOW @cy_garage_official`
- H2: `まれしゃ好き、集まれ。`
- Instagram投稿グリッド × 6枚

**SECTION 5｜買取CTA**
- 買取CTAコピー（上記）

---

## 注意事項

- 3ファイルは**同じCSS設計**を使い回す（デザイントークン統一）
- 画像はすべてプレースホルダーで実装、差し替え前提
- モバイル対応（レスポンシブ）は後工程、まずはPC表示のみでOK
- アニメーションは最小限（フェードイン程度）、重くしない
- 各ファイルの冒頭コメントに案の概要を記載すること
