<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="//fonts.googleapis.com/earlyaccess/notosansscsliced.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/highlight.js/9.12.0/styles/github.min.css" rel="stylesheet">
    <link href="/assets/github-markdown.min.css" rel="stylesheet">
</head>
<body>
<article class="markdown-body">
    <?php echo $body; ?>
</article>
</body>
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
<script src="//cdn.bootcss.com/highlight.js/9.12.0/languages/json.min.js"></script>
<script src="//cdn.bootcss.com/highlightjs-line-numbers.js/2.2.0/highlightjs-line-numbers.min.js"></script>
<script>
    $('a[href^="http"]').each(function() {
        $(this).attr('target', '_blank');
    });
    hljs.initHighlightingOnLoad();
    hljs.initLineNumbersOnLoad();
</script>
</html>
