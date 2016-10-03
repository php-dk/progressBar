example:
$bar = ProgressBar::create(50, 100);

for ($i =0; $i < 100;$i++) {
   $bar->update($i);
}