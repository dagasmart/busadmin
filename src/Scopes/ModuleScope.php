<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Scopes; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Facades\Schema; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Scope; use Illuminate\Database\Eloquent\Builder; class ModuleScope implements Scope { public function apply(Builder $E8J1A, Model $MWice) { goto j5lPX; A_2Bi: $oGpx3 = end($nAZR7) ?? $oGpx3; goto AQwu1; AQwu1: if (!Schema::hasColumn($oGpx3, "\155\157\x64\165\x6c\x65")) { goto mZzYh; } goto j3ls2; bHEV8: VhtTP: goto nP7j2; nP7j2: return $E8J1A; goto v63Xk; XZQk1: $E8J1A->where($RUa8Y, Admin::currentModule(true)); goto bfsvU; Pvaih: pMuN0: goto bHEV8; bfsvU: mZzYh: goto Pvaih; j3ls2: $RUa8Y = $oGpx3 . "\56" . "\155\157\144\x75\154\x65"; goto XZQk1; HHpga: $oGpx3 = $E8J1A->getModel()->getTable(); goto f0qbn; f0qbn: if (!Schema::hasTable($oGpx3)) { goto pMuN0; } goto SiBEt; j5lPX: if (!Admin::currentModule(true)) { goto VhtTP; } goto HHpga; SiBEt: $nAZR7 = explode("\x20", str_ireplace("\x20\141\163\40", "\40", $oGpx3)); goto A_2Bi; v63Xk: } }
