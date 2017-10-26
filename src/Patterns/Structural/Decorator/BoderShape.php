<?php
namespace MonkeyCoders\Patterns\Structural\Decorator;
class BoderShape extends ShapeDecorator {
	public function draw(){
		$result = $this->shape->draw();
		return "$result has border";
	}
}