<html>
<head>
  <?= $this->wp_head ?>
</head>

<body>

<h1><?= $this->eprint($this->post->get_title()) ?></h1>
<?= $this->post->get_content() ?>

<?= $this->wp_footer ?>

</body>
</html>