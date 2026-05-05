<?php if(isset($this)) { if(!is_object($this)) { Header("Location: ../"); exit(); } } else { Header("Location: ../"); exit(); }
#	  ___ _   _ ___ _____ ___ ___ ___ ___ _  _ 
#	 / __| | | |_ _|_   _| __| __|_ _/ __| || |
#	 \__ \ |_| || |  | | | _|| _| | |\__ \ __ |
#	 |___/\___/|___| |_| |___|_| |___|___/_||_|
#
#	Copyright (C) 2026 Jan Maurice Dahlmanns [Bugfish]
#	This file is part of the core library and is NOT included
#	in any sublicense or third-party license agreements.
#
#	This program is free software: you can redistribute it and/or modify
#	it under the terms of the GNU General Public License as published by
#	the Free Software Foundation, either version 3 of the License, or
#	(at your option) any later version.
#
#	This program is distributed in the hope that it will be useful,
#	but WITHOUT ANY WARRANTY; without even the implied warranty of
#	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#	GNU General Public License for more details.
#
#	You should have received a copy of the GNU General Public License
#	along with this program.  If not, see <https://www.gnu.org/licenses/>. ?>
##########################################################################################
## Store Versioning Translations
##########################################################################################
store_version_name=テンプレート: Dockerモジュール
store_version_description=管理者モジュールのためのDockerサーバーマネージャー拡張用のDockerモジュール例、特に開発者向けです。Dockerモジュールに関する詳細情報は、Suitefishドキュメントおよびリポジトリ内のReadme.mdファイルで確認できます。

##########################################################################################
## Substitution Explanation Translations
##########################################################################################
var_select_key=これは、自動生成フォームを介した.envファイル内の単一選択値の置換例です。
var_select_key_v1=これは最初の選択値です。
var_select_key_v2=これは2番目の選択値です。
var_select_key_v3=これは3番目の選択値です。
var_string_key=これは、自動生成フォームを介した.envファイル内の文字列値の置換例です。
var_numeric_key=これは、自動生成フォームを介した.envファイル内の数値値の置換例です。
var_port_key=これは、自動生成フォームを介した.envファイル内のポート値の置換例です。
var_checkbox_key=これは、自動生成フォームを介した.envファイル内のチェックボックス値の置換例です。

##########################################################################################
## Command Translations
##########################################################################################
command_dir=コマンド 1
command_dir_descr=システム上で簡単なコマンドを実行する
command_cat=コマンド 2
command_cat_descr=システム上の簡単なファイルを表示する