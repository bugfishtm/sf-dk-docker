# 📦 Docker Module

## 📙 Introduction

> [!Warning]
> This repository is intended for developers or as a placeholder for Suitefish-related code, not for issue reporting. Please submit issues at https://github.com/bugfishtm/suitefish-cms/issues.

This section explains how a Docker module works. Docker modules integrate seamlessly with Suitefish CMS, allowing them to be deployed, backed up, and monitored. You can also combine multiple Docker services within a single Suitefish Docker module.

You may download the example module here: [Download](https://github.com/bugfishtm/sf-dk-docker)

## 🐳 Container

Here are information about the docker container which will be created after deployment.

**Container**

| Name | Description |
|---|----|
|dummy | Container with dummy website/variables preview instance | 


**Volumes**

| Name | Description | Container Path|
|---|----|----|
| x | x | x |


**Ports**

| Port | Set by Variable | Description|
|---|----|----|
| x | ${var_port_example} | Port for HTTP Website Connections |


**Variables**

| Name | Description |
|---|----|
|var_string_example | String Example Variable | 
|var_numeric_example | Numeric Example Variable |
|var_select_example | Single Select Example Variable |
|var_port_example | Port Example Variable |
|var_checkbox_example_1 | Checkbox Example Variable 1 |
|var_checkbox_example_2 | Checkbox Example Variable 2 |
|var_checkbox_example_3 | Checkbox Example Variable 3 |

## 🛠️ Installation

1. Method: Login to your suitefish instance and browse our official store on your page. If you find the module you are looking for just download the package. Then navigate to the Docker Server Manager Area and Deploy the downloaded package.

2. Method: Navigate to the Docker Package Area inside the suitefish instance. Go to the upload section and upload the modules .zip file. Then navigate to the Docker Server Manager Area and Deploy the downloaded package.

## 📁 Folder Structure 

| Folder/File | Description | Optional |
|----------|--------|----------|
| `./_changes/`  | Folder for Changelogs | Optional |
| `./_changes/index.php`  | Prevent Directory Listing | Optional | 
| `./_changes/1.10.100.php`  | Changelog for version 1.10.100 | Optional |
| `./_lang` | Language files in this folder | Optional | 
| `./_lang/de.php` | Translation File for German | Optional | 
| `./_lang/en.php` | Translation File for English | Optional | 
| `./_lang/es.php` | Translation File for Spanish | Optional | 
| `./_lang/fr.php` | Translation File for French | Optional | 
| `./_lang/in.php` | Translation File for Hindu | Optional | 
| `./_lang/it.php` | Translation File for Italian | Optional | 
| `./_lang/ja.php` | Translation File for Japanese | Optional | 
| `./_lang/kr.php` | Translation File for Korean | Optional | 
| `./_lang/pt.php` | Translation File for Portuguese | Optional | 
| `./_lang/ru.php` | Translation File for Russian | Optional | 
| `./_lang/tr.php` | Translation File for Turkish | Optional | 
| `./_lang/zh.php` | Translation File for Chinese | Optional | 
| `./_lang/[LANGEUAGECODE].php`  | Other language Files you may add | Optional | 
| `./_lang/index.php`  | Prevent Directory Listing | Optional | 
| `./_licenses` | Store your external licenses in this folder | Optional | 
| `./_licenses/example.lic` | Example License File | Optional | 
| `./_licenses/[LIBNAME].lic` | Store your other License files here | Optional | 
| `./_licenses/index.php` | Prevent Directory Listing | Optional | 
| `./preview.jpg` | Preview image for the store and other areas the module is visble at | Mandatory | 
| `./LICENSE.md` | License information about the module | Mandatory | 
| `./README.md` | Readme file with general information about the module | Mandatory | 
| `./changelog.php` | File containing changelogs for the latest version only | Mandatory | 
| `./version.php` | Versioning and meta file of the module | Mandatory | 
| `./index.php`  | Prevent Directory Listing | Optional | 
| `./.env`  | Docker compose environment variables. | Optional | 
| `./docker-compose.yml`  | Docker compose file. | Mandatory | 
| `./Dockerfile`  | Docker file. | Optional | 
| `./commands.php`  | Available Button Commands Array for Interface. | Optional | 

## 📐 Developer Insights

This section provides important information for developers about module development, including essential coding guidelines to be followed prior to submitting or deploying modules.

### 📋 Code Guidelines

Please follow these coding guidelines when developing modules:

- The module's **Rname** identifier must be unique.
- If you plan to publicly release your module, request a unique Rname from the Suitefish staff. Otherwise, prefix your module's Rname with **"int"** to designate it as an internal, non-public module, avoiding duplication.
- Public image modules should have an Rname starting with **"dkr"**.
- Ensure the Rname does not exceed 20 characters.
- Avoid using special characters in the Rname, as they may cause critical errors.

### 🗃️ Docker Related

You can store Docker files or folders in a Docker module folder, just as you would with Docker Compose projects. Use our auto-generated form substitutions (explained in this README) to deploy and manage your module via the Suitefish CMS web interface. Projects are deployed as-is, with substitutions being the only difference, ensuring compatibility with most Docker functionality.

#### 🗃️ .env

Environment variable files are supported in Docker builds, and substitutions within these files are enabled for auto-generated forms.

#### 🗃️ docker-compose.yml

Docker compose files are supported in Docker builds, and substitutions within these files are enabled for auto-generated forms.

#### 🗃️ Dockerfile

Docker files are supported in Docker builds, and substitutions within these files are NOT enabled for auto-generated forms.

### 🔄 Substitutions

Docker modules for **Suitefish-CMS** can define environment variables through a `.env` file. These variables are not hard-coded but instead substituted during deployment, allowing users to configure settings through an automatically generated **setup form** in the Suitefish interface.  

This document explains how the substitution system works and how to properly define form-driven environment variables in your `.env` file.

When deploying an extension, Suitefish scans the `.env` file for special substitution markers defined by the syntax:

```
{SF_FORM_START{...}SF_FORM_END}
```

Inside the curly braces `{...}`, the developer specifies rules about how the form field should be created, such as type, default values, allowed ranges, and whether the field is required. These values will then be replaced dynamically when the module is deployed.

#### 🔄 Available Input Types

##### 🔄 Text Input Field
Allows users to enter plain text.

```
{SF_FORM_START{var_string_key/string/false/128/default value}SF_FORM_END}
```

- `var_string_key` → Unique variable key and also used as translation string for form explanation.  
- `string` → Declares the field as text.  
- `false` → Determines if the field is optional (`true`) or required (`false`).  
- `128` → Maximum length allowed.  
- `default value` → Default text displayed.  

**Example:**
```env
USERNAME={SF_FORM_START{username/string/false/64/admin}SF_FORM_END}
```

***

##### 🔄 Numeric Input Field
Allows users to input or select numeric values within defined bounds.

```
{SF_FORM_START{var_numeric_key/number/max/min/step/false/default}SF_FORM_END}
```

- `max` → Maximum valid number.  
- `min` → Minimum valid number.  
- `step` → Increment step for number input.  
- `false` → Can this field be empty.  
- `default` → Default initial value.  

**Example:**
```env
MAX_USERS={SF_FORM_START{max_users/number/500/10/5/false/100}SF_FORM_END}
```

***

##### 🔄 Select (Dropdown) Field
Creates a dropdown with predefined options.

```
{SF_FORM_START{var_select_key/select/false/"label1"=value1/"label2"=value2/"label3"=value3}SF_FORM_END}
```

- `label` → Text shown in the dropdown.  
- `value` → Actual value substituted into `.env`.  
- `false` → Required value (set to `true` to allow empty selection).  

**Example:**
```env
ENVIRONMENT={SF_FORM_START{env/select/false/"Development"=dev/"Staging"=staging/"Production"=prod}SF_FORM_END}
```

***

##### 🔄 Port Input Field
Specifically for defining port mappings.

```
{SF_FORM_START{var_port_key/port/defaultPort/false}SF_FORM_END}
```

- `defaultPort` → Suggested port if none is chosen.  
- `false` → Required flag.  

**Example:**
```env
APP_PORT={SF_FORM_START{app_port/port/8080/false}SF_FORM_END}
```

***

##### 🔄 Checkbox Field
Defines a checkbox to toggle between two values.

```
{SF_FORM_START{var_checkbox_key/checkbox/valueChecked/valueUnchecked}SF_FORM_END}
```

- `valueChecked` → Stored if checkbox is selected.  
- `valueUnchecked` → Stored if checkbox is not selected.  

**Examples:**
```env
DEBUG_MODE={SF_FORM_START{debug/checkbox/true/false}SF_FORM_END}
ENABLE_LOGS={SF_FORM_START{logs/checkbox/"on"/"off"}SF_FORM_END}
```

#### 🔄 Example Full `.env` for a Module

```env
USERNAME={SF_FORM_START{username/string/false/64/admin}SF_FORM_END}
MAX_USERS={SF_FORM_START{max_users/number/500/10/5/false/100}SF_FORM_END}
ENVIRONMENT={SF_FORM_START{env/select/false/"Development"=dev/"Production"=prod}SF_FORM_END}
APP_PORT={SF_FORM_START{app_port/port/8080/false}SF_FORM_END}
DEBUG_MODE={SF_FORM_START{debug/checkbox/true/false}SF_FORM_END}
```

When deploying this module, Suitefish will generate a configuration form with:  
- A required text input for `USERNAME`  
- A numeric input for `MAX_USERS` (10–500 with steps of 5)  
- A dropdown for `ENVIRONMENT` (Development or Production)  
- A port field for `APP_PORT` with default `8080`  
- A checkbox for enabling or disabling `DEBUG_MODE`  

### 📚 Language Files

Language files in this kind of module are only to show the name and description in the store if the module is multi-langual, besides that they control the output shown in automatic generated forms to deploy containers based on substitution variables. For detailed information on the file structure and module setup, refer to the Example module files.

Below you see an example of an english language file (en.php). The first lines prevent public view of the language file. The variables for translations are for the store to make name and description multi-langual.

``` 
<?php if(isset($this)) { if(!is_object($this)) { Header("Location: ../"); exit(); } } else { Header("Location: ../"); exit(); } ?>

store_version_name=Template: Docker Module
store_version_description=Docker Module Example for the Docker Server Manager Extension for our administrator module, especially for Developers. You can get more Information about Docker Modules inside the Suitefish Documentation and related Readme.md Files in the repository!
``` 

Below we extend the language file with explanations for the automatic generated form when deploying the module.

``` 
var_select_key=This is an example of a Single Select value substitution in the .env file via the auto-generated form.
var_select_key_v1=This is the first select value.
var_select_key_v2=This is the second select value.
var_select_key_v3=This is the third select value.
var_string_key=This is an example of a String value substitution in the .env file via the auto-generated form.
var_numeric_key=This is an example of a Numeric value substitution in the .env file via the auto-generated form.
var_port_key=This is an example of a Port value substitution in the .env file via the auto-generated form.
var_checkbox_key=This is an example of a Checkbox value substitution in the .env file via the auto-generated form.
``` 

### 📝 Changelog File

Changelog of changes between this and last version of this module. Store the changelog in simple html format in the $x variable in files fitting the version number at `_changes`. For detailed information on the file structure and module setup, refer to the Example module files.

### 🏷️ Version File

This file (version.php) contains detailed information about the module, all variables are mandatory and should be set on a module. For detailed information on the file structure and module setup, refer to the Example module files.

## 📄 Documentation 

If you are a developer you can find examples of modules in the _developers folder at the suitefish-cms github repository if you want to create an own module! For more information about the Suitefish CMS: https://github.com/bugfishtm/suitefish-cms. 

🐟 Bugfish