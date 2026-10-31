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
store_version_name=Modèle : Module Docker
store_version_description=Exemple de module Docker pour l'extension Docker Server Manager de notre module administrateur, particulièrement pour les développeurs. Vous pouvez obtenir plus d'informations sur les modules Docker dans la documentation Suitefish et les fichiers Readme.md associés dans le dépôt.

##########################################################################################
## Substitution Explanation Translations
##########################################################################################
var_select_key=Ceci est un exemple de substitution d'une valeur de sélection unique dans le fichier .env via le formulaire généré automatiquement.
var_select_key_v1=Ceci est la première valeur de sélection.
var_select_key_v2=Ceci est la deuxième valeur de sélection.
var_select_key_v3=Ceci est la troisième valeur de sélection.
var_string_key=Ceci est un exemple de substitution de valeur chaîne dans le fichier .env via le formulaire généré automatiquement.
var_numeric_key=Ceci est un exemple de substitution de valeur numérique dans le fichier .env via le formulaire généré automatiquement.
var_port_key=Ceci est un exemple de substitution de valeur de port dans le fichier .env via le formulaire généré automatiquement.
var_checkbox_key=Ceci est un exemple de substitution de valeur de case à cocher dans le fichier .env via le formulaire généré automatiquement.

##########################################################################################
## Command Translations
##########################################################################################
command_dir=Commande 1
command_dir_descr=Exécuter une commande simple sur le système
command_cat=Commande 2
command_cat_descr=Afficher un fichier simple sur le système