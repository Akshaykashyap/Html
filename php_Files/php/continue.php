<?php
for ($i = 1; $i <= 10; $i += 2) {
  echo "BEFORE Continue <br/>";

  if ($i > 4 && $i < 8) {
    continue;
    echo "hello"
  }
  echo "AFTER Continue <br/><hr/>";  
}

echo 'AFTER LOOP';

?>