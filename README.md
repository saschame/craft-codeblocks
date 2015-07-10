# Code Blocks plugin for Craft CMS

Write Code in an [ACE Editor](http://ace.c9.io/) in the Backend and display as highlighted and formatted text, using [Prism](http://prismjs.com/) in the front end.

Currently handeles the following modes (languanges):
    
- Bash
- CSS
- HTML
- JavaScript
- Markdown
- PHP
- SCSS
- Swift
- Twig
- Yaml

Code highlighting in the output is done by utilizing [Prism](http://prismjs.com/)
The outputted Text looks like this:

```html
<pre><code class="language-html">...</code></pre>
```


## Installation
1. Move the `codeblocks/` directory into `craft/plugins/`
2. Go to `Settings` -> `Plugins` in the Craft control panel.
3. Click `install`

## Using / Field Settings
Create a new field and choose `Code Blocks` as a field type.

### Default Mode
The default mode (language) of the editor

### Theme
The theme for syntax highlighting in the backend editor

### Height
The height of the backend editor in pixels

### Use tabs instaead of spaces
doh!

### Tab Size
Number of spaces for a tab

## Twig
In your Twig template, use the following to include the needed JavaScript and CSS Files for front end rendering:

```twig
{% includeCssResource "codeblocks/prism/prism.css" %}
{% includeJsResource "codeblocks/prism/prism.min.js" %}
```

To output the content of the field add the following:

```twig
<pre><code class="language-{{ entry.field_name.mode }}">{{ entry.field_name.text }}</code></pre>
```


## Changelog

### 1.0

* Initial release

## Roadmap

### 1.5

- Choose displayed modes in plugin settings

### 1.2

- Supply more modes

### 1.1

- choose different themes for syntax highlighting on frontend  
  (Default, Dark, Funky, Okaidia, Twilight, Coy)

- simplify twig output  
  (don't need to set `includeCssResource` and `includeJsResource` manually)

- call with `entry.codeblocks_handle`  
  (instead of `<pre><code class="language-{{ entry.codeblocks_handle.mode }}">{{ block.codeblocks_handle.text }}</code></pre>`)


### 1.0
Initial release
