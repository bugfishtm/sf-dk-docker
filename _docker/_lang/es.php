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
store_version_name=Plantilla: Módulo Docker
store_version_description=Ejemplo de módulo Docker para la extensión Docker Server Manager de nuestro módulo de administrador, especialmente para desarrolladores. Puede obtener más información sobre los módulos Docker en la documentación de Suitefish y en los archivos Readme.md relacionados en el repositorio.

##########################################################################################
## Substitution Explanation Translations
##########################################################################################
var_select_key=Este es un ejemplo de un valor de selección única en el archivo .env a través del formulario generado automáticamente.
var_select_key_v1=Este es el primer valor de selección.
var_select_key_v2=Este es el segundo valor de selección.
var_select_key_v3=Este es el tercer valor de selección.
var_string_key=Este es un ejemplo de sustitución de valor de cadena en el archivo .env a través del formulario generado automáticamente.
var_numeric_key=Este es un ejemplo de sustitución de valor numérico en el archivo .env a través del formulario generado automáticamente.
var_port_key=Este es un ejemplo de sustitución de valor de puerto en el archivo .env a través del formulario generado automáticamente.
var_checkbox_key=Este es un ejemplo de sustitución de valor de casilla de verificación en el archivo .env a través del formulario generado automáticamente.

##########################################################################################
## Command Translations
##########################################################################################
command_dir=Comando 1
command_dir_descr=Ejecutar un comando simple en el sistema
command_cat=Comando 2
command_cat_descr=Mostrar un archivo simple en el sistema