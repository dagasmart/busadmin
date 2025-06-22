<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($pXIcD) { goto mxBco; mxBco: if ($pXIcD["\x65\156\x61\142\154\x65\144"]) { goto PJZMG; } goto arIKj; anjRH: abort(500, $cjSLG->getError()); goto JrVMR; p0cyr: GV4in: goto NOfUO; W_G2M: $KRNWR = "\57" . ltrim($pXIcD["\162\x6f\165\164\x65"], "\x2f"); goto hPTGX; NOfUO: if (!$cjSLG->hasError()) { goto xzP3z; } goto anjRH; C4C0P: $cjSLG->store(["\164\x69\x74\154\145" => $pXIcD["\164\151\x74\x6c\x65"], "\151\143\157\156" => $pXIcD["\151\x63\x6f\x6e"], "\160\x61\162\x65\x6e\x74\137\x69\144" => $pXIcD["\x70\x61\162\x65\156\x74\x5f\151\144"], "\x75\162\154" => $KRNWR, "\x63\x75\163\x74\x6f\x6d\x5f\x6f\162\x64\145\162" => 100]); goto p0cyr; arIKj: return; goto SmYT3; wbXjm: $cjSLG = AdminMenuService::make(); goto W_G2M; JrVMR: xzP3z: goto k5Z2u; SmYT3: PJZMG: goto wbXjm; hPTGX: if ($cjSLG->getModel()->query()->where("\x75\x72\x6c", $KRNWR)->exists()) { goto GV4in; } goto C4C0P; k5Z2u: Artisan::call("\141\144\x6d\151\156\72\147\145\156\55\162\157\165\164\145"); goto PZLih; PZLih: } public static function refresh() { Artisan::call("\141\x64\155\x69\x6e\72\x67\x65\156\55\162\x6f\x75\164\x65"); } }
