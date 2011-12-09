<?php
require_once('simpletest/autorun.php');
require_once('../classes/Game.php');

class TestTicTacToe extends UnitTestCase
{
	
	function testCanCreateGame()
	{
		$game = new Game();
		$this->assertNotNull( $game );
	}
	
	function testGameContainsMatrix()
	{
		$game = new Game();
		$this->assertIsA( $game->matrix[0], "array" );
	}
	
	function testGameMatrixHas3Rows()
	{
		$game = new Game();
		$this->assertTrue( count( $game->matrix ) == 3 );
	}

	function testGameMatrixHas3Columns()
	{
		$game = new Game();
		$this->assertTrue( count( $game->matrix[0] ) == 3 );
		$this->assertTrue( count( $game->matrix[1] ) == 3 );
		$this->assertTrue( count( $game->matrix[2] ) == 3 );
	}	
	
	
	
}

?>
