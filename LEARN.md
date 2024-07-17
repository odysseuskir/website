# odysseusk.dev

Welcome! In this file, I explain how my simple personal website is built.
Hopefuly, you find this file useful and use this as a reference point in making yours. 

## Setting everything up

I begun by making this GitHub repository and cloning it on my machine using:

```bash
git clone https://github.com/odysseuskir/odysseuskir.github.io.git
```

The editor I am using to edit the website is Sublime text.

## HTML

This is the basic part of my website without any content:

```html
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="This is the personal website of Odysseus Abraham Kirikopoulos. Come on in, we have snacks!">

  <link rel="stylesheet" href="style.css">

  <title>Odysseus Abraham Kirikopoulos</title>

</head>

<body>

	Content goes here

<footer>
	
	Footer goes here

</footer>

</body>

</html>
```

I then split my website in 6 parts:

1. About me
2. Education
3. Projects
4. Certifications
5. Awards
6. Contact me

## CSS

I didn't change much of the original HTML feel, reverting the colors so the website looks like it's in black mode.
I also made some changes so the images I used in the projects section.
Finally, I imported an awesome font from Google Fonts.

The file looks like this:

```css
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

.josefin-sans-font {
  font-family: "Josefin Sans", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
}

body {
    margin: 5px;
    padding: 5px;
    background-color: #171717;
    color: white;
    font-family: "Josefin Sans", sans-serif;
}

a, a:visited {
    color: deepskyblue;
}

footer {
    text-align: center;
}

#projects img {
    float: left;
    margin-right: 10px;
}

hr.solid {
    border-top: 3px solid #bbb;
}

.webring-anchor {
    font-size: 24px;
    color: rgba(132, 146, 166, .8);
    text-decoration: none;
    transition: color .5s;
    padding: 10px;
}

.webring-anchor + .webring-anchor {
    margin-left: 10px;
}

.webring-anchor:hover {
    color: #8492a6;
    text-decoration: none;
}

.webring-logo {
    background-image: url('https://assets.hackclub.com/icon-rounded.svg');
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    width: 48px;
    height: 48px;
    margin: 0 4px;
    display: inline-block;
    vertical-align: middle;
}
```

## Launching the website

To deploy my website, I chose to use GitHub Pages, as it was easy to set up.