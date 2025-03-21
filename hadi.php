<?php

$Lix = "paste lix disini";


$step1 = strrev($Lix);
echo "Step 1 - Reverse:\n" . substr($step1, 0, 100) . "\n\n";

$step2 = base64_decode($step1);
if ($step2 === false) die("Error: Base64 decoding gagal!\n");
echo "Step 2 - Base64 Decoded:\n" . substr($step2, 0, 100) . "\n\n";

$step3 = $step2;
for ($i = 0; $i < 4; $i++) {
    $temp = @gzinflate(@gzuncompress($step3));
    if ($temp === false) break;
    $step3 = $temp;
    echo "Step " . ($i + 3) . " - Decompressed:\n" . substr($step3, 0, 100) . "\n\n";
}


$step4 = str_rot13($step3);
echo "Step 4 - ROT13 Decoded:\n" . substr($step4, 0, 100) . "\n\n";

file_put_contents("hasil_final.php", $step4);
echo "Final Code telah disimpan di hasil_final.php\n";
?>
