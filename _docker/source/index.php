<?php
	#	 ____  _   _ ___ _____ _____ _____ ___ ____  _   _ 
	#	/ ___|| | | |_ _|_   _| ____|  ___|_ _/ ___|| | | |
	#	\___ \| | | || |  | | |  _| | |_   | |\___ \| |_| |
	#	 ___) | |_| || |  | | | |___|  _|  | | ___) |  _  |
	#	|____/ \___/|___| |_| |_____|_|   |___|____/|_| |_|                       
	#									  __       _  _  _  _ __    __ 
	#									 / /(\/\/)( \( \( \( \\ \  / / 
	#									( (  )  (  ) )) )) )) )) )( (  
	#									 \_\(/\/\)(_/(_/(_/(_//_/  \_\ 
	
	#	Copyright (C) 2026 Jan Maurice Dahlmanns [Bugfish]
	#	This file is part of the core library and is NOT included
	#	in any sublicense or third-party license agreements.

	#	This program is free software: you can redistribute it and/or modify
	#	it under the terms of the GNU General Public License as published by
	#	the Free Software Foundation, either version 3 of the License, or
	#	(at your option) any later version.

	#	This program is distributed in the hope that it will be useful,
	#	but WITHOUT ANY WARRANTY; without even the implied warranty of
	#	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	#	GNU General Public License for more details.

	#	You should have received a copy of the GNU General Public License
	#	along with this program.  If not, see <https://www.gnu.org/licenses/>.
	
	/***********************************************************************************************************
		Show the env vars
	***********************************************************************************************************/
?>

The container has been deployed successfully.<br />
You have set up the following data:<br /><br />

<?php

	echo "var_string_example: ".getenv('var_string_example')."<br />";
	echo "var_numeric_example: ".getenv('var_numeric_example')."<br />";
	echo "var_select_example: ".getenv('var_select_example')."<br />";
	echo "var_port_example: ".getenv('var_port_example')."<br />";
	echo "var_checkbox_example_1: ".getenv('var_checkbox_example_1')."<br />";
	echo "var_checkbox_example_2: ".getenv('var_checkbox_example_2')."<br />";
	echo "var_checkbox_example_3: ".getenv('var_checkbox_example_3')."<br />";