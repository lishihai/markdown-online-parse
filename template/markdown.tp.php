<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="<?php echo $hostname; ?>assets/github.css" rel="stylesheet"/>
    <link href="<?php echo $hostname; ?>assets/highlight.css" rel="stylesheet"/>
    <link href="//cdn.bootcss.com/highlight.js/9.12.0/styles/default.min.css" rel="stylesheet">
</head>
<body>
<article class="markdown-body">
    <?php echo $body; ?>
</article>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/languages/go.min.js"></script>
<script src="//cdn.bootcss.com/highlightjs-line-numbers.js/2.1.0/highlightjs-line-numbers.min.js"></script>
<script type="text/javascript">
    $('a[href^="http"]').each(function() {
        $(this).attr('target', '_blank');
    });
    hljs.initHighlightingOnLoad();
    hljs.initLineNumbersOnLoad();
</script>
</body>
</html>