# Usage of Inline, Internal, and External Style Sheets using CSS

## Inline Style Sheets

Inline style sheets are applied directly to the HTML elements using the "style" attribute. This style sheet is specific to the element it is applied to and takes precedence over other style sheets. Here's an example:

```
<p style="color: red; font-size: 18px;">This is a paragraph with inline styles applied to it.</p>
```

## Internal Style Sheets

Internal style sheets are defined within the "head" section of the HTML document using the "style" tag. This style sheet is applicable to the entire document and is specific to the page it is defined on. Here's an example:

```
<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
        background-color: lightblue;
      }
      h1 {
        color: white;
        text-align: center;
      }
      p {
        font-family: verdana;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <h1>This is a heading</h1>
    <p>This is a paragraph.</p>
  </body>
</html>
```

## External Style Sheets

External style sheets are defined in a separate file with a ".css" extension and linked to the HTML document using the "link" tag. This style sheet can be used across multiple pages of the website and is reusable. Here's an example:

```
[HTML]

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <h1>This is a heading</h1>
    <p>This is a paragraph.</p>
  </body>
</html>

[CSS]
/* styles.css */

body {
  background-color: lightblue;
}
h1 {
  color: white;
  text-align: center;
}
p {
  font-family: verdana;
  font-size: 20px;
}
```
In conclusion, inline, internal, and external style sheets are all useful ways to style HTML documents using CSS. The choice of which one to use depends on the specific requirements of the website or application.
