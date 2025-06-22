<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.16  |
    |              on 2025-06-22 09:38:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Illuminate\Contracts\Support\Arrayable; use Illuminate\Support\Arr; class ComposerProperty implements Arrayable { protected array $attributes = []; public function __construct(array $F8xmb = []) { $this->attributes = $F8xmb; } public function get($ZAY66, $a30rh = null) { return Arr::get($this->attributes, $ZAY66, $a30rh); } public function set($ZAY66, $mrMd8) { goto PhvCO; PhvCO: $uW9xB = $this->attributes; goto qOn_Y; qOn_Y: Arr::set($uW9xB, $ZAY66, $mrMd8); goto vGnzv; vGnzv: return new static($uW9xB); goto YylQh; YylQh: } public function delete($ZAY66) { goto wP7Mi; xoXpR: return new static($uW9xB); goto x6H4h; wP7Mi: $uW9xB = $this->attributes; goto UO2Vw; UO2Vw: Arr::forget($uW9xB, $ZAY66); goto xoXpR; x6H4h: } public function __get($yE039) { return $this->get(str_replace("\137", "\x2d", $yE039)); } public function toArray() { return $this->attributes; } public function toJson() { return json_encode($this->toArray()); } }
