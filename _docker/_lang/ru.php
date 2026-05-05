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
store_version_name=Шаблон: Модуль Docker
store_version_description=Пример модуля Docker для расширения Docker Server Manager в нашем административном модуле, особенно для разработчиков. Более подробную информацию о модулях Docker можно найти в документации Suitefish и связанных файлах Readme.md в репозитории!

##########################################################################################
## Substitution Explanation Translations
##########################################################################################
var_select_key=Это пример замены значения с одиночным выбором в файле .env через автоматически сгенерированную форму.
var_select_key_v1=Это первое значение выбора.
var_select_key_v2=Это второе значение выбора.
var_select_key_v3=Это третье значение выбора.
var_string_key=Это пример замены строкового значения в файле .env через автоматически сгенерированную форму.
var_numeric_key=Это пример замены числового значения в файле .env через автоматически сгенерированную форму.
var_port_key=Это пример замены значения порта в файле .env через автоматически сгенерированную форму.
var_checkbox_key=Это пример замены значения флажка в файле .env через автоматически сгенерированную форму.

##########################################################################################
## Command Translations
##########################################################################################
command_dir=Команда 1
command_dir_descr=Выполнить простую команду в системе
command_cat=Команда 2
command_cat_descr=Показать простой файл в системе