<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:12              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Response; class Authenticate { public function handle($CDBRf, Closure $fWtgK) { goto evxde; dGtVX: return Admin::response()->additional(["\x63\157\144\145" => Response::HTTP_UNAUTHORIZED])->doNotDisplayToast()->fail(admin_trans("\141\144\155\x69\x6e\56\x70\x6c\145\141\163\145\x5f\154\x6f\x67\151\156")); goto zp9Gm; evxde: if (!Admin::permission()->authIntercept($CDBRf)) { goto VFr8O; } goto dGtVX; B_bqR: Admin::permission()->checkUserStatus(); goto nntfL; nntfL: return $fWtgK($CDBRf); goto j1Qok; zp9Gm: VFr8O: goto B_bqR; j1Qok: } }
