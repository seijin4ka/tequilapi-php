# ベースイメージの選択
FROM mysteriumnetwork/myst:latest

# Userの変更
USER root

# ポートのエクスポート
EXPOSE 4050/tcp
EXPOSE 40001/tcp

# 必要なパッケージのインストール
RUN apk add --no-cache libcap rclone
RUN setcap cap_net_bind_service=+ep /usr/bin/myst

# rclone 設定のインポート
COPY rclone.conf /root/.config/rclone/rclone.conf

# rclone Backup のインポート
COPY WalletBackup.sh /usr/local/bin/WalletBackup.sh
RUN chmod +x /usr/local/bin/WalletBackup.sh

# rclone mysterium のインポート
RUN rclone copy Wallet: /var/lib/mysterium-node

# コマンドの追加
CMD ["--ui.port=4050", "--proxymode", "daemon"]

# ボリュームのマウント
VOLUME ["./myst-data:/var/lib/mysterium-node"]