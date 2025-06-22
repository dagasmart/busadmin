<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminService; use DagaSmart\BizAdmin\Services\AdminApiService; use Illuminate\Database\Eloquent\HigherOrderBuilderProxy; abstract class AdminBaseApi implements AdminApiInterface { public string $title = ''; public string $method = "\x61\x6e\x79"; public static $apiRecord; public function getTitle() { return $this->title ?: Str::of(static::class)->explode("\x5c")->pop(); } public function getMethod() { return $this->method; } public function getApiRecord() { goto xsp8r; fBtBc: POp6H: goto APwCq; vvMc1: self::$apiRecord = AdminApiService::make()->getApiByTemplate(static::class); goto fBtBc; xsp8r: if (self::$apiRecord) { goto POp6H; } goto vvMc1; APwCq: return self::$apiRecord; goto nOUQO; nOUQO: } public function setApiRecord($m4EuA) { self::$apiRecord = $m4EuA; return $this; } public function getArgs($ZAY66 = null, $a30rh = null) { goto kecOW; dl2lZ: return data_get($JzDEm, $ZAY66, $a30rh); goto mwWUI; AJC4V: return $JzDEm; goto ylMXu; mwWUI: jcfED: goto AJC4V; kecOW: $JzDEm = $this->getApiRecord()->args; goto ZttKw; ZttKw: if (!$ZAY66) { goto jcfED; } goto dl2lZ; ylMXu: } public function blankService() { return new class extends AdminService { }; } }
