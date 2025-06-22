<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Support\Facades\App; class AutoSetLocale { public function handle($CDBRf, Closure $fWtgK) { goto qO6S1; tlVrF: App::setLocale($PdWf1); goto OV3gY; OV3gY: return $fWtgK($CDBRf); goto cw4LB; qO6S1: $PdWf1 = request()->header("\x6c\157\x63\x61\x6c\145", config("\141\160\160\x2e\x6c\x6f\x63\x61\x6c\145")); goto tlVrF; cw4LB: } }
