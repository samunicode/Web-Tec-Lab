Inline style sheets are used to apply a style to a single element within an HTML document. For example, to make a paragraph text red, you can use the `style` attribute like this:

\`\`\`html
<p style="color: red;">This is a paragraph with inline style.</p>
\`\`\`

Internal style sheets are used to apply a style to all elements within an HTML document. For example, to make all paragraph texts blue, you can use the `<style>` tag in the `<head>` section like this:

\`\`\`html
<head>
  <style>
    p {
      color: blue;
    }
  </style>
</head>
<body>
  <p>This is a paragraph with internal style.</p>
  <p>This is another paragraph with internal style.</p>
</body>
\`\`\`

External style sheets are used to apply a style to multiple HTML documents. For example, to make all paragraph texts green, you can create a separate file called `style.css` and link it to your HTML documents using the `<link>` tag like this:

\`\`\`css
/* This is the content of style.css */
p {
  color: green;
}
\`\`\`

\`\`\`html
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <p>This is a paragraph with external style.</p>
  <p>This is another paragraph with external style.</p>
</body>
\`\`\`