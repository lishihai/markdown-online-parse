## Markdown-Online-Parse

### 用途：

​	将`markdown`文件在浏览器中直接渲染成可读文件

### 使用方法：

+ 将源代码克隆至本地后，添加`nginx`配置，配置可参考 `nginx.example.conf`。注意修改 `public/markdown.php`文件内 `$hostname`。
+ 将`markdown`源文件拷贝至`markdown`文件夹下
+ 浏览器中输入正确的地址+`markdown`文件名称
+ URL DEMO:  [http://example.com/demo.md](http://example.com/demo.md)  [http://example.com/test/v1/demo.md](http://example.com/test/v1/demo.md) 


### 致谢：

+   [Parsedown](https://github.com/erusev/parsedown) From [@erusev](https://github.com/erusev)
+   [Parsedown Extra](https://github.com/erusev/parsedown-extra) From [@erusev](https://github.com/erusev)
+   [Extension for Parsedown Extra](https://github.com/erusev/parsedown-extra) From [@tovic](https://github.com/tovic/)
+   [highlight.js](https://github.com/isagalaev/highlight.js) From [@isagalaev](https://github.com/isagalaev)
+   [highlightjs-line-numbers.js](https://github.com/wcoder/highlightjs-line-numbers.js) From [@wcoder](https://github.com/wcoder)

