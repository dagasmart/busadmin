<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Scopes; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Facades\Schema; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Scope; use Illuminate\Database\Eloquent\Builder; class MerchantScope implements Scope { public function apply(Builder $E8J1A, Model $MWice) { goto JAjna; JAjna: if (!Admin::currentModule(true)) { goto BbjUs; } goto jYbGM; GQsZa: if (!Schema::hasTable($FDXE6)) { goto B2f2B; } goto hUOgl; tuIAW: if (!Schema::hasColumn($FDXE6, "\x6d\145\162\137\x69\x64")) { goto TZgZg; } goto DvGFZ; L6XJV: BbjUs: goto jCL20; jYbGM: $FDXE6 = $E8J1A->getModel()->getTable(); goto GQsZa; HRf17: $RUa8Y = $FDXE6 . "\x2e" . "\155\145\162\137\151\144"; goto tt5BF; U4NMw: TZgZg: goto GT1yM; GT1yM: B2f2B: goto L6XJV; ZoCsf: if (is_null($C38kp)) { goto YDpxh; } goto HRf17; LDWgD: $FDXE6 = end($oGpx3) ?? $FDXE6; goto tuIAW; hUOgl: $oGpx3 = explode("\40", str_ireplace("\x20\x61\163\40", "\40", $FDXE6)); goto LDWgD; tt5BF: $E8J1A->where($RUa8Y, $C38kp); goto sdSNQ; jCL20: return $E8J1A; goto NTGCI; DvGFZ: $C38kp = Admin::merId(); goto ZoCsf; sdSNQ: YDpxh: goto U4NMw; NTGCI: } }
