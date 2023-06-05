# eureka_resume_document


## UnitTest実行方法
1. Composerのインストール (初回時のみ)
```
% composer install
```
2. UnitTestの実行
```
% composer test                                                                                                                                                                                [init_test]
> ./vendor/bin/phpunit --colors ./test
PHPUnit 10.2.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.4
Configuration: /Applications/XAMPP/xamppfiles/htdocs/eureka_resume_document/phpunit.xml

FIIIII                                                              6 / 6 (100%
...略
```

3. Coverageの確認 (XDebugイントール済の場合)
```
%  ./vendor/bin/phpunit --coverage-html coverage-report ./test
```
http://localhost/eureka_resume_document/coverage-report/ にて確認可能
