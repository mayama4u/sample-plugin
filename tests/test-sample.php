<?php

class SampleTest extends WP_UnitTestCase {

	public function test_language_japanese() {

		// ショートコードを実行してコードを取得
		$greeting = do_shortcode('[greeting language="japanese"]');

		// アサーションメソッドを実行して期待した結果かどうかチェック
		$this->assertEquals('こんにちは', $greeting);		// ここでは、$greetingが こんにちは ならOK

		// replace this with some actual testing code
//		$this->assertTrue( true );
	}

	public function test_language_english() {

		// ショートコードを実行してコードを取得
		$greeting = do_shortcode('[greeting language="english"]');

		// アサーションメソッドを実行して期待した結果かどうかチェック
		$this->assertEquals('hello', $greeting);		// ここでは、$greetingが hello ならOK

	}
}

