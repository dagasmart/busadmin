<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Scopes; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Schema; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Scope; use Illuminate\Database\Eloquent\Builder; class ActionScope implements Scope { public function apply(Builder $E8J1A, Model $MWice) { $MWice->creating(function ($MWice) { goto vrIwV; dKep4: eadnJ: goto DO3hL; DO3hL: $C38kp = Admin::merId(); goto vtT1i; MtCUb: if (!(Schema::hasColumn($FDXE6, "\155\x6f\144\165\x6c\145") && !is_null($Ilb2D))) { goto eadnJ; } goto JEAUV; tcK4M: if (!($FDXE6 && Schema::hasTable($FDXE6))) { goto JVVlX; } goto LPBVd; vrIwV: $FDXE6 = $MWice->getTable(); goto tcK4M; LPBVd: $Ilb2D = Admin::currentModule(true); goto MtCUb; SHAMf: JVVlX: goto yGIos; SpTR3: $MWice->setAttribute("\x6d\x65\162\x5f\151\x64", $C38kp); goto YsWO1; YsWO1: tJpP9: goto SHAMf; vtT1i: if (!(Schema::hasColumn($FDXE6, "\x6d\145\162\x5f\151\x64") && !is_null($C38kp))) { goto tJpP9; } goto SpTR3; JEAUV: $MWice->setAttribute("\155\157\144\165\x6c\145", $Ilb2D); goto dKep4; yGIos: }); } }
