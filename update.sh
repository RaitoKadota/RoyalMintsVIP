#!/bin/bash

# ディレクトリを削除
rm -rf RoyalMintsVIP

# リポジトリをクローン
git clone https://github.com/RaitoKadota/RoyalMintsVIP.git

# update前のphpファイルを削除
rm -f index.php
rm -f thanks.php
rm -f law.php

# RoyalMintsVIP ディレクトリ内の必要なファイルをコピー
cp ./RoyalMintsVIP/index.php ./
cp ./RoyalMintsVIP/thanks.php ./
cp ./RoyalMintsVIP/law.php ./
cp ./RoyalMintsVIP/style.css ./
