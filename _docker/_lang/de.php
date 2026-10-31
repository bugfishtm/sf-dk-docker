<?php if(isset($this)) { if(!is_object($this)) { Header("Location: ../"); exit(); } } else { Header("Location: ../"); exit(); }
#	 ____  _   _ ___ _____ _____ _____ ___ ____  _   _ 
#	/ ___|| | | |_ _|_   _| ____|  ___|_ _/ ___|| | | |
#	\___ \| | | || |  | | |  _| | |_   | |\___ \| |_| |
#	 ___) | |_| || |  | | | |___|  _|  | | ___) |  _  |
#	|____/ \___/|___| |_| |_____|_|   |___|____/|_| |_|                       
#									  __       _  _  _  _ __    __ 
#									 / /(\/\/)( \( \( \( \\ \  / / 
#									( (  )  (  ) )) )) )) )) )( (  
#									 \_\(/\/\)(_/(_/(_/(_//_/  \_\ 
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
store_version_name=Vorlage: Docker-Modul
store_version_description=Beispiel für ein Docker-Modul für die Docker Server Manager-Erweiterung unseres Administrator-Moduls, insbesondere für Entwickler. Weitere Informationen zu Docker-Modulen finden Sie in der Suitefish-Dokumentation und den zugehörigen Readme.md-Dateien im Repository!

##########################################################################################
## Substitution Explanation Translations
##########################################################################################
var_select_key=Dies ist ein Beispiel für den Ersatz eines Einzelwahlwertes in der .env-Datei über das automatisch generierte Formular.
var_select_key_v1=Dies ist der erste Auswahlwert.
var_select_key_v2=Dies ist der zweite Auswahlwert.
var_select_key_v3=Dies ist der dritte Auswahlwert.
var_string_key=Dies ist ein Beispiel für den Ersatz eines String-Wertes in der .env-Datei über das automatisch generierte Formular.
var_numeric_key=Dies ist ein Beispiel für den Ersatz eines numerischen Wertes in der .env-Datei über das automatisch generierte Formular.
var_port_key=Dies ist ein Beispiel für den Ersatz eines Port-Wertes in der .env-Datei über das automatisch generierte Formular.
var_checkbox_key=Dies ist ein Beispiel für den Ersatz eines Kontrollkästchen-Wertes in der .env-Datei über das automatisch generierte Formular.

##########################################################################################
## Command Translations
##########################################################################################
command_dir=Befehl 1
command_dir_descr=Einen einfachen Befehl auf dem System ausführen
command_cat=Befehl 2
command_cat_descr=Eine einfache Datei auf dem System anzeigen