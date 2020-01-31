<?php
	include "./tcpdf/tcpdf.php";

	// TCPDFインスタンスを作成
	$orientation = 'Landscape'; // 用紙の向き
	$unit = 'mm'; // 単位
	$format = 'A4'; // 用紙フォーマット
	$unicode = true; // ドキュメントテキストがUnicodeの場合にTRUEとする
	$encoding = 'UTF-8'; // 文字コード
	$diskcache = false; // ディスクキャッシュを使うかどうか
	
	$tcpdf = new TCPDF();
	$tcpdf->AddPage(); // 新しいpdfページを追加
	
	$tcpdf->SetFont("kozgopromedium", "", 10); // デフォルトで用意されている日本語フォント
	
	//この中にhtmlを記述
	$html = <<< EOF
	<style>
	h1 {
		font-size: 24px;
		color: #000000;
		text-align: center;
	}
	p {
		font-size: 12px;
		color: #000000;
		text-align: left; 
	}
	</style>
	<h1>TECHIS</h1>
	<p>
		HTML to PDF
	</p>
	EOF;
	
	$tcpdf->writeHTML($html); // 表示htmlを設定
	$tcpdf->Output('techis.pdf', 'I'); // pdf表示設定 第2引数を替えることでダウンロードも出来る
?>