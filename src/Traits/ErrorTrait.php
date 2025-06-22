<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait ErrorTrait { protected string $error = ''; protected function setError(string $Yy9xZ) : bool { $this->error = $Yy9xZ ?: admin_trans("\x61\x64\155\151\x6e\x2e\x75\x6e\x6b\156\157\x77\156\137\145\162\x72\x6f\x72"); return false; } public function getError() : string { return $this->error; } public function hasError() : bool { return !empty($this->error); } }
