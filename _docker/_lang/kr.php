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
store_version_name=템플릿: Docker 모듈
store_version_description=관리자 모듈을 위한 Docker 서버 관리 확장용 Docker 모듈 예제입니다. 특히 개발자를 위해 설계되었습니다. Docker 모듈에 대한 자세한 정보는 Suitefish 문서와 리포지토리 내의 Readme.md 파일에서 확인할 수 있습니다.

##########################################################################################
## Substitution Explanation Translations
##########################################################################################
var_select_key=이것은 자동 생성된 양식을 통해 .env 파일에서 단일 선택 값 치환의 예입니다.
var_select_key_v1=이것은 첫 번째 선택 값입니다.
var_select_key_v2=이것은 두 번째 선택 값입니다.
var_select_key_v3=이것은 세 번째 선택 값입니다.
var_string_key=이것은 자동 생성된 양식을 통해 .env 파일에서 문자열 값 치환의 예입니다.
var_numeric_key=이것은 자동 생성된 양식을 통해 .env 파일에서 숫자 값 치환의 예입니다.
var_port_key=이것은 자동 생성된 양식을 통해 .env 파일에서 포트 값 치환의 예입니다.
var_checkbox_key=이것은 자동 생성된 양식을 통해 .env 파일에서 체크박스 값 치환의 예입니다.

##########################################################################################
## Command Translations
##########################################################################################
command_dir=명령 1
command_dir_descr=시스템에서 간단한 명령 실행
command_cat=명령 2
command_cat_descr=시스템에서 간단한 파일 표시