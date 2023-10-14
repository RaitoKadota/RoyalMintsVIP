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
cp ./RoyalMintsVIP/index.html ./
cp ./RoyalMintsVIP/thanks.html ./
cp ./RoyalMintsVIP/law.html ./
cp ./RoyalMintsVIP/policy.html ./
cp ./RoyalMintsVIP/style.css ./
