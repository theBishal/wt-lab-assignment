### HSLA
The hsla() function is an inbuilt function in CSS which is used to define the colors using the Hue Saturation Lightness Alpha (HSLA) model.

Syntax:

hsla( hue, saturation, lightness, alpha )

Parameters: This function accepts four parameters as mentioned above and described below:

hue: This parameter is used to define the degree on the color wheel. Its value lies between 0 to 360 where 0 or 360 represents red, 120 represents green and 240 represents blue.

saturation: This parameter is used to define the saturation where 0% represents shade of gray and 100% represents full color.

lightness: This parameter is used to define the lightness where 0% represents black, 50% represents normal, and 100% represents white.

alpha: This parameter is used to defines the opacity and the value lies between 0.0 (fully transparent) and 1.0 (fully opaque).

### RGB
RGB Format:

The RGB(Red, Green, Blue) format is used to define the color of an HTML element by specifying the R, G, B values range between 0 to 255.

For example: RGB value of Red color is (255, 0, 0), Green color is (0, 255, 0), Blue color is (0, 0, 255) etc.
Syntax:

h1 {
    color: rgb(R, G, B);
}

### RGBA

RGBA Format:

The RGBA format is similar to the RGB, but the difference is RGBA contains A (Alpha) which specify the transparency of elements. The value of alpha lies between 0.0 to 1.0 where 0.0. represents fully transparent and 1.0 represents not transparent.

Syntax:

h1 {
    color:rgba(R, G, B, A);
}
