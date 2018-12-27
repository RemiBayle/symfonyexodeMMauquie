<?php
// src/Controller/nouvellepage.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class nouvellepage
{
	public function nombre() {
		$nombre = random_int(0, 100);
		return new Response(
			'<html><body>Un nombre au hasard: '.$nombre.'</body></html>'
		);
	}
}