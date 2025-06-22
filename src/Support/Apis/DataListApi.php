<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Apis; use DagaSmart\BizAdmin\Admin; class DataListApi extends AdminBaseApi { public string $method = "\x67\x65\164"; public function getTitle() { return admin_trans("\141\x64\155\x69\156\56\141\160\151\137\164\x65\x6d\160\x6c\141\164\x65\x73\x2e\144\141\164\141\137\154\x69\163\164"); } public function handle() { return Admin::response()->success($this->service()->list()); } public function argsSchema() { return [amis()->SelectControl("\155\x6f\x64\x65\x6c", admin_trans("\x61\144\155\151\x6e\x2e\x72\x65\x6c\x61\164\151\x6f\156\163\150\151\x70\x73\56\x6d\157\144\x65\154"))->required()->menuTpl("\44\173\x6c\141\142\x65\154\x7d\x20\74\163\160\141\156\x20\143\154\x61\163\163\75\x22\x74\x65\170\164\x2d\x67\162\141\x79\55\x33\x30\x30\x20\160\x6c\x2d\62\x22\x3e\x24\173\164\x61\x62\x6c\145\175\74\57\163\160\141\x6e\x3e")->source("\57\144\145\166\x5f\x74\157\x6f\x6c\x73\x2f\162\145\154\141\x74\x69\157\x6e\x2f\x6d\157\x64\145\x6c\137\157\160\164\x69\x6f\x6e\163")->searchable()]; } protected function service() { goto D5kh9; bIeFE: return $rCPJv; goto Z2ayo; SK7tW: $rCPJv->setModelName($this->getArgs("\155\157\x64\x65\154")); goto bIeFE; D5kh9: $rCPJv = $this->blankService(); goto SK7tW; Z2ayo: } }
