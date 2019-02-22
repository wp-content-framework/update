# WP Content Framework (Update module)

[![License: GPL v2+](https://img.shields.io/badge/License-GPL%20v2%2B-blue.svg)](http://www.gnu.org/licenses/gpl-2.0.html)
[![PHP: >=5.6](https://img.shields.io/badge/PHP-%3E%3D5.6-orange.svg)](http://php.net/)
[![WordPress: >=3.9.3](https://img.shields.io/badge/WordPress-%3E%3D3.9.3-brightgreen.svg)](https://wordpress.org/)

[WP Content Framework](https://github.com/wp-content-framework/core) のモジュールです。

# 要件
- PHP 5.6 以上
- WordPress 3.9.3 以上

# インストール

``` composer require wp-content-framework/update ```  

## 依存モジュール
* [presenter](https://github.com/wp-content-framework/presenter)

## 基本設定
- configs/config.php  

|設定値|説明|
|---|---|
|readme_file_check_url|Upgrade Noticeを取得するreadmeファイルのURLを設定|
|upgrade_notice_cache_duration|更新情報をキャッシュする期間(秒) \[default = 86400]|
|upgrade_notice_empty_cache_duration|更新情報が空であったことをキャッシュする期間(秒) \[default = 600]|

# Author

[technote-space](https://github.com/technote-space)
