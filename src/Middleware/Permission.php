<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $CDBRf, Closure $fWtgK, ...$JzDEm) { goto COsdv; BlYWz: return $fWtgK($CDBRf); goto MMrIs; NcSvL: return Admin::response()->fail(admin_trans("\141\144\x6d\151\x6e\56\165\x6e\141\165\164\150\157\x72\x69\x7a\145\x64")); goto UhhvT; UhhvT: EapYt: goto BlYWz; COsdv: if (!Admin::permission()->permissionIntercept($CDBRf, $JzDEm)) { goto EapYt; } goto NcSvL; MMrIs: } }
