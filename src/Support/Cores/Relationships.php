<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Services\AdminRelationshipService; class Relationships { public static function boot() { goto XCSPV; h5mhx: if (Admin::hasTable($t71Ej->getModel()->getTable())) { goto FF3vU; } goto xyTn_; EpWHw: $DS21w = $t71Ej->make()->getAll(); goto RBxrk; EJRll: MGzLB: goto wUeho; XCSPV: $t71Ej = new AdminRelationshipService(); goto h5mhx; rhr1g: FF3vU: goto EpWHw; xyTn_: return; goto rhr1g; wUeho: foreach ($DS21w as $GofXJ) { try { $GofXJ->model::resolveRelationUsing($GofXJ->title, function ($MWice) use($GofXJ) { $JNTeQ = $GofXJ->method; return $MWice->{$JNTeQ}(...array_column($GofXJ->buildArgs(), "\166\x61\x6c\165\145")); }); } catch (\Throwable $FXDMR) { } Ylbhy: } goto Vv6D0; Vv6D0: o7qrX: goto A83DC; RBxrk: if (!blank($DS21w)) { goto MGzLB; } goto wlDJu; wlDJu: return; goto EJRll; A83DC: } }
