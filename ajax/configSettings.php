<?php $cron_tmp="eyJzaXRlX25hbWUiOiJDUzpHTyBEZXZpY2UgLSBcdTA0MWVcdTA0MzFcdTA0M2RcdTA0M2VcdTA0MzJcdTA0MzggXHUwNDQxXHUwNDMyXHUwNDNlXHUwNDM5IFx1MDQzOFx1MDQzZFx1MDQzMlx1MDQzNVx1MDQzZFx1MDQ0Mlx1MDQzMFx1MDQ0MFx1MDQ0YyEiLCJzaXRlZGVzY3JpcHRpb24iOiJjYXNlIGNzZ28sIFx1MDQzYVx1MDQzNVx1MDQzOVx1MDQ0MVx1MDQ0YiBjcyBnbywgXHUwNDNhXHUwNDM1XHUwNDM5XHUwNDQxIFx1MDQzYVx1MDQ0MSBcdTA0MzNcdTA0M2UiLCJtZXRhZGVzY3IiOiJcdTA0MWVcdTA0NDBcdTA0NDNcdTA0MzZcdTA0MzVcdTA0MzlcdTA0M2RcdTA0NGJcdTA0MzUgXHUwNDNhXHUwNDM1XHUwNDM5XHUwNDQxXHUwNDRiIENTOkdPIFx1MDQzZlx1MDQzZSA1OSBcdTA0NDBcdTA0NDNcdTA0MzFcdTA0M2JcdTA0MzVcdTA0MzkuIFx1MDQyMlx1MDQzNVx1MDQzZlx1MDQzNVx1MDQ0MFx1MDQ0YyBcdTA0M2FcdTA0MzVcdTA0MzlcdTA0NDFcdTA0NGIgXHUwNDNjXHUwNDNlXHUwNDM2XHUwNDNkXHUwNDNlIFx1MDQzZVx1MDQ0Mlx1MDQzYVx1MDQ0MFx1MDQ0Ylx1MDQzMlx1MDQzMFx1MDQ0Mlx1MDQ0YyBcdTA0MzRcdTA0MzVcdTA0NDhcdTA0MzVcdTA0MzJcdTA0M2JcdTA0MzUsIFx1MDQ0N1x1MDQzNVx1MDQzYyBcdTA0MzIgU3RlYW0hIiwiaWRfbW9uZXkiOiI/cj1vcmRlcmluZ1wvY2FydFwvYXMxJmlkPTMyJmNsZWFuPXRydWUmbGc9cnUiLCJpZF9zZWxsZXIiOiJ0ZXN0MiIsInBhc3NfRFMiOiJ0ZXN0MyIsInByaWNlc2VsbCI6IjEtMTAiLCJzaXRlX29uIjoiMSIsInN1Ym1pdCI6Ilx1MDQyMVx1MDQzZVx1MDQ0NVx1MDQ0MFx1MDQzMFx1MDQzZFx1MDQzOFx1MDQ0Mlx1MDQ0YyIsImFwaUlkIjoiIiwic3VwcG9ydCI6Imh0dHA6XC9cL3ZrLmNvbVwvY3Nnb2RldmljZSIsInByaW1lYXJlYSI6eyIxMCI6IjI1MDM0IiwiMTAwIjoiMjUwMzUiLCI1MDAiOiIyNTAzNiIsIjEwMDAiOiIyNTAzNyIsIm9uIjoiMSJ9LCJkaWdpc2VsbGVyIjp7Im9uIjoiMSJ9LCJhdXRva2Fzc2lyIjp7IjEwIjoiMTIzIiwiMTAwIjoiIiwiNTAwIjoiIiwiMTAwMCI6IiIsIm9uIjoiMSJ9fQ=="; $casetmp= json_decode(base64_decode($cron_tmp),true); foreach($casetmp as $k=>$v){$k = str_replace("_","_",$k);$caseS[$k]=$v;} ?> 