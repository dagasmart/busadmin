<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class CheckModuleAccess { public function handle($CDBRf, Closure $fWtgK) { Admin::module()->checkAuthorize(); return $fWtgK($CDBRf); } }
