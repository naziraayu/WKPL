<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

//class yang mau di Tes
require_once "Wordcount.php";

//class untuk run Testing
class SimpleTest extends TestCase {
    public function testCountWords() {
        //Menggunakan class yang ingin di tes
        $wc = new Wordcount();

        //masukkan parameter 4 kata yang harusnya mendapatkan output 4.
        $TestSentences = "Nama Saya Nazira Ayu"; //4 kata
        $WordCount = $wc->countWords($TestSentences);

        //kita assert equal, expektasi harusnya 4, jika benar berarti Wordcount berfungsi
        $this->assertEquals(4, $TestSentences);
    }
}
?>c