<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:11              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Controllers; use DagaSmart\BizAdmin\Admin; use Illuminate\Support\Str; use DagaSmart\BizAdmin\Services\AdminApiService; class AdminApiController extends AdminController { public string $serviceName = AdminApiService::class; public function index() { goto ugbD_; xfMg6: return app($LYlL7->template)->setApiRecord($LYlL7)->handle(); goto F4GMx; ugbD_: $ZkOaA = Str::of(request()->path())->replace(Admin::config("\x61\x64\x6d\x69\x6e\56\x72\157\x75\x74\x65\56\x70\x72\145\x66\151\x78"), '')->value(); goto erN4M; U3ibw: if ($LYlL7) { goto tE1wx; } goto ucFGf; gVQfd: tE1wx: goto xfMg6; ucFGf: return $this->response()->success(); goto gVQfd; erN4M: $LYlL7 = $this->service->getApiByPath($ZkOaA); goto U3ibw; F4GMx: } }
