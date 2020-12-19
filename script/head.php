<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?=$headdata['__BPNGIcon']?>">
    <title><?=$headdata['__BTitle']?></title>
    <?php
      foreach($headdata['__BCSS'] as $style){
          ?>
<link rel="stylesheet" href="<?=$style?>">
          <?php
      }
    ?>
    <?php
      foreach($headdata['__BJS'] as $js){
          ?>

<script src="<?=$js?>"></script>
          <?php
      }
    ?>
<style>
<?=$headdata['__Style']?>
</style>
</head>
<body <?=$headdata['__BBodyAttr']?>>